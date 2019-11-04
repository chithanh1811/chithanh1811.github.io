<?php

function load_stylesheets() {
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css', array(), false, 'all');
    wp_enqueue_style('fontawesome');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_scripts(){
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', '', false, 'all');
    wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/6dac3b2e75.js', '', false, 'all');
}
add_action('wp_enqueue_scripts', 'load_scripts');

function load_js(){
    wp_register_script( 'customjs', get_template_directory_uri() . '/js/script.js', array(), '', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');
register_nav_menus( 
	array(
		'top-menu' => __('Top Menu', 'theme'),
		'footer-menu' => __('Footer Menu', 'theme')
	)
);

add_theme_support('post-thumbnails');