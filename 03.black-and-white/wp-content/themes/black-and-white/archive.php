<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Black&White
 */

get_header();

$post_type = get_query_var('post_type');

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="archive-description">', '</div>' );
                    ?>
                </header><!-- .page-header -->

                <div class="posts">

                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();

                        if ($post_type == 'books') {
                            get_template_part( 'template-parts/archive/content', 'books' );
                        } else {
                            /*
                             * Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', get_post_format() );
                        }

                    endwhile;

                    the_posts_navigation();
                    ?>

                </div>
            <?php else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
