import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

//const path = require('path') // <-- require path from node

export default defineConfig({
    plugins: [
        laravel({
            
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~resources': path.resolve(__dirname, 'resources'),
            '~icons': path.resolve(__dirname, 'node_modules/bootstrap-icons/font') 
        
        }
    }
});
