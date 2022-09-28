<?php

function enqueue_styles()
{
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}

add_action("wp_enqueue_scripts", "enqueue_styles");

/*
function make_nav_menu()
{
    register_nav_menus( array(
        'primary' => __('Primary Menu', 'text_domain')
    ));
    }
add_action('wp_enqueue_scripts', 'load_style', 'make_nav_menu');
*/
function setup_theme() {
    register_nav_menus(array(
        'header-menu' => 'Header Menü',
        'footer-menu' => 'Footer Menü'
    ));
}
add_action('after_setup_theme', "setup_theme");

add_theme_support( 'post-thumbnails' );