import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // CSS
                "resources/css/app.css",
                "resources/css/custom.css",
                "resources/css/home.css",
                "resources/css/tailwind.css",
                // JS
                "resources/js/app.js",
                "resources/js/bootstrap.js",
                "resources/js/custom-dropdown.js",
                // Home
                "resources/js/portal/subscriber.js",

                // LightGallery
                "resources/js/portal/light-gallery/app.js"
            ],
            refresh: true,
        }),
    ],

    resolve: {
        alias: {
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap/dist"),
            "~bootstrap-icons": path.resolve(__dirname, "node_modules/bootstrap-icons/font"),
        },
    },

    server: {
        hmr: {
            host: "localhost",
        },
    },
});
