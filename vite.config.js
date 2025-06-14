import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/auth/login-register.css",
                "resources/js/app.js",
                "resources/js/auth/login-register.js",
            ],
            refresh: true,
        }),
    ],
    optimizeDeps: {
        include: ["sweetalert2"],
    },
});
