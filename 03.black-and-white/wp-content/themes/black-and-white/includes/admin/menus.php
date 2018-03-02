<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

function blackwhite_admin_menu () {
	add_menu_page(
		'Black & White Page Options',
		'Theme Options',
		'edit_theme_options',
		'blackwhite_theme_options',
		'blackwhite_theme_options_page'
	);
}
