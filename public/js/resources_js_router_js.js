(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_router_js"],{

/***/ "./resources/js/router.js":
/*!********************************!*\
  !*** ./resources/js/router.js ***!
  \********************************/
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
  var route_path = "./components/backend/" + path_file + "Component.vue";
  return __webpack_require__("./resources/js lazy recursive ^.*$")("" + route_path);
}

var routes = [{
  path: "/",
  component: function component() {
    return setComponent("dashboard/Home");
  },
  name: "Dashboard"
}, {
  path: "/users",
  component: function component() {
    return setComponent("user/Users");
  },
  name: "users"
}, {
  path: "/packages",
  component: function component() {
    return setComponent("package/Packages");
  },
  name: "packages"
}];
var router = new vue_router__WEBPACK_IMPORTED_MODULE_1__.default({
  routes: routes,
  linkActiveClass: "active",
  linkExactActiveClass: "exact-active" // short for `routes: routes`

});
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (router);

/***/ })

}]);