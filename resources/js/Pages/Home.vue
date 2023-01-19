<template>
    <Header></Header>
    <Navbar></Navbar>
    <HomeBanners />
</template>

<script>
import Header from '../Components/Header.vue'
import Navbar from "../Components/Navbar.vue";
import HomeBanners from "../Components/HomeBanners.vue";

export default {
    name: "Home",
    components: {
        HomeBanners,
        Navbar,
        Header,
    }
}
</script>

<style scoped>

</style>
