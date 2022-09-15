import Vue from 'vue';
import Vuetify from '../plugins/vuetify';
// Vue.use(Vuetify);
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import store from "./store";
import routes from './routes'
import MainVue from "./components/MainVue.vue";
import ItemsList from "./components/Items/List.vue"
import CategoriesList from "./components/Categories/List.vue"
import UsersList from "./components/Users/List.vue"
import VueResource from 'vue-resource';
Vue.use(VueResource);
const app = new Vue({
    el: '#app',
    store,
    vuetify: Vuetify,
    router: new VueRouter(routes),
    components: {
        MainVue,
        ItemsList,
        CategoriesList,
        UsersList
    }
});


Vue.http.interceptors.push((request) => {
    let token = document.head.querySelector('meta[name="csrf-token"]');
    if (token) {
        request.headers.set("X-CSRF-TOKEN", token.content);
    }
});

export const bus = new Vue()
