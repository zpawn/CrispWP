<?php
/**
 * @link https://github.com/zpawn/
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

require( TEMPLATEPATH . '/includes/widgets/authors.php' );
require( TEMPLATEPATH . '/includes/widgets/three-last-posts.php');

function blackwhite_widgets_init () {

	add_action( 'widgets_init', 'blackwhite_remove_default_widget', 20 );

	register_widget( 'Blackwhite_Authors_Widget' );
	register_widget( 'Blackwhite_Three_Last_Post_Widget' );
}

function blackwhite_remove_default_widget () {
	unregister_widget('WP_Widget_Archives');
	unregister_widget('WP_Widget_Calendar');
	unregister_widget('WP_Widget_Categories');
	unregister_widget('WP_Widget_Meta');
	unregister_widget('WP_Widget_Pages');
	unregister_widget('WP_Widget_Recent_Comments');
	unregister_widget('WP_Widget_Recent_Posts');
	unregister_widget('WP_Widget_RSS');
	unregister_widget('WP_Widget_Search');
	unregister_widget('WP_Widget_Tag_Cloud');
	unregister_widget('WP_Widget_Text');
	unregister_widget('WP_Widget_Media_Gallery');
	unregister_widget('WP_Widget_Media_Image');
	unregister_widget('WP_Widget_Media_Audio');
	unregister_widget('WP_Widget_Media_Video');
	unregister_widget('WP_Nav_Menu_Widget');
}
