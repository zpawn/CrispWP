<?php get_header(); ?>

<!-- begin hero -->
<div class="hero">
    <div class="container">
        <div class="hero__wrap">
            <!-- begin slider -->
            <div class="slider">
                <div class="slider__next"> <?= ap_icon('arrow'); ?> </div>
                <div class="slider__prev"> <?= ap_icon('arrow'); ?> </div>
                <div class="slider__slides js-hero">

                    <?php $recent_posts = new WP_Query([
                        'posts_per_page' => 3,
                        'post_type' => 'post'
                    ]); ?>

	                <?php while ($recent_posts->have_posts()) : $recent_posts->the_post();  ?>
                        <div class="slider__slide slide" style="background: url(<?= esc_url(get_the_post_thumbnail_url(get_the_ID(),'full')); ?>)">
                            <div class="slide__content">
                                <h3 class="slide__title"><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
            </div>
            <!-- end slider -->
        </div>
    </div>
</div>
<!-- end hero -->

<!-- begin content -->
<div class="content">
    <div class="container">
        <?php get_template_part( 'template-parts/content', 'recent-posts' ); ?>
    </div>
</div>
<!-- end content -->

<?php get_footer(); ?>
