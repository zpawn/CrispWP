<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */
 
function blackwhite_acf_gallery () {
	$labels = [
		'name'                  => __( 'Gallery', 'blackwhite' ),
		'singular_name'         => __( 'Gallery', 'blackwhite' ),
		'menu_name'             => __( 'Gallery', 'blackwhite' ),
		'name_admin_bar'        => __( 'Gallery', 'blackwhite' ),
		'add_new'               => __( 'Add Image', 'blackwhite' ),
		'add_new_item'          => __( 'Add Image Gallery', 'blackwhite' ),
		'new_item'              => __( 'New Image', 'blackwhite' ),
		'edit_item'             => __( 'Edit Image', 'blackwhite' ),
		'view_item'             => __( 'View Image', 'blackwhite' ),
		'all_items'             => __( 'All Image', 'blackwhite' ),
		'search_items'          => __( 'Search Images', 'blackwhite' ),
		'parent_item_colon'     => __( 'Parent Image:', 'blackwhite' ),
		'not_found'             => __( 'Not Image found.', 'blackwhite' ),
		'not_found_in_trash'    => __( 'Not Image Found in Trash', 'blackwhite' ),
	];
	$args = [
		'labels'                => $labels,
		'description'           => __( 'A custom post type for Gallery.', 'blackwhite' ),
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'query_var'             => true,
		'rewrite'               => ['slug' => 'gallery'],
		'capability_type'       => 'post',
		'has_archive'           => true,
		'hierarchical'          => false,
		'menu_position'         => 20,
		'supports'              => [ 'title', 'editor' ]
	];
	register_post_type( 'gallery', $args );
}
