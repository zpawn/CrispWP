<?php get_header(); ?>

<!-- Main Content -->
<main class="main">
    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : ?>
            <?php the_post(); ?>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <div><?php the_excerpt(); ?></div>

        <?php endwhile; ?>

        <hr>

        <?php
            the_posts_pagination([
                'prev_text' => '<span class="screen-reader-text">' . __( 'Previous page', 'bw' ) . '</span>',
                'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'bw' ) . '</span>',
                'before_page_number' => '<span class="meta-nav screen-reader-text"></span>',
            ]);
            ?>

    <?php endif; ?>
</main>

<?php get_footer(); ?>
