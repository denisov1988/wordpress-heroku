<?php

/*----------------------------------------------------------------------------------*/
/*  WPZOOM: Author Bio
/*----------------------------------------------------------------------------------*/

 	class wpzoom_Bio extends WP_Widget {

 		function __construct() {
			/* Widget settings. */
			$widget_ops = array( 'classname' => 'wpzoom-bio', 'description' => 'Create an about widget for author.' );

			/* Widget control settings. */
			$control_ops = array( 'id_base' => 'wpzoom-bio' );

			/* Create the widget. */
			parent::__construct( 'wpzoom-bio', 'WPZOOM: Author Bio', $widget_ops, $control_ops );
		}

 		function widget( $args, $instance ) {
			extract( $args );

			/* User-selected settings. */
			$title = apply_filters('widget_title', $instance['title'] );
			$subtitle = $instance['subtitle'];
			$gravatar = $instance['gravatar'];
			$about = $instance['about'];


			/* Before widget (defined by themes). */
			echo $before_widget;

			/* Title of widget (before and after defined by themes). */
			if ( $title ) {
				echo $before_title . $title . $after_title;
			}



 			 if ($gravatar != '') {
				echo get_avatar( $gravatar, $size = '110', $default = '<path_to_url>' );
			 }



			echo "<div class=\"meta\">";
 				if ( $subtitle ) { echo $subtitle; }
			echo "</div>";

			if ($about) { echo "<div class=\"content\"><p>".$about."</p></div>"; }


			/* After widget (defined by themes). */
			echo $after_widget;
		}

 		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;

			/* Strip tags (if needed) and update the widget settings. */
			$instance['title'] = strip_tags( $new_instance['title'] );
			$instance['subtitle'] = $new_instance['subtitle'];
			$instance['gravatar'] = $new_instance['gravatar'];
			$instance['about'] = $new_instance['about'];

			return $instance;
		}

 		function form( $instance ) {

			/* Set up some default widget settings. */
			$defaults = array( 'title' => '', 'subtitle' => '', 'gravatar' => '', 'about' => '' );
			$instance = wp_parse_args( (array) $instance, $defaults ); ?>

			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>">Name:</label><br />
				<input type="text" class="widefat" size="35" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>"  />
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'subtitle' ); ?>">Title:</label>
				<input type="text" class="widefat" size="35" id="<?php echo $this->get_field_id( 'subtitle' ); ?>" name="<?php echo $this->get_field_name( 'subtitle' ); ?>" value="<?php echo $instance['subtitle']; ?>"  />
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'gravatar' ); ?>">Gravatar Email:</label>
				<input type="text" class="widefat" size="35" id="<?php echo $this->get_field_id( 'gravatar' ); ?>" name="<?php echo $this->get_field_name( 'gravatar' ); ?>" value="<?php echo $instance['gravatar']; ?>"  />
			</p>

			<p class="description">This will be used for profile picture. If you don't have a Gravatar account, create one on <a href="http://gravatar.com" target="_blank">gravatar.com</a></p>

			<p>
				<label for="<?php echo $this->get_field_id( 'about' ); ?>">About:</label><br />
				<textarea rows="5" class="widefat" id="<?php echo $this->get_field_id( 'about' ); ?>" name="<?php echo $this->get_field_name( 'about' ); ?>"><?php echo $instance['about']; ?></textarea>
			</p>

			<?php
		}
	}


function wpzoom_register_bio_widget() {
	register_widget('wpzoom_Bio');
}
add_action('widgets_init', 'wpzoom_register_bio_widget');