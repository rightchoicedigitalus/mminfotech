<?php

// Default Teheme Function
include_once('inc/default.php');

// Theme CSS and jQuery File Calling
include_once('inc/enqueque.php');

// Custom Post
include_once('inc/custom_post.php');

// Theme Function
include_once('inc/theme_function.php');

// Register Nav Menu
register_nav_menu('primary', __('Primary Menu', 'mminfotech'));