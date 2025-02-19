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
            'ig::user': path.resolve(__dirname, 'vendor/internetguru/laravel-user/resources/sass'),
        }
    },
    server: {
        host: '127.0.0.1',
        cors: {
            origin: 'http://my.localhost.io:88',
            credentials: true,
        },
    },
});
