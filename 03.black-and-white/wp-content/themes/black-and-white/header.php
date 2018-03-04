<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Black&White
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="Шаблоны сайтов бесплатно, дизайн сайта бесплатно, адаптивный дизайн">
    <meta name="keywords" content="Шаблоны сайтов бесплатно, дизайн сайта бесплатно, адаптивный дизайн">

    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
    <!--Шапка-->
    <div class="header">
        <div class="headerContent">
            <div class="logo">
                <a href="/">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.png">
                </a>
            </div>
            <form class="search" method="get" id="searchForm" action="<?= home_url('/'); ?>">
                <input type="text" id="search" name="s" value="<?php the_search_query(); ?>">
                <input type="image" src="<?= get_template_directory_uri() ?>/assets/images/button-search.png">
            </form>
        </div>
    </div>
    <!--Слайдер-->
    <?php
        $gallery = new WP_Query( [ 'post_type'=> 'gallery' ] );
        $gallery_first_image = true;
    ?>

    <?php if ( $gallery->have_posts() ) : ?>
        <div class="slider">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">

                    <?php while ( $gallery->have_posts() ) : $gallery->the_post(); ?>

                        <?php $image = get_field('image'); ?>

                        <div class="item <?= $gallery_first_image ? 'active' : '' ?>">
                            <img src="<?= $image['url'] ?>" alt="<?php the_title(); ?>">
                            <div class="carousel-caption">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>

                        <?php $gallery_first_image = false; ?>

                    <?php endwhile; ?>

                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>

        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <!-- Content -->
    <div class="content">
        <!-- Navigation -->
<?php
if ( has_nav_menu( 'primary' ) ) {
	wp_nav_menu( [
		'theme_location' => 'primary',
		'menu_class' => 'nav',
        'container' => false
	] );
}
?>
