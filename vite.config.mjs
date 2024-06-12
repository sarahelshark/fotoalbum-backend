import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

//const path = require('path') // <-- require path from node

export default defineConfig({
    plugins: [
        laravel({
            // edit the first value of the array input to point to our new sass files and folder.
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // Add resolve object and aliases
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~resources': path.resolve(__dirname, 'resources'),
            '~icons': path.resolve(__dirname, 'node_modules/bootstrap-icons/font') 
        
        }
    }
});
