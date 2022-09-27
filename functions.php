<?php

function load_style()
{
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}

function make_nav_menu()
{
    register_nav_menus( array(
        'primary' => __('Primary Menu', 'text_domain')
    ));
    }
add_action('wp_enqueue_scripts', 'load_style', 'make_nav_menu');