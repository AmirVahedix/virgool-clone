<script setup>
const props = defineProps({
    title: { type: String, required: true },
    imageSrc: { type: String, required: true },
    url: { type: String, required: true },
    authorName: { type: String, required: true },
    authorImage: { type: String, required: true },
    authorUrl: { type: String, required: true },
    publishedAt: { type: String, required: true },
});
</script>

<template>
    <router-link :to="url" class="relative flex">
        <img
            :src="imageSrc"
            :alt="title"
            class="w-full object-cover"
            style="height: 300px"
        />
        <div class="absolute top-0 left-0 w-full h-full" style="background-color: rgba(0,0,0,.44)"></div>
        <div class="absolute top-0 left-0 text-white w-full h-full flex flex-col justify-end items-start pb-6 px-4">
            <div class="flex flex-col">
                <h3 class="text-xl font-bold">{{ title }}</h3>
                <div class="flex mt-2">
                    <img :src="authorImage" alt="" class="rounded-full w-12">
                    <div class="flex flex-col font-light text-xs justify-center mr-2">
                        <router-link :to="authorUrl">{{ authorName }}</router-link>
                        <time class="mt-1">{{ publishedAt }}</time>
                    </div>
                </div>
            </div>
        </div>
    </router-link>
</template>
