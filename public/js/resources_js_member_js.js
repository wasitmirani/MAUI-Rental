(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_member_js"],{

/***/ "./resources/js/member.js":
/*!********************************!*\
  !*** ./resources/js/member.js ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _member_router__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./member_router */ "./resources/js/member_router.js");
/* harmony import */ var sweetalert2__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! sweetalert2 */ "./node_modules/sweetalert2/dist/sweetalert2.all.js");
/* harmony import */ var sweetalert2__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(sweetalert2__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var vue_multiselect__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! vue-multiselect */ "./node_modules/vue-multiselect/dist/vue-multiselect.min.js");
/* harmony import */ var vue_multiselect__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(vue_multiselect__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var vue_progressbar__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! vue-progressbar */ "./node_modules/vue-progressbar/dist/vue-progressbar.js");
/* harmony import */ var vue_progressbar__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(vue_progressbar__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _store__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./store */ "./resources/js/store.js");
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
__webpack_require__(/*! ./bootstrap */ "./resources/js/bootstrap.js");

window.Vue = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm.js").default;




 // register globally

window.Swal = (sweetalert2__WEBPACK_IMPORTED_MODULE_1___default());
Vue.component('pagination', __webpack_require__(/*! laravel-vue-pagination */ "./node_modules/laravel-vue-pagination/dist/laravel-vue-pagination.common.js"));
Vue.component('multiselect', (vue_multiselect__WEBPACK_IMPORTED_MODULE_2___default()));
Vue.use((vue_progressbar__WEBPACK_IMPORTED_MODULE_3___default()), {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '4px'
});

var files = __webpack_require__("./resources/js sync recursive \\.vue$/");

files.keys().map(function (key) {
  return Vue.component(key.split('/').pop().split('.')[0], files(key)["default"]);
});
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.prototype.$base_url = window.location.origin;
var app = new Vue({
  el: '#app',
  router: _member_router__WEBPACK_IMPORTED_MODULE_0__.default,
  store: _store__WEBPACK_IMPORTED_MODULE_4__.store,
  mounted: function mounted() {
    //  [App.vue specific] When App.vue is finish loading finish the progress bar
    this.$Progress.finish();
    console.log("hello");
  },
  created: function created() {
    var _this = this;

    //  [App.vue specific] When App.vue is first loaded start the progress bar
    this.$Progress.start(); //  hook the progress bar to start before we move router-view

    this.$router.beforeEach(function (to, from, next) {
      //  does the page we want to go to have a meta.progress object
      if (to.meta.progress !== undefined) {
        var meta = to.meta.progress; // parse meta tags

        _this.$Progress.parseMeta(meta);
      } //  start the progress bar


      _this.$Progress.start(); //  continue to next page


      next();
    }); //  hook the progress bar to finish after we've finished moving router-view

    this.$router.afterEach(function (to, from) {
      //  finish the progress bar
      _this.$Progress.finish();
    });
  }
});

/***/ }),

/***/ "./resources/js/member_router.js":
/*!***************************************!*\
  !*** ./resources/js/member_router.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm.js");
/* harmony import */ var vue_router__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vue-router */ "./node_modules/vue-router/dist/vue-router.esm.js");


vue__WEBPACK_IMPORTED_MODULE_0__.default.use(vue_router__WEBPACK_IMPORTED_MODULE_1__.default);

function setComponent(path_file) {
  var route_path = "./components/member/" + path_file + "Component.vue";
  return __webpack_require__("./resources/js lazy recursive ^.*$")("" + route_path);
}

var routes = [{
  path: "/",
  component: function component() {
    return setComponent("home/Dashboard");
  },
  name: "Dashboard"
}];
var router = new vue_router__WEBPACK_IMPORTED_MODULE_1__.default({
  routes: routes,
  linkActiveClass: "active",
  linkExactActiveClass: "exact-active" // short for `routes: routes`

});
router.beforeResolve(function (to, from, next) {
  // $('.page-loader-wrapper').fadeIn();
  //
  next();
});
router.afterEach(function (to, from) {// setTimeout(function () { $('.page-loader-wrapper').fadeOut(); }, 50);
});
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (router);

/***/ })

}]);