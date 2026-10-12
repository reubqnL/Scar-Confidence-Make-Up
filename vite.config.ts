import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'
import { resolve } from 'path'

export default defineConfig({
    plugins: [react()],
    build: {
        rollupOptions: {
            input: {
                contact: resolve(import.meta.dirname, 'scripts/contact.tsx'),
            }
        }
    }
})