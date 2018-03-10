<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Black&White
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
                while ( have_posts() ) {
                    the_post();

                    if ( blackwhite_isset_template_part( $post->post_name, 'page' ) ) {
                        get_template_part( 'template-parts/page/content', $post->post_name );
                    } else {
                        get_template_part( 'template-parts/page/content', 'page' );
                    }
                }
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
