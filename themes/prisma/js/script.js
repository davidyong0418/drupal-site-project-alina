"use strict";



//Playing with Ken Wheeler Slick carousel
$('.slider').slick({
    dots: false,
    autoplay: false,
    autoplaySpeed: 1000,
    arrows: true,
    infinite: true,
    centerMode: true,
    centerPadding: '15%',
         slidesToShow: 3,
            slidesToScroll: 3,
    speed: 980,
    responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 980,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }]
});


$('.slider').on('swipe, afterChange', function (event, slick, direction) {
    $('.slick-slide').css('opacity', '0.4').css('transform', 'scale(1)');
    $('.slick-center').css('opacity', '1').css('transform', 'scale(1.08)');
    $('.slick-center').next().css('opacity', '1').css('transform', 'scale(1.08)');
    $('.slick-center').prev().css('opacity', '1').css('transform', 'scale(1.08)');
    ;
});



// full screen side nav
$('.side-menu-button').on('click', function () {
    $('.sidenav').toggleClass("mySideBar");
    $(this).toggleClass("actives");
    $('.side-menu-button > i').toggleClass("fa-bars");
    $('.side-menu-button > i').toggleClass("fa-times");
});
$('.sidenav ul >li a').on('click', function () {
    $('.sidenav').removeClass("mySideBar");
    $('.side-menu-button').removeClass("actives");
    $('.side-menu-button > i').toggleClass("fa-bars");
    $('.side-menu-button > i').toggleClass("fa-times");
});
//scroll nav colors
$(window).on('scroll', function () {
    if ($(this).scrollTop() > 70) { // Set position from top to add class
        $('.navbar-shrink').addClass("shrink");
        $('.none_logo').addClass("none");
        $('.navbar_center_container').addClass("navbar-fixed-top");
        $('.index-yellow .navbar-brand> img').attr('src', 'images/logo-yellow-dark.png');
        $('.index-green .navbar-brand> img').attr('src', 'images/logo-green-dark.png');
        $('.index-pink .navbar-brand> img').attr('src', 'images/logo-dark.png');
        $('.navbar_active_center').removeClass("margin_top_centered");
        $('.index-pink-white .navbar-brand> img').attr('src', 'images/logo-dark.png');
        $('.index_gradient_layout  .side-menu-button').addClass("button");
        $('.index_gradient_layout  .side-menu-button').addClass("bg_before_blue");
        $('.nav_outside_button').addClass("display_after_70");
        $('.navbar_inner_button').removeClass("display_under_70");
        $('.navbar_inner_button').addClass("not_display_above_70");
        $('.page_content_navbar_1').addClass("personal_navbar");
    } else {
        $('.navbar-shrink').removeClass("shrink");
        $('.index-yellow .navbar-brand> img').attr('src', 'images/logo-yellow.png');
        $('.index-green .navbar-brand> img').attr('src', 'images/logo-green.png');
        $('.navbar_active_center').addClass("margin_top_centered");
        $('.index-pink .navbar-brand> img').attr('src', 'images/logo.png');
        $('.index-pink-white .navbar-brand> img').attr('src', 'images/logo-white.png');
        $('.none_logo').removeClass("none");
        $('.page_content_navbar_1').addClass("index_navbar_container");
        $('.index_gradient_layout  .side-menu-button').removeClass("button");
        $('.index_gradient_layout  .side-menu-button').removeClass("bg_before_blue");
        $('.nav_outside_button').removeClass("display_after_70");
        $('.navbar_inner_button').addClass("display_under_70");
        $('.page_content_navbar_1').removeClass("personal_navbar");
    }
});

//scroll sections on clicking Links

$(".scroll").on('click', function (event) {
    event.preventDefault();
    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 750);
});



