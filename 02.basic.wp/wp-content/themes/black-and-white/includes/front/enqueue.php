<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

function bw_enqueue () {

	wp_register_style( 'bw_style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'bw_style' );

	////

	wp_register_script( 'bw_bootstrap_transition', get_template_directory_uri() . '/assets/js/bootstrap-transition.js', ['jquery'], false, true );
	wp_register_script( 'bw_bootstrap_carousel', get_template_directory_uri() . '/assets/js/bootstrap-carousel.js', ['jquery'], false, true );
	wp_register_script( 'bw_js', get_template_directory_uri() . '/assets/js/js.js', ['jquery'], false, true );

	wp_enqueue_script( 'bw_bootstrap_transition' );
	wp_enqueue_script( 'bw_bootstrap_carousel' );
	wp_enqueue_script( 'bw_js' );
}
