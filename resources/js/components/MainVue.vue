<template>
    <v-app>
        <v-footer>
            <router-link to="/items/list">
                <v-btn class="primary mx-4">Przedmioty</v-btn>
            </router-link>
            <router-link to="/categories/list">
                <v-btn class="primary mx-4">Kategorie</v-btn>
            </router-link>
            <router-link to="/users/list">
                <v-btn class="primary mx-4">Użytkownicy</v-btn>
            </router-link>
            <v-spacer>
            </v-spacer>
            <v-btn class="primary mx-4" color="error" @click="logout">Wyloguj się</v-btn>
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
