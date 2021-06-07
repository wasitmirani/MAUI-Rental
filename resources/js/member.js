/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 window.Vue = require('vue').default;
 import router from "./member_router";
 import Swal from 'sweetalert2'
 import Multiselect from 'vue-multiselect'
 import VueProgressBar from 'vue-progressbar'
 import { store } from './store'

   // register globally

 window.Swal = Swal;

 Vue.component('pagination', require('laravel-vue-pagination'));
 Vue.component('multiselect', Multiselect);
 Vue.use(VueProgressBar, {
   color: 'rgb(143, 255, 199)',
   failedColor: 'red',
   height: '4px'
 })



 const files = require.context('./', true, /\.vue$/i)
 files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


 /**
  * Next, we will create a fresh Vue application instance and attach it to
  * the page. Then, you may begin adding components to this application
  * or customize the JavaScript scaffolding to fit your unique needs.
  */
  Vue.prototype.$base_url = window.location.origin;

 const app = new Vue({
     el: '#app',
     router,
     store,
     mounted () {
         //  [App.vue specific] When App.vue is finish loading finish the progress bar
         this.$Progress.finish()
         console.log("hello");
       },
       created () {
         //  [App.vue specific] When App.vue is first loaded start the progress bar
         this.$Progress.start()
         //  hook the progress bar to start before we move router-view
         this.$router.beforeEach((to, from, next) => {
           //  does the page we want to go to have a meta.progress object
           if (to.meta.progress !== undefined) {
             let meta = to.meta.progress
             // parse meta tags
             this.$Progress.parseMeta(meta)
           }
           //  start the progress bar
           this.$Progress.start()
           //  continue to next page
           next()
         })
         //  hook the progress bar to finish after we've finished moving router-view
         this.$router.afterEach((to, from) => {
           //  finish the progress bar
           this.$Progress.finish()
         })
       }
 });
