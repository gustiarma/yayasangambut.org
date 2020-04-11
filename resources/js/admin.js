require('bootstrap');
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
import Vue from 'vue'
import VueRouter from 'vue-router'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import ElementUI from 'element-ui';
import { ElementTiptapPlugin } from 'element-tiptap';



import 'element-ui/lib/theme-chalk/index.css';
// import this package's styles
import 'element-tiptap/lib/index.css';


Vue.use(BootstrapVue)
Vue.use(VueRouter)
Vue.use(ElementUI)
Vue.use(ElementTiptapPlugin);

import Aplikasi from './Aplikasi'
import router from './router'
import Navbar from './Navbar'

const app = new Vue({
    el: '#app',
    router,
    components: {
        Navbar, Aplikasi
    }

});
