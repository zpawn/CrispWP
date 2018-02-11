<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

//*** Set Up
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

//*** Includes
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );

//*** Action & Filter Hook
add_action( 'wp_enqueue_scripts', 'ap_enqueue' );
add_action( 'after_setup_theme', 'ap_setup_theme' );

//*** Helper FUnctions
function ap_icon ($icon) {
	return '<svg class="icon icon-'. $icon .'"><use xlink:href="'. get_template_directory_uri() .'/assets/img/sprite.svg#icon-'. $icon .'"></use></svg>';
}