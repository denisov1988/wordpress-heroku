<?php

    if ( option::get( 'featured_type' ) == 'Featured Posts' ) {
        $FeaturedSource = 'post';
    } else {
        $FeaturedSource = 'page';
    }


    $featured = new WP_Query( array(
        'showposts'    => option::get( 'slideshow_posts' ),
        'post__not_in' => get_option( 'sticky_posts' ),
        'meta_key'     => 'wpzoom_is_featured',
        'meta_value'   => 1,
        'post_type' => $FeaturedSource
    ) );

?>

<div id="slider">

	<?php if ( $featured->have_posts() ) : ?>

		<ul class="slides clearfix">

			<?php while ( $featured->have_posts() ) : $featured->the_post(); ?>

                <?php
                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'loop-sticky');


                $style = ' style="background-image:url(\'' . $large_image_url[0] . '\')"';

                ?>

                <li class="slide">


                    <div class="slide-overlay">

                        <div class="slide-header">

                           <?php if ( option::is_on( 'slider_category' ) && $FeaturedSource == 'post' ) printf( '<span class="cat-links">%s</span>', get_the_category_list( ', ' ) ); ?>

                            <?php the_title( sprintf( '<h3><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>


                            <?php if ($FeaturedSource == 'post') { ?>
                                <div class="entry-meta">
                                    <?php if ( option::is_on( 'slider_date' ) )     printf( '<span class="entry-date"><time class="entry-date" datetime="%1$s">%2$s</time></span>', esc_attr( get_the_date( 'c' ) ), esc_html( get_the_date() ) ); ?>
                                    <?php if ( option::is_on( 'slider_comments' ) ) { ?><span class="comments-link"><?php comments_popup_link( __('0 comments', 'wpzoom'), __('1 comment', 'wpzoom'), __('% comments', 'wpzoom'), '', __('Comments are Disabled', 'wpzoom')); ?></span><?php } ?>
                                </div>
                            <?php } ?>

                            <?php if ($FeaturedSource == 'page') { ?>

                                <?php the_excerpt(); ?>

                            <?php } ?>


                            <?php if ( option::is_on( 'slider_button' ) ) { ?>
                                <div class="slide_button">
                                    <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'wpzoom' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php _e('Read More', 'wpzoom'); ?></a>
                                </div>
                            <?php } ?>

                        </div>

                    </div>

                    <div class="slide-background" <?php echo $style; ?>>
                    </div>
                </li>
            <?php endwhile; ?>

		</ul>

	<?php else: ?>

		<div class="empty-slider">
			<p><strong><?php _e( 'You are now ready to set-up your Slideshow content.', 'wpzoom' ); ?></strong></p>

			<p>
				<?php
				printf(
					__( 'For more information about adding posts to the slider, please <a href="%1$s">read the documentation</a>', 'wpzoom' ),
					'http://www.wpzoom.com/documentation/foodica/'
				);
				?>
			</p>
		</div>

	<?php endif; ?>

</div>