import { createWebHistory, createRouter } from "vue-router";
import About from './Pages/About.vue';
import app from './layouts/app.vue';
import Home from './Home.vue';

const routes = [
    {
        path: "/",
        component: Home,
    },
    {
        path: "/about",
        component: About,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
