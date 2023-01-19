<template>
    <Header></Header>
    <Navbar></Navbar>
    <div style="background-color: #F5F5F5">
        <HomeBanners/>
        <HomeIntro/>
        <v-container class="mt-8">
            <v-row no-gutters>
                <HomeArticles/>
                <v-col cols="4">
                    Test
                </v-col>
            </v-row>
        </v-container>
        <div class="h-12"></div>
    </div>
</template>

<script>
import Header from '../Components/Header.vue'
import Navbar from "../Components/Navbar.vue";
import HomeBanners from "../Components/HomeBanners.vue";
import HomeIntro from "../Components/HomeIntro.vue";
import HomeArticles from "../Components/HomeArticles.vue";

export default {
    name: "Home",
    components: {
        HomeArticles,
        HomeIntro,
        HomeBanners,
        Navbar,
        Header,
    }
}
</script>

<style scoped>

</style>
