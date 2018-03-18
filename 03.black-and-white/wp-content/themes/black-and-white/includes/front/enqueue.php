<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */
 
function blackwhite_enqueue () {
	wp_enqueue_style( 'blackwhite-style', get_stylesheet_uri() );
	wp_enqueue_style( 'blackwhite-web-ui-popover', get_template_directory_uri() . '/assets/css/jquery.webui-popover.css' );

	wp_enqueue_script( 'blackwhite-jquery', get_template_directory_uri() . '/assets/js/jquery.js', [], '1.7.1', true );
	wp_enqueue_script( 'blackwhite-bootstrap-transition', get_template_directory_uri() . '/assets/js/bootstrap-transition.js', [ 'blackwhite-jquery' ], '3', true);
	wp_enqueue_script( 'blackwhite-bootstrap-carousel', get_template_directory_uri() . '/assets/js/bootstrap-carousel.js', [ 'blackwhite-jquery', 'blackwhite-bootstrap-transition' ], '3', true );
	wp_enqueue_script( 'blackwhite-web-ui-popover', get_template_directory_uri() . '/assets/js/jquery.webui-popover.js', [ 'blackwhite-jquery' ], '1.2.18', true );
	wp_enqueue_script( 'blackwhite-app-map', get_template_directory_uri() . '/assets/js/map.js', [ 'blackwhite-jquery' ], '1.0', true );
	wp_enqueue_script( 'blackwhite-app', get_template_directory_uri() . '/assets/js/app.js', [ 'blackwhite-jquery', 'blackwhite-web-ui-popover' ], '1.0', true );
}
