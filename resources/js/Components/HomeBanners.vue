<script setup>
import BannerItem from "./BannerItem.vue";
</script>

<template>
    <div style="background-color: #F5F5F5">
        <v-container>
            <div class="h-12"></div>
            <h4 class="text-sm text-gray-600">مطالب انتخابی برای شما</h4>
            <v-row>
                <v-col cols="8">
                    <BannerItem
                        title="در رد نظریه کارمندی یا سلام فریلنسریِ ارزی!"
                        image-src="/assets/images/articles/1.webp"
                        url="/"
                        author-name="امیر واحدی"
                        author-image="/assets/images/avatars/1.webp"
                        author-url="/"
                        published-at="5 ماه پیش"
                    />
                </v-col>
                <v-col cols="4">
                    <BannerItem
                        title="خداحافظ ریداکس، سلام کانتکست (قسمت اول)"
                        image-src="/assets/images/articles/2.webp"
                        url="/"
                        author-name="امیر واحدی"
                        author-image="/assets/images/avatars/2.webp"
                        author-url="/"
                        published-at="5 ماه پیش"
                    />
                </v-col>
                <v-col cols="4">
                    <BannerItem
                        title="عقده ی ادیپ چیست؟"
                        image-src="/assets/images/articles/3.webp"
                        url="/register"
                        author-name="امیر واحدی"
                        author-image="/assets/images/avatars/3.webp"
                        author-url="/"
                        published-at="5 ماه پیش"
                    />
                </v-col>
                <v-col cols="8">
                    <BannerItem
                        title="سفر به سرزمینی بکر و فراموش نشدنی (جزیره و دشت هلن)"
                        image-src="/assets/images/articles/4.webp"
                        url="/"
                        author-name="امیر واحدی"
                        author-image="/assets/images/avatars/4.webp"
                        author-url="/"
                        published-at="5 ماه پیش"
                    />
                </v-col>
            </v-row>
            <div class="h-96"></div>
        </v-container>
    </div>
</template>
