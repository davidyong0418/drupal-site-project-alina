
function setRateElement(objects, x, y) {
    var w = x || 5;
    var h = y || 3;
    // objects.height(objects.width() * h / w);
    objects.each(function ($) {
        jQuery(this).height(jQuery(this).width() * h / w);
    });
}

function openNav() {
    document.getElementById("mainSidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mainSidenav").style.width = "0";
    jQuery('#mainSidenav').next().find('.navbar-toggle').removeClass('active');
}

(function ($) {
    $(document).ready(function () {
        var menu_active = $('#menu-link-active').val();
        $('#main-menu .' + menu_active).addClass('active');
        $("#edit-name").attr("placeholder", "Buscar");
        $(".form-select").select2();
        $('.btn-click').click(function () {
            $('.filter-form .form-item').toggleClass('select-active');
            $('.btn-click').toggleClass('float-no');
        });

        $(".logo-item .views-element-container").addClass("auto_height");
        $('#right > div').removeClass('row');
        $('#right > div').removeClass('first');
        $('#right > div').addClass('container');
        $('#right #item-section-image').addClass('col-md-push-6');
        $('#right #item-col-content').addClass('col-md-pull-6');
        $('#right #item-section-content').addClass('section-left');
        $('a[href^="."]').on('click', function (event) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 50
                }, 1000);
            }
        });
        // RESIZE
        var logo = $('.factoria-temp .logo-item > div').width();
        $('.factoria-temp .logo-item > div').height(logo);

        setRateElement($('.imgResize-19-16'), 19, 16);
        setRateElement($('.imgResize-16-9'), 16, 9);
        setRateElement($('.imgResize-9-5'), 9, 5);
        setRateElement($('.imgResize-5-3'), 5, 3);
        setRateElement($('.imgResize-4-3'), 4, 3);
        setRateElement($('.imgResize-3-2'), 3, 2);
        setRateElement($('.imgResize-3-1'), 3, 1);
        setRateElement($('.imgResize-2-1'), 2, 1);
        setRateElement($('.imgResize-1-1'), 1, 1);

        var heightPost = $('.post-lists .post-item .imgResize-1-1').height();
        $('.post-lists .item-first .post-bg').height(heightPost);

        //Home Banner Slider
        $('.slider-home').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 750,
            items: 1,
            nav: true,
            navText: ['<div class="btn-nav"><img src="/themes/prisma/assets/svg/next.svg"></div>', '<div class="btn-nav"><img src="/themes/prisma/assets/svg/previous.svg"></div>'],
            dots: false
        });

        //Journals Slider
        $('.journals-slider').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 500,
            center: true,
            nav: true,
            navText: ['<div class="btn-nav"><img src="/themes/prisma/assets/svg/previous.svg"></div>', '<div class="btn-nav"><img src="/themes/prisma/assets/svg/next.svg"></div>'],
            dots: false,
            responsive: {
                0: {
                    items: 2
                },
                768: {
                    items: 4
                },
                992: {
                    items: 6
                }
            }
        });

        if ($(window).width() > 991) {
            $('.journals-slider .owl-item.center').prev().addClass('prevslide');
            $('.journals-slider .owl-item.center').next().addClass('nextslide');
            $('.journals-slider').on('translated.owl.carousel', function () {
                $('.journals-slider .owl-item').removeClass('prevslide').removeClass('nextslide');
                $('.journals-slider .owl-item.center').prev().addClass('prevslide');
                $('.journals-slider .owl-item.center').next().addClass('nextslide');
            });
        }

        //Revistas Slider
        $('.revistas-slider').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 500,
            center: true,
            nav: true,
            navText: ['<div class="btn-nav"><img src="/themes/prisma/assets/svg/previous.svg">', '<div class="btn-nav"><img src="/themes/prisma/assets/svg/next.svg"></div>'],
            dots: false,
            responsive: {
                0: {
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1199: {
                    items: 5
                }
            }
        });

        // Evento Carousel
        $('.evento-owl-carousel').owlCarousel({
            loop: true,
            smartSpeed: 500,
            dots: false,
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            responsive: {
                0: {
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 500,
                    items: 1,
                    nav: true
                },
                580: {
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 500,
                    items: 2,
                    nav: true
                },
                768: {
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 500,
                    items: 3,
                    nav: true
                },
                992: {
                    items: 4,
                    nav: false
                }
            }
        });

        $('.jscustom-list').each(function() {
            var _wrap = $(this),
                _span = _wrap.find('.text-mb'),
                _text = _wrap.find('li.active').text();

            _span.text(_text);
        });

        $('.jscustom-list span.text-mb').click(function(e) {
            var _wrap = $(this).closest('.jscustom-list');
            if(_wrap.find('ul').is(':visible')) {
                _wrap.find('ul').slideUp(300);
            }
            else {
                _wrap.find('ul').slideDown(300);
            }
        });

        $('.jscustom-list li').click(function(e) {
            var _wrap = $(this).closest('.jscustom-list'),
                _span = _wrap.find('.text-mb'),
                _text = $(this).text();

            _span.text(_text);
            if($(window).width() < 768) {
                _wrap.find('ul').slideUp(300);
            }
        });

        $('body').click(function(e) {
            if(!$(e.target).closest('.jscustom-list').length && !$(e.target).is('.jscustom-list')) {
                if($(window).width() < 768) {
                    $('.jscustom-list ul').slideUp(300);
                }
            }
        });


        $(".evento-owl-carousel .item").height($(".evento-owl-carousel .item").width() * 1 / 3);

        //timeline
        if(!!$('.programa-section .timeline .col-timeline.first').length &&
            !!$('.programa-section .timeline .col-timeline.last').length) {
            var timeCtnH1 = $('.programa-section .timeline .col-timeline.first').height() / 2 + 25;
            var timeCtnH2 = $('.programa-section .timeline .col-timeline.last').height() / 2 + 25;
            var timeCtnH3 = timeCtnH1 + timeCtnH2 - 20;

            $('<style>.programa-section .timeline::after { top: ' + timeCtnH1 + 'px; height: calc(100% - ' + timeCtnH3 + 'px );}</style>').appendTo('head');
        }

    });
    $(window).resize(function () {
        // RESIZE
        setRateElement($('.imgResize-19-16'), 19, 16);
        setRateElement($('.imgResize-16-9'), 16, 9);
        setRateElement($('.imgResize-9-5'), 9, 5);
        setRateElement($('.imgResize-5-3'), 5, 3);
        setRateElement($('.imgResize-4-3'), 4, 3);
        setRateElement($('.imgResize-3-2'), 3, 2);
        setRateElement($('.imgResize-3-1'), 3, 1);
        setRateElement($('.imgResize-2-1'), 2, 1);
        setRateElement($('.imgResize-1-1'), 1, 1);

        var heightPost = $('.post-lists .post-item .imgResize-1-1').height();
        $('.post-lists .item-first .post-bg').height(heightPost);

        $(".evento-owl-carousel .item").height($(".evento-owl-carousel .item").width() * 1 / 3);

    });

    $(window).bind('scroll', function (e) {

    });
})(jQuery);
jQuery("document").ready(function(){
    var nav = jQuery('.full-header');

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 85) {
            nav.addClass("sticky");
        } else {
            nav.removeClass("sticky");
        }
    });
});

  function initMap() {
        var mapDiv = document.getElementById('map');
        if(!!mapDiv) {
            var map = new google.maps.Map(mapDiv, {
              center: {lat: 44.540, lng: -78.546},
              zoom: 8
            });
        }
      }

var $animation_elements = jQuery('.animatedParent');
var $window = jQuery(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  jQuery.each($animation_elements, function() {
    var $element = jQuery(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
      (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    } else {
      $element.removeClass('in-view');
    }
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');


