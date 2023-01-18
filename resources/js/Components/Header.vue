<template>
    <v-container>
        <v-row justify="space-between">
            <v-row align="center" class="py-4">
                <img src="/assets/images/icon.svg" class="h-12" alt="ویرگول"/>
                <a href="" class="text-blue-500 hover:text-blue-600 mr-2">ویرگول چیست؟</a>
            </v-row>
            <v-row align="center" justify="end" class="py-4">
                <v-btn icon="mdi-magnify" variant="text" color="grey"></v-btn>
                <v-btn :to="{ name: 'login' }" variant="text" class="ml-3 mr-1">
                    ورود
                </v-btn>
                <v-btn :to="{ name: 'register' }" variant="flat" color="blue-darken-3">
                    ثبت نام
                </v-btn>
            </v-row>
        </v-row>
    </v-container>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style scoped>

</style>
