<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Black&White
 */

$category_ids = wp_get_post_categories( $post->ID );

$related_posts = get_posts([
    'post__not_in' => [ $post->ID ],
    'category__in' => $category_ids,
]);

?>

<h2><?php _e( 'Related Posts', 'blackwhite' ); ?></h2>

<?php if ( !empty( $related_posts ) ) : ?>
    <ul>
        <?php foreach ($related_posts as $post) : setup_postdata( $post ); ?>
            <li>
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else : ?>
    <?php echo __( 'No Related Posts', 'blackwhite' ) ?>
<?php endif; ?>

<?php wp_reset_postdata(); ?>
