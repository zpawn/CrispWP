<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

include( get_template_directory() . '/includes/process/save-options.php' );

add_action( 'admin_post_blackwhite_save_options', 'blackwhite_save_options' );
