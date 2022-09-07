require('./bootstrap');
import Vue from 'vue';
import Vuetify from "vuetify";
Vue.use(Vuetify);

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import store from "./store";
import routes from './routes'
import MainVue from "./components/MainVue.vue";

const app = new Vue({
    el: '#app',
    store,
    vuetify: new Vuetify(),
    router: new VueRouter(routes),
    components: {
        MainVue
    }
});
