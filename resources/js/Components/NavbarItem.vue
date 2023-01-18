<template>
    <router-link :to="to">
        <li
            class="py-4 pl-6 text-gray-200 hover:text-gray-50 "
            :class="{ 'text-gray-50' : isPrimary }"
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
