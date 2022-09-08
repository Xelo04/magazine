<template>
    <div class="text-center">
        <v-dialog v-model="dialog" width="500">
            <template v-slot:activator="{ on, attrs }">
                <v-btn color="red lighten-2" dark v-bind="attrs" v-on="on">
                    Stwórz przedmiot
                </v-btn>
            </template>

            <v-card>
                <v-card-title class="text-h5 grey lighten-2">
                    Stwórz przedmiot
                </v-card-title>

                <v-card-text>
                    {{item}}
                    <div class="my-2 mt-6">
                        <v-text-field label="Nazwa" outlined v-model="item.name"></v-text-field>
                    </div>
                    <div class="my-2">
                        <v-text-field label="Cena" outlined v-model="item.price"></v-text-field>
                    </div>
                    {{categories}}
                    <div class="my-2">
                        <v-select :items="categories" label="Kategorie" outlined v-model="item.category_id"
                            item-text="name" item-value="id"> </v-select>
                    </div>
                </v-card-text>

                <v-divider></v-divider>

                <v-card-actions>
                    <v-btn color="error" text @click="dialog = false">
                        Zamknij
                    </v-btn>
                    <v-spacer></v-spacer>
                    <v-btn color="primary" @click="createItem()">
                        Stwórz
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </div>
</template>

<script>
import store from '../..//store/index';
export default {
    data() {
        return {
            dialog: false,
        }
    },
    computed: {
        item() {
            return store.getters.getItem;
        },
        categories() {
            return store.getters.getCategories;
        }
    },
    methods: {
        listCategories() {
            store.dispatch("listCategories", this);
        },
        async createItem() {
            await store.dispatch("createItem", this);
            this.dialog = false;
            this.$emit("createdItem");
        }
    },

    created() {
        this.listCategories();
    }
}
</script>
