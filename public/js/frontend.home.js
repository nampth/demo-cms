webpackJsonp([5],{

/***/ "./resources/js/app.constants.js":
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
var baseUrl = exports.baseUrl = jQuery('#site_meta').attr('data-url');
var SUCCESS_CODE = exports.SUCCESS_CODE = 0;
var ERROR_CODE = exports.ERROR_CODE = 1;

var USER_ACTIVE_STATUS = exports.USER_ACTIVE_STATUS = 0;
var USER_DEACT_STATUS = exports.USER_DEACT_STATUS = 1;

/***/ }),

/***/ "./resources/js/pages/frontend.home.js":
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _app = __webpack_require__("./resources/js/app.constants.js");

var app = new Vue({
    el: '#app',
    data: function data() {
        return {};
    },
    mounted: function mounted() {
        console.log('dcm');
    },

    methods: {}
});

/***/ }),

/***/ 4:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/js/pages/frontend.home.js");


/***/ })

},[4]);