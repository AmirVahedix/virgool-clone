<script setup>

import Articles from "./Articles.vue";
import Sidebar from "./Sidebar.vue";
</script>

<template>
    <v-container class="mt-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-4">
            <Articles />
            <Sidebar />
        </div>
    </v-container>
</template>
