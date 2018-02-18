<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#fff">
	<meta name="format-detection" content="telephone=no">

    <title><?= get_bloginfo( 'name' ) ?><?php wp_title(); ?></title>

	<?php wp_head(); ?>

<body>
<!-- BEGIN content -->
<div class="out">
	<!-- begin header -->
	<header class="header">
		<div class="container">
			<div class="header__wrap">
				<div class="header__logo">
					<a href="<?= home_url('/') ?>" class="logo">
						<div class="logo__part1">About</div>
						<div class="logo__part2">PHP</div>
					</a>
				</div>
				<div class="header__nav">
					<nav class="nav">
                        <?= strip_tags(wp_nav_menu([
                            'theme_location'    => 'primary',
                            'menu_class'        => 'nav',
                            'container'         => false,
                            'echo'              => false
                        ]), '<a>'); ?>
                    </nav>
                </div>
			</div>
		</div>
	</header>
	<!-- end header -->
