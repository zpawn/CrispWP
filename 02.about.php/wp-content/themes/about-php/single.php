<?php get_header(); ?>

<!-- begin pagetitle -->
<div class="pagetitle">
    <div class="container">
        <div class="pagetitle__text"><?php the_title() ?></div>
    </div>
</div>
<!-- end pagetitle -->

<!-- begin content -->
<div class="content">
    <div class="container">

	    <?php if ( have_posts() ) : ?>
		    <?php while (have_posts()) : the_post(); ?>
            <!-- begin article -->
            <div class="article">
	            <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
            </div>
            <!-- end article -->
            <?php endwhile; ?>
		<?php endif; ?>

	    <?php get_template_part( 'template-parts/content', 'recent-posts' ); ?>
    </div>
</div>
<!-- end content -->

<?php get_footer(); ?>
