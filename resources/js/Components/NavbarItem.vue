<template>
    <router-link :to="to">
        <li
            class="py-4 pl-6 hover:text-gray-50 transition-all"
            :class="{ 'text-gray-50' : isPrimary, 'text-gray-300': !isPrimary }"
            style="white-space: nowrap"
        >
            <slot></slot>
        </li>
    </router-link>
</template>

<script>
export default {
    name: "NavbarItem",
    props: {
        isPrimary: {
            type: Boolean,
            required: false,
            default: false,
        },
        to: {
            type: String,
            default: "/",
        }
    }
}
</script>

<style scoped>

</style>
