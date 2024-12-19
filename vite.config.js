import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "public/js/jquery/dist/jquery.min.js",
                "public/js/apexcharts/dist/apexcharts.css",
                "public/js/lodash/lodash.min.js",
                "public/js/apexcharts/dist/apexcharts.min.js",
                "public/js/preline/dist/helper-apexcharts.js",
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            $: "jQuery",
            jquery: "jquery/dist/jquery.min.js",
        },
    },
});
