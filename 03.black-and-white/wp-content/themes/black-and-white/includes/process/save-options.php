<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

function blackwhite_save_options () {
	if (!current_user_can( 'edit_theme_options' ) && $_SERVER['REQUEST_METHOD'] != 'POST') {
		wp_die( __( 'You are not allowed to be on this page', 'blackwhite' ) );
	}

	check_admin_referer( 'blackwhite_options_verify' );

	$options = get_option( 'blackwhite_options' );

	$options['google_maps_api_key'] = sanitize_text_field($_REQUEST['google_maps_api_key']);

	update_option( 'blackwhite_options', $options );

	wp_redirect( admin_url( 'admin.php?page=blackwhite_theme_options&status=1' ) );
}
