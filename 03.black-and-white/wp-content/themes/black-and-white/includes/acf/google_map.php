<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

function acf_google_map ( $api ) {

	$options = get_option( 'blackwhite_options' );

	$api['key'] = $options['google_maps_api_key'];

	return $api;
}


