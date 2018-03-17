<?php
/**
 * @link https://github.com/zpawn/
 * @author Ilia Makarov <ilia.makarov@me.com>
 */

class Blackwhite_Authors_Widget extends WP_Widget {

    protected $opts = [];

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

	    global $wpdb;

	    $id = 0;
		$allAuthors = $authors = $authorsPostIds = [];
	    $title = $instance['title'];

		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];

		$allAuthors = $wpdb->get_results("SELECT meta_value as name, post_id FROM ". $wpdb->prefix ."postmeta WHERE meta_key = 'book_author'");

		foreach ($allAuthors as $author) {

		    $authorId = array_search($author->name, $authors);

		    if ($authorId === false) {
                $authors[$id] = $author->name;
                $authorsPostIds[$id][] = $author->post_id;
                $id += 1;
            } else {
			    $authors[$authorId] = $author->name;
			    $authorsPostIds[$authorId][] = $author->post_id;
            }
        }

		if ( !empty( $authors ) ) : ?>
            <ul>
				<?php foreach ($authors as $authorId => $authorName) : ?>
                    <li><a href="" data-author-post-ids="<?php echo implode(',', $authorsPostIds[$authorId]) ?>"><?php echo $authorName ?></a></li>
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
