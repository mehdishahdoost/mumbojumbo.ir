(window.webpackJsonp_name_=window.webpackJsonp_name_||[]).push([["embed-poster"],{"./node_modules/@babel/runtime-corejs3/core-js/instance/index-of.js":function(e,n,o){e.exports=o("./node_modules/core-js-pure/features/instance/index-of.js")},"./node_modules/@babel/runtime-corejs3/core-js/object/keys.js":function(e,n,o){e.exports=o("./node_modules/core-js-pure/features/object/keys.js")},"./node_modules/@babel/runtime-corejs3/helpers/esm/objectWithoutPropertiesLoose.js":function(e,n,o){"use strict";o.d(n,"a",function(){return i});var s=o("./node_modules/@babel/runtime-corejs3/core-js/instance/index-of.js"),r=o.n(s),t=o("./node_modules/@babel/runtime-corejs3/core-js/object/keys.js"),a=o.n(t);function i(e,n){if(null==e)return{};var o,s,t={},i=a()(e);for(s=0;s<i.length;s++)o=i[s],r()(n).call(n,o)>=0||(t[o]=e[o]);return t}},"./node_modules/core-js-pure/es/array/virtual/index-of.js":function(e,n,o){o("./node_modules/core-js-pure/modules/es.array.index-of.js"),e.exports=o("./node_modules/core-js-pure/internals/entry-virtual.js")("Array").indexOf},"./node_modules/core-js-pure/es/instance/index-of.js":function(e,n,o){var s=o("./node_modules/core-js-pure/es/array/virtual/index-of.js"),r=Array.prototype;e.exports=function(e){var n=e.indexOf;return e===r||e instanceof Array&&n===r.indexOf?s:n}},"./node_modules/core-js-pure/es/object/keys.js":function(e,n,o){o("./node_modules/core-js-pure/modules/es.object.keys.js"),e.exports=o("./node_modules/core-js-pure/internals/path.js").Object.keys},"./node_modules/core-js-pure/features/instance/index-of.js":function(e,n,o){e.exports=o("./node_modules/core-js-pure/es/instance/index-of.js")},"./node_modules/core-js-pure/features/object/keys.js":function(e,n,o){e.exports=o("./node_modules/core-js-pure/es/object/keys.js")},"./node_modules/core-js-pure/internals/sloppy-array-method.js":function(e,n,o){"use strict";var s=o("./node_modules/core-js-pure/internals/fails.js");e.exports=function(e,n){var o=[][e];return!o||!s(function(){o.call(null,n||function(){throw 1},1)})}},"./node_modules/core-js-pure/modules/es.array.index-of.js":function(e,n,o){"use strict";var s=o("./node_modules/core-js-pure/internals/array-includes.js")(!1),r=[].indexOf,t=!!r&&1/[1].indexOf(1,-0)<0,a=o("./node_modules/core-js-pure/internals/sloppy-array-method.js")("indexOf");o("./node_modules/core-js-pure/internals/export.js")({target:"Array",proto:!0,forced:t||a},{indexOf:function(e){return t?r.apply(this,arguments)||0:s(this,e,arguments[1])}})},"./node_modules/core-js-pure/modules/es.object.keys.js":function(e,n,o){var s=o("./node_modules/core-js-pure/internals/to-object.js"),r=o("./node_modules/core-js-pure/internals/object-keys.js"),t=o("./node_modules/core-js-pure/internals/fails.js")(function(){r(1)});o("./node_modules/core-js-pure/internals/export.js")({target:"Object",stat:!0,forced:t},{keys:function(e){return r(s(e))}})},"./node_modules/css-loader/dist/cjs.js!./node_modules/postcss-loader/src/index.js!./node_modules/sass-loader/lib/loader.js?!./src/components/embed-poster.scss":function(e,n,o){(e.exports=o("./node_modules/css-loader/dist/runtime/api.js")(!1)).push([e.i,".romeo .main-frame {\n  font-size: 14px;\n  position: absolute;\n  top: 0;\n  right: 0;\n  width: 100%;\n  height: 100%;\n  background-repeat: no-repeat;\n  background-position: center;\n  background-size: cover; }\n  .romeo .main-frame:before {\n    content: '';\n    position: absolute;\n    top: 0;\n    right: 0;\n    bottom: 0;\n    left: 0;\n    background-color: rgba(41, 42, 51, 0.8); }\n  @media (max-width: 740px) {\n    .romeo .main-frame {\n      font-size: .8em; } }\n  .romeo .main-frame .inner {\n    max-width: 800px;\n    width: 100%;\n    position: absolute;\n    top: 50%;\n    left: 50%;\n    -webkit-transform: translate(-50%, -50%);\n    transform: translate(-50%, -50%);\n    padding: 1em;\n    text-align: center;\n    z-index: 1; }\n    .romeo .main-frame .inner .play {\n      position: relative;\n      display: inline-block;\n      width: 6em;\n      height: 6em;\n      border-radius: 50%;\n      background: #df0f50; }\n      .romeo .main-frame .inner .play svg {\n        margin: 2em; }\n        @media (max-width: 740px) {\n          .romeo .main-frame .inner .play svg {\n            width: 18px;\n            height: 18px; } }\n    .romeo .main-frame .inner .title {\n      font-size: 1.5em;\n      font-weight: 400;\n      color: #fff;\n      margin-top: 1em;\n      overflow: hidden;\n      height: 2em;\n      line-height: 2em; }\n    .romeo .main-frame .inner .duration {\n      display: inline-block;\n      font-size: 1.3em;\n      font-weight: 300;\n      color: #fff;\n      border-radius: 3px;\n      padding: .3em .5em;\n      margin-top: 1em;\n      background-color: rgba(111, 114, 133, 0.9); }\n",""])},"./src/components/embed-poster.jsx":function(e,n,o){"use strict";o.r(n);var s=o("./node_modules/react/index.js"),r=o.n(s),t=o("./src/components/player-state.jsx"),a=o("./src/components/utils.js"),i=(o("./src/components/embed-poster.scss"),o("./src/img/play.svg"));n.default=function(e){var n=e.poster,o=e.title,d=e.duration,c=Object(s.useContext)(t.b).dispatch;return r.a.createElement("div",{className:"main-frame",style:{backgroundImage:"url("+n+")"},onClick:function(){c({type:t.a.setInitEmbed,payload:!1})}},r.a.createElement("div",{className:"inner"},r.a.createElement("span",{className:"play"},r.a.createElement(i.a,{width:25,height:25})),r.a.createElement("h1",{className:"title"},o),r.a.createElement("span",{className:"duration"},Object(a.c)(d))))}},"./src/components/embed-poster.scss":function(e,n,o){var s=o("./node_modules/css-loader/dist/cjs.js!./node_modules/postcss-loader/src/index.js!./node_modules/sass-loader/lib/loader.js?!./src/components/embed-poster.scss");"string"==typeof s&&(s=[[e.i,s,""]]);var r={hmr:!0,transform:void 0,insertInto:void 0};o("./node_modules/style-loader/lib/addStyles.js")(s,r);s.locals&&(e.exports=s.locals)},"./src/img/play.svg":function(e,n,o){"use strict";var s=o("./node_modules/@babel/runtime-corejs3/helpers/esm/objectWithoutPropertiesLoose.js"),r=o("./node_modules/@babel/runtime-corejs3/core-js-stable/object/assign.js"),t=o.n(r),a=o("./node_modules/react/index.js"),i=o.n(a);function d(){return(d=t.a||function(e){for(var n=1;n<arguments.length;n++){var o=arguments[n];for(var s in o)Object.prototype.hasOwnProperty.call(o,s)&&(e[s]=o[s])}return e}).apply(this,arguments)}n.a=function(e){e.styles;var n=Object(s.a)(e,["styles"]);return i.a.createElement("svg",d({viewBox:"0 0 33 36",xmlns:"http://www.w3.org/2000/svg"},n),i.a.createElement("path",{d:"M2.879 1.053c3.7-2.14 29.61 12.84 29.61 17.12 0 4.28-26.048 19.18-29.61 17.12-3.562-2.059-3.701-32.1 0-34.24z",fill:"currentcolor",fillRule:"evenodd"}))}}}]);