<?php
function mm_css_js_file_calling(){
    // Register CSS File
    wp_register_style('customctemplate', get_template_directory_uri().'/css/custom_template.css', array(), '1.0.0', 'all');
    wp_register_style('customcss', get_template_directory_uri().'/sass/custom.css', array(), '1.0.0', 'all');
    wp_register_style('fontawesomecss', get_template_directory_uri().'/css/fontawesome.min.css', array(), '6.5.1', 'all');
    wp_register_style('bootstrapcss', get_template_directory_uri().'/css/bootstrap.min.css', array(), '5.3.3', 'all');
    wp_register_style('animatecss', get_template_directory_uri().'/lib/animate/animate.min.css', array(), '3.5.2', 'all');
    wp_register_style('owlcarouselcss', get_template_directory_uri().'/lib/owlcarousel/assets/owl.carousel.min.css', array(), '2.2.1', 'all');
    wp_register_style('lightboxcss', get_template_directory_uri().'/lib/lightbox/css/lightbox.min.css', array(), '1.0.0', 'all');

    // Enqueue CSS File
    wp_enqueue_style('mm_style', get_stylesheet_uri());
    wp_enqueue_style('bootstrapcss');
    wp_enqueue_style('fontawesomecss');
    wp_enqueue_style('animatecss');
    wp_enqueue_style('owlcarouselcss');
    wp_enqueue_style('lightboxcss');
    wp_enqueue_style('customctemplate');
    wp_enqueue_style('customcss');



    // Register JS File
    wp_register_script('mainjs', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true');
    wp_register_script('fontawesomejs', get_template_directory_uri().'/js/fontawesome.min.js', array(), '6.5.1', 'true');
    wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array(), '5.3.3', 'true');
    wp_register_script('wow', get_template_directory_uri().'/lib/wow/wow.min.js', array(), '1.3.0', 'true');
    wp_register_script('easing', get_template_directory_uri().'/lib/easing/easing.min.js', array(), '1.0.0', 'true');
    wp_register_script('waypoints', get_template_directory_uri().'/lib/waypoints/waypoints.min.js', array(), '4.0.1', 'true');
    wp_register_script('counterup', get_template_directory_uri().'/lib/counterup/counterup.min.js', array(), '2.1.0', 'true');
    wp_register_script('owlcarouseljs', get_template_directory_uri().'/lib/owlcarousel/counterup.min.js', array(), '2.2.1', 'true');
    wp_register_script('lightboxjs', get_template_directory_uri().'/lib/lightbox/js/lightbox.min.js', array(), '2.10.0', 'true');

    // Enqueue JS File
    wp_enqueue_script('jquery');
    wp_enqueue_script('fontawesomejs');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('wow');
    wp_enqueue_script('easing');
    wp_enqueue_script('waypoints');
    wp_enqueue_script('counterup');
    wp_enqueue_script('owlcarouseljs');
    wp_enqueue_script('lightboxjs');
    wp_enqueue_script('mainjs');

}
add_action('wp_enqueue_scripts', 'mm_css_js_file_calling');