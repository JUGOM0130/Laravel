import '../bootstrap';

import {
    createApp,
} from 'vue/dist/vue.esm-bundler';
import App from '@@/views/vue_test/components/index.vue'


let app = createApp(App)
app.mount("#app")
