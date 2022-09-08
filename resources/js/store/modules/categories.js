const urlCategories = "/main-api/categories/";
const state = {
    categories: [],

}
const getters = {
    getCategories: state => state.categories,
}
const mutations = {
    setCategories(state, data) {
        state.categories = data;
    },
}
const actions = {
    listCategories(state, VueComponent) {
        VueComponent.$http.get(urlCategories + "list")
            .then(response => {
                state.commit("setCategories", response.body.categories);
            })
    }
}

export default {
    state,
    mutations,
    actions,
    getters
}
