<?php get_header(); ?>

<!-- begin pagetitle -->
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="pagetitle">
            <div class="container">
                <div class="pagetitle__text"><?php the_title() ?></div>
            </div>
        </div>

        <div class="content">
            <div class="container">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<!-- end pagetitle -->
<!-- begin content -->
<div class="content">
    <div class="container">

        <?php get_template_part( 'template-parts/content', 'recent-posts' ); ?>
    </div>
</div>
<!-- end content -->

<?php get_footer(); ?>
