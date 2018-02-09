<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

//*** Set Up
add_theme_support( 'menus' );

//*** Includes
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );

//*** Action & Filter Hook
add_action( 'wp_enqueue_scripts', 'bw_enqueue' );
add_action( 'after_setup_theme', 'bw_setup_theme' );
