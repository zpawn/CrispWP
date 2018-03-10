<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

$termSlug = get_query_var( 'term' );
$taxonomyName = get_query_var( 'taxonomy' );

$term = get_term_by( 'slug', $termSlug, $taxonomyName );

$posts = query_posts([
		'post_type' => BOOKS_POST_TYPE,
		'numberposts' => -1,
		'tax_query' => [
            [
				'taxonomy' => $taxonomyName,
				'field' => 'term_id',
				'terms' => $term->term_id,
			]
		]
]);

?>

<h1><?php _e( 'Taxonomy Year', 'blackwhite' ); ?></h1>


<div class="posts">
    <?php if (have_posts()) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
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

        <?php wp_reset_query(); ?>
    <?php endif; ?>
</div>
