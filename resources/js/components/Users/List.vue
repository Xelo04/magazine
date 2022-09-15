<template>
    <v-app>
        <v-container>
            <v-simple-table>
                <template v-slot:default>
                    <thead>
                        <tr>
                            <th>Lp</th>
                            <th>Nazwa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(user,index) in users" :key="user.id">
                            <td>{{ index+1 }}</td>
                            <td>{{ user.name }}</td>
                        </tr>
                    </tbody>
                </template>
            </v-simple-table>
        </v-container>
    </v-app>
</template>

<script>
import store from '../..//store/index';
export default {
    name: 'List',
    computed: {
        users() {
            return store.getters.getUsers;
        }
    },
    methods: {
        listUsers() {
            store.dispatch("listUsers", this);
        },
    },
}
</script>
