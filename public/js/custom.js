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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/home.js":
/*!******************************!*\
  !*** ./resources/js/home.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function ($) {
  var numCons, numVars;
  $('#linear').submit(function (e) {
    e.preventDefault();
  });
  $('#vars, #cons').change(function (e) {
    numVars = parseInt($('#vars').val());
    numCons = parseInt($('#cons').val());
    theadCols = $('table thead tr');
    tbodyRows = $('table tbody'); //If numCons is increased

    for (var i = tbodyRows.children().length; i < numCons; i++) {
      var tr = tbodyRows.find('tr:last');

      if (tr.html() == null) {
        tr = $('<tr/>');
        td = $('<td/>').append($('<input type="number" class="form-control">'));

        for (var j = 0; j < numVars; j++) {
          tr.append(td.clone());
        }
      } else {
        tr = tr.clone();
      }

      tbodyRows.append(tr.clone());
    } //If numCons is decreased


    for (var _i = tbodyRows.children().length - numCons; _i > 0; _i--) {
      tbodyRows.find('tr:last').remove();
    } // If numVars is increased


    for (var _i2 = theadCols.children().length; _i2 < numVars; _i2++) {
      theadCols.append($('<th/>').text('var' + (_i2 + 1))); // tbodyRows.children().append($('<td/>'));
      // $.each(tbodyRows.children(), function(index, row) {
      // 	 console.log(row.find('td:last').clone());
      // });

      var rows = tbodyRows.children();

      for (var _i3 = 0; _i3 < rows.length; _i3++) {
        console.log(rows[_i3].children()); // rows[i].append(rows[i].children('td:last').clone());
      }
    } //If numVars is decreased


    for (var _i4 = theadCols.children().length - numVars; _i4 > 0; _i4--) {
      theadCols.find('th:last').remove();
      tbodyRows.children().find('td:last').remove();
    }
  });
  $('#vars, #cons').val(2).change(); // Material Select Initialization

  $('.mdb-select').materialSelect();
  $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
    $(this).closest('.select-outline').find('label').toggleClass('active');
    $(this).closest('.select-outline').find('.caret').toggleClass('active');
  }); //Data Table

  $('#tableau').DataTable({
    "scrollX": true
  });
  $('.dataTables_length').addClass('bs-select');
});

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/home.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\ProjectX\resources\js\home.js */"./resources/js/home.js");


/***/ })

/******/ });