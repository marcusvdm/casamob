/*!
 * Casamob
 * Fiercely quick and opinionated front-ends
 * http://www.mmartini.eti.br
 * @author Marcus Martini
 * @version 1.0.3
 * Copyright 2016. MIT licensed.
 */
(function ($, window, document, undefined) {

  'use strict';
  
  var vhFix = function ($selector) {
    if (navigator.userAgent.match(/(iPad)/i)) {
      var vh = $(window).height();
      $selector.css('min-height', vh);
    }
  };
  
  var lbGallery = function () {
    var title = $(this).data('prodtitle'),
        id = $(this).data('prodid'),
        lb = $(this).data('featherlight');
        
    if($(this).hasClass('btn-cores')) {
      $('.page__content', lb).attr('class', 'page__content cores-box linhas prod-box'); 
       $('.title-cores-play').html(title);
    } else if($(this).hasClass('btn-puxadores')) {
      $('.page__content', lb).attr('class', 'page__content puxadores-box linhas prod-box');
      $('.title-puxadores-play').html(title);
    } else if($(this).hasClass('btn-tampos')) {
      $('.page__content', lb).attr('class', 'page__content tampos-box linhas prod-box');
       $('.title-tampos-play').html(title);
    }
    
    $('.page__content', lb).addClass(id);
    $(' > .prod-title', lb).html(title);
  };

  // the semi-colon before the function invocation is a safety
  // net against concatenated scripts and/or other plugins
  // that are not closed properly.
  (function ( $, window, document, undefined ) {

      // undefined is used here as the undefined global
      // variable in ECMAScript 3 and is mutable (i.e. it can
      // be changed by someone else). undefined isn't really
      // being passed in so we can ensure that its value is
      // truly undefined. In ES5, undefined can no longer be
      // modified.

      // window and document are passed through as local
      // variables rather than as globals, because this (slightly)
      // quickens the resolution process and can be more
      // efficiently minified (especially when both are
      // regularly referenced in your plugin).

      // Create the defaults once
      var pluginName = 'fullSlider',
          defaults = {
              timeOut: 5000,
              speed: 1200
          };

      // The actual plugin constructor
      function Plugin( element, options ) {
          this.element = element;

          // jQuery has an extend method that merges the
          // contents of two or more objects, storing the
          // result in the first object. The first object
          // is generally empty because we don't want to alter
          // the default options for future instances of the plugin
          this.options = $.extend( {}, defaults, options) ;

          this._defaults = defaults;
          this._name = pluginName;

          this.init();
      }

      Plugin.prototype = {

          init: function() {
              // Place initialization logic here
              // You already have access to the DOM element and
              // the options via the instance, e.g. this.element
              // and this.options
              // you can add more functions like the one below and
              // call them like so: this.yourOtherFunction(this.element, this.options).

              var $el         = $(this.element),
                  $container  = $('.slides-container', $el),
                  $slides     = $('.slide', $container);

              $el.css({
                overflow:     'hidden',
                display:      'block',
                position:     'relative',
                width:        '100%',
                height:       '100vh'
              });

              $container.css({
                height:       '100%',
                width:        this.getContainerWidth($slides),
                position:     'relative',
                top:          '0',
                left:         '0'
              });

              $slides.css({
                width:        '100vw',
                height:       '100%',
                float:        'left',
                display:      'block',
                position:     'relative',
                overflow:     'hidden'
              });

              $slides.eq(0).addClass('current');

              $('body').addClass('slide-0');

              this.delayed($el, this.options);
          },

          getContainerWidth: function($slides) {
            var vw = $slides.length * 100;
            return vw + 'vw';
          },

          getNextSlide: function($container) {
            var $currentSlide = $('.current', $container),
                $nextSlide = $currentSlide.next('.slide');

            if ($nextSlide.index() === -1) {
              $nextSlide = $('.slide', $container).eq(0);
            }

            var slideId = $('.current', $container).index();
            $('body').removeClass('slide-' + slideId);

            $currentSlide.removeClass('current');
            $nextSlide.addClass('current');

            slideId = $('.current', $container).index();
            $('body').addClass('slide-'+ slideId);

            return $nextSlide.index();
          },

          slide: function ($container, speed) {
            var $slides = $('.slide', $container),
            $nextSlide = $slides.eq(this.getNextSlide($container));


            $container.scrollTo($nextSlide, speed);
          },

          delayed: function($container, options) {
            var that =        this,
                speed =       options.speed,
                timeOut =     options.timeOut;

            this.slideId = setInterval(function() {
              that.slide($container, speed);
            }, timeOut);
          }
      };

      // A really lightweight plugin wrapper around the constructor,
      // preventing against multiple instantiations
      $.fn[pluginName] = function ( options ) {
          return this.each(function () {
              if (!$.data(this, 'plugin_' + pluginName)) {
                  $.data(this, 'plugin_' + pluginName,
                  new Plugin( this, options ));
              }
          });
      };

  })( jQuery, window, document );
  
  
  // IOS Viewport Height Unit Bug Fix
  var $vhFix = $('.page-container');
  
  window.addEventListener('orientationchange', function() {
    vhFix($vhFix);
  }, false);
  vhFix($vhFix);
  
  if (navigator.userAgent.match(/(iPad)/i)) {
    $('#logo5').css('opacity', '1');
    $('.hero .play-cozinha, .hero .quadri-cozinha, .hero  .city-cozinha').css('visibility', 'visible');
  }
  
  $('html').removeClass('preload');
  // $('body').addClass('slide-0');

  $('.hero .page__content--slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 800,
    cssEase: 'ease-in-out',
    arrows: false,
    draggable: false,
    infinite: false,
    pauseOnHover: false
  }).on('beforeChange', function(event, slick, currentSlide, nextSlide){
    $('body').addClass('slide-'+nextSlide);
    $('body').removeClass('slide-'+currentSlide);
  });
  
  $('.showcase').each(function() {
    var thisId = '#' + $(this).attr('id');
    
    $('.img-slider', thisId).slick({
      autoplay: true,
      autoplaySpeed: 7000,
      speed: 800,
      cssEase: 'ease-in-out',
      arrows: false,
      draggable: false,
      infinite: true,
      pauseOnHover: true,
      lazyLoad: 'progressive',
      asNavFor: thisId + ' .txt-slider'
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide){
      var $thumbs = $('.thumbs', thisId);
      $('.thumb', $thumbs).removeClass('active');
      $('[data-slick-index="' + nextSlide + '"]', thisId).addClass('active');
    });
    
    $('.txt-slider', thisId).slick({
      autoplay: true,
      autoplaySpeed: 7000,
      speed: 800,
      cssEase: 'ease-in-out',
      arrows: true,
      draggable: true,
      infinite: true,
      pauseOnHover: true,
      asNavFor: thisId + ' .img-slider'
      // bla
    });
    
    $('.thumb').on('click', function(e) {
      if(!$(this).parents('.ambientes').length) {
        e.preventDefault();
        var index = $(this).data('slick-index'),
            $slider = $(thisId + ' .img-slider');
        
        $slider.slick('slickGoTo', parseInt(index));
      }
    });
  });
  

  /* SMARTRESIZE EVENT */
  (function($,sr){

    // debouncing function from John Hann
    // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
    var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
        var obj = this,
        args = arguments;

        function delayed () {
          if (!execAsap) {
            func.apply(obj, args);
          }
          timeout = null;
        }

        if (timeout) {
          clearTimeout(timeout);
        }
        else if (execAsap) {
          func.apply(obj, args);
        }

        timeout = setTimeout(delayed, threshold || 100);
      };
    };

    // smartresize
    jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

  })(jQuery,'smartresize');


  /* SET BREAKPOINTS */
  /* keep it the same as in the  _settings.responsive.scss file */

  /*var breakpoints = {
      'palm':       'screen and (max-width: 719px)',
      'lap':        'screen and (min-width: 720px) and (max-width: 1023px)',
      'lapAndUp':   'screen and (min-width: 720px)',
      'portable':   'screen and (max-width: 1023px)',
      'desk':       'screen and (min-width: 1024px)',
      'wide':       'screen and (min-width: 1430px)',
      'super':      'screen and (min-width: 1830px)',
      'retina':     '(-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi)'
    };*/

  /*
    Now you can test for things like:
    Modernizr.mq(breakpoints.portable); // returns true in less than 1023px width;
  */


  $(function () {

    $('.shade').fadeIn('slow');
    
    $('.slider').fullSlider();

    $('.close-banner, .shade').click(function(event) {
      $('.shade').fadeOut('slow');
      event.preventDefault();
    });

    $('.accordion').accordion();
    $('.accordion a').on('click', function(e) {
      e.preventDefault();
    });


    $('.btn-cores, .btn-puxadores, .btn-tampos').on('click', function() {
      var container = $(this).parent('.btns');
      $('a', container).each(lbGallery);
    });
    
    
    /* SNAP PANELS */
    /* global Modernizr */

    if (!Modernizr.touch) {

      // PanelSnap Options
      var psOptions = {
          $menu: $('.home .js-anchor'),
          menuSelector: 'a',
          panelSelector: '.step',
          slideSpeed: 1200,
          directionThreshold: 50,
          delay: 100,
          easing: 'swing',
          onActivate: function($target) {
            $('body').attr('class',function(i, c){
              return c.replace(/(^|\s)\S+-active/g, '');
            });
            $('body').addClass($target.data('panel') + '-active');
          }
        };
      
      // PANELSNAP
      $('body.home').panelSnap(psOptions);
      
      $('.btn-step-nav').on('click', function() {
        $('body').panelSnap('snapTo', 'next');
      });
    
    } else {
      $('.btn-step-nav').hide();
    }


    /* MENU LINKS SCROLLING */

    $('a.gallery').featherlightGallery({
      openSpeed: 300
    });

    if($('#uploadBtn').length) {
      document.getElementById('uploadBtn').onchange = function () {
        document.getElementById('uploadFile').value = this.value;
      };
    }

    $('#wprmenu_menu .js-anchor a').on('click', function(event) {
      event.preventDefault();
      window.location.href = location.protocol + '//' + location.host + '/' + $(this).attr('href');
    });

  });
  
  if($('body').hasClass('page-onde')) {
    
    $('.accordion__item').on('click', function(e) {
    
      $('.accordion__list').slideUp('fast');
        
      if (!$(this).hasClass('active')) {
        $('.active', $('.new-accordion')).removeClass('active');
        $(this).addClass('active');
        $('.onde').removeClass('s-accordion__regioes--show');
        $(this).next('.accordion__list').slideDown('fast');
      } else {
        $('.accordion__item').removeClass('active');
      }
      
      e.preventDefault();
    });
    
    $('.show-nacionais').on('click', function(e) {
      
      $('.onde').toggleClass('s-accordion__regioes--show');
    
      e.preventDefault();
    });
  }
  
  // POPUP REPRESENTANTES
  
  if($('body').hasClass('page-representantes')) {
    
    if($('#loader-wrapper').css('display','none')){
    
      $('.popup').toggleClass('popup__show');
    
    }
  	
  	$('.regioes, .close').click(function (e) {
  		e.preventDefault();		
  		
  		$('.popup').hide();
  	});	
  	
  }
  
  $('.all-screen').click(function(e){
  	$('.all-screen').css('display', 'none');
  	//$('.banner_lighthome').addClass('banner_lighthome__close');
  	//$('.cores-modulos').removeClass('cores-modulos--open');
  	
  	e.preventDefault();
  });
  
   $('.open-cores').click(function(e){
  	$('.cores-modulos').addClass('cores-modulos--open');
  		$('.all-screen').css('display', 'block');
  	e.preventDefault();
  });
  
  $('.open-cor').click(function(e){
  	$('.cor-modulos').addClass('cor-modulos--open');
  		$('.all-screen').css('display', 'block');
  	e.preventDefault();
  });
  
   $('.close-cores').click(function(e){
    $('.cores-modulos').removeClass('cores-modulos--open');
    $('.cor-modulos').removeClass('cor-modulos--open');
    $('.cor-tampos').removeClass('cor-tampos--open');
    $('.cor-tampos-dif').removeClass('cor-tampos-dif--open');
    $('.cores-modulos-dif').removeClass('cor-modulos-dif--open');
  	$('.all-screen').css('display', 'none');
  	e.preventDefault();
  });
  
  $('.open-cor-tampos').click(function(e){
  	$('.cor-tampos').addClass('cor-tampos--open');
  		$('.all-screen').css('display', 'block');
  	e.preventDefault();
  });
  
  $('.open-cor-tampos-dif').click(function(e){
  	$('.cor-tampos-dif').addClass('cor-tampos-dif--open');
  		$('.all-screen').css('display', 'block');
  	e.preventDefault();
  });
  
  $('.open-cores-dif').click(function(e){
  	$('.cores-modulos-dif').addClass('cores-modulos-dif--open');
  		$('.all-screen').css('display', 'block');
  	e.preventDefault();
  });
  
  function outsideClose($el, active, callback) {
  	if($el.length) {
  		var removeit = $.isArray(active) ? active.join(' ') : active;
	  	
	  	$(document).on('click', function (e) {
		    if (!$el.is(e.target) && $el.has(e.target).length === 0) {
		      $el.removeClass(removeit);
		    }
			});
			
			if ($.isFunction(callback)) { callback(); }
  	}
  }
  
  outsideClose($('.cores-modulos, .open-cores'), 'cores-modulos--open');
  outsideClose($('.cor-modulos, .open-cor'), 'cor-modulos--open');
  outsideClose($('.cor-tampos, .open-cor-tampos'), 'cor-tampos--open');
  outsideClose($('.cores-modulos-dif, .open-cores-dif'), 'cores-modulos-dif--open');
  outsideClose($('.cor-tampos-dif, .open-cor-tampos-dif'), 'cor-tampos-dif--open');

})(jQuery, window, document);