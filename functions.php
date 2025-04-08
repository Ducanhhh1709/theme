<?php
// Ensure WordPress functions are loaded
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Enqueue styles
function mytheme_enqueue_styles() {
    if (function_exists('wp_enqueue_style')) { // Ensure the function exists
        if (defined('ABSPATH')) {
            if (defined('ABSPATH')) {
                wp_enqueue_style('main-style', get_stylesheet_uri());
            } else {
                error_log('Error: WordPress environment is not properly loaded.');
            }
        } else {
            error_log('Error: WordPress environment is not properly loaded.');
        }
    } else {
        error_log('Error: wp_enqueue_style function is undefined.');
    }
}
if (defined('ABSPATH') && function_exists('add_action')) {
    if (defined('ABSPATH')) {
        add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
    } else {
        error_log('Error: WordPress environment is not properly loaded.');
    }
} else {
    error_log('Error: WordPress environment is not properly loaded or add_action function is undefined.');
}

// Register widget areas
function mytheme_widgets_init() {
    if (function_exists('register_sidebar')) { // Ensure the function exists
        register_sidebar(array(
            'name'          => 'Main Sidebar',
            'id'            => 'main-sidebar',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
        ));
    } else {
        error_log('Error: register_sidebar function is undefined.');
    }
}
if (defined('ABSPATH') && function_exists('add_action')) {
    add_action('widgets_init', 'mytheme_widgets_init');
} else {
    error_log('Error: WordPress environment is not properly loaded or add_action function is undefined.');
}

// Register navigation menus
function mytheme_register_menus() {
    if (function_exists('register_nav_menus')) { // Ensure the function exists
        register_nav_menus(array(
            'main-menu' => 'Menu Chính',
        ));
    } else {
        error_log('Error: register_nav_menus function is undefined.');
    }
}
if (defined('ABSPATH') && function_exists('add_action')) {
    if (defined('ABSPATH') && function_exists('add_action')) {
        add_action('after_setup_theme', 'mytheme_register_menus');
    } else {
        error_log('Error: WordPress environment is not properly loaded or add_action function is undefined.');
    }
} else {
    error_log('Error: WordPress environment is not properly loaded or add_action function is undefined.');
}