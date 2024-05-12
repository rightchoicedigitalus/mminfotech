<?php

// Custom Slider
function custom_slider(){
    register_post_type ('slider',
      array(
        'labels' => array(
          'name' => ('Slider'),
          'singular_name' => ('Slider'),
          'add_new' => ('Add New Slider'),
          'add_new_item' => ('Add New Slider'),
          'edit_item' => ('Edit Slider'),
          'new_item' => ('New Slider'),
          'view_item' => ('View Slider'),
          'not_found' => ('Sorry, we cound\'n find the Slider you are looking for.'),
        ),
        'menu_icon' => 'dashicons-format-gallery',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 6, 
        'has_archive' => true,
        'hierarchial' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slag' => 'slider'),
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        )
      );
      add_theme_support('post-thumbnails');

  }
  add_action('init', 'custom_slider');


// Custom Services
function custom_service(){
  register_post_type ('service',
    array(
      'labels' => array(
        'name' => ('Services'),
        'singular_name' => ('Service'),
        'add_new' => ('Add New Service'),
        'add_new_item' => ('Add New Service'),
        'edit_item' => ('Edit Service'),
        'new_item' => ('New Service'),
        'view_item' => ('View Service'),
        'not_found' => ('Sorry, we cound\'n find the Service you are looking for.'),
      ),
      'menu_icon' => 'dashicons-category',
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => true,
      'menu_position' => 8, 
      'has_archive' => true,
      'hierarchial' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'rewrite' => array('slag' => 'service'),
      'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
      )
    );
    add_theme_support('post-thumbnails');

}
add_action('init', 'custom_service');


// Custom Skills
function custom_skills(){
  register_post_type ('skills',
    array(
      'labels' => array(
        'name' => ('skills'),
        'singular_name' => ('Skill'),
        'add_new' => ('Add New Skill'),
        'add_new_item' => ('Add New Skill'),
        'edit_item' => ('Edit Skill'),
        'new_item' => ('New Skill'),
        'view_item' => ('View Skill'),
        'not_found' => ('Sorry, we cound\'n find the Skill you are looking for.'),
      ),
      'menu_icon' => 'dashicons-image-filter',
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => true,
      'menu_position' => 11, 
      'has_archive' => true,
      'hierarchial' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'rewrite' => array('slag' => 'skill'),
      'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
      )
    );
    add_theme_support('post-thumbnails');

}
add_action('init', 'custom_skills');