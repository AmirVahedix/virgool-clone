<script setup>

import Articles from "./Articles.vue";
import Sidebar from "./Sidebar.vue";
</script>

<template>
    <v-container class="mt-8">
        <v-row no-gutters>
            <Articles />
            <Sidebar />
        </v-row>
    </v-container>
</template>
