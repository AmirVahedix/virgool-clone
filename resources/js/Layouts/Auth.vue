<template>
    <div class="grid grid-cols-1 lg:grid-cols-3 w-full h-screen overflow-y-hidden">
        <div class="col-span-1 lg:col-span-2 bg-gradient-to-br from-[#054592] to-[#1897D4] flex flex-col p-8">
            <div class="flex flex-col items-center mt-auto mb-auto">
                <router-link to="/" class="bg-white p-3 rounded-md shadow-md">
                    <img src="/assets/images/icon.svg" alt="" class="w-20">
                </router-link>
                <h2 class="text-white text-xl lg:text-3xl font-bold mt-4 lg:mt-16">اینجا هر کسی می‌تونه بنویسه!</h2>
                <p class="font-semibold text-gray-800 mt-4 hidden lg:block">همین حالا حساب کاربری خودت را بساز و دوران جدید وبلاگ نویسی
                    را شروع کن.</p>
                <slot name="description"></slot>
            </div>
            <div class="hidden xl:flex justify-between text-sm text-[#94DEFF]">
                <span>&copy; تمام حقوق برای ویرگول محفوظ است.</span>
                <ul class="flex list-inline gap-4">
                    <li>
                        <router-link to="/">صفحه اصلی</router-link>
                    </li>
                    <li>
                        <router-link to="/">تماس با ما</router-link>
                    </li>
                    <li>
                        <a href="https://instagram.com/virgool" target="_blank">
                            <v-icon icon="mdi-instagram"></v-icon>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/virgool" target="_blank">
                            <v-icon icon="mdi-twitter"></v-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-span-1 flex flex-col p-8">
            <div class="mt-auto">
                <slot></slot>
            </div>
        </div>
    </div>
</template>
