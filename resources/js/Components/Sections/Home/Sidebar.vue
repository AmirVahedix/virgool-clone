<script setup>

import SidebarHead from "./SidebarHead.vue";
import SidebarTrending from "./SidebarTrending.vue";
import SidebarFooter from "./SidebarFooter.vue";
</script>

<template>
    <v-col cols="4">
        <div class="px-2 sticky top-12">
            <SidebarHead/>
            <SidebarTrending/>
            <SidebarFooter/>
        </div>
    </v-col>
</template>
