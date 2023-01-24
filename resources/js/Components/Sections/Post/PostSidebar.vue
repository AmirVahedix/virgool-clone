<script setup>
import {defineProps} from 'vue';
import SidebarReadMoreItem from "./SidebarReadMoreItem.vue";

const {show} = defineProps({
    show: {
        type: Boolean,
        default: false,
    }
});
</script>

<template>
    <Teleport to="#modals">
        <div
            class="hidden xl:flex flex-col items-start fixed top-16 left-0 transition mx-16"
            :class="{ 'opacity-0': !show, 'opacity-100': show }"
            style="width: 235px"
        >
            <h4 class="font-semibold text-sm">امیر واحدی</h4>
            <span class="text-xs mt-3 text-gray-500">گیک، مینیمالیست و شک‌گرا</span>
            <v-btn variant="outlined" color="blue-darken-2" class="mt-5" size="small">
                دنبال کردن
            </v-btn>
            <div class="w-full border-b-2 border-gray-300 flex mt-16">
                <div class="py-2">
                    <h6 class="text-sm">بیشتر بخوانید</h6>
                </div>
            </div>
            <div class="divide-y divide-dashed">
                <SidebarReadMoreItem/>
                <SidebarReadMoreItem/>
                <SidebarReadMoreItem/>
            </div>
        </div>
    </Teleport>
</template>
