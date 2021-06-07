(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_member_router_js"],{

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