<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

query_posts([
	'posts_per_page' => 5,
	'paged' => $paged,
	'orderby' => 'date',
	'order' => 'DESC'
]);
?>

<div class="main">
    <h1>What we do</h1>
    <p>Lorem ipsum dolor sit amet, <a href="#" title="link">consectetur adipisicing elit</a>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in <b title="bold">reprehenderit in voluptate velit</b> esse cillum dolore eu fugiat nulla pariatur. <i title="italic">Excepteur sint occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt.</p>
    <blockquote title="blockquote">Duis aute irure dolor in reprehenderit in voluptate velit esse</blockquote>

    <p>
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/img1.jpg">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/img2.jpg">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/img3.jpg">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/img4.jpg">
    </p>

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

        <nav class="pagination">
	        <?php
            global $wp_query;
            $big = 999999999; // need an unlikely integer

            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages,
                'type' => 'list'
            ) );
            ?>
        </nav>

        <?php wp_reset_query(); ?>
    <?php else: ?>
        <?php _e( 'No Posts!!!', 'blackwhite' ) ?>
    <?php endif; ?>
</div>
