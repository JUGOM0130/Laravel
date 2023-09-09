import '../bootstrap';

import {
    createApp,
} from 'vue/dist/vue.esm-bundler';
//import App from '../../views/vue_test/components/aaa.vue'
import Bpp from '../../views/vue_test/bbb.vue'

import App from '@components@/aaa.vue'

let app = createApp(App)
app.mount("#app2")

let bpp = createApp(Bpp)
bpp.mount("#bpp")
