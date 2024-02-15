/// <reference types="vitest" />
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import vuetify from 'vite-plugin-vuetify';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.ts',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        vuetify()
    ],
    test: {
        globals: true,
        setupFiles: path.resolve(__dirname, 'resources/js/Tests/setup.ts'),
        environment: 'jsdom',
        include: ['resources/js/Tests/**/*.test.ts'],
        server: {
            deps: {
                inline: ['vuetify'], // Vuetifyをインライン化して処理
            },
        }
        
    },
} as any);
