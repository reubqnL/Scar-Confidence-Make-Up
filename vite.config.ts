import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [react()],
    build: {
        rollupOptions: {
            input: './scripts/main.tsx',
            output: {
                entryFileNames: 'dist/assets/app.js',
                assetFileNames: 'dist/assets/[name].[ext]'
            }
        }
    }
});