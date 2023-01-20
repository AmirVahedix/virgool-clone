<template>
    <Header></Header>
    <Navbar></Navbar>
    <div style="background-color: #F5F5F5">
        <Banners/>
        <Intro/>
        <Content />
        <div class="h-12"></div>
    </div>
</template>

<script>
import Header from '../Components/Header.vue'
import Navbar from "../Components/Navbar.vue";
import Banners from "../Components/Sections/Home/Banners.vue";
import Intro from "../Components/Sections/Home/Intro.vue";
import Content from "../Components/Sections/Home/Content.vue";

export default {
    name: "Home",
    components: {
        Content,
        Intro,
        Banners,
        Navbar,
        Header,
    }
}
</script>

<style scoped>

</style>
