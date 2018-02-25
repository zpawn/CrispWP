<?php
/**
 * Black&White functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Black&White
 */


//*** Set Up
add_theme_support( 'menus' );

//*** Includes
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/gallery/init.php' );

//*** Action & Filter Hook
add_action( 'wp_enqueue_scripts', 'blackwhite_enqueue' );
add_action( 'after_setup_theme', 'blackwhite_setup' );
add_action( 'init', 'blackwhite_init' );
