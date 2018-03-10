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
require( TEMPLATEPATH . '/includes/helper.php' );
require( TEMPLATEPATH . '/includes/front/enqueue.php' );
require( TEMPLATEPATH . '/includes/setup.php' );
require( TEMPLATEPATH . '/includes/acf/gallery.php' );
require( TEMPLATEPATH . '/includes/acf/google_map.php' );
require( TEMPLATEPATH . '/includes/activate.php' );
require( TEMPLATEPATH . '/includes/admin/menus.php' );
require( TEMPLATEPATH . '/includes/admin/options-page.php' );
require( TEMPLATEPATH . '/includes/admin/init.php' );
require( TEMPLATEPATH . '/includes/books/init.php' );

//*** Action & Filter Hook
add_action( 'wp_enqueue_scripts', 'blackwhite_enqueue' );
add_action( 'after_setup_theme', 'blackwhite_setup' );
add_action( 'init', 'blackwhite_acf_gallery' );
add_action( 'after_switch_theme', 'blackwhite_activate' );
add_action( 'admin_menu', 'blackwhite_admin_menu' );
add_filter( 'acf/fields/google_map/api', 'acf_google_map' );
add_action( 'init', 'blackwhite_book_init' );
