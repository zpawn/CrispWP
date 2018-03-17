<?php
/**
 * @link https://github.com/zpawn/
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

class Blackwhite_Three_Last_Post_Widget extends WP_Widget {

    protected $opts = [];

	/**
	 * Blackwhite_Authors_Widget constructor.
	 */
	function __construct() {

	    $this->opts['title'] = __( 'Last Posts', 'blackwhite' );
	    $this->opts['posts_per_page'] = 3;

		parent::__construct(
			'blackwhite_three_last_post_widget',
			'Three Last Posts',
			[ 'description' => 'Show Three Last Published Posts' ]
		);
	}

	/**
     * Front side
     *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		$title = $instance['title'];
		$posts_per_page = $instance['posts_per_page'];

		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];

		$query = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => $this->opts['posts_per_page'],
            'post__not_in' => get_option( 'sticky_posts' ),
            'orderby' => 'date',
            'order' => 'DESC'
        ]);

		if ( $query->have_posts() ) : ?>
            <ul>
                <?php while( $query->have_posts() ): $query->the_post(); ?>
                    <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                <?php endwhile; ?>
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
        $posts_per_page = isset( $instance[ 'posts_per_page' ] ) ? $instance[ 'posts_per_page' ] : $this->opts['posts_per_page'];
		?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', 'blackwhite' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'posts_per_page' ); ?>"><?php _e( 'Post count', 'blackwhite' ); ?></label>
            <input id="<?php echo $this->get_field_id( 'posts_per_page' ); ?>" name="<?php echo $this->get_field_name( 'posts_per_page' ); ?>" type="text" value="<?php echo esc_attr( $posts_per_page ); ?>" size="3" />
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
		$instance['posts_per_page'] = ( is_numeric( $new_instance['posts_per_page'] ) ) ? $new_instance['posts_per_page'] : $this->opts['posts_per_page'];
		return $instance;
	}
}
