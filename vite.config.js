import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

/* Path constant - verrá usata per creare degli alias a cartelle di sistema */
const path = require('path')

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    /* Aggiungo l'oggetto resolve con relativi alias come da documentazione  */
    resolve: {
        alias: {
            // '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            //Aggiungiamo un alias per la cartella /resources/
            '~resources': '/resources/'
        }
    },
});
