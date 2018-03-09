<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

function blackwhite_book_init () {
	$taxonomyArgs = [
		'labels'                => [
			'name'                       => __( 'Year', 'twentyfifteen' ),
			'singular_name'              => __( 'Year', 'twentyfifteen' ),
			'search_items'               => __( 'Search Year', 'twentyfifteen' ),
			'all_items'                  => __( 'All Years', 'twentyfifteen' ),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => __( 'Edit Year', 'twentyfifteen' ),
			'update_item'                => __( 'Update Year', 'twentyfifteen' ),
			'add_new_item'               => __( 'Add New Year', 'twentyfifteen' ),
			'new_item_name'              => __( 'New Year', 'twentyfifteen' ),
			'separate_items_with_commas' => __( 'Separate year with commas', 'twentyfifteen' ),
			'add_or_remove_items'        => __( 'Add or remove year', 'twentyfifteen' ),
			'choose_from_most_used'      => __( 'Choose from the most used year', 'twentyfifteen' ),
			'not_found'                  => __( 'No years found.', 'twentyfifteen' ),
			'menu_name'                  => __( 'Years', 'twentyfifteen' ),
		],
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
//		'rewrite'               => array( 'slug' => 'year' ),
		'rewrite'               => false,
		'hierarchical'          => false
	];
	$postTypeArgs = array(
		'labels'                => [
			'name'               => __( 'Books', 'twentyfifteen' ),
			'singular_name'      => __( 'Book', 'twentyfifteen' ),
			'menu_name'          => __( 'Books', 'twentyfifteen' ),
			'name_admin_bar'     => __( 'Book', 'twentyfifteen' ),
			'add_new'            => __( 'Add New', 'twentyfifteen' ),
			'add_new_item'       => __( 'Add New Book', 'twentyfifteen' ),
			'new_item'           => __( 'New Book', 'twentyfifteen' ),
			'edit_item'          => __( 'Edit Book', 'twentyfifteen' ),
			'view_item'          => __( 'View Book', 'twentyfifteen' ),
			'all_items'          => __( 'All Books', 'twentyfifteen' ),
			'search_items'       => __( 'Search Books', 'twentyfifteen' ),
			'parent_item_colon'  => __( 'Parent Books:', 'twentyfifteen' ),
			'not_found'          => __( 'No books found.', 'twentyfifteen' ),
			'not_found_in_trash' => __( 'No books found in Trash.', 'twentyfifteen' )
		],
		'description'           => __( 'Description the Books.', 'twentyfifteen' ),
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_nav_menus'     => true,
		'query_var'             => true,
		'rewrite'               => [ 'slug' => 'books' ],
		'capability_type'       => 'post',
		'has_archive'           => true,
		'hierarchical'          => false,
		'menu_position'         => 20,
		'supports'              => [ 'title', 'editor', 'author', 'thumbnail', 'comments' ],
		'menu_icon'             => 'dashicons-editor-bold',
		'taxonomies'            => [ 'year' ]
	);
	register_taxonomy( 'year', [ 'books' ], $taxonomyArgs );
	register_post_type( 'books', $postTypeArgs );
}
