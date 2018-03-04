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

get_header();

global $post;
$post_slug = $post->post_name;
$template_path = TEMPLATEPATH ."/template-parts/content-{$post_slug}.php"

?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
                while ( have_posts() ) {
                    the_post();

                    if ( file_exists($template_path) ) {
                        get_template_part( 'template-parts/content', $post_slug );
                    } else {
                        get_template_part( 'template-parts/content', 'page' );
                    }
                }
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
