<script setup>
import Auth from "../Layouts/Auth.vue";
</script>

<template>
    <Auth>
        <template #description>
            <div class="mt-12 hidden xl:block">
                <ul class="flex flex-col text-white gap-6">
                    <li class="flex">
                        <v-icon icon="mdi-check-all"></v-icon>
                        <p class="mr-2">اگر شما هم عاشق مطالعه هستید در ویرگول می‌توانید مطالب متنوعی را در موضوعات مختلف بخوانید.</p>
                    </li>
                    <li class="flex">
                        <v-icon icon="mdi-check-all"></v-icon>
                        <p class="mr-2">با نوشتن مطلبتان در ویرگول آن را در معرض دید قشر وسیعی از خوانندگان قرار خواهید داد.</p>
                    </li>
                    <li class="flex">
                        <v-icon icon="mdi-check-all"></v-icon>
                        <p class="mr-2">ویرگول آمار دقیقی از تعداد و میزان خوانده شدن مطلبتان به شما ارائه می‌دهد.</p>
                    </li>
                </ul>
            </div>
        </template>
        <div>
            <h4 class="text-lg font-bold text-blue-600">ورود به حساب کاربری</h4>
            <p class="text-gray-600 mt-2">نام کاربری، پست الکترونیک یا شماره موبایل خود را وارد کنید</p>
            <div class="p-1 mt-4">
                <v-text-field
                    label="نام کاربری، پست الکترونیک یا شماره موبایل"
                    variant="outlined"
                ></v-text-field>
            </div>
            <div class="flex justify-end">
                <v-btn
                    color="blue-darken-2"
                    append-icon="mdi-chevron-left"
                    rounded="pill"
                    variant="flat"
                >
                    ورود حساب کاربری
                </v-btn>
            </div>
            <div class="mt-16">
                <a href="#" class="w-full flex justify-center py-4 text-sm text-center">
                    <p>
                        <span class="text-gray-600"> ورود با اکانت </span>
                        <span class="text-red-500">گوگل</span>
                    </p>
                </a>
            </div>
            <div class="mt-4 text-center text-xs text-gray-800">
                <p>
                    <span>ثبت نام در ویرگول به منزله موافقت با </span>
                    <router-link to="/">
                        <span class="border-b-2 border-gray-400 text-gray-600">قوانین </span>
                    </router-link>
                    <span>است</span>
                </p>
            </div>
            <div class="mt-12 mb-4 text-center text-sm text-gray-700">
                <router-link to="/register" class="py-4">
                    عضو نیستید؟ ثبت نام کنید
                </router-link>
            </div>
        </div>
    </Auth>
</template>
