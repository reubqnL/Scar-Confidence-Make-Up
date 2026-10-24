import { spawn, spawnSync } from 'node:child_process'
import { existsSync } from 'node:fs'
import { networkInterfaces } from 'node:os'
import { createServer } from 'vite'

if (existsSync('.env')) process.loadEnvFile('.env')

const production = process.argv.includes('--production')
const php = process.env.PHP_BIN || 'php'
const phpPort = process.env.PHP_PORT || '8080'
const check = spawnSync(php, ['-v'], { encoding: 'utf8' })
if (check.error || check.status !== 0) {
    console.error('PHP was not found. Install PHP 8.2+ and set PHP_BIN in .env to its executable path.')
    process.exit(1)
}

const children = []
let stopping = false
let viteServer
async function stop(code = 0) {
    if (stopping) return
    stopping = true
    for (const child of children) child.kill('SIGTERM')
    await viteServer?.close()
    process.exit(code)
}
process.on('SIGINT', () => stop())
process.on('SIGTERM', () => stop())

const server = spawn(php, ['-S', `0.0.0.0:${phpPort}`, 'router.php'], {
    stdio: 'inherit',
    env: { ...process.env, APP_ENV: production ? 'production' : 'development' },
})
children.push(server)
server.on('error', error => { console.error(error.message); stop(1) })
server.on('exit', code => stop(code || 0))

if (production) {
    console.log(`Production preview: http://localhost:${phpPort}/`)
} else {
    try {
        viteServer = await createServer()
        await viteServer.listen()
        viteServer.printUrls()
        for (const entries of Object.values(networkInterfaces())) {
            for (const entry of entries || []) {
                if (entry.family === 'IPv4' && !entry.internal) {
                    console.log(`Phone/tablet on the same Wi-Fi: http://${entry.address}:${viteServer.config.server.port}/`)
                }
            }
        }
        viteServer.httpServer?.on('close', () => stop())
    } catch (error) {
        console.error(error.message)
        stop(1)
    }
}
