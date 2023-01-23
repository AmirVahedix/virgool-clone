<template>
    <div>
        <div class="h-12"></div>
        <v-container
            style="background-color: #BFE8FF; background-image: url(/assets/images/typewriter.png); background-repeat: no-repeat; background-size: 318px; height: 300px"
            class="hidden lg:block"
        >
            <div class="grid grid-cols-1 lg:grid-cols-2 h-full">
                <div class="mr-8 ml-0 h-full flex flex-col justify-center">
                    <h4 class="text-2xl font-semibold">به ویرگول، دنیای کلمات خوش آمدید. 👋</h4>
                    <p class="my-8 text-gray-600 text-sm leading-7">ویرگول بستری برای خواندن، گفتگو درباره‌ی موضوعات
                        مورد علاقه و به اشتراک‌گذاری ایده‌های اصیل و
                        عمیق در زندگی شخصی، حرفه‌ای و اجتماعی است.</p>
                    <div class="flex">
                        <v-btn variant="outlined">اطلاعات بیشتر</v-btn>
                        <v-btn variant="flat" color="blue-darken-3" class="mr-4">شروع به کار</v-btn>
                    </div>
                </div>
            </div>
        </v-container>
        <v-container
            style="background-color: #BFE8FF; height: 300px"
            class="block lg:hidden"
        >
            <div class="grid grid-cols-1 lg:grid-cols-2 h-full">
                <div class="mr-4 ml-4 h-full flex flex-col justify-center">
                    <h4 class="text-2xl font-semibold">به ویرگول، دنیای کلمات خوش آمدید. 👋</h4>
                    <p class="my-8 text-gray-600 text-sm leading-7">ویرگول بستری برای خواندن، گفتگو درباره‌ی موضوعات
                        مورد علاقه و به اشتراک‌گذاری ایده‌های اصیل و
                        عمیق در زندگی شخصی، حرفه‌ای و اجتماعی است.</p>
                    <div class="flex">
                        <v-btn variant="outlined">اطلاعات بیشتر</v-btn>
                        <v-btn variant="flat" color="blue-darken-3" class="mr-4">شروع به کار</v-btn>
                    </div>
                </div>
            </div>
        </v-container>
    </div>
</template>
