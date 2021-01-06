(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[5],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/admin/views/Register.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/admin/views/Register.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var vuelidate_lib_validators__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vuelidate/lib/validators */ "./node_modules/vuelidate/lib/validators/index.js");
/* harmony import */ var vuelidate_lib_validators__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(vuelidate_lib_validators__WEBPACK_IMPORTED_MODULE_1__);


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  name: "register",
  data: function data() {
    return {
      email: "",
      password: "",
      name: "",
      agree: false
    };
  },
  validations: {
    email: {
      email: vuelidate_lib_validators__WEBPACK_IMPORTED_MODULE_1__["email"],
      required: vuelidate_lib_validators__WEBPACK_IMPORTED_MODULE_1__["required"]
    },
    password: {
      required: vuelidate_lib_validators__WEBPACK_IMPORTED_MODULE_1__["required"],
      minLengh: Object(vuelidate_lib_validators__WEBPACK_IMPORTED_MODULE_1__["minLength"])(6)
    },
    name: {
      required: vuelidate_lib_validators__WEBPACK_IMPORTED_MODULE_1__["required"]
    },
    agree: {
      checked: function checked(v) {
        return v;
      }
    }
  },
  methods: {
    submitHandler: function submitHandler() {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        var formData, response;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                if (!_this.$v.$invalid) {
                  _context.next = 3;
                  break;
                }

                _this.$v.$touch();

                return _context.abrupt("return");

              case 3:
                _this.$router.push("/admin");

                formData = {
                  email: _this.email,
                  password: _this.password,
                  name: _this.name
                };
                _context.next = 7;
                return axios.post('/api/sanctum/register', formData);

              case 7:
                response = _context.sent;
                console.log(response);

              case 9:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/admin/views/Register.vue?vue&type=template&id=1071bb82&":
/*!************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/admin/views/Register.vue?vue&type=template&id=1071bb82& ***!
  \************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "form",
    {
      staticClass: "card auth-card",
      on: {
        submit: function($event) {
          $event.preventDefault()
          return _vm.submitHandler($event)
        }
      }
    },
    [
      _c("div", { staticClass: "card-content" }, [
        _c("span", { staticClass: "card-title" }, [
          _vm._v("Домашняя бухгалтерия")
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "input-field" }, [
          _c("input", {
            directives: [
              {
                name: "model",
                rawName: "v-model.trim",
                value: _vm.email,
                expression: "email",
                modifiers: { trim: true }
              }
            ],
            class: {
              invalid:
                (_vm.$v.email.$dirty && !_vm.$v.email.required) ||
                (_vm.$v.email.$dirty && !_vm.$v.email.email)
            },
            attrs: { id: "email", type: "text" },
            domProps: { value: _vm.email },
            on: {
              input: function($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.email = $event.target.value.trim()
              },
              blur: function($event) {
                return _vm.$forceUpdate()
              }
            }
          }),
          _vm._v(" "),
          _c("label", { attrs: { for: "email" } }, [_vm._v("Email")]),
          _vm._v(" "),
          !_vm.$v.email.required && _vm.$v.email.$dirty
            ? _c("small", { staticClass: "helper-text invalid" }, [
                _vm._v("Обязательное поле")
              ])
            : _vm.$v.email.$dirty && !_vm.$v.email.email
            ? _c("small", { staticClass: "helper-text invalid" }, [
                _vm._v("Введите корректный Email")
              ])
            : _vm._e()
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "input-field" }, [
          _c("input", {
            directives: [
              {
                name: "model",
                rawName: "v-model.trim",
                value: _vm.password,
                expression: "password",
                modifiers: { trim: true }
              }
            ],
            class: {
              invalid:
                (_vm.$v.password.$dirty && !_vm.$v.password.required) ||
                (_vm.$v.password.$dirty && !_vm.$v.password.minLengh)
            },
            attrs: { id: "password", type: "password" },
            domProps: { value: _vm.password },
            on: {
              input: function($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.password = $event.target.value.trim()
              },
              blur: function($event) {
                return _vm.$forceUpdate()
              }
            }
          }),
          _vm._v(" "),
          _c("label", { attrs: { for: "password" } }, [_vm._v("Пароль")]),
          _vm._v(" "),
          _vm.$v.password.$dirty && !_vm.$v.password.required
            ? _c("small", { staticClass: "helper-text invalid" }, [
                _vm._v("Введите пароль")
              ])
            : !_vm.$v.password.minLengh
            ? _c("small", { staticClass: "helper-text invalid" }, [
                _vm._v(
                  "Пароль должен быть не менее\n        " +
                    _vm._s(_vm.$v.password.$params.minLengh.min) +
                    " символов. Сейчас он\n        " +
                    _vm._s(_vm.password.length)
                )
              ])
            : _vm._e()
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "input-field" }, [
          _c("input", {
            directives: [
              {
                name: "model",
                rawName: "v-model.trim",
                value: _vm.name,
                expression: "name",
                modifiers: { trim: true }
              }
            ],
            class: {
              invalid: _vm.$v.name.$dirty && !_vm.$v.name.required
            },
            attrs: { id: "name", type: "text" },
            domProps: { value: _vm.name },
            on: {
              input: function($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.name = $event.target.value.trim()
              },
              blur: function($event) {
                return _vm.$forceUpdate()
              }
            }
          }),
          _vm._v(" "),
          _c("label", { attrs: { for: "name" } }, [_vm._v("Имя")]),
          _vm._v(" "),
          !_vm.$v.name.required && _vm.$v.name.$dirty
            ? _c("small", { staticClass: "helper-text invalid" }, [
                _vm._v("Обязательное поле")
              ])
            : _vm._e()
        ]),
        _vm._v(" "),
        _c("p", [
          _c("label", [
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.agree,
                  expression: "agree"
                }
              ],
              attrs: { type: "checkbox" },
              domProps: {
                checked: Array.isArray(_vm.agree)
                  ? _vm._i(_vm.agree, null) > -1
                  : _vm.agree
              },
              on: {
                change: function($event) {
                  var $$a = _vm.agree,
                    $$el = $event.target,
                    $$c = $$el.checked ? true : false
                  if (Array.isArray($$a)) {
                    var $$v = null,
                      $$i = _vm._i($$a, $$v)
                    if ($$el.checked) {
                      $$i < 0 && (_vm.agree = $$a.concat([$$v]))
                    } else {
                      $$i > -1 &&
                        (_vm.agree = $$a
                          .slice(0, $$i)
                          .concat($$a.slice($$i + 1)))
                    }
                  } else {
                    _vm.agree = $$c
                  }
                }
              }
            }),
            _vm._v(" "),
            _c("span", [_vm._v("С правилами согласен")])
          ])
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "card-action" }, [
        _vm._m(0),
        _vm._v(" "),
        _c(
          "p",
          { staticClass: "center" },
          [
            _vm._v("\n      Уже есть аккаунт?\n      "),
            _c("router-link", { attrs: { to: "/login" } }, [_vm._v("Войти!")])
          ],
          1
        )
      ])
    ]
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", [
      _c(
        "button",
        {
          staticClass: "btn waves-effect waves-light auth-submit",
          attrs: { type: "submit" }
        },
        [
          _vm._v("\n        Зарегистрироваться\n        "),
          _c("i", { staticClass: "material-icons right" }, [_vm._v("send")])
        ]
      )
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/admin/views/Register.vue":
/*!***********************************************!*\
  !*** ./resources/js/admin/views/Register.vue ***!
  \***********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Register_vue_vue_type_template_id_1071bb82___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Register.vue?vue&type=template&id=1071bb82& */ "./resources/js/admin/views/Register.vue?vue&type=template&id=1071bb82&");
/* harmony import */ var _Register_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Register.vue?vue&type=script&lang=js& */ "./resources/js/admin/views/Register.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Register_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Register_vue_vue_type_template_id_1071bb82___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Register_vue_vue_type_template_id_1071bb82___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/admin/views/Register.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/admin/views/Register.vue?vue&type=script&lang=js&":
/*!************************************************************************!*\
  !*** ./resources/js/admin/views/Register.vue?vue&type=script&lang=js& ***!
  \************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Register_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./Register.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/admin/views/Register.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Register_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/admin/views/Register.vue?vue&type=template&id=1071bb82&":
/*!******************************************************************************!*\
  !*** ./resources/js/admin/views/Register.vue?vue&type=template&id=1071bb82& ***!
  \******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Register_vue_vue_type_template_id_1071bb82___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./Register.vue?vue&type=template&id=1071bb82& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/admin/views/Register.vue?vue&type=template&id=1071bb82&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Register_vue_vue_type_template_id_1071bb82___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Register_vue_vue_type_template_id_1071bb82___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);