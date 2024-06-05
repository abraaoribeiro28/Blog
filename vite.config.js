import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // --- Admin ---
                "resources/css/admin/app.css",
                "resources/css/admin/pagination.css",
                "resources/js/admin/codethereal-iconpicker/app.js",

                // --- Portal ----
                "resources/css/portal/app.css",
                "resources/css/portal/home/custom.css",
                "resources/css/portal/home/responsive.css",
                "resources/js/portal/app.js",
                "resources/js/portal/subscriber.js",
                "resources/js/portal/light-gallery/app.js",

                // --- All ---
                "resources/css/custom.css",
                "resources/css/tailwind.css",
                "resources/js/app.js",
                "resources/js/bootstrap.js",
            ],
            refresh: true,
        }),
    ],

    resolve: {
        alias: {
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap/dist"),
            "~bootstrap-icons": path.resolve(__dirname, "node_modules/bootstrap-icons/font"),
            "~glightbox": path.resolve(__dirname, "node_modules/glightbox/dist"),
            "~wowjs": path.resolve(__dirname, "node_modules/wowjs/dist"),
        },
    },

    server: {
        hmr: {
            host: "localhost",
        },
    },
});
