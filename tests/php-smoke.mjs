import { spawn } from 'node:child_process'
import assert from 'node:assert/strict'

const port = process.env.SMOKE_PORT || '8099'
const base = `http://127.0.0.1:${port}`
const server = spawn(process.env.PHP_BIN || 'php', ['-S', `127.0.0.1:${port}`, 'router.php'], {
    stdio: 'ignore',
    env: { ...process.env, APP_ENV: 'production', APP_URL: base, DB_HOST: '' },
})

async function waitForServer() {
    for (let attempt = 0; attempt < 50; attempt++) {
        if (server.exitCode !== null) throw new Error('PHP smoke server exited before becoming ready')
        try {
            await fetch(base + '/pages/index.php')
            return
        } catch {
            await new Promise(resolve => setTimeout(resolve, 100))
        }
    }
    throw new Error('PHP smoke server did not start')
}

try {
    await waitForServer()
    for (const page of ['index', 'about', 'services', 'directory', 'contact', 'thanks', '404']) {
        const response = await fetch(`${base}/pages/${page}.php`)
        const expected = page === '404' ? 404 : 200
        assert.equal(response.status, expected, page)
        const html = await response.text()
        assert.match(html, /name="viewport"/)
        assert.doesNotMatch(html, /<\?php/)
    }
    const missing = await fetch(base + '/does-not-exist')
    assert.equal(missing.status, 404)
    const get = await fetch(base + '/process.php')
    assert.equal(get.status, 405)
    const invalid = await fetch(base + '/process.php', { method: 'POST', body: new URLSearchParams({ 'first-name[]': 'bad' }) })
    assert.equal(invalid.status, 400)
    const sitemap = await fetch(base + '/sitemap.xml')
    assert.equal(sitemap.status, 200)
    assert.match(await sitemap.text(), new RegExp(base + '/pages/contact\\.php'))
    const font = await fetch(base + '/assets/fonts/dm-sans.woff2')
    assert.equal(font.status, 200)
    const privateFile = await fetch(base + '/config/app.php')
    assert.ok([403, 404].includes(privateFile.status))
    console.log('PHP smoke checks passed')
} finally {
    server.kill('SIGTERM')
}
