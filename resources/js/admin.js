/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
import router from "./admin_router";
import VueProgressBar from "vue-progressbar";
import { BootstrapVue, BootstrapVueIcons } from "bootstrap-vue";
import VueInitialsImg from "vue-initials-img";
import Swal from "sweetalert2";
import VueContentPlaceholders from "vue-content-placeholders";

Vue.component("pagination", require("laravel-vue-pagination"));

// window._ = require("lodash");

window._ = require("lodash");
window.Swal = Swal;

Vue.use(VueContentPlaceholders);
Vue.use(VueInitialsImg);
Vue.use(BootstrapVue);
Vue.use(BootstrapVueIcons);
Vue.use(VueProgressBar, {
    color: "rgb(6, 214, 93)",
    failedColor: "red",
    height: "4px"
});
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component(
//     "dashboard-component",
//     require("./components/Pages/Dashboard/Dashboard.vue").default
// );

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.prototype.$host_url = window.location.origin;
Vue.prototype.$host_apiurl = window.location.origin + "/api";
const app = new Vue({
    el: "#admin_app",
    router
});
