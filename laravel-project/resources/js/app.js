import './bootstrap';

/**20230713追加 */
import {
    createApp,
    ref
} from 'vue/dist/vue.esm-bundler';

createApp({
    setup() {

        const teststring = ref('ああああ');

        return {
            teststring,
        }

    },
}).mount('#app');
/**ここまで */
