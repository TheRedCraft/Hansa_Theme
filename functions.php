<?php

function enqueue_styles() //CSS Datei einbinden
{
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}

add_filter('acf/settings/remove_wp_meta_box', '__return_false');

add_action("wp_enqueue_scripts", "enqueue_styles");

function custom_post_type_archive( $query ) {
}
add_action( 'pre_get_posts', 'custom_post_type_archive' );

/*
function make_nav_menu()
{
    register_nav_menus( array(
        'primary' => __('Primary Menu', 'text_domain')
    ));
    }
add_action('wp_enqueue_scripts', 'load_style', 'make_nav_menu');
*/

function setup_theme() { //Nav Menüs registrieren / einbinden
    register_nav_menus(array(
        'header-menu' => 'Header Menü',
        'footer-menu' => 'Footer Menü'
    ));
}
add_action('after_setup_theme', "setup_theme");

add_theme_support( 'post-thumbnails' ); //Post thumbnails möglichmachen / einbinden

add_theme_support( 'menus' ); //Menü support einbinden / aktivieren
