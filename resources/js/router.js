import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

function setComponent(path_file){
    const route_path= "./components/backend/" + path_file + "Component.vue";
    return import(""+route_path);
}

const routes = [
    {
        path: "/",
        component: () => setComponent("dashboard/Home"),
        name:"Dashboard",
    },
    {
        path: "/users",
        component: () => setComponent("user/Users"),
        name:"users",
    },
    {
        path: "/packages",
        component: () => setComponent("package/Packages"),
        name:"packages",
    },
];



const router = new VueRouter({
    routes,
    linkActiveClass: "active",
    linkExactActiveClass: "exact-active" // short for `routes: routes`
});


export default router;
