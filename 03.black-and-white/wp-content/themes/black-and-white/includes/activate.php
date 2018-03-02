<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

function blackwhite_activate () {

	if ( version_compare( get_bloginfo( 'version' ), '4.9', '<' ) ) {
		wp_die( __( 'You must have a minimum version of 4.9 to use this theme', 'blackwhite' ) );
	}

	$theme_options = get_option( 'blackwhite_options' );

	if (!$theme_options) {
		$options = [
			'google_maps_api_key' => ''
		];

		add_option( 'blackwhite_options', $options );
	}
}
