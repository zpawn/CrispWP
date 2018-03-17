<?php
/**
 * @link https://github.com/zpawn/
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

function blackwhite_sidebars_init () {
	register_sidebar([
		'id' => 'blackwhite_sidebar_footer',
		'name' => 'Footer',
		'description' => 'Drag&drop here',
		'before_widget' => '<div id="%1$s" class="foot widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	]);

	register_sidebar([
		'id' => 'blackwhite_sidebar_right',
		'name' => 'Right Sidebar',
		'description' => 'Drag&Drop here',
		'before_widget' => '<div id="%1$s" class="side widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	]);
}
