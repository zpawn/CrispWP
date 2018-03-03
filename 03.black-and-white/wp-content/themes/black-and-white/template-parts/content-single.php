<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */
?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		    <header class="entry-header">
			    <h1><?php the_title(); ?></h1>

		        <div class="post-single__posted">
		            <!--TODO: when posted-->
		            <span class="post-single__date"><?= get_the_date() ?> <?= get_the_time() ?></span>
			        <?= __( 'by', 'blackwhite' ) ?>
		            <span class="post-single__author">
			            <a href="<?= esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?= esc_html( get_the_author() )?></a>
		            </span>
		        </div><!-- .entry-meta -->
		    </header><!-- .entry-header -->

			<?php the_post_thumbnail(); ?>
			<?php the_content(); ?>

		</article><!-- #post-<?php the_ID(); ?> -->
	<?php endwhile; ?>
<?php endif; ?>
