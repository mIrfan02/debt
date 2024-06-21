import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/assets/sass/app.scss',
                'resources/assets/js/app.js',
            ],
            refresh: true,
        }),
    ],

});
