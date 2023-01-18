<template>
    <Header></Header>
    <Navbar></Navbar>
</template>

<script>
import Header from '../Components/Header.vue'
import Navbar from "../Components/Navbar.vue";
export default {
    name: "Home",
    components: {
        Navbar,
        Header
    }
}
</script>

<style scoped>

</style>
