// (function ($) {
//     "use strict";

//     // Spinner
//     var spinner = function () {
//         setTimeout(function () {
//             if ($('#spinner').length > 0) {
//                 $('#spinner').removeClass('show');
//             }
//         }, 1);
//     };
//     spinner();
    
    
//     // Initiate the wowjs
//     new WOW().init();


//     // Sticky Navbar
//     $(window).scroll(function () {
//         if ($(this).scrollTop() > 300) {
//             $('.sticky-top').addClass('shadow-sm').css('top', '0px');
//         } else {
//             $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
//         }
//     });
    
    
//     // Back to top button
//     $(window).scroll(function () {
//         if ($(this).scrollTop() > 300) {
//             $('.back-to-top').fadeIn('slow');
//         } else {
//             $('.back-to-top').fadeOut('slow');
//         }
//     });
//     $('.back-to-top').click(function () {
//         $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
//         return false;
//     });


//     // Facts counter
//     $('[data-toggle="counter-up"]').counterUp({
//         delay: 10,
//         time: 2000
//     });


//     // Skills
//     $('.skill').waypoint(function () {
//         $('.progress .progress-bar').each(function () {
//             $(this).css("width", $(this).attr("aria-valuenow") + '%');
//         });
//     }, {offset: '80%'});


//     // Project carousel
//     $(".project-carousel").owlCarousel({
//         autoplay: true,
//         smartSpeed: 1000,
//         margin: 25,
//         loop: true,
//         nav: false,
//         dots: true,
//         dotsData: true,
//         responsive: {
//             0:{
//                 items:1
//             },
//             768:{
//                 items:2
//             },
//             992:{
//                 items:3
//             },
//             1200:{
//                 items:4
//             }
//         }
//     });


//     // Testimonials carousel
//     $(".testimonial-carousel").owlCarousel({
//         autoplay: true,
//         smartSpeed: 1000,
//         margin: 25,
//         loop: true,
//         center: true,
//         dots: false,
//         nav: true,
//         navText : [
//             '<i class="bi bi-chevron-left"></i>',
//             '<i class="bi bi-chevron-right"></i>'
//         ],
//         responsive: {
//             0:{
//                 items:1
//             },
//             768:{
//                 items:2
//             },
//             992:{
//                 items:3
//             }
//         }
//     });

    
// })(jQuery);

// Navbar
jQuery(document).ready(function(){
    jQuery('.navbar .navbar-nav li').addClass('nav-item');
    jQuery('.navbar .navbar-nav .nav-item a').addClass('nav-link');
    jQuery('.menu-item-has-children').addClass('dropdown');
    jQuery('.dropdown .nav-link').addClass('dropdown-toggle');
    jQuery('.sub-menu li a').removeClass('dropdown-toggle');
    jQuery('.sub-menu').addClass('dropdown-menu');
    jQuery('.collapse.right_menu .dropdown-menu').addClass('dropdown-menu-end');
    jQuery('.dropdown-toggle').attr('data-bs-toggle', 'dropdown');
});

