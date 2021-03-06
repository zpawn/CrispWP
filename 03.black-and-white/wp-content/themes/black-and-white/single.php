<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

get_header(); ?>

<div class="post-single">
	<div class="post-single__content">
		<?php get_template_part( 'template-parts/post/content', 'single' ) ?>
	</div>
	<div class="post-single__sidebar">
		<?php get_sidebar() ?>
	</div>
</div>

<?php get_footer(); ?>