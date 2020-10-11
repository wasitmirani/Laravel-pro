import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);
const routes = [
    {
        path: "/",
        component: require("./components/Pages/admin/Dashboard/Dashboard.vue")
            .default
    },
    {
        path: "/users",
        component: require("./components/Pages/admin/User/Users.vue").default
    },
   {
        path: "/roles",
        component: require("./components/Pages/admin/User/roles.vue").default
    },
    {
        path: "/categories",
        component: require("./components/Pages/admin/Category/categories.vue")
            .default
    },
    {
        path: "/sub/categories",
        component: require("./components/Pages/admin/Category/subcategories.vue")
            .default
    }
];

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
    routes // short for `routes: routes`
});

export default router;
