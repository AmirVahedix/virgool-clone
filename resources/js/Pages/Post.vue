<script setup>
import {onMounted, onBeforeUnmount, ref} from 'vue';
import {useRoute} from 'vue-router';
import Header from "../Components/Header.vue";
import SuggestedItem from "../Components/Sections/Post/SuggestedItem.vue";
import PostSidebar from "../Components/Sections/Post/PostSidebar.vue";
import BottomActions from "../Components/Sections/Post/BottomActions.vue";

const route = useRoute();

const mainContentRef = ref(null);
const articleBottomAuthorRef = ref(null);
const tagsRef = ref(null);

const showSidebar = ref(false);
const showBottomBar = ref(true);

const onScroll = (e) => {
    checkSidebarVisibility(e);
    checkBottomBarVisibility(e);
}

const checkBottomBarVisibility = (e) => {
    const hasPassed = Math.round(e.target.scrollTop) >= 0;
    const hasReachedEnd = tagsRef.value.offsetTop <= (Math.round(e.target.scrollTop) + window.innerHeight);

    const result = hasPassed && !hasReachedEnd;
    if (result !== showBottomBar.value) showBottomBar.value = result;
}

const checkSidebarVisibility = (e) => {
    const hasPassed = mainContentRef.value.offsetTop <= Math.round(e.target.scrollTop);
    const hasReachedEnd = articleBottomAuthorRef.value.offsetTop <= (Math.round(e.target.scrollTop) + window.innerHeight);

    const result = hasPassed && !hasReachedEnd;
    if (result !== showSidebar.value) showSidebar.value = result;
}

onMounted(() => {
    window.addEventListener('scroll', onScroll, true);
    console.log('event listener set')
});

onBeforeUnmount(() => {
    window.removeEventListener('scroll', onScroll, true);
});
</script>

