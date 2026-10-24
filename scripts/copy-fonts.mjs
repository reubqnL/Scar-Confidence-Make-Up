import { copyFile, mkdir } from 'node:fs/promises'

const fonts = [
    ['node_modules/@fontsource-variable/dm-sans/files/dm-sans-latin-wght-normal.woff2', 'dm-sans.woff2'],
    ['node_modules/@fontsource-variable/roboto-mono/files/roboto-mono-latin-wght-normal.woff2', 'roboto-mono.woff2'],
    ['node_modules/@fontsource-variable/rubik/files/rubik-latin-wght-normal.woff2', 'rubik.woff2'],
    ['node_modules/@fontsource/open-sauce-sans/files/open-sauce-sans-latin-400-normal.woff2', 'open-sauce-sans.woff2'],
]

await mkdir('assets/fonts', { recursive: true })
for (const [source, name] of fonts) {
    await copyFile(source, `assets/fonts/${name}`)
}
