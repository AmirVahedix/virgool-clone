<script setup>

import SidebarHead from "./SidebarHead.vue";
import SidebarTrending from "./SidebarTrending.vue";
import SidebarFooter from "./SidebarFooter.vue";
</script>

<template>
    <div class="hidden lg:block">
        <div class="px-2">
            <SidebarHead/>
        </div>
        <div class=" sticky top-16">
            <SidebarTrending/>
            <SidebarFooter/>
        </div>
    </div>
</template>
