import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import top from "../components/Top.vue";
import login from "../components/Login.vue";
import NotFound from "../components/NotFound.vue";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: "/",
            name: "top",
            component: top
        },
        {
            path: "/login",
            name: "login",
            component: login
        }
    ]
});

export default router;
