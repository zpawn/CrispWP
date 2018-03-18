<?php
/**
 * @link https://github.com/zpawn/
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

function blackwhite_ajax_books_author () {

	$response = [
		'success' => false,
		'message' => __( 'Nothing Found', 'blackwhite' )
	];

	if ( isset($_REQUEST['author']) && !empty($_REQUEST['author']) ) {

		$postIds = blackwhite_get_post_ids_by_book_author( $_REQUEST['author'] );

		if (!empty($postIds)) {
			$books = get_posts([
				'post_type' => BOOKS_POST_TYPE,
				'post__in' => $postIds
			]);

			if (!empty($books)) {
				$response['success'] = true;
				unset($response['message']);

				$response['data']['books'] = array_reduce($books, function ($books, $book) {
					$books[] = $book->post_title;
					return $books;
				}, []);
			}
		}
	}

	wp_send_json( $response );
}
