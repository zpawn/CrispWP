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
        <div class="thumbs">
            <ul>
                <li><a href="#" style="background: url(img/thumb.jpg)"></a></li>
                <li><a href="#" style="background: url(img/thumb.jpg)"></a></li>
                <li><a href="#" style="background: url(img/thumb.jpg)"></a></li>
                <li><a href="#" style="background: url(img/thumb.jpg)"></a></li>
                <li><a href="#" style="background: url(img/thumb.jpg)"></a></li>
                <li><a href="#" style="background: url(img/thumb.jpg)"></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- end hero -->

<!-- begin content -->
<div class="content">
    <div class="container">
        <!-- begin features -->
        <div class="features">
            <!-- begin feature -->
            <div class="feature">
                <div class="feature__title">
                    <div class="feature__icon"> <?= ap_icon('cog'); ?> </div>
                    <h2>Check out my latest portfolio items</h2>
                </div>
                <div class="feature__text">
                    <p>Maecenas ipsum metus, semper hendrerit varius mattis, congue sit amet tellus. Aliquam ullamcorper dui sed magna posue re ut elementum enim rutrum. Nam mi erat, porta id ultrices nec, pellentesque vel nunc. Cras varius fermentum iaculis.
                        Aenean sodales nibh non lectus tempor a interdum justo ultricies.</p>
                </div> <a href="#" class="feature__more button">More</a> </div>
            <!-- end feature -->
            <!-- begin feature -->
            <div class="feature">
                <div class="feature__title">
                    <div class="feature__icon"> <?= ap_icon('check'); ?> </div>
                    <h2>Check out my latest portfolio items</h2>
                </div>
                <div class="feature__text">
                    <p>Maecenas ipsum metus, semper hendrerit varius mattis, congue sit amet tellus. Aliquam ullamcorper dui sed magna posue re ut elementum enim rutrum. Nam mi erat, porta id ultrices nec, pellentesque vel nunc. Cras varius fermentum iaculis.
                        Aenean sodales nibh non lectus tempor a interdum justo ultricies.</p>
                </div> <a href="#" class="feature__more button">More</a> </div>
            <!-- end feature -->
            <!-- begin feature -->
            <div class="feature">
                <div class="feature__title">
                    <div class="feature__icon"> <?= ap_icon('user'); ?> </div>
                    <h2>Check out my latest portfolio items</h2>
                </div>
                <div class="feature__text">
                    <p>Maecenas ipsum metus, semper hendrerit varius mattis, congue sit amet tellus. Aliquam ullamcorper dui sed magna posue re ut elementum enim rutrum. Nam mi erat, porta id ultrices nec, pellentesque vel nunc. Cras varius fermentum iaculis.
                        Aenean sodales nibh non lectus tempor a interdum justo ultricies.</p>
                </div> <a href="#" class="feature__more button">More</a> </div>
            <!-- end feature -->
        </div>
        <!-- end features -->

        <?php get_template_part( 'template-parts/content', 'recent-posts' ); ?>
    </div>
</div>
<!-- end content -->

<?php get_footer(); ?>
