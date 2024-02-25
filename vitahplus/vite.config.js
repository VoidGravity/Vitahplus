import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/dashlite.css',
                'resources/js/scripts.js',
                'resources/js/bundle.js',
                'resources/js/charts/gd-hospital.js'
            ],
            refresh: true,
        }),
    ],
});
