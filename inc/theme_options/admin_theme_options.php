<?php

function mm_add_theme_page() {
    // Main Menu
    add_menu_page( 'Theme Option for Admin', 'Theme Option', 'manage_options', 'mm_theme_option', 'mm_theme_create_page', 'dashicons-format-aside', 101 );
    // add_menu_page( $page_title:string, $menu_title:string, $capability:string, $menu_slug:string, $callback:callable, $icon_url:string, $position:integer|float|null );


    // Sub Menu
    add_submenu_page( 'mm_theme_option', 'Theme Option', 'Section Header', 'manage_options', 'mm_theme_option', 'mm_theme_create_page', );

    add_submenu_page( 'mm_theme_option', 'Theme Custom CSS', 'Custom CSS', 'manage_options', 'mm_custom_css', 'mm_theme_custom_css_page', );
    // add_submenu_page( $parent_slug:string, $page_title:string, $menu_title:string, $capability:string, $menu_slug:string, $callback:callable, $position:integer|float|null );


}
add_action('admin_menu', 'mm_add_theme_page');


// Main Menu
function mm_theme_create_page() {
    require_once('section_header.php');

};

// function mm_theme_create_page() {
//     require_once(get_template_directory().'/inc/theme_options/general.php');
// };

// Sub Menu Custom CSS
function mm_theme_custom_css_page() {
    echo "<h1>Theme Custom CSS Page</h1>";
};

// Sub Menu Call To Action
// function sub_menu_general_callable() {
//     echo "<h1>Call To Action</h1>";
// };