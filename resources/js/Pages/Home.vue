<template>
    <Header></Header>
    <Navbar></Navbar>
    <div style="background-color: #F5F5F5">
        <HomeBanners/>
        <HomeIntro/>
        <div class="h-16"></div>
    </div>
</template>

<script>
import Header from '../Components/Header.vue'
import Navbar from "../Components/Navbar.vue";
import HomeBanners from "../Components/HomeBanners.vue";
import HomeIntro from "../Components/HomeIntro.vue";

export default {
    name: "Home",
    components: {
        HomeIntro,
        HomeBanners,
        Navbar,
        Header,
    }
}
</script>

<style scoped>

</style>
