<?php
function ui_theme_assets() {
    wp_enqueue_style('ui-components', get_template_directory_uri() . '/assets/css/components.css');
    wp_enqueue_script('ui-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'ui_theme_assets');
