<script setup>
import {ref} from "vue";

const search = ref(false);
</script>

<template>
    <v-menu
        v-model="search"
        :close-on-content-click="false"
        min-width="100%"
        transition="slide-y-transition"
    >
        <template v-slot:activator="{ props }">
            <v-btn
                @click="search = true"
                icon="mdi-magnify"
                variant="text"
                color="grey"
            ></v-btn>
        </template>
        <v-container>
            <div class="bg-white py-3 px-4">
                <v-row align="center">
                    <v-text-field
                        variant="plain"
                        placeholder="در بین مقالات، نویسندگان و… جستجو کنید"
                    ></v-text-field>
                    <v-btn
                        icon="mdi-close"
                        variant="plain"
                        color="grey lighten-3"
                        @click="search = false"
                    ></v-btn>
                </v-row>
            </div>
        </v-container>
    </v-menu>
</template>
