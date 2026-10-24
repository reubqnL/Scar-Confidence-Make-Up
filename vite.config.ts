import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'
import { resolve } from 'node:path'
import { fileURLToPath } from 'node:url'

const phpPort = process.env.PHP_PORT || '8080'
const allowedHosts = (process.env.VITE_ALLOWED_HOSTS || '').split(',').map(host => host.trim()).filter(Boolean)

export default defineConfig({
    plugins: [
        react(),
        {
            name: 'php-home-entry',
            configureServer(server) {
                server.middlewares.use((request, response, next) => {
                    if (request.url === '/' || request.url === '/index.php') {
                        response.writeHead(302, { Location: '/pages/index.php' })
                        response.end()
                        return
                    }
                    next()
                })
            },
        },
    ],
    server: {
        host: '0.0.0.0',
        port: Number(process.env.PORT || 5173),
        allowedHosts,
        proxy: {
            '^/(index\\.php|process\\.php|sitemap\\.php|pages/[^/]+\\.php)(\\?.*)?$': {
                target: `http://127.0.0.1:${phpPort}`,
                changeOrigin: false,
            },
        },
    },
    build: {
        outDir: 'assets/build',
        emptyOutDir: true,
        manifest: true,
        rollupOptions: {
            input: resolve(fileURLToPath(new URL('.', import.meta.url)), 'scripts/Main.jsx'),
        },
    },
})
