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
    


    // =========== About Us ===========
    $wp_customize->add_section('mm_about_us', array(
        'title' =>__('About Us', 'mminfotech'),
        'description' => 'You can change your "About Us" section from here'
    ));

    // Section Image
    $wp_customize->add_setting('about_us_section_image', array(
        'default' => get_bloginfo('template_directory').'/img/about.jpg',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_us_section_image', array(
        'label' => 'Section Image',
        'setting' => 'about_us_section_image',
        'section' => 'mm_about_us'
    )));

    // Section Title
    $wp_customize->add_setting('about_us_section_title', array(
        'default' => 'ABOUT US',
    ));

    $wp_customize->add_control('about_us_section_title', array(
        'label' => 'Section Title',
        'setting' => 'about_us_section_title',
        'section' => 'mm_about_us',
    ));

    // Sectuib Sub Title
    $wp_customize->add_setting('about_us_section_sub_title', array(
        'default' => '#1 Digital Solution With 10 Years Of Experience',
    ));

    $wp_customize->add_control('about_us_section_sub_title', array(
        'label' => 'Section Sub Title',
        'setting' => 'about_us_section_sub_title',
        'section' => 'mm_about_us',
    ));

    // Section Paragraph 1
    $wp_customize->add_setting('about_us_section_paragraph_1', array(
        'default' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet',
    ));

    $wp_customize->add_control('about_us_section_paragraph_1', array(
        'label' => 'Section Paragraph 1',
        'setting' => 'about_us_section_paragraph_1',
        'section' => 'mm_about_us',
    ));

    // Section Paragraph 2
    $wp_customize->add_setting('about_us_section_paragraph_2', array(
        'default' => 'Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.',
    ));

    $wp_customize->add_control('about_us_section_paragraph_2', array(
        'label' => 'Section Paragraph 2',
        'setting' => 'about_us_section_paragraph_2',
        'section' => 'mm_about_us',
    ));

    // Site Owner Name
    $wp_customize->add_setting('about_us_section_owner_name', array(
        'default' => 'Jhon Doe',
    ));

    $wp_customize->add_control('about_us_section_owner_name', array(
        'label' => 'Site Owner Name',
        'setting' => 'about_us_section_owner_name',
        'section' => 'mm_about_us',
    ));

    // 2Site Owner Designation
    $wp_customize->add_setting('about_us_section_owner_designation', array(
        'default' => 'CEO & Founder',
    ));

    $wp_customize->add_control('about_us_section_owner_designation', array(
        'label' => 'Designation',
        'setting' => 'about_us_section_owner_designation',
        'section' => 'mm_about_us',
    ));

    // Button Name
    $wp_customize->add_setting('about_us_section_button_name', array(
        'default' => 'Read More',
    ));

    $wp_customize->add_control('about_us_section_button_name', array(
        'label' => 'Button Name',
        'setting' => 'about_us_section_button_name',
        'section' => 'mm_about_us',
    ));

    // Button Link
    $wp_customize->add_setting('about_us_section_button_link', array(
        'default' => 'https://facebook.com/bccshohel',
    ));

    $wp_customize->add_control('about_us_section_button_link', array(
        'label' => 'Button Link',
        'setting' => 'about_us_section_button_link',
        'section' => 'mm_about_us',
    ));
}
add_action('customize_register', 'header_area_register');








