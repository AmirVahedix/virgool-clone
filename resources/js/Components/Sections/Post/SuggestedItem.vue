<script setup>

</script>

<template>
    <div class="bg-white rounded flex flex-col rounded overflow-hidden">
        <router-link to="/">
            <img src="/assets/images/articles/1.webp" alt="" style="height: 120px" class="w-full object-cover">
        </router-link>
        <div class="p-4">
            <h2 class="font-bold mt-2">شناخت مفاهیم SSR و CSR در React JS</h2>
            <div class="flex items-center justify-between mt-12">
                <div class="flex items-center">
                    <img src="/assets/images/avatars/3.webp" class="w-10 rounded-full" />
                    <div class="flex flex-col mr-4">
                        <router-link to="/" class="text-blue-500 text-sm">امیر واحدی</router-link>
                        <span class="text-gray-500 mt-1  text-xs">خواندن 1 دقیقه</span>
                    </div>
                </div>
                <v-icon icon="mdi-bookmark-outline" class="text-gray-500"></v-icon>
            </div>
        </div>
    </div>
</template>
