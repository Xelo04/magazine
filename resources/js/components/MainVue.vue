<template>
    <v-app>
        <v-footer>
            <router-link to="/items/list">
                <v-btn class="primary mx-10 my-3">Przedmioty</v-btn>
            </router-link>
            <router-link to="/categories/list">
                <v-btn class="primary mx-10 my-3">Kategorie</v-btn>
            </router-link>
            <router-link to="/users/list">
                <v-btn class="primary mx-10 my-3">Użytkownicy</v-btn>
            </router-link>
            <v-spacer>
            </v-spacer>
            <v-btn class="primary mr-5 my-3" color="error" @click="logout">Wyloguj się</v-btn>
        </v-footer>

        <v-main>

        </v-main>
        <router-view></router-view>
    </v-app>
</template>

<script>

export default {
    name: 'MainVue',
    methods: {
        async logout() {
            await this.$http.post("/logout")
                .then(response => {
                    console.log(response);
                })
            window.location.reload();
        }
    }
}
</script>
<style>
a {
    text-decoration: none;
}
</style>
