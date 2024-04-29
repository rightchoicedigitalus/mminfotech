<?php
function header_area_register($wp_customize){

    // =========== Header Area ===========
    $wp_customize->add_section('mm_header_area', array(
        'title' =>__('Header Area', 'mminfotech'),
        'description' => 'You can change your Header from here'
    ));

    // Header Logo
    $wp_customize->add_setting('header_logo', array(
        'default' => get_bloginfo('template_directory').'/img/mylogo1.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
        'label' => 'Site Logo',
        'setting' => 'header_logo',
        'section' => 'mm_header_area'
    )));

    // Menu Position
    $wp_customize->add_section('menu_position', array(
        'title' =>__('Menu Position', 'mminfotech'),
        'description' => 'You can change menu position from here'
    ));

    $wp_customize->add_setting('menu_position_change', array(
        'default' => 'right_menu',
    ));

    $wp_customize->add_control('menu_position_change', array(
        'label' => 'Menu Position',
        'setting' => 'menu_position_change',
        'section' => 'menu_position',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        ),
    ));

    // =========== Call To Action ===========
    $wp_customize->add_section('mm_call_to_action', array(
        'title' =>__('Call To Action', 'mminfotech'),
        'description' => 'You can change your phone number from here'
    ));

    // Phone Number
    $wp_customize->add_setting('mm_phone', array(
        'default' => '01942034788',
    ));

    $wp_customize->add_control('mm_phone', array(
        'label' => 'Phone Number',
        'setting' => 'mm_phone',
        'section' => 'mm_call_to_action',
    ));

    // Email
    $wp_customize->add_setting('mm_email', array(
        'default' => 'support@mminfotech.com',
    ));

    $wp_customize->add_control('mm_email', array(
        'label' => 'Email',
        'setting' => 'mm_email',
        'section' => 'mm_call_to_action',
    ));

    // Address
    $wp_customize->add_setting('mm_address', array(
        'default' => '106, West Baniakhamar, Khulna, Bangladesh',
    ));

    $wp_customize->add_control('mm_address', array(
        'label' => 'Address',
        'setting' => 'mm_address',
        'section' => 'mm_call_to_action',
    ));

    // Facebook Link
    $wp_customize->add_setting('mm_facebook', array(
        'default' => 'https://facebook.com/bccshohel',
    ));

    $wp_customize->add_control('mm_facebook', array(
        'label' => 'Facebook Link',
        'setting' => 'mm_facebook',
        'section' => 'mm_call_to_action',
    ));

    // Instagram Link
    $wp_customize->add_setting('mm_instagram', array(
        'default' => 'https://facebook.com/bccshohel',
    ));

    $wp_customize->add_control('mm_instagram', array(
        'label' => 'Instagram Link',
        'setting' => 'mm_instagram',
        'section' => 'mm_call_to_action',
    ));

    // LinkedIn Link
    $wp_customize->add_setting('mm_linkedin', array(
        'default' => 'https://facebook.com/bccshohel',
    ));

    $wp_customize->add_control('mm_linkedin', array(
        'label' => 'LinkedIn Link',
        'setting' => 'mm_linkedin',
        'section' => 'mm_call_to_action',
    ));

    // Twitter Link
    $wp_customize->add_setting('mm_twitter', array(
        'default' => 'https://facebook.com/bccshohel',
    ));

    $wp_customize->add_control('mm_twitter', array(
        'label' => 'Twitter Link',
        'setting' => 'mm_twitter',
        'section' => 'mm_call_to_action',
    ));

    // =========== Counter Up ===========
    $wp_customize->add_section('mm_counter_up', array(
        'title' =>__('Counter Up', 'mminfotech'),
        'description' => 'You can change your counter value from here'
    ));

    // Experience
    $wp_customize->add_setting('mm_experience', array(
        'default' => '1234',
    ));

    $wp_customize->add_control('mm_experience', array(
        'label' => 'Years of Experience',
        'setting' => 'mm_experience',
        'section' => 'mm_counter_up',
    ));

    // Team Members
    $wp_customize->add_setting('mm_team_members', array(
        'default' => '1234',
    ));

    $wp_customize->add_control('mm_team_members', array(
        'label' => 'Team Members',
        'setting' => 'mm_team_members',
        'section' => 'mm_counter_up',
    ));

    // Satisfied Clients
    $wp_customize->add_setting('mm_clients', array(
        'default' => '1234',
    ));

    $wp_customize->add_control('mm_clients', array(
        'label' => 'Satisfied Clients',
        'setting' => 'mm_clients',
        'section' => 'mm_counter_up',
    ));

    // Projects Done
    $wp_customize->add_setting('mm_projects_done', array(
        'default' => '1234',
    ));

    $wp_customize->add_control('mm_projects_done', array(
        'label' => 'Projects Done',
        'setting' => 'mm_projects_done',
        'section' => 'mm_counter_up',
    ));
    
}
add_action('customize_register', 'header_area_register');