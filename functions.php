<?php
/**
 * Theme functions and definitions
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue theme styles and scripts.
 */
function ui_theme_enqueue_assets() {
    $theme_uri = get_template_directory_uri();

    wp_enqueue_style(
        'ui-theme-components',
        $theme_uri . '/assets/css/components.css',
        array(),
        null
    );

    wp_enqueue_script(
        'ui-theme-main',
        $theme_uri . '/assets/js/main.js',
        array(),
        null,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'ui_theme_enqueue_assets' );

