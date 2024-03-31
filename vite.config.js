import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/css/app.css",
                "resources/css/product.css",
                "resources/js/product.js",
                // "https://example.com/fontawesome/v6.5.1/js/all.js",
            ],
            refresh: true,
        }),
    ],
});
