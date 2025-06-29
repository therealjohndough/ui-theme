<?php
function uikit_theme_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'uikit_theme_setup' );

function uikit_theme_scripts() {
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style( 'uikit-components', get_template_directory_uri() . '/assets/css/components.css', array(), $theme_version );
    wp_enqueue_script( 'uikit-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'uikit_theme_scripts' );

