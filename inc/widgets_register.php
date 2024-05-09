
<?php

function mm_widgets_register() {
    register_sidebar(array(
        'name' => __('Footer One', 'mminfotech'),
        'id' => 'footer_1',
        'description' => 'Appears in the Footer One whatever your want.',
        'before_widget' => '<div class="child_footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer Two', 'mminfotech'),
        'id' => 'footer_2',
        'description' => 'Appears in the Footer One whatever your want.',
        'before_widget' => '<div class="child_footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer Three', 'mminfotech'),
        'id' => 'footer_3',
        'description' => 'Appears in the Footer One whatever your want.',
        'before_widget' => '<div class="child_footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer Four', 'mminfotech'),
        'id' => 'footer_4',
        'description' => 'Appears in the Footer One whatever your want.',
        'before_widget' => '<div class="child_footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'mm_widgets_register');