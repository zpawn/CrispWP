<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */
 
function blackwhite_setup () {
	register_nav_menus([
		'primary' => __( 'Primary', 'blackwhite' ),
		'footer' => __( 'Footer Menu', 'blackwhite' )
	]);
}