<template>
    <Header/>
    <PostSidebar :show="showSidebar"/>
    <BottomActions :show="showBottomBar"/>
    <v-container fluid>
        <div class="mx-auto flex flex-col px-4" style="max-width: 740px;">
            <div class="flex items-center mt-8">
                <v-avatar image="/assets/images/avatars/2.webp" size="80"></v-avatar>
                <div class="flex flex-col mr-3">
                    <div class="flex items-center">
                        <h4 class="font-semibold text-lg">امیر واحدی</h4>
                        <v-btn
                            size="small"
                            variant="flat"
                            rounded="pill"
                            color="grey-darken-3"
                            prepend-icon="mdi-plus"
                            class="mr-4"
                        >دنبال کنید
                        </v-btn>
                    </div>
                    <p class="mt-3 text-xs text-gray-600 hidden md:block">
                        یاد میگیرم، تجربه می‌کنم، اشتباه می‌کنم و این چرخه من است تا این که موفق شوم.
                    </p>
                    <p class="text-xs text-gray-900 mt-4">۳ سال پیش / خواندن ۱۲ دقیقه</p>
                </div>
            </div>
            <h1 class="text-3xl mt-10 font-semibold text-gray-700 leading-10">وقتی که برای مصاحبه توسعه دهنده Front-End
                به کافه بازار رفتم</h1>

            <div ref="mainContentRef" class="leading-8 mt-4 gap-2 flex flex-col"
                 style="font-size: 1.1rem; color: #4B4B4B; ">
                <p>البته من اگر کمی فکر می‌کردم هم متوجه این داستان می‌شدم. شرایط
                    نامساعد و احوالاتم ذهنم رو به سمت پذیرش اون دلیل برد چون برای شرایط من مناسب‌تر بود. مگر نه من هفته
                    قبل مصاحبه خودم در کانال جامعه ری‌اکت ایران لینک دانلود کتاب You don't know js رو گذاشته بودم و
                    مدت‌ها بود در حال خوندنش بودم هر چند تا اون روز هنوز تمومش نکرده بودم. از همه جالبتر این که بارها در
                    گروه تلگرام جامعه ری‌اکت ایران برای دوستان موضوع "vdom چیه و ری‌اکت چجوری تغییرات رو اعمال میکنه" رو
                    توضیح دادم و اطرافیانم همه میدونن که من اینا رو می‌دونستم! اصلا از من در مصاحبه این سوالات پرسیده
                    نشد که حالا من جواب ندم یا جوابی اشتباه بدم! یا حتی از من خواسته نشد کدی رو به Vue بزنم یا سوال کنن
                    یاد داری یا نه تا من بشون بگم که من ری‌اکت رو توی یک هفته یاد گرفتم و یک فریم ورک SPA با معماری Vue
                    خودم نوشتم و مهم پایه دانش هست نه ساختارها و تعاریف حفظی و آکادمیک!</p>
                <p>البته من اگر کمی فکر می‌کردم هم متوجه این داستان می‌شدم. شرایط
                    نامساعد و احوالاتم ذهنم رو به سمت پذیرش اون دلیل برد چون برای شرایط من مناسب‌تر بود. مگر نه من هفته
                    قبل مصاحبه خودم در کانال جامعه ری‌اکت ایران لینک دانلود کتاب You don't know js رو گذاشته بودم و
                    مدت‌ها بود در حال خوندنش بودم هر چند تا اون روز هنوز تمومش نکرده بودم. از همه جالبتر این که بارها در
                    گروه تلگرام جامعه ری‌اکت ایران برای دوستان موضوع "vdom چیه و ری‌اکت چجوری تغییرات رو اعمال میکنه" رو
                    توضیح دادم و اطرافیانم همه میدونن که من اینا رو می‌دونستم! اصلا از من در مصاحبه این سوالات پرسیده
                    نشد که حالا من جواب ندم یا جوابی اشتباه بدم! یا حتی از من خواسته نشد کدی رو به Vue بزنم یا سوال کنن
                    یاد داری یا نه تا من بشون بگم که من ری‌اکت رو توی یک هفته یاد گرفتم و یک فریم ورک SPA با معماری Vue
                    خودم نوشتم و مهم پایه دانش هست نه ساختارها و تعاریف حفظی و آکادمیک!</p>
                <p>نمی گم عالی بودم و بی نقص چون سوتی‌هایی هم می‌‌دادم ولی حتی رتبه یک کنکور هم همه دروس رو صد درصد
                    نمیزنه! حداقل مطمئنم توانای رفتن به مرحله بعد رو داشتم. برای من هم این ری‌جکت کمی عجیب بودی ولی
                    بیشتر دوست داشتم قبولش کنم تا هم شرایط زندگیم متعادل‌تر بشه و هم نهایت استفاده رو از انگیزه‌ای که
                    برای رشدم ایجاد شده بود ببرم.</p>
                <p>نمی گم عالی بودم و بی نقص چون سوتی‌هایی هم می‌‌دادم ولی حتی رتبه یک کنکور هم همه دروس رو صد درصد
                    نمیزنه! حداقل مطمئنم توانای رفتن به مرحله بعد رو داشتم. برای من هم این ری‌جکت کمی عجیب بودی ولی
                    بیشتر دوست داشتم قبولش کنم تا هم شرایط زندگیم متعادل‌تر بشه و هم نهایت استفاده رو از انگیزه‌ای که
                    برای رشدم ایجاد شده بود ببرم.</p>
                <p>نمی گم عالی بودم و بی نقص چون سوتی‌هایی هم می‌‌دادم ولی حتی رتبه یک کنکور هم همه دروس رو صد درصد
                    نمیزنه! حداقل مطمئنم توانای رفتن به مرحله بعد رو داشتم. برای من هم این ری‌جکت کمی عجیب بودی ولی
                    بیشتر دوست داشتم قبولش کنم تا هم شرایط زندگیم متعادل‌تر بشه و هم نهایت استفاده رو از انگیزه‌ای که
                    برای رشدم ایجاد شده بود ببرم.</p>
                <p>البته من اگر کمی فکر می‌کردم هم متوجه این داستان می‌شدم. شرایط
                    نامساعد و احوالاتم ذهنم رو به سمت پذیرش اون دلیل برد چون برای شرایط من مناسب‌تر بود. مگر نه من هفته
                    قبل مصاحبه خودم در کانال جامعه ری‌اکت ایران لینک دانلود کتاب You don't know js رو گذاشته بودم و
                    مدت‌ها بود در حال خوندنش بودم هر چند تا اون روز هنوز تمومش نکرده بودم. از همه جالبتر این که بارها در
                    گروه تلگرام جامعه ری‌اکت ایران برای دوستان موضوع "vdom چیه و ری‌اکت چجوری تغییرات رو اعمال میکنه" رو
                    توضیح دادم و اطرافیانم همه میدونن که من اینا رو می‌دونستم! اصلا از من در مصاحبه این سوالات پرسیده
                    نشد که حالا من جواب ندم یا جوابی اشتباه بدم! یا حتی از من خواسته نشد کدی رو به Vue بزنم یا سوال کنن
                    یاد داری یا نه تا من بشون بگم که من ری‌اکت رو توی یک هفته یاد گرفتم و یک فریم ورک SPA با معماری Vue
                    خودم نوشتم و مهم پایه دانش هست نه ساختارها و تعاریف حفظی و آکادمیک!</p>
                <p>نمی گم عالی بودم و بی نقص چون سوتی‌هایی هم می‌‌دادم ولی حتی رتبه یک کنکور هم همه دروس رو صد درصد
                    نمیزنه! حداقل مطمئنم توانای رفتن به مرحله بعد رو داشتم. برای من هم این ری‌جکت کمی عجیب بودی ولی
                    بیشتر دوست داشتم قبولش کنم تا هم شرایط زندگیم متعادل‌تر بشه و هم نهایت استفاده رو از انگیزه‌ای که
                    برای رشدم ایجاد شده بود ببرم.</p>
                <p>نمی گم عالی بودم و بی نقص چون سوتی‌هایی هم می‌‌دادم ولی حتی رتبه یک کنکور هم همه دروس رو صد درصد
                    نمیزنه! حداقل مطمئنم توانای رفتن به مرحله بعد رو داشتم. برای من هم این ری‌جکت کمی عجیب بودی ولی
                    بیشتر دوست داشتم قبولش کنم تا هم شرایط زندگیم متعادل‌تر بشه و هم نهایت استفاده رو از انگیزه‌ای که
                    برای رشدم ایجاد شده بود ببرم.</p>
                <p>البته من اگر کمی فکر می‌کردم هم متوجه این داستان می‌شدم. شرایط
                    نامساعد و احوالاتم ذهنم رو به سمت پذیرش اون دلیل برد چون برای شرایط من مناسب‌تر بود. مگر نه من هفته
                    قبل مصاحبه خودم در کانال جامعه ری‌اکت ایران لینک دانلود کتاب You don't know js رو گذاشته بودم و
                    مدت‌ها بود در حال خوندنش بودم هر چند تا اون روز هنوز تمومش نکرده بودم. از همه جالبتر این که بارها در
                    گروه تلگرام جامعه ری‌اکت ایران برای دوستان موضوع "vdom چیه و ری‌اکت چجوری تغییرات رو اعمال میکنه" رو
                    توضیح دادم و اطرافیانم همه میدونن که من اینا رو می‌دونستم! اصلا از من در مصاحبه این سوالات پرسیده
                    نشد که حالا من جواب ندم یا جوابی اشتباه بدم! یا حتی از من خواسته نشد کدی رو به Vue بزنم یا سوال کنن
                    یاد داری یا نه تا من بشون بگم که من ری‌اکت رو توی یک هفته یاد گرفتم و یک فریم ورک SPA با معماری Vue
                    خودم نوشتم و مهم پایه دانش هست نه ساختارها و تعاریف حفظی و آکادمیک!</p>

                <p>نمی گم عالی بودم و بی نقص چون سوتی‌هایی هم می‌‌دادم ولی حتی رتبه یک کنکور هم همه دروس رو صد درصد
                    نمیزنه! حداقل مطمئنم توانای رفتن به مرحله بعد رو داشتم. برای من هم این ری‌جکت کمی عجیب بودی ولی
                    بیشتر دوست داشتم قبولش کنم تا هم شرایط زندگیم متعادل‌تر بشه و هم نهایت استفاده رو از انگیزه‌ای که
                    برای رشدم ایجاد شده بود ببرم.</p>
            </div>

            <div class="mt-24" ref="tagsRef">
                <ul class="flex flex-wrap gap-4 text-sm">
                    <router-link to="/" class="bg-gray-100 hover:bg-gray-200 transition py-2 px-4 rounded">
                        لاراول
                    </router-link>
                    <router-link to="/" class="bg-gray-100 hover:bg-gray-200 transition py-2 px-4 rounded">
                        جنگو
                    </router-link>
                    <router-link to="/" class="bg-gray-100 hover:bg-gray-200 transition py-2 px-4 rounded">
                        PHP
                    </router-link>
                    <router-link to="/" class="bg-gray-100 hover:bg-gray-200 transition py-2 px-4 rounded">
                        توسعه بک‌اند
                    </router-link>
                    <router-link to="/" class="bg-gray-100 hover:bg-gray-200 transition py-2 px-4 rounded">
                        توسعه سرور
                    </router-link>
                </ul>
            </div>
            <div class="mt-12 flex flex-col md:flex-row justify-between text-gray-500">
                <div class="flex items-center justify-between md:justify-start">
                    <div>
                        <v-icon icon="mdi-heart-outline" size="28"></v-icon>
                        <span class="text-xs mr-3">134</span>
                    </div>
                    <div>
                        <v-icon icon="mdi-comment-outline mr-6" size="28"></v-icon>
                        <span class="text-xs mr-3">20 نظر</span>
                    </div>
                    <v-icon icon="mdi-bookmark-outline mr-6" size="28"></v-icon>
                </div>
                <div class="flex items-center gap-4 md:pt-0 pt-8">
                    <v-icon icon="mdi-twitter"></v-icon>
                    <v-icon icon="mdi-facebook"></v-icon>
                    <v-btn size="small" variant="outlined" append-icon="mdi-content-copy" rounded="pill">
                        https://vrgl.ir/J5v2M
                    </v-btn>
                </div>
            </div>
            <div class="w-full border-b-2 border-dashed mt-8"></div>
            <div ref="articleBottomAuthorRef" class="flex items-center mt-8">
                <img src="/assets/images/avatars/2.webp" class="w-20 rounded-lg" alt="">
                <div class="flex flex-col gap-4 mr-6">
                    <div class="flex items-center">
                        <h4 class="font-bold text-lg">امیر واحدی</h4>
                        <v-btn variant="outlined" color="blue-darken-2" size="small" class="mr-4">
                            دنبال کردن
                        </v-btn>
                    </div>
                    <p class="text-gray-800 text-xs">
                        یاد میگیرم، تجربه می‌کنم، اشتباه می‌کنم و این چرخه من است تا این که موفق شوم.
                    </p>
                </div>
            </div>
            <div class="h-12"></div>
        </div>
        <div class="w-full bg-gray-200 p-4 lg:p-24">
            <v-container>
                <h6 class="text-sm font-bold text-gray-600 mt-8 lg:mt-0">
                    شاید از این نوشته‌ها هم خوشتان بیاید
                </h6>
                <div class="flex overflow-x-auto lg:grid grid-cols-3 gap-4 mt-4 hide-scrollbar">
                    <SuggestedItem key="shit1"/>
                    <SuggestedItem key="shit1"/>
                    <SuggestedItem key="shit1"/>
                </div>
            </v-container>
            <div class="h-24"></div>
        </div>
    </v-container>
</template>
