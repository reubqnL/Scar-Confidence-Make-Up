import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'
import { resolve } from 'path'

export default defineConfig({
    plugins: [react()],
    build: {
        rollupOptions: {
            input: {
                index: resolve(import.meta.dirname, 'scripts/index.tsx'),
                about: resolve(import.meta.dirname, 'scripts/about.tsx'),
                services: resolve(import.meta.dirname, 'scripts/services.tsx'),
                directory: resolve(import.meta.dirname, 'scripts/directory.tsx'),
                contact: resolve(import.meta.dirname, 'scripts/contact.tsx'),

            }
        }
    }
})