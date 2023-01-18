import {createRouter, createWebHistory} from "vue-router";
import Login from "../Pages/Login.vue";
import Register from "../Pages/Register.vue";

const routes = [
    {
        path: "/login",
        component: Login
    },
    {
        path: "/register",
        component: Register,
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes
});

export default router;
