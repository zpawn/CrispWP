<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */
get_header(); ?>

<h1><?= __( 'Taxonomy Year', 'blackwhite' ); ?></h1>

<?php if (have_posts()) : ?>
    <div class="posts">
		<?php while (have_posts()) : the_post(); ?>
            <div class="post">
                <h2 class="post-title">
                    <a class="post-title__link" href="<?php the_permalink() ?>"><?php the_title() ?></a>
                </h2>
                <div class="post-content">
					<?php the_post_thumbnail() ?>
					<?php the_excerpt(); ?>
                </div>
            </div>
		<?php endwhile; ?>
    </div>

	<?php wp_reset_query(); ?>
<?php else: ?>
	<?= __( 'No Posts!!!', 'blackwhite' ) ?>
<?php endif; ?>

<?php get_footer(); ?>