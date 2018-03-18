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
require( TEMPLATEPATH . '/includes/sidebars.php' );
require( TEMPLATEPATH . '/includes/widgets.php' );
require( TEMPLATEPATH . '/includes/process/books_author.php' );

//*** Action & Filter Hook
add_action( 'wp_enqueue_scripts', 'blackwhite_enqueue', 99 );
add_action( 'after_setup_theme', 'blackwhite_setup' );
add_action( 'init', 'blackwhite_acf_gallery' );
add_action( 'after_switch_theme', 'blackwhite_activate' );
add_action( 'admin_menu', 'blackwhite_admin_menu' );
add_filter( 'acf/fields/google_map/api', 'acf_google_map' );
add_action( 'widgets_init', 'blackwhite_widgets_init' );
add_action( 'widgets_init', 'blackwhite_sidebars_init' );

if ( wp_doing_ajax() ) {
	add_action( 'wp_ajax_author_books', 'blackwhite_ajax_books_author' );
	add_action( 'wp_ajax_nopriv_author_books', 'blackwhite_ajax_books_author' );
}
