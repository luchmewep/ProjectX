/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/home.js":
/*!******************************!*\
  !*** ./resources/js/home.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  $('#linear').submit(function (e) {
    e.preventDefault();
    var data = $('#createTable').serializeArray().reduce(function (obj, item) {
      obj[item.name] = item.value;
      return obj;
    }, {});
  });
  $('#vars, #cons').change(function (e) {
    numVars = parseInt($('#vars').val());
    numCons = parseInt($('#cons').val());
    theadCols = $('table thead tr');
    tbodyRows = $('table tbody');
    numInput = $('<input type="number" class="form-control text-center">'); // If numVars is increased

    for (var i = theadCols.children().length; i < numVars; i++) {
      // thead
      theadCols.append($('<th/>').addClass('text-center').text('var' + (i + 1))); // tbody

      tdLast = tbodyRows.children().find('td:last');

      if (tdLast.length == 0) {
        tbodyRows.children().append(numInput.clone());
      } else {
        tdLast.each(function (i, val) {
          $(val).clone().appendTo($(val).parent());
        });
      }
    } //If numCons is increased


    for (var _i = tbodyRows.children().length; _i < numCons; _i++) {
      tr = tbodyRows.find('tr:last');

      if (tr.length == 0) {
        tr = $('<tr/>');
        td = $('<td/>').append(numInput.clone());

        for (var j = 0; j < theadCols.children().length; j++) {
          tr.append(td.clone());
        }
      } else {
        tr = tr.clone();
      }

      tbodyRows.append(tr.clone());
    } //If numVars is decreased


    for (var _i2 = numVars; _i2 < theadCols.children().length; _i2++) {
      theadCols.find('th:last').remove();
      tbodyRows.children().find('td:last').remove();
    } //If numCons is decreased


    for (var _i3 = tbodyRows.children().length; _i3 > numCons; _i3--) {
      tbodyRows.find('tr:last').remove();
    }
  });
  $('#vars, #cons').val(11).change(); // Material Select Initialization

  $('.mdb-select').materialSelect();
  $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
    $(this).closest('.select-outline').find('label').toggleClass('active');
    $(this).closest('.select-outline').find('.caret').toggleClass('active');
  }); // Table

  $('#wowza').DataTable();
  $('.dataTables_length').addClass('bs-select');
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\n\r\n@import '~bootstrap/scss/bootstrap';\r\n       ^\r\n      Can't find stylesheet to import.\n  ╷\n8 │ @import '~bootstrap/scss/bootstrap';\r\n  │         ^^^^^^^^^^^^^^^^^^^^^^^^^^^\n  ╵\n  stdin 8:9  root stylesheet\r\n      in D:\\laragon\\www\\ProjectX\\resources\\sass\\app.scss (line 8, column 9)\n    at D:\\laragon\\www\\ProjectX\\node_modules\\webpack\\lib\\NormalModule.js:316:20\n    at D:\\laragon\\www\\ProjectX\\node_modules\\loader-runner\\lib\\LoaderRunner.js:367:11\n    at D:\\laragon\\www\\ProjectX\\node_modules\\loader-runner\\lib\\LoaderRunner.js:233:18\n    at context.callback (D:\\laragon\\www\\ProjectX\\node_modules\\loader-runner\\lib\\LoaderRunner.js:111:13)\n    at D:\\laragon\\www\\ProjectX\\node_modules\\sass-loader\\dist\\index.js:89:7\n    at Function.call$2 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:87178:16)\n    at _render_closure1.call$2 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:76969:12)\n    at _RootZone.runBinary$3$3 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:25517:18)\n    at _RootZone.runBinary$3 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:25521:19)\n    at _FutureListener.handleError$1 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:23971:19)\n    at _Future__propagateToListeners_handleError.call$0 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:24267:40)\n    at Object._Future__propagateToListeners (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:3500:88)\n    at _Future._completeError$2 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:24095:9)\n    at _AsyncAwaitCompleter.completeError$2 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:23487:12)\n    at Object._asyncRethrow (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:3256:17)\n    at D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:13327:20\n    at _wrapJsFunctionForAsync_closure.$protected (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:3279:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:23508:12)\n    at _awaitOnObject_closure0.call$2 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:23500:25)\n    at _RootZone.runBinary$3$3 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:25517:18)\n    at _RootZone.runBinary$3 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:25521:19)\n    at _FutureListener.handleError$1 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:23971:19)\n    at _Future__propagateToListeners_handleError.call$0 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:24267:40)\n    at Object._Future__propagateToListeners (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:3500:88)\n    at _Future._completeError$2 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:24095:9)\n    at _AsyncAwaitCompleter.completeError$2 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:23487:12)\n    at Object._asyncRethrow (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:3256:17)\n    at D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:15982:20\n    at _wrapJsFunctionForAsync_closure.$protected (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:3279:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:23508:12)\n    at _awaitOnObject_closure0.call$2 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:23500:25)\n    at _RootZone.runBinary$3$3 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:25517:18)\n    at _RootZone.runBinary$3 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:25521:19)\n    at _FutureListener.handleError$1 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:23971:19)\n    at _Future__propagateToListeners_handleError.call$0 (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:24267:40)\n    at Object._Future__propagateToListeners (D:\\laragon\\www\\ProjectX\\node_modules\\sass\\sass.dart.js:3500:88)");

/***/ }),

/***/ 0:
/*!**************************************************************!*\
  !*** multi ./resources/js/home.js ./resources/sass/app.scss ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! D:\laragon\www\ProjectX\resources\js\home.js */"./resources/js/home.js");
module.exports = __webpack_require__(/*! D:\laragon\www\ProjectX\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });