<template>
    <v-app>
        <v-footer>
            <router-link to="/items/list">
                <v-btn class="primary mx-4">Przedmioty</v-btn>
            </router-link>
            <router-link to="/categories/list">
                <v-btn class="primary red--text mx-4">Kategorie</v-btn>
            </router-link>
        </v-footer>

        <v-main>

        </v-main>
        <router-view></router-view>
    </v-app>
</template>

<script>
export default {
    name: 'MainVue'
}
</script>
<style>
a {
    text-decoration: none;
}
</style>
