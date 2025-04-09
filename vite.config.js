import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            'ig::common': path.resolve(__dirname, 'vendor/internetguru/laravel-common/resources/sass'),
            'ig::common-js': path.resolve(__dirname, 'vendor/internetguru/laravel-common/resources/js'),
            'ig::user': path.resolve(__dirname, 'vendor/internetguru/laravel-user/resources/sass'),
            'ig::model-browser': path.resolve(__dirname, 'vendor/internetguru/laravel-model-browser/resources/sass'),
        }
    },
});
