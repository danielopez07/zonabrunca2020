<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'twentytwenty'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'font_awesome' );
function font_awesome() {
  wp_enqueue_style ( 'font_awesome', get_stylesheet_directory_uri() . '/vendor/font-awesome-4.7.0/css/font-awesome.min.css' );
}

// load_theme_textdomain( 'zonabrunca2020' );
add_action( 'after_setup_theme', 'brunca_load_theme_textdomain' );
function brunca_load_theme_textdomain() {
  load_theme_textdomain( 'zonabrunca2020', get_stylesheet_directory() . '/lang' );
}

// load slick carousel
add_action( 'wp_enqueue_scripts', 'slick_carousel' );
function slick_carousel() {
  wp_enqueue_script( 'embla-carousel-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), false, true );
  wp_enqueue_style( 'embla-carousel-css-1', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), false, 'all' );
  wp_enqueue_style( 'embla-carousel-css-2', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), false, 'all' );
}
