<?php get_header(); ?>

<!-- Main Content -->
<main class="main">
	<?php while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

		<?php the_content(); ?>

	<?php endwhile; ?>
</main>

<?php get_footer(); ?>
