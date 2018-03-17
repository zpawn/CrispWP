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

$isSidebar = is_active_sidebar( 'blackwhite_sidebar_right' );

get_header(); ?>

	<div id="primary" class="content-area <?php echo $isSidebar ? 'page-content' : '' ?>">
		<main id="main" class="site-main <?php echo $isSidebar ? 'page-content__main' : '' ?>">

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
        <?php if ( $isSidebar ) : ?>
            <div class="page-content__sidebar">
                <?php get_sidebar(); ?>
            </div>
        <?php endif; ?>
	</div><!-- #primary -->

<?php get_footer(); ?>
