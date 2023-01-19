<script setup>
import NavbarItem from "./NavbarItem.vue";
import {reactive} from "vue";

const items = reactive([
    {label: "جدیدترین پست‌ها", url: "/", isPrimary: true},
    {label: "پست‌های دوستان", url: "/", isPrimary: true},
    {label: "استارتاپ", url: "/", isPrimary: false},
    {label: "دلنوشته", url: "/", isPrimary: false},
    {label: "موفقیت", url: "/", isPrimary: false},
    {label: "کتاب", url: "/", isPrimary: false},
    {label: "خلاقیت", url: "/", isPrimary: false},
    {label: "طنز", url: "/", isPrimary: false},
    {label: "روانشناسی", url: "/", isPrimary: false},
]);
</script>

<template>
    <div class="sticky top-0" style="z-index: 99999">
        <v-container fluid class="bg-blue-darken-3">
            <v-container>
                <ul class="flex text-sm mr-4 sm:mr-0" style="overflow-x: hidden">
                    <NavbarItem
                        v-for="item in items"
                        :key="item"
                        :is-primary="item.isPrimary"
                        :to="item.url"
                    >
                        {{ item.label }}
                    </NavbarItem>
                </ul>
            </v-container>
        </v-container>
    </div>
</template>

