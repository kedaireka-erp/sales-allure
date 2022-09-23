import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'public/dist/css/_app.css',
            'resources/js/app.js',
            'resources/js/ckeditor-balloon-block.js',
            'resources/js/ckeditor-balloon.js',
            'resources/js/ckeditor-classic.js',
            'resources/js/ckeditor-document.js',
            'resources/js/ckeditor-inline.js',
        ]),
    ],
});
