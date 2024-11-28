import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',  // Or 'resources/css/app.css' if not using Sass
                'resources/js/app.js',
            ],
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
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
    build: {
        outDir: 'public',        // Specify the output directory for built files
        assetsDir: 'assets',     // Specify the subdirectory inside outDir for static assets
    },
    base: '/your-subdirectory/',  // If deploying under a subdirectory, adjust the base path
});
