import {createRouter, createWebHistory} from "vue-router";
import Login from "../Pages/Login.vue";
import Register from "../Pages/Register.vue";
import Home from "../Pages/Home.vue";

const routes = [
    {
        path: "/",
        component: Home,
        name: "home",
    },
    {
        path: "/login",
        component: Login,
        name: "login",
    },
    {
        path: "/register",
        component: Register,
        name: "register",
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes
});

export default router;
