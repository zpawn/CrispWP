<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

/**
 * Send email if author name update
 *
 * @param $post_ID
 */
function blackwhite_update_author ( $post_ID ) {

	$post = get_post( $post_ID );

	if ( get_post_type($post) == BOOKS_POST_TYPE && $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_REQUEST['fields']) ) {
		$acf_book_author = get_field_object( 'book_author', $post_ID );
		$old_author = $acf_book_author['value'];
		$new_author = sanitize_text_field($_REQUEST['fields'][$acf_book_author['key']]);

		if ($old_author != $new_author) {
			$author_email = get_the_author_meta( 'user_email', $post->post_author );

			wp_mail(
				$author_email,
				'Change Author Name',
				'Change Author Name from '. $old_author .' to '. $new_author
			);
		}
	}
}
