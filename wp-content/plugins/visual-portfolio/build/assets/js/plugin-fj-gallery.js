(()=>{"use strict";var e={n:t=>{var o=t&&t.__esModule?()=>t.default:()=>t;return e.d(o,{a:o}),o},d:(t,o)=>{for(var a in o)e.o(o,a)&&!e.o(t,a)&&Object.defineProperty(t,a,{enumerable:!0,get:o[a]})},o:(e,t)=>Object.prototype.hasOwnProperty.call(e,t)};const t=window.jQuery;var o=e.n(t);o()(document).on("extendClass.vpf",((e,t)=>{"vpf"===e.namespace&&(t.prototype.initFjGallery=function(e=!1,t=null){const o=this;if(o.$items_wrap.fjGallery&&"justified"===o.options.layout){const a=!1!==e?e:{gutter:{horizontal:parseFloat(o.options.itemsGap)||0,vertical:""!==o.options.itemsGapVertical?parseFloat(o.options.itemsGapVertical)||0:parseFloat(o.options.itemsGap)||0},rowHeight:parseFloat(o.options.justifiedRowHeight)||200,maxRowsCount:parseInt(o.options.justifiedMaxRowsCount,10)||0,lastRow:o.options.justifiedLastRow||"left",rowHeightTolerance:parseFloat(o.options.justifiedRowHeightTolerance)||0,calculateItemsHeight:!0,itemSelector:".vp-portfolio__item-wrap",imageSelector:".vp-portfolio__item-img img",transitionDuration:"0.3s"};0===a.maxRowsCount&&(a.maxRowsCount=Number.POSITIVE_INFINITY),o.emitEvent("beforeInitFjGallery",[a,t]),o.$items_wrap.fjGallery(a,t),o.emitEvent("initFjGallery",[a,t])}},t.prototype.destroyFjGallery=function(){const e=this;e.$items_wrap.data("fjGallery")&&(e.$items_wrap.fjGallery("destroy"),e.emitEvent("destroyFjGallery"))})})),o()(document).on("addItems.vpf",((e,t,o,a)=>{"vpf"===e.namespace&&t.$items_wrap.data("fjGallery")&&(a?(t.destroyFjGallery(),t.$items_wrap.find(".vp-portfolio__item-wrap").remove(),t.$items_wrap.prepend(o),t.initFjGallery()):(t.$items_wrap.append(o),t.initFjGallery("appendImages",o)))})),o()(document).on("init.vpf",((e,t)=>{"vpf"===e.namespace&&t.initFjGallery()})),o()(document).on("imagesLoaded.vpf",((e,t)=>{"vpf"===e.namespace&&t.initFjGallery()})),o()(document).on("destroy.vpf",((e,t)=>{"vpf"===e.namespace&&t.destroyFjGallery()}))})();