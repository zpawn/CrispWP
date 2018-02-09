<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

//*** Set Up

//*** Includes
include( get_template_directory() . '/includes/front/enqueue.php' );

//*** Action & Filter Hook
add_action( 'wp_enqueue_scripts', 'bw_enqueue' );
