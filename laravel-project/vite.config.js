import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
/**20230713追記 vueの本体？ */
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                    'resources/js/app.js',
                    'resources/sass/app.scss'],
            refresh: true,
        }),
        /**20230713_追記 */
        vue(),
    ],
    /**20230713_追記 */
    //ホットリロードが効かないときに使用すると良い
    server: {
        host: true
    }
});
