const urlusers = "/main-api/users/";
const state = {
    users: [],
    user: {
        name: "",
    }
}
const getters = {
    getUsers: state => state.users,
}
const mutations = {
    setUsers(state, data) {
        state.users = data;
    },
}
const actions = {
    listUsers(state, VueComponent) {
        console.log(VueComponent.$http)
        VueComponent.$http.get(urlusers + "list")
            .then(response => {
                state.commit("setUsers", response.body.users);
            })
    },
}

export default {
    state,
    mutations,
    actions,
    getters
}
