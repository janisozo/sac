<?php
 
function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies ); 
}
 
function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '4.4.1', true );
}

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

function bootstrapstarter_register_menu() {
    register_nav_menu('header-menu', __('Header Menu'));
}

add_action('wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles');
add_action('wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts');
add_action('after_setup_theme', 'bootstrapstarter_wp_setup');
add_action('init', 'bootstrapstarter_register_menu');

?>