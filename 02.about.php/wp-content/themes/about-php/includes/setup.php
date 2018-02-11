<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */
 
function ap_setup_theme () {
	register_nav_menu( 'primary', __('Primary Menu', 'ap') );
}
