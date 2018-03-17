<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Black&White
 */


if ($post->post_type == 'page') {
	get_template_part( 'template-parts/sidebar/content', 'page' );
} else {
    get_template_part( 'template-parts/sidebar/content', 'single' );
}
