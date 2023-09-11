import '../bootstrap';

import {
    createApp,
} from 'vue/dist/vue.esm-bundler';
import App from '@@/views/gs_kansan/components/index.vue'


let app = createApp(App)
app.mount("#app")
