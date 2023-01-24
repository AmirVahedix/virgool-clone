<script setup>
import {defineProps} from 'vue';

const {show} = defineProps({
    show: {
        type: Boolean,
        default: true,
    }
})
</script>

<template>
    <Teleport to="#modals">
        <div
            class="fixed bottom-5 left-0 right-0 flex justify-center transition"
            :class="{ 'opacity-0': !show, 'opacity-100': show }"
        >
            <div class="flex shadow-lg bg-white px-2 py-3 rounded-full text-gray-500">
                <div class="flex items-center px-3">
                    <v-icon icon="mdi-heart-outline" class="text-gray-500" size="28"></v-icon>
                    <span class="text-gray-600 mr-2">180</span>
                </div>
                <div class="flex items-center px-3 border-x-2">
                    <v-icon icon="mdi-comment-outline" class="text-gray-500" size="28"></v-icon>
                    <span class="text-gray-600 mr-2">12</span>
                </div>
                <div class="flex items-center px-3">
                    <v-icon icon="mdi-bookmark-outline" class="text-gray-500" size="28"></v-icon>
                </div>
            </div>
        </div>
    </Teleport>
</template>
