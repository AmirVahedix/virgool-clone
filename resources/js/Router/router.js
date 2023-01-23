import {createRouter, createWebHistory} from "vue-router";
import Main from "../Layouts/Main.vue";
import Home from "../Pages/Home.vue";
import Post from "../Pages/Post.vue";
import Login from "../Pages/Login.vue";
import Register from "../Pages/Register.vue";

const routes = [
    {
        path: "/",
        component: Main,
        children: [
            {
                path: '',
                component: Home,
                name: 'home',
            },
        ],
    },
    {
        path: '/posts/:slug',
        component: Post,
        name: 'posts.show',
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
