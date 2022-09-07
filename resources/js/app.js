import Vue from 'vue'
import MainVue from "./components/MainVue"
import routes from "./routes"
import VueResource from "vue-resource"
// import Vuetify from '../plugins/vuetify'
import VueRouter from 'vue-router'


window.Vue = require('vue').default;

Vue.use(VueRouter);
Vue.use(VueResource);

Vue.http.interceptors.push((request) => {
    let token = document.head.querySelector('meta[name="csrf-token"]');
    if (token) {
        request.headers.set("X-CSRF-TOKEN", token.content);
    }
});


const router = new VueRouter(routes);

const app = new Vue({
    vuetify: Vuetify,
    el: '#app',
    router: router,
    components: {
        MainVue
    }
});

export const bus = new Vue()
