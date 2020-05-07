<?php 
/* 
* Kebaby Functions and Definitions 
*
*/

    /* 
    *   enable post and pages thumbnails support 
    *   @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */ 
    add_theme_support( 'post-thumbnails' );

    function wp_register_styles() {

        $theme_version = wp_get_theme()->get( 'Version' );

        wp_enqueue_style( 'kebaby-style', get_template_directory_uri() . '/style.css', $theme_version );
    }

    add_action('wp_enqueue_scripts', 'wp_register_styles');