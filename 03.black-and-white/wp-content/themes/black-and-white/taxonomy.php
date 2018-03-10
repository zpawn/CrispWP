<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

get_header();

$taxonomyName = get_query_var( 'taxonomy' );

if (blackwhite_isset_template_part( $taxonomyName, 'taxonomy' )) {
    get_template_part( 'template-parts/taxonomy/content', $taxonomyName );
} else {
    get_template_part( 'template-parts/taxonomy/content', 'taxonomy' );
}

get_footer();

?>
