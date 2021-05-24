<?php

class LINX_Facebook_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'linx_facebook_widget',
			esc_html__( 'LINX: Facebook', 'linx' ),
			array( 'description' => esc_html__( 'Facebook page.', 'linx' ), )
		);
	}

	public function widget( $args, $instance ) {
		extract( $args );
		$title = isset( $instance['title'] ) ? $instance['title'] : esc_html__( 'Facebook', 'linx' );
		$page_url = isset( $instance['page_url'] ) ? $instance['page_url'] : '';
		$width = isset( $instance['width'] ) ? $instance['width'] : 340;
		$height = isset( $instance['height'] ) ? $instance['height'] : 500;
		$hide_cover = ! empty( $instance['hide_cover'] ) ? 1 : 0;
		$show_facepile = ! empty( $instance['show_facepile'] ) ? 1 : 0;
		$show_posts = ! empty( $instance['show_posts'] ) ? 1 : 0;

		$before_widget = str_replace( 'class="', 'class="small-padding ', $before_widget );
		echo $before_widget;

		ob_start(); ?>

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<div class="fb-page" data-href="<?php echo esc_url( $page_url ); ?>" data-width="<?php echo esc_attr( $width ); ?>" data-height="<?php echo esc_attr( $height ); ?>" data-hide-cover="<?php echo esc_attr( $hide_cover ); ?>" data-show-facepile="<?php echo esc_attr( $show_facepile ); ?>" data-show-posts="<?php echo esc_attr( $show_posts ); ?>"></div>

    <?php

    echo ob_get_clean();
		echo $after_widget;
	}

	public function form( $instance ) {
		$defaults = array(
			'title' => esc_html__( 'Facebook', 'linx' ),
			'page_url' => '',
			'width' => 340,
			'height' => 500,
			'hide_cover' => 0,
			'show_facepile' => 0,
			'show_posts' => 0,
		);

		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'linx' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'page_url' ) ); ?>"><?php esc_html_e( 'Page URL:', 'linx' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'page_url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'page_url' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['page_url'] ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'width' ) ); ?>"><?php esc_html_e( 'Width:', 'linx' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'width' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'width' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['width'] ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'height' ) ); ?>"><?php esc_html_e( 'Height:', 'linx' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'height' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'height' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['height'] ); ?>" />
		</p>
    <p>
			<input class="checkbox" <?php checked( $instance['hide_cover'] ); ?> id="<?php echo esc_attr( $this->get_field_id( 'hide_cover' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'hide_cover' ) ); ?>" type="checkbox">
			<label for="<?php echo esc_attr( $this->get_field_id( 'hide_cover' ) ); ?>"><?php esc_html_e( 'Hide cover?', 'linx' ); ?></label>
		</p>
    <p>
			<input class="checkbox" <?php checked( $instance['show_facepile'] ); ?> id="<?php echo esc_attr( $this->get_field_id( 'show_facepile' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'show_facepile' ) ); ?>" type="checkbox">
			<label for="<?php echo esc_attr( $this->get_field_id( 'show_facepile' ) ); ?>"><?php esc_html_e( 'Show facepile?', 'linx' ); ?></label>
		</p>
    <p>
			<input class="checkbox" <?php checked( $instance['show_posts'] ); ?> id="<?php echo esc_attr( $this->get_field_id( 'show_posts' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'show_posts' ) ); ?>" type="checkbox">
			<label for="<?php echo esc_attr( $this->get_field_id( 'show_posts' ) ); ?>"><?php esc_html_e( 'Show posts?', 'linx' ); ?></label>
		</p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['page_url'] = ( ! empty( $new_instance['page_url'] ) ) ? strip_tags( $new_instance['page_url'] ) : '';
		$instance['width'] = ( ! empty( $new_instance['width'] ) ) ? strip_tags( $new_instance['width'] ) : '';
		$instance['height'] = ( ! empty( $new_instance['height'] ) ) ? strip_tags( $new_instance['height'] ) : '';
		$instance['hide_cover'] = ( ! empty( $new_instance['hide_cover'] ) ) ? 1 : 0;
		$instance['show_facepile'] = ( ! empty( $new_instance['show_facepile'] ) ) ? 1 : 0;
		$instance['show_posts'] = ( ! empty( $new_instance['show_posts'] ) ) ? 1 : 0;

		return $instance;
	}

}
