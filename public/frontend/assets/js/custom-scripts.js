$(document).ready(function(){
  'use strict';

  //===== Dropdown Anmiation =====// 
  var drop = $('.social-btns2 > a');
  $('.social-btns2').each(function(){
    var delay = 0;
    $(this).find(drop).each(function(){
      $(this).css({transitionDelay: delay+'ms'});
      delay += 120;
    });
  }); 

  //===== Notification Close Script =====//
  $('.notification-close-btn').on('click',function(){
    $('.notification-box').slideUp('slow');
    return false;
  });

  //===== Header Search Script =====//
  $('.header-search-wrap > a').on('click',function(){
    $('.header-search').addClass('active');
    return false;
  });

  $('.search-close-btn').on('click',function(){
    $('.header-search').removeClass('active');
    return false;
  });

  //===== Register Vote Popup Script =====//
  $('.register-vote-popup-btn').on('click',function(){
    $('html').addClass('popuo-active');
    return false;
  });
  $('.register-vote-popup-btn1').on('click',function(){
    $('html').addClass('popuo-active');
    return false;
  });

  $('.popup-close').on('click',function(){
    $('html').removeClass('popuo-active');
    return false;
  });

  //===== Counter Up =====//
  if ($.isFunction($.fn.counterUp)) {
    $('.counter').counterUp({
      delay: 10,
      time: 2000
    });
  }

  //===== Accordion =====//
  $('.toggle .content').hide();
  $('.toggle h4:first').addClass('active').next().slideDown(500).parent().addClass("activate");
  $('.toggle h4').on("click", function() {
    if ($(this).next().is(':hidden')) {
      $('.toggle h4').removeClass('active').next().slideUp(500).parent().removeClass("activate");
      $(this).toggleClass('active').next().slideDown(500).parent().toggleClass("activate");
    }
  });

  //===== Sticky Header =====//
  var menu_height = $('header').innerHeight();
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= menu_height) {
      $('.stick').addClass('sticky');
    } else {
      $('.stick').removeClass('sticky');
    }
  });
  if ($('header').hasClass('stick')) {
    $('main').css({'padding-top': menu_height});
  }

  //===== Responsive Header =====//
  $('.res-menu-btn').on('click', function () {
    $('.res-menu').addClass('slidein');
    return false;
  });
  $('.res-menu-close').on('click', function () {
    $('.res-menu').removeClass('slidein');
    return false;
  });
  $('.res-menu li.menu-item-has-children > a').on('click', function () {
    $(this).parent().siblings().children('ul').slideUp();
    $(this).parent().siblings().removeClass('active');
    $(this).parent().children('ul').slideToggle();
    $(this).parent().toggleClass('active');
    return false;
  });

  $('.shipping-calculator-button').on('click',function(){
    $('.shipping-calculator-form').slideToggle('slow');
    return false;
  });

  //===== Scrollbar =====//
  if ($('.res-menu').length) {
    var ps = new PerfectScrollbar('.res-menu');
  }

  //===== LightBox =====//
  if ($.isFunction($.fn.fancybox)) {
    $('[data-fancybox],[data-fancybox="gallery"]').fancybox({});
  }

  //===== Chosen =====//
  if ($.isFunction($.fn.chosen)) {
    $('select').chosen({});
  }

  //===== ToolTip =====//
  if ($.isFunction($.fn.tooltip)) {
    $('[data-toggle="tooltip"]').tooltip();
  }

  //===== Count Down =====//
  if ($.isFunction($.fn.downCount)) {
    $('.countdown').downCount({
      date: '12/12/2018 12:00:00',
      offset: +5
    });
  }

  //===== Touch Spin =====//
  if ($.isFunction($.fn.TouchSpin)) {
    $('.quantity > input').TouchSpin({});
  }

  $('.product-detail-tabs > ul a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
  })

  //===== Owl Carousel =====//
  if ($.isFunction($.fn.owlCarousel)) {

    //=== Priorities Carousel ===//
    $('.priorities-carousel').owlCarousel({
      autoplay: true,
      smartSpeed: 600,
      loop: true,
      items: 4,
      dots: true,
      slideSpeed: 2000,
      autoplayHoverPause: true,
      nav: false,
      margin: 30,
      navText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>"
      ],
      responsive:{
      0:{items: 1},
      480:{items: 1},
      768:{items: 2},
      980:{items: 3},
      1024:{items: 3},
      1200:{items: 4}
      }
    });

    //=== Sponsors Carousel ===//
    $('.sponsors-carousel').owlCarousel({
      autoplay: true,
      smartSpeed: 600,
      loop: true,
      items: 4,
      dots: false,
      slideSpeed: 2000,
      autoplayHoverPause: true,
      nav: false,
      margin: 50,
      navText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>"
      ],
      responsive:{
      0:{items: 1},
      480:{items: 2,margin: 20},
      768:{items: 3,margin: 25},
      980:{items: 3, margin: 35},
      1024:{items: 4,margin: 40},
      1200:{items: 4}
      }
    });

    //=== Tweets Carousel ===//
    $('.tweets-carousel').owlCarousel({
      autoplay: true,
      smartSpeed: 600,
      loop: true,
      items: 1,
      dots: true,
      slideSpeed: 2000,
      autoplayHoverPause: true,
      nav: false,
      margin: 20,
      animateIn: 'fadeIn',
      animateOut: 'fadeOut'
    });

    //=== Related Posts Carousel ===//
    $('.releated-post-carousel').owlCarousel({
      autoplay: true,
      smartSpeed: 600,
      loop: true,
      items: 2,
      dots: true,
      slideSpeed: 2000,
      autoplayHoverPause: true,
      nav: false,
      margin: 30,
      responsive:{
      0:{items: 1},
      480:{items: 1},
      768:{items: 2},
      980:{items: 2},
      1024:{items: 2},
      1200:{items: 2}
      }
    });

  }

  //===== Slick Carousel =====//
  if ($.isFunction($.fn.slick)) {

    //=== Event Carousel ===//
    $('.event-carousel').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      arrows: true,
      centerMode: true,
      centerPadding: '525px',
      prevArrow: '<div class="slick-prev slick-arrows"><i class="fa fa-angle-left"></i></div>',
      nextArrow: '<div class="slick-next slick-arrows"><i class="fa fa-angle-right"></i></div>',
      responsive: [
      {
        breakpoint: 1605,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerPadding: '450px',
        }
      },
      {
        breakpoint: 1370,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerPadding: '400px',
        }
      },
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerPadding: '300px',
        }
      },
      {
        breakpoint: 982,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerPadding: '300px',
        }
      },
      {
        breakpoint: 770,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerPadding: '200px',
        }
      },
      {
        breakpoint: 482,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerPadding: '20px',
        }
      }
      ]
    }); 

    //=== Product Details Carousel ===//
    $('.product-detail-big-img-list').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      arrows: false,
      slide: 'li',
      fade: false,
      asNavFor: '.product-detail-nav-list'
    });        

    $('.product-detail-nav-list').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.product-detail-big-img-list',
      dots: false,
      arrows: false,
      slide: 'li',
      centerPadding: '0',
      focusOnSelect: true,
      responsive: [
      {
        breakpoint: 980,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          centerMode: true,
        }
      }
      ]
    });
  }

});//===== Document Ready Ends =====//

jQuery(window).on('load', function ($) {
  'use strict';

  //===== Isotope =====//
  if (jQuery('.filter-item').length > 0) {
    if (jQuery().isotope) {
      var jQuerycontainer = jQuery('.masonry'); // cache container
      jQuerycontainer.isotope({
        itemSelector: '.filter-item',
        columnWidth:2,
      });
      jQuery('.filter-buttons a').on('click',function () {
        var selector = jQuery(this).attr('data-filter');
        jQuery('.filter-buttons li').removeClass('active');
        jQuery(this).parent().addClass('active');
        jQuerycontainer.isotope({filter: selector});
        return false;
      });
      jQuerycontainer.isotope('layout'); // layout/layout
    }

    jQuery(window).resize(function () {
      if (jQuery().isotope) {
        jQuery('.masonry').isotope('layout'); // layout/relayout on window resize
      }
    });
  }

});
