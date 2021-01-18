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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/other_script.js":
/*!**************************************!*\
  !*** ./resources/js/other_script.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.addEventListener('DOMContentLoaded', function () {
  var cards = document.querySelectorAll('.calc__calc-card'),
      payment = document.querySelector('.calc__calc-sum'),
      select = document.querySelector('.calc__select'),
      calcInput = document.querySelector('.calc__calc-input');

  function prettify(num) {
    var n = num.toString();
    return n.replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1" + ' ');
  }

  function getPayment(sum, period, rate) {
    // *
    // * sum - сумма кредита
    // * period - срок в годах
    // * rate - годовая ставка в процентах
    // *
    var i, koef; // ставка в месяц

    i = rate / 12 / 100; // коэффициент аннуитета

    koef = i * Math.pow(1 + i, period * 12) / (Math.pow(1 + i, period * 12) - 1); // итог

    payment.textContent = (sum * koef).toFixed();
  }

  ;

  function getPaymentDesktop() {
    cards.forEach(function (card) {
      if (card.classList.contains('calc__calc-card--active')) {
        var sum = +calcInput.value.replace(/\D/g, ''),
            period = +card.dataset.period;
        getPayment(sum, period, 4);
      }
    });
  }

  function getPaymentMobile() {
    var sum = +document.querySelector('.calc__calc-input').value.replace(/\D/g, ''),
        period = +select.value;
    getPayment(sum, period, 4);
  }

  function clearActiveClass() {
    cards.forEach(function (card) {
      card.classList.remove('calc__calc-card--active');
    });
  }

  cards.forEach(function (card) {
    card.addEventListener('click', function () {
      clearActiveClass();
      card.classList.add('calc__calc-card--active');
      +calcInput.value.replace(/\D/g, '') >= 100000 && +calcInput.value.replace(/\D/g, '') <= 20000000 ? getPaymentDesktop() : payment.textContent = '0';
    });
  });
  select.addEventListener('input', function () {
    +calcInput.value.replace(/\D/g, '') >= 100000 && +calcInput.value.replace(/\D/g, '') <= 20000000 ? getPaymentMobile() : payment.textContent = '0';
  });
  calcInput.addEventListener('input', function () {
    if (calcInput.value[0] == 0) {
      calcInput.value = calcInput.value.replace(/./g, '');
    }

    calcInput.value = calcInput.value.replace(/\D/g, '');
    calcInput.value = prettify(calcInput.value);
    getPaymentDesktop();

    if (+calcInput.value.replace(/\D/g, '') > 20000000) {
      calcInput.value = prettify(20000000);
    }

    if (+calcInput.value.replace(/\D/g, '') >= 100000 && +calcInput.value.replace(/\D/g, '') <= 20000000) {
      if (select.value != '') {
        getPaymentMobile();
      }

      getPaymentDesktop();
    } else {
      payment.textContent = '0';
    }
  }); // Слайдер в секции "Немного о нашей компании" с прогрессбаром.

  function setProgress(index, slider, progressBar) {
    var calc = (index + 1) / slider.slick('getSlick').slideCount * 100;
    progressBar.css('background-size', "".concat(calc, "% 100%")).attr('aria-valuenow', calc); // $progressBarLabel.text(`${calc.toFixed(2)}% completed`);
  }

  var $slider = $('.variable-width'),
      $progressBar = $('.info__progress'); // const $progressBarLabel = $('.slider__label');

  $slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    setProgress(nextSlide, $slider, $progressBar);
  });
  $slider.slick({
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
    arrow: false,
    centerPadding: '0px 25px 25px'
  });
  setProgress(0, $slider, $progressBar);
  document.querySelector('.info__slider .slick-next').style.display = 'none'; // Accordion

  var questions = document.querySelectorAll('.questions__question-header');
  questions.forEach(function (question) {
    question.addEventListener('click', function () {
      question.nextSibling.nextSibling.classList.toggle('questions__question-content--active');
      question.classList.toggle('questions__question-header--active');
    });
  });
  var nav = document.querySelector('.fixed-nav');

  window.onscroll = function () {
    if (pageYOffset >= 100) {
      nav.style.top = '0';
    } else {
      nav.style.top = '50px';
    }
  };

  slickSlider();
}); // Слайдер в секции "Оформим кредит" с прогрессбаром

function slickSlider() {
  if ($(window).width() < 426) {
    var setProgress = function setProgress(index, slider, progressBar) {
      var calc = (index + 1) / slider.slick('getSlick').slideCount * 100;
      progressBar.css('background-size', "".concat(calc, "% 100%")).attr('aria-valuenow', calc); // $progressBarLabel.text(`${calc.toFixed(2)}% completed`);
    };

    var sliderСredit = $('.single-item'),
        progressCredit = $('.arrange__progress');
    sliderСredit.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
      setProgress(nextSlide, sliderСredit, progressCredit);
    });
    sliderСredit.slick({
      infinite: false,
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      centerMode: true,
      centerPadding: '30px'
    });
    setProgress(0, sliderСredit, progressCredit);
  }
}

/***/ }),

/***/ 2:
/*!********************************************!*\
  !*** multi ./resources/js/other_script.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/xallax/Documents/Sites/LARAVEL/admin-ldigital-app/resources/js/other_script.js */"./resources/js/other_script.js");


/***/ })

/******/ });