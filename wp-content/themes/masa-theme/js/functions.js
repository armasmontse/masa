/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
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
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "./js/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _constants = __webpack_require__(1);
	
	__webpack_require__(2);
	
	function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
	
	_constants.w.load(function () {
	    console.log('Hello world from El Cultivo! -- Load');
	});
	
	var video = (0, _constants.$)('video').get(0);
	var audioStatus = (0, _constants.$)('#audio-status');
	var imgPlay = (0, _constants.$)('.home__resource');
	var x = window.matchMedia("(min-width: 768px)");
	
	var about = (0, _constants.$)('#about');
	var founders = (0, _constants.$)('#founders');
	var contact = (0, _constants.$)('#contact');
	
	(0, _constants.$)(document).ready(function () {
	    console.log('Hello world from El Cultivo! --Ready');
	
	    function getRandomInt(min, max) {
	        return Math.floor(Math.random() * (max - min + 1) + min);
	    }
	
	    var margTopRandom;
	    (0, _constants.$)('.artist__thumbnail').each(function () {
	        margTopRandom = (0, _constants.$)(this).css(_defineProperty({ 'marginTop': getRandomInt(-50, 350) }, 'marginTop', getRandomInt(-50, 350)));
	        // console.log($(this).find('img').css('height'));
	    });
	
	    var n = 0;
	    (0, _constants.$)(".artist__name").mouseenter(function () {
	        console.log('Ready mousenter ' + n);
	        var $this = (0, _constants.$)(this);
	        var $thisNext = (0, _constants.$)(this).next();
	        var $thisNextImg = $thisNext.find('img');
	        var $margTop = $thisNext.css('marginTop');
	
	        $thisNext.css("display", "block");
	        $thisNext.css("z-index", n);
	
	        $thisNextImg.css({ 'height': 'calc(100vh - (' + $margTop + ' + 52px))' });
	
	        n++;
	    });
	
	    // video.setMuted = function (muted) {
	    //     this.muted = muted
	    //     // updateAudioStatus()
	    // }
	    // const toggleAudio = function () {
	    //     video.setMuted(!video.muted);
	    // }
	
	    // audioStatus.click(function () {
	    //     // console.log('Aqui se mutuea');
	    //     toggleAudio();
	    // })
	
	    about.click(function () {
	        console.log('about');
	        (0, _constants.$)('#aboutContainer').removeClass('hide');
	        (0, _constants.$)('#aboutContainer').addClass('show');
	
	        (0, _constants.$)('#foundersContainer').removeClass('show');
	        (0, _constants.$)('#contactContainer').removeClass('show');
	        (0, _constants.$)('#foundersContainer').addClass('hide');
	        (0, _constants.$)('#contactContainer').addClass('hide');
	    });
	
	    founders.click(function () {
	        console.log('founders');
	        (0, _constants.$)('#foundersContainer').removeClass('hide');
	        (0, _constants.$)('#foundersContainer').addClass('show');
	
	        (0, _constants.$)('#aboutContainer').removeClass('show');
	        (0, _constants.$)('#contactContainer').removeClass('show');
	        (0, _constants.$)('#aboutContainer').addClass('hide');
	        (0, _constants.$)('#contactContainer').addClass('hide');
	    });
	
	    contact.click(function () {
	        console.log('contact');
	        (0, _constants.$)('#contactContainer').removeClass('hide');
	        (0, _constants.$)('#contactContainer').addClass('show');
	
	        (0, _constants.$)('#foundersContainer').removeClass('show');
	        (0, _constants.$)('#aboutContainer').removeClass('show');
	        (0, _constants.$)('#foundersContainer').addClass('hide');
	        (0, _constants.$)('#aboutContainer').addClass('hide');
	    });
	
	    mediaQueries(x);
	    x.addListener(mediaQueries);
	});
	
	function mediaQueries(x) {
	
	    if (x.matches) {
	        console.log('DESKTOP');
	        if (video) {
	            var videoPlay = function videoPlay() {
	                video.play();
	            };
	            videoPlay();
	            console.log('hay video');
	        } else {
	            console.log('no hay video');
	        }
	    } else {
	        // console.log('MOBILE');
	        // audioStatus.html("PLAY");
	        // audioStatus.hide();
	        (0, _constants.$)('#imagemovil').click(function () {
	            // console.log('PLay mobile');
	            (0, _constants.$)('#imagemovil').hide();
	            video.play();
	            // audioStatus.show();
	            (0, _constants.$)('#playMovil').hide();
	            // audioStatus.html("AUDIO");
	        });
	        (0, _constants.$)('#playMovil').click(function () {
	            (0, _constants.$)('#imagemovil').hide();
	            video.play();
	            // audioStatus.show();
	            (0, _constants.$)('#playMovil').hide();
	        });
	
	        audioStatus.click(function () {
	            // audioStatus.html("AUDIO");
	        });
	    }
	}

/***/ }),
/* 1 */
/***/ (function(module, exports) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	var $ = exports.$ = jQuery;
	var w = exports.w = $(window);

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };
	
	var _constants = __webpack_require__(1);
	
	_constants.w.load(function () {
	
	    // Modal que abre una galería
	    var modalGallery = (0, _constants.$)('.modal-gallery');
	
	    if (modalGallery.length) {
	
	        modalGallery.slick({
	            autoplay: false,
	            arrows: true,
	            dots: false,
	            prevArrow: (0, _constants.$)('.galeria-prev'),
	            nextArrow: (0, _constants.$)('.galeria-next')
	        });
	
	        var modal = (0, _constants.$)('#modal');
	
	        (0, _constants.$)('.modalOpen').click(function () {
	            console.log((0, _constants.$)(this).data("position"));
	            console.log(_typeof((0, _constants.$)(this).data("position")));
	            modal.css('display', 'flex');
	            modalGallery.slick('slickGoTo', (0, _constants.$)(this).data("position"), false);
	        });
	
	        (0, _constants.$)('.close').click(function () {
	            modal.css('display', 'none');
	        });
	
	        modalGallery.click(function () {
	            modal.css('display', 'none');
	        });
	    }
	});
	(0, _constants.$)(document).on('keydown', function (e) {
	    if (e.keyCode == 37) {
	        (0, _constants.$)('.modal-gallery').slick('slickPrev');
	    }
	    if (e.keyCode == 39) {
	        (0, _constants.$)('.modal-gallery').slick('slickNext');
	    }
	});

/***/ })
/******/ ]);
//# sourceMappingURL=functions.js.map