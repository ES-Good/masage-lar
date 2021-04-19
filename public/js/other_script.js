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
  var burger = document.querySelector('.header__burger'),
      header = document.querySelector('.header'),
      headerMenuClose = document.querySelector('.header__menu__close'),
      map = document.querySelector('#map'),
      links = document.querySelectorAll('[href^="#"]'),
      ageButtonYes = document.querySelector('.age__button--yes'),
      ageButtonNo = document.querySelector('.age__button--no'),
      ageModal = document.querySelector('.age'),
      modalSuccessAge = document.querySelector('.modal-success--age'),
      modalSuccessDialogAge = document.querySelector('.modal-success__dialog--age'); //Проверка возраста

  if (localStorage.getItem('age') === '>=21') {
    document.body.style.overflow = '';
    ageModal.classList.remove('age--visible');
  } else {
    document.body.style.overflow = 'hidden';
  }

  ageButtonYes.addEventListener('click', function () {
    document.body.style.overflow = '';
    ageModal.classList.remove('age--visible');
    localStorage.setItem('age', '>=21');
  });
  ageButtonNo.addEventListener('click', function () {
    modalSuccessAge.classList.add('modal-success--visible');
  });
  modalSuccessAge.addEventListener('click', function (e) {
    if (e.target.classList.contains('modal-success')) {
      modalSuccessAge.classList.remove('modal-success--visible');
    }
  });
  modalSuccessDialogAge.addEventListener('click', function () {
    modalSuccessAge.classList.remove('modal-success--visible');
  }); // Скролл до якоря

  var speed = 1;
  links.forEach(function (link) {
    link.addEventListener('click', function (event) {
      event.preventDefault();
      var widthTop = document.documentElement.scrollTop,
          hash = this.hash,
          toBlock = document.querySelector(hash).getBoundingClientRect().top,
          start = null;
      requestAnimationFrame(step);

      function step(time) {
        if (start === null) {
          start = time;
        }

        var progress = time - start,
            r = toBlock < 0 ? Math.max(widthTop - progress / speed, widthTop + toBlock) : Math.min(widthTop + progress / speed, widthTop + toBlock);
        document.documentElement.scrollTo(0, r);

        if (r != widthTop + toBlock) {
          requestAnimationFrame(step);
        } else {
          location.hash = hash;
        }
      }
    });
  }); // Функция для слайдера 3d

  function slider3d(imgsSrc, cubes, arrowPrev, arrowNext) {
    var imgsSrc_ = document.querySelectorAll(imgsSrc),
        cubes_ = document.querySelectorAll(cubes),
        prev_ = document.querySelector(arrowPrev),
        next_ = document.querySelector(arrowNext);
    var startPoint,
        swipeAction,
        endPoint,
        angle = 0,
        src = [],
        counter = 0,
        isRight = false,
        isLeft = false;

    if (imgsSrc_.length > 0) {
      var prevSlide = function prevSlide() {
        counter--;

        if (counter < 0) {
          counter = 3;
        }

        angle += 90;
        src.unshift(src.pop());
        cubes_.forEach(function (item, index) {
          for (var i = 0; i < item.children.length; i++) {
            if (i == counter) {
              item.children[i].firstElementChild.setAttribute('src', "".concat(src[index]));
            }
          }

          item.style.transform = "rotateY(".concat(angle, "deg)");
        });
      };

      var nextSlide = function nextSlide() {
        counter++;

        if (counter > 3) {
          counter = 0;
        }

        angle -= 90;
        src.push(src.shift());
        cubes_.forEach(function (item, index) {
          for (var i = 0; i < item.children.length; i++) {
            if (i == counter) {
              item.children[i].firstElementChild.setAttribute('src', "".concat(src[index]));
            }
          }

          item.style.transform = "rotateY(".concat(angle, "deg)");
        });
      };

      cubes_.forEach(function (item) {
        item.addEventListener('touchstart', function (e) {
          startPoint = e.changedTouches[0].pageX;
        });
        item.addEventListener('touchmove', function (e) {
          swipeAction = e.changedTouches[0].pageX - startPoint;
          item.style.transform = "rotateY(".concat(swipeAction / 2.5 + angle, "deg)");

          if (swipeAction > 0) {
            if (!isRight) {
              counter--;

              if (counter < 0) {
                counter = 3;
              }

              src.unshift(src.pop());
              cubes_.forEach(function (item, index) {
                for (var i = 0; i < item.children.length; i++) {
                  if (i == counter) {
                    item.children[i].firstElementChild.setAttribute('src', "".concat(src[index]));
                  }
                }
              });
              counter++;

              if (counter > 3) {
                counter = 0;
              }

              src.push(src.shift());
              isRight = true;
            }
          } else {
            if (!isLeft) {
              counter++;

              if (counter > 3) {
                counter = 0;
              }

              src.push(src.shift());
              cubes_.forEach(function (item, index) {
                for (var i = 0; i < item.children.length; i++) {
                  if (i == counter) {
                    item.children[i].firstElementChild.setAttribute('src', "".concat(src[index]));
                  }
                }
              });
              counter--;

              if (counter < 0) {
                counter = 3;
              }

              src.unshift(src.pop());
              isLeft = true;
            }
          }
        });
        item.addEventListener('touchend', function (e) {
          endPoint = e.changedTouches[0].pageX;

          if (Math.abs(startPoint - endPoint) > 50) {
            isRight = false;
            isLeft = false;

            if (endPoint < startPoint) {
              nextSlide();
            } else {
              prevSlide();
            }
          } else {
            item.style.transform = "rotateY(".concat(angle, "deg)");
          }
        });
      });
      imgsSrc_.forEach(function (item) {
        src.push(item.getAttribute('src'));
      });
      prev_.addEventListener('click', function () {
        prevSlide();
      });
      next_.addEventListener('click', function () {
        nextSlide();
      });
    }
  }

  slider3d('.questSl__src--1', '.questSl__cube--1', '.questSl__arrow__prev--1', '.questSl__arrow__next--1');
  slider3d('.questSl__src--2', '.questSl__cube--2', '.questSl__arrow__prev--2', '.questSl__arrow__next--2');
  slider3d('.questSl__src--3', '.questSl__cube--3', '.questSl__arrow__prev--3', '.questSl__arrow__next--3');
  slider3d('.questSl__src--4', '.questSl__cube--4', '.questSl__arrow__prev--4', '.questSl__arrow__next--4');
  slider3d('.questSl__src--5', '.questSl__cube--5', '.questSl__arrow__prev--5', '.questSl__arrow__next--5');
  slider3d('.questSl__src--6', '.questSl__cube--6', '.questSl__arrow__prev--6', '.questSl__arrow__next--6');
  slider3d('.questSl__src--7', '.questSl__cube--7', '.questSl__arrow__prev--7', '.questSl__arrow__next--7');
  slider3d('.questSl__src--8', '.questSl__cube--8', '.questSl__arrow__prev--8', '.questSl__arrow__next--8'); // Функция для появления-скрытия модалки

  function calcScroll() {
    var div = document.createElement('div');
    div.style.width = '50px';
    div.style.height = '50px';
    div.style.overflowY = 'scroll';
    div.style.visibility = 'hidden';
    document.body.appendChild(div);
    var scarollWidth = div.offsetWidth - div.clientWidth;
    div.remove();
    return scarollWidth;
  }

  var scrollWidth = calcScroll();

  function modal(modal, modalActiveClass, triggers, modalClose) {
    var triggers_ = document.querySelectorAll(triggers),
        modal_ = document.querySelector(modal),
        modalClose_ = document.querySelector(modalClose);

    if (triggers_.length > 0) {
      triggers_.forEach(function (item) {
        item.addEventListener('click', function () {
          modal_.classList.add(modalActiveClass);
          document.body.style.overflow = 'hidden';
          document.body.style.marginRight = "".concat(scrollWidth, "px");
        });
      });
      modalClose_.addEventListener('click', function () {
        modal_.classList.remove(modalActiveClass);
        document.body.style.overflow = '';
        document.body.style.marginRight = '0px';
      });
      modal_.addEventListener('click', function (e) {
        if (e.target.classList.contains(modal.replace(/\./, ''))) {
          modal_.classList.remove(modalActiveClass);
          document.body.style.overflow = '';
          document.body.style.marginRight = '0px';
        }
      });
    }
  }

  modal('.modal', 'modal--visible', '[data-modal]', '.modal__close'); // появление - исчезновение меню на мобилке при нажатии на бургер

  function headerDeleteClass() {
    header.classList.remove('header--absolute');
    document.body.style.paddingTop = '';
  }

  burger.addEventListener('click', function () {
    header.classList.toggle('header--active');

    if (header.classList.contains('header--active')) {
      header.classList.add('header--absolute');
      document.body.style.paddingTop = "".concat(header.firstElementChild.scrollHeight - 3, "px");
    } else {
      setTimeout(headerDeleteClass, 300);
    }
  });
  headerMenuClose.addEventListener('click', function () {
    header.classList.remove('header--active');
    setTimeout(headerDeleteClass, 300);
  }); //Карта

  if (map) {
    ymaps.ready(function () {
      var myMap = new ymaps.Map('map', {
        center: [53.195000, 50.107685],
        zoom: 17
      }, {
        searchControlProvider: 'yandex#search'
      }),
          // Создаём макет содержимого.
      MyIconContentLayout = ymaps.templateLayoutFactory.createClass('<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'),
          myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
        hintContent: 'г. Самара, ул. Самарская д. 161а',
        balloonContent: 'г. Самара, ул. Самарская д. 161а'
      }, {
        // Опции.
        // Необходимо указать данный тип макета.
        iconLayout: 'default#image',
        // Своё изображение иконки метки.
        iconImageHref: '../img/map/here.png',
        // Размеры метки.
        iconImageSize: [40, 40],
        // Смещение левого верхнего угла иконки относительно
        // её "ножки" (точки привязки).
        iconImageOffset: [-5, -38]
      });
      myMap.geoObjects.add(myPlacemark);
      myMap.behaviors.disable('scrollZoom');
    });
  }
});

/***/ }),

/***/ 2:
/*!********************************************!*\
  !*** multi ./resources/js/other_script.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/evgen/sites/massage-dev/resources/js/other_script.js */"./resources/js/other_script.js");


/***/ })

/******/ });