import test from 'node:test'
import assert from 'node:assert/strict'
import { readFileSync, existsSync } from 'node:fs'

const read = path => readFileSync(new URL('../' + path, import.meta.url), 'utf8')

test('the shared document declares a mobile viewport and language', () => {
    const header = read('components/header.php')
    assert.match(header, /name="viewport" content="width=device-width, initial-scale=1"/)
    assert.match(header, /lang="en-GB"/)
    assert.match(header, /aria-controls="primary-navigation"/)
})

test('every navigation destination exists', () => {
    for (const page of ['index', 'about', 'services', 'directory', 'contact', 'thanks', '404']) {
        assert.ok(existsSync(new URL(`../pages/${page}.php`, import.meta.url)))
    }
})

test('contact and directory queries use prepared statements', () => {
    assert.match(read('process.php'), /mysqli_prepare\(/)
    assert.match(read('process.php'), /mysqli_stmt_bind_param\(/)
    assert.match(read('pages/directory.php'), /mysqli_prepare\(/)
    assert.match(read('pages/directory.php'), /mysqli_stmt_bind_param\(/)
    assert.doesNotMatch(read('pages/directory.php'), /\$_GET\[['"]q['"]\]\s*\.\s*\$/)
})

test('React uses DOM class names and an email input', () => {
    const form = read('scripts/components/ContactForm.tsx')
    assert.doesNotMatch(form, /\sclass=/)
    assert.match(form, /type="email"/)
    assert.match(form, /htmlFor="fname"/)
})

test('styles include responsive layouts and reduced motion support', () => {
    for (const sheet of ['index', 'services', 'contact', 'directory', 'about']) {
        assert.match(read(`style/${sheet}.scss`), /@media/)
    }
    assert.match(read('style/_resets.scss'), /prefers-reduced-motion/)
})

test('production bundle has a manifest entry', () => {
    const manifest = JSON.parse(read('assets/build/.vite/manifest.json'))
    assert.equal(manifest['scripts/Main.jsx'].isEntry, true)
    assert.ok(existsSync(new URL('../assets/build/' + manifest['scripts/Main.jsx'].file, import.meta.url)))
})

test('fonts are served locally', () => {
    const fonts = read('style/_fonts.scss')
    assert.doesNotMatch(fonts, /@import url/)
    for (const font of ['dm-sans', 'roboto-mono', 'rubik', 'open-sauce-sans']) {
        assert.ok(existsSync(new URL(`../assets/fonts/${font}.woff2`, import.meta.url)))
    }
})
