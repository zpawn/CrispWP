<!-- begin block -->
<?php $recent_posts = new WP_Query([
	'posts_per_page' => 4,
	'post_type' => 'post'
]); ?>

<?php if ($recent_posts->have_posts()) : ?>
	<div class="block">
		<h3 class="h3">Recent Works</h3>

		<!-- begin works -->
		<div class="works">
			<?php while ($recent_posts->have_posts()) : $recent_posts->the_post();  ?>
				<!-- begin work -->
				<a href="<?php the_permalink(); ?>" class="work">
					<div class="work__image">
						<?= get_the_post_thumbnail($post_id, 'post-thumbnail', ['class' => 'alignleft']); ?>
					</div>
					<div class="work__bottom">
						<h4 class="work__title"><?php the_title(); ?></h4>
						<div class="work__date"><?= get_the_date(); ?></div>
					</div>
				</a>
				<!-- end work -->
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
		<!-- end works -->
	</div>
<?php endif; ?>
<!-- end block -->