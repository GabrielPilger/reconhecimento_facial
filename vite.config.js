import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: true,
        hmr: {
          host: '0.0.0.0',
        },
        watch: {
            usePolling: true
        }
      },
    plugins: [
        laravel({
            input: [
                'resources/assets/sass/app.scss',
                'resources/assets/js/app.js',
            ],
            refresh: true,
        })
    ],
});
