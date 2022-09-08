import Vue from "vue"
import Vuex from "vuex"
import Items from "./modules/items"
import Categories from "./modules/categories"
Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        Items,
        Categories
    },
})
