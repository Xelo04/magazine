<template>
    <v-app>
        <v-container>
            <Create @createdItem="listItems" />
            <v-simple-table>
                <template v-slot:default>
                    <thead>
                        <tr>
                            <th>Lp</th>
                            <th>Nazwa</th>
                            <th>Cena</th>
                            <th>Kategoria</th>
                            <th>Usuń</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(item,index) in items" :key="item.id">
                            <td>{{ index+1 }}</td>
                            <td>{{ item.name }}</td>
                            <td>{{ item.price }}</td>
                            <td>{{ item.category.name }}</td>
                            <td>Usuń</td>
                        </tr>
                    </tbody>
                </template>
            </v-simple-table>
        </v-container>
    </v-app>
</template>

<script>
import store from '../..//store/index';
import Create from "./Create.vue"
export default {
    name: 'List',
    components: {
        Create
    },
    computed: {
        items() {
            return store.getters.getItems;
        }
    },
    methods: {
        listItems() {
            store.dispatch("listItems", this);
        }
    },
    created() {
        this.listItems();
    }
}
</script>
