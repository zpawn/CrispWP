<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

/**
 * Check isset template parts or not
 *
 * @param string $slug
 * @param string $type
 *
 * @return bool
 */
function blackwhite_isset_template_part ($slug = '', $type = '') {

	if ( empty( $name ) && empty( $type ) ) {
		return false;
	}

	$template_path = TEMPLATEPATH . "/template-parts/{$type}/content-{$slug}.php";

	if ( ! file_exists( $template_path ) ) {
		return false;
	}

	return true;
}

/**
 * Prints any data like a print_r function
 * @param mixed ... Any data to be printed
 */
function blackwhite_debug () {
	static $count = 0;
	$args = func_get_args();
	$prefix = '<ol style="font-family: Courier; font-size: 12px; border: 1px solid #dedede; background-color: #efefef; float: left; padding-right: 20px;">';
	$suffix = '</ol><div style="clear:left;"></div>';
	if (!empty($args)) {
		echo $prefix;
		foreach ($args as $k => $v) {
			echo '<li><pre>' . htmlspecialchars(print_r($v, true)) . "\n" . '</pre></li>';
		}
		echo $suffix;
	}
	$count++;
}
