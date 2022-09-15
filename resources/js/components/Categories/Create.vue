<template>
    <div class="text-center">
        <v-dialog v-model="dialog" width="500">
            <template v-slot:activator="{ on, attrs }">
                <v-btn color="primary" dark v-bind="attrs" v-on="on">
                    Stwórz kategorie
                </v-btn>
            </template>

            <v-card>
                <v-card-title class="text-h5 primary">
                    Stwórz kategorie
                </v-card-title>

                <v-card-text>
                    <div class="my-2 mt-6">
                        <v-text-field label="Nazwa" outlined v-model="category.name"></v-text-field>
                    </div>
                </v-card-text>

                <v-divider></v-divider>

                <v-card-actions>
                    <v-btn color="error" text @click="dialog = false">
                        Zamknij
                    </v-btn>
                    <v-spacer></v-spacer>
                    <v-btn color="primary" @click="createCategory()">
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
        category() {
            return store.getters.getCategory;
        },
    },
    methods: {
        listItems() {
            store.dispatch("listItems", this);
        },
        async createCategory() {
            await store.dispatch("createCategory", this);
            this.dialog = false;
            this.$emit("createdCategory");
        }
    },
    created() {
        this.listItems();
    }
}
</script>
