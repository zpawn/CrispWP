<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

function blackwhite_create_taxonomy () {

	$labels = [
		'name'              => __( 'Year', 'blackwhite' ),
		'singular_name'     => __( 'Year', 'blackwhite' ),
		'search_items'      => __( 'Search Year', 'blackwhite' ),
		'all_items'         => __( 'All Year', 'blackwhite' ),
		'parent_item'       => __( 'Parent Year', 'blackwhite' ),
		'parent_item_colon' => __( 'Parent Year:', 'blackwhite' ),
		'edit_item'         => __( 'Edit Year', 'blackwhite' ),
		'update_item'       => __( 'Update Year', 'blackwhite' ),
		'add_new_item'      => __( 'Add New Year', 'blackwhite' ),
		'new_item_name'     => __( 'New Year Name', 'blackwhite' ),
		'menu_name'         => __( 'Year', 'blackwhite' ),
	];

	$args = [
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'year' ),
	];

	register_taxonomy( 'year', ['post'], $args );
}


