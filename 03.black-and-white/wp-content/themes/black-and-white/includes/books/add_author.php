<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

/**
 * @param $content
 *
 * @return string
 */
function blackwhite_add_author_into_content ( $content ) {
	global $post;

	$new_content = '';

	if ($post->post_type == BOOKS_POST_TYPE) {
		$new_content .= '<p>'.
            '<strong>' .
                __( 'Author', 'blackwhite' ) .': '.
            '</strong>'.
            get_field( 'book_author', $post->ID ).
        '</p>';
	}

	$new_content .= $content;

	return $new_content;
}
