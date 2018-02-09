<?php get_header(); ?>

<!-- Main Content -->
<main class="main">
    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : ?>
            <?php the_post(); ?>

            <h2><?php the_title(); ?></h2>

            <div><?php the_content(); ?></div>

        <?php endwhile; ?>

    <?php endif; ?>
</main>

<?php get_footer(); ?>

