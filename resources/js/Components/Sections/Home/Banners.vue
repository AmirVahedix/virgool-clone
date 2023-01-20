<script setup>
import BannerItem from "./BannerItem.vue";
</script>

<template>
    <v-container>
        <div class="h-12"></div>
        <h4 class="text-sm text-gray-600 mr-2 sm:mr-0">مطالب انتخابی برای شما</h4>
        <div
            class="w-full flex overflow-auto lg:grid lg:grid-cols-3 lg:gap-4 mt-4 pr-4 lg:pr-0 hide-scrollbar"
        >
            <BannerItem
                title="در رد نظریه کارمندی یا سلام فریلنسریِ ارزی!"
                image-src="/assets/images/articles/1.webp"
                url="/"
                author-name="امیر واحدی"
                author-image="/assets/images/avatars/1.webp"
                author-url="/"
                published-at="5 ماه پیش"
                :is-big="true"
            />
            <BannerItem
                title="خداحافظ ریداکس، سلام کانتکست (قسمت اول)"
                image-src="/assets/images/articles/2.webp"
                url="/"
                author-name="امیر واحدی"
                author-image="/assets/images/avatars/2.webp"
                author-url="/"
                published-at="5 ماه پیش"
            />
            <BannerItem
                title="عقده ی ادیپ چیست؟"
                image-src="/assets/images/articles/3.webp"
                url="/register"
                author-name="امیر واحدی"
                author-image="/assets/images/avatars/3.webp"
                author-url="/"
                published-at="5 ماه پیش"
            />
            <BannerItem
                title="سفر به سرزمینی بکر و فراموش نشدنی (جزیره و دشت هلن)"
                image-src="/assets/images/articles/4.webp"
                url="/"
                author-name="امیر واحدی"
                author-image="/assets/images/avatars/4.webp"
                author-url="/"
                published-at="5 ماه پیش"
                :is-big="true"
            />
        </div>
    </v-container>
</template>
