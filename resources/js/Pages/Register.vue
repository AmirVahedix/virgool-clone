<script setup>
import Auth from "../Layouts/Auth.vue";
</script>

<template>
    <Auth>
        <div>
            <h4 class="text-lg font-bold text-blue-600">ایجاد حساب کاربری</h4>
            <p class="text-gray-600 mt-2">شماره موبایل یا پست الکترونیک خود را وارد کنید</p>
            <div class="p-1 mt-4">
                <v-text-field label="شماره موبایل یا پست الکترونیک" variant="outlined"></v-text-field>
            </div>
            <div class="flex justify-end">
                <v-btn
                    color="blue-darken-2"
                    append-icon="mdi-chevron-left"
                    rounded="pill"
                    variant="flat"
                >
                    ایجاد حساب کاربری
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
                <router-link to="/login" class="py-4">
                    قبلا عضو شده‌اید؟ رفتن به صفحه ورود
                </router-link>
            </div>
        </div>
    </Auth>
</template>
