<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

function ap_enqueue () {
	wp_register_style( 'ap_style', get_template_directory_uri() . '/assets/css/app.css' );
	wp_enqueue_style( 'ap_style' );

	////

	wp_register_script( 'ap_js', get_template_directory_uri() . '/assets/js/app.js', [], false, true );
	wp_enqueue_script( 'ap_js' );
}

