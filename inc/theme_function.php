<?php
function header_area_register($wp_customize){

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
    
}
add_action('customize_register', 'header_area_register');