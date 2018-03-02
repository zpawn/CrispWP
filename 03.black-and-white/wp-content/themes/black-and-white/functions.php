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
include( get_template_directory() . '/includes/acf/gallery.php' );
include( get_template_directory() . '/includes/acf/google_map.php' );
include( get_template_directory() . '/includes/activate.php' );
include( get_template_directory() . '/includes/admin/menus.php' );
include( get_template_directory() . '/includes/admin/options-page.php' );
include( get_template_directory() . '/includes/admin/init.php' );

//*** Action & Filter Hook
add_action( 'wp_enqueue_scripts', 'blackwhite_enqueue' );
add_action( 'after_setup_theme', 'blackwhite_setup' );
add_action( 'init', 'blackwhite_acf_gallery' );
add_action( 'after_switch_theme', 'blackwhite_activate' );
add_action( 'admin_menu', 'blackwhite_admin_menu' );
add_filter( 'acf/fields/google_map/api', 'acf_google_map' );
