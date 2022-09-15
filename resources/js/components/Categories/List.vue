<template>
    <v-app>
        <v-container>
            <Create @createdCategory="listCategories" />
            <v-simple-table>
                <template v-slot:default>
                    <thead>
                        <tr>
                            <th>Lp</th>
                            <th>Nazwa</th>
                            <th>Użytkownik</th>
                            <th>Usuń</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(category,index) in categories" :key="category.id">
                            <td>{{ index+1 }}</td>
                            <td>{{ category.name }}</td>
                            <td>
                                <span v-if="category.user">
                                    {{ category.user.name }}
                                </span>
                            </td>
                            <td>
                                <v-btn @click="deleteCategory(category.id)" color="error" fab x-small>
                                    <v-icon>
                                        mdi-delete
                                    </v-icon>
                                </v-btn>
                            </td>
                        </tr>
                    </tbody>
                </template>
            </v-simple-table>
        </v-container>
    </v-app>
</template>

<script>
import store from '../..//store/index';
import Create from "./Create.vue";
export default {
    name: 'List',
    components: {
        Create
    },
    computed: {
        categories() {
            return store.getters.getCategories;
        }
    },
    methods: {
        listCategories() {
            store.dispatch("listCategories", this);
        },
        async deleteCategory(id) {
            store.commit("setCategoryId", id);
            await store.dispatch("destroyCategory", this);
            this.listCategories();
        }
    },
    created() {
        this.listCategories();
    }
}
</script>
