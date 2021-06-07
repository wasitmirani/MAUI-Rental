(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_setting_js"],{

/***/ "./resources/js/setting.js":
/*!*********************************!*\
  !*** ./resources/js/setting.js ***!
  \*********************************/
/***/ (() => {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var setting = /*#__PURE__*/function () {
  function setting(val) {
    _classCallCheck(this, setting);

    console.log(val);
    this.goBack();
  }

  _createClass(setting, [{
    key: "goBack",
    value: function goBack() {
      window.history.back();
    }
  }]);

  return setting;
}();

/***/ })

}]);