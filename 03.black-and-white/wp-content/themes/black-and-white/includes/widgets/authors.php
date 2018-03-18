<?php
/**
 * @link https://github.com/zpawn/
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

class Blackwhite_Authors_Widget extends WP_Widget {

    private $opts = [];

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {

		$this->opts['title'] = __( 'Authors of All Books', 'blackwhite' );

		parent::__construct(
			'blackwhite_authors_widget',
			'Books Authors',
			[ 'description' => 'Show Authors of All Books' ]
		);
	}

	/**
	 * Front side
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {

	    global $wpdb, $wp_rewrite;

	    $title = $instance['title'];

		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];

		$authors = $wpdb->get_col("SELECT `meta_value` as name FROM `". $wpdb->prefix ."postmeta` WHERE `meta_key` = 'book_author' GROUP BY `name`");

		$authors = $wpdb->get_results(
            "SELECT `meta_value` as `name`, COUNT(`meta_value`) as amount FROM `". $wpdb->prefix ."postmeta` WHERE `meta_key` = 'book_author' GROUP BY `name`",
			ARRAY_A
        );

		$baseAuthorPermalink = home_url();
		$baseAuthorPermalink .= str_replace(
            '%'. BOOKS_POST_TYPE .'%',
            '',
            $wp_rewrite->get_extra_permastruct( BOOKS_POST_TYPE )
        );

		if ( !empty( $authors ) ) : ?>
            <ul>
				<?php foreach ($authors as $author) : ?>
					<?php $authorPermalink = esc_url(add_query_arg( 'book_author', $author['name'], $baseAuthorPermalink )); ?>
                    <li>
                        <a href="<?php echo $authorPermalink ?>">
                            <?php echo $author['name'] ?>
                        </a>
                        |
                        <button class="button-link js-author-books" type="button" data-title="<?php echo $author['name'] ?>">[ <?php echo $author['amount'] ?> ]</button>
                    </li>
				<?php endforeach; ?>
            </ul>
		<?php endif;

		wp_reset_postdata();

		echo $args['after_widget'];
	}

	/**
	 * Backend side
	 *
	 * @param array $instance
	 *
	 * @return string|void
	 */
	public function form( $instance ) {
		$title = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : $this->opts['title'];
		?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', 'blackwhite' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
		<?php
	}

	/**
	 * Save Settings
	 *
	 * @param array $new_instance
	 * @param array $old_instance
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = [];
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : $this->opts['title'];
		return $instance;
	}
}
