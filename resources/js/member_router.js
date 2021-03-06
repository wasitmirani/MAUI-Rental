import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

function setComponent(path_file){
    const route_path= "./components/member/" + path_file + "Component.vue";
    return import(""+route_path);
}

const routes = [
    {
        path: "/",
        component: () => setComponent("home/Dashboard"),
        name:"Dashboard",
    },

];



const router = new VueRouter({
    routes,
    linkActiveClass: "active",
    linkExactActiveClass: "exact-active" // short for `routes: routes`
});


router.beforeResolve((to, from, next) => {
    // $('.page-loader-wrapper').fadeIn();

    //
    next()
})

router.afterEach((to, from) => {

    // setTimeout(function () { $('.page-loader-wrapper').fadeOut(); }, 50);

})
export default router;
