/**20230713追記 vueの本体？ */
import vue from '@vitejs/plugin-vue'
/**20230907追記 エイリアスを設定するのに必要 */
import path from 'path'

import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                    'resources/js/app.js',
                    'resources/scss/app.scss'],
            refresh: true,
        }),
        /**20230713_追記 */
        vue(),
    ],
    /**20230713_追記 */
    //ホットリロードが効かないときに使用すると良い
    server: {
        host: true,
        hmr: {
            host: 'localhost',
        }
    },
    /**20230907追記 */
    resolve: {
        alias: {
            "@@": "resources/",
        },
    }, 
});
