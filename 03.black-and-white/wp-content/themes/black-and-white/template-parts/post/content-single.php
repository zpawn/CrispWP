<?php
/**
 * @link https://github.com/zpawn/CrispWP
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

$year_term_links = [];

if ( $post->post_type == 'books' ) {

    $year_term_links = array_reduce(wp_get_post_terms( $post->ID, 'year' ), function ($terms, $term) {
        $terms[] = '<a href="'. esc_url( get_term_link( $term, 'year' ) ) .'"><span class="term">'. $term->name .'</span></a>';
        return $terms;
    }, []);
}

?>

<?php if (have_posts()) : ?>
	<?php
        while (have_posts()) : the_post();

            $categories = array_reduce(get_the_category(), function ($categories, $category) {
		        $categories[] = '<a href="'. esc_url( get_category_link( $category->term_id ) ) .'">'. $category->name .'</a>';
		        return $categories;
	        }, [])
	?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		    <header class="entry-header">
			    <h1><?php the_title(); ?></h1>

		        <div class="post-single__posted">
		            <span class="post-single__date"><?php echo get_the_date() ?> <?php echo get_the_time() ?></span>
			        <?php echo __( 'by', 'blackwhite' ) ?>
		            <span class="post-single__author">
			            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?php echo esc_html( get_the_author() )?></a>
		            </span>
		        </div><!-- .entry-meta -->
                <?php if (!empty($categories)) : ?>
                    <div class="post-single__category">
                        <?php _e( 'Categories', 'blackwhite' ); ?>:
                        <?php echo implode( ', ', $categories ); ?>
                </div>
                <?php endif; ?>

                <?php if (!empty($year_term_links)) : ?>
                    <div class="post-single__taxonomy">
                        <?php _e( 'Taxonomy', 'blackwhite' ) ?>:
                        <?php echo implode( ', ', $year_term_links ); ?>
                    </div>
                <?php endif; ?>
		    </header><!-- .entry-header -->

			<?php the_post_thumbnail(); ?>

            <?php the_content(); ?>

            <?php comments_template(); ?>

		</article><!-- #post-<?php the_ID(); ?> -->
	<?php endwhile; ?>
<?php endif; ?>
