<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

//*** Includes
require( TEMPLATEPATH . '/includes/books/taxonomy.php' );
require( TEMPLATEPATH . '/includes/books/add_author.php' );

//*** Action & Filter Hook
add_action( 'init', 'blackwhite_register_post_type_taxonomy' );
add_filter( 'the_content', 'blackwhite_add_author_into_content' );

