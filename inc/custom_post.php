<?php

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

      

      add_image_size('post-thumbnails', 1900, 500, true);
      
      // $file = 'post-thumbnails'; // Specify the path to your image file
      // $max_width = 1000; // Maximum width for the resized image
      // $max_height = 300; // Maximum height for the resized image
      // $crop = true; // Whether to crop the image to fit exactly within the specified dimensions (true/false)

      // // Resize the image
      // image_resize($file, $max_width, $max_height, $crop);
  }
  add_action('init', 'custom_slider');