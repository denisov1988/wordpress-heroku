<?php
    $template = get_post_meta($post->ID, 'wpzoom_post_template', true);

    if ($template == 'full') {
        $media_width = 1140;
        $size = "loop-full";
    }
    else {
        $media_width = 750;

        if ( option::is_on( 'post_thumb_aspect' ) ) {
            $size = "loop-large";
        } else {
            $size = "loop-sticky";
        }
    }

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('hrecipe'); ?>>

    <?php if ( option::is_on( 'post_thumb' ) && has_post_thumbnail() ) {
        get_the_image( array( 'size' => $size, 'width' => $media_width, 'image_class' => 'photo', 'attachment' => false, 'image_scan' => false, 'before' => '<div class="post-thumb">', 'after' => '</div>', 'link_to_post' => false ) );
    } ?>


    <header class="entry-header">

        <?php the_title( '<h1 class="entry-title fn">', '</h1>' ); ?>

        <div class="entry-meta">
            <?php if ( option::is_on( 'post_author' ) )   { printf( '<span class="entry-author">%s ', __( 'Written by', 'wpzoom' ) ); the_author_posts_link(); print('</span>'); } ?>

            <?php if ( option::is_on( 'post_date' ) )     : ?><span class="entry-date"><?php _e( 'on', 'wpzoom' ); ?> <?php printf( '<time class="entry-date" datetime="%1$s">%2$s</time> ', esc_attr( get_the_date( 'c' ) ), esc_html( get_the_date() ) ); ?></span> <?php endif; ?>

            <?php if ( option::is_on( 'post_category' ) ) : ?><span class="entry-category"><?php _e( 'in', 'wpzoom' ); ?> <?php the_category( ', ' ); ?></span><?php endif; ?>

            <?php edit_post_link( __( 'Edit', 'wpzoom' ), '<span class="edit-link">', '</span>' ); ?>
        </div>

    </header><!-- .entry-header -->


    <div class="entry-content">
        <?php the_content(); ?>

        <div class="clear"></div>

        <?php if ( option::is_on('banner_post_enable')  ) { // Banner after first post ?>

            <div class="adv_content">
            <?php
                if ( option::get('banner_post_html') <> "" ) {
                    echo stripslashes(option::get('banner_post_html'));
                } else {
                    ?><a href="<?php echo option::get('banner_post_url'); ?>"><img src="<?php echo option::get('banner_post'); ?>" alt="<?php echo option::get('banner_post_alt'); ?>" /></a><?php
                }

            ?></div><?php
        } ?>


    </div><!-- .entry-content -->


    <footer class="entry-footer">


        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'wpzoom' ),
                'after'  => '</div>',
            ) );
        ?>


        <?php if ( option::is_on( 'post_tags' ) ) : ?>

            <?php the_tags( '<div class="tag_list">' . __( '<h4>Tags</h4>', 'wpzoom' ). ' ', ' ',  '</div>'  ); ?>

        <?php endif; ?>



        <?php if ( option::is_on( 'post_share' ) ) : ?>

            <div class="share">

                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>" target="_blank" title="<?php esc_attr_e( 'Tweet this on Twitter', 'wpzoom' ); ?>" class="twitter"><?php echo esc_html( option::get( 'post_share_label_twitter' ) ); ?></a>

                <a href="https://facebook.com/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>&t=<?php echo urlencode( get_the_title() ); ?>" target="_blank" title="<?php esc_attr_e( 'Share this on Facebook', 'wpzoom' ); ?>" class="facebook"><?php echo esc_html( option::get( 'post_share_label_facebook' ) ); ?></a>

                <a href="https://plus.google.com/share?url=<?php echo urlencode( get_permalink() ); ?>" target="_blank" title="<?php esc_attr_e( 'Post this to Google+', 'wpzoom' ); ?>" class="gplus"><?php echo esc_html( option::get( 'post_share_label_gplus' ) ); ?></a>

                <?php $pinterestimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                <a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php echo $pinterestimage[0]; ?>&description=<?php the_title(); ?>" target="_blank" count-layout="vertical" title="<?php esc_attr_e( 'Pin it to Pinterest', 'wpzoom' ); ?>" class="pinterest pin-it-button"><?php echo esc_html( option::get( 'post_share_label_pinterest' ) ); ?></a>

                <div class="clear"></div>
            </div>

        <?php endif; ?>



        <?php if ( option::is_on( 'post_author_box' ) ) : ?>

            <div class="post_author clearfix">

                <?php echo get_avatar( get_the_author_meta( 'ID' ) , 90 ); ?>

                <div class="author-description">
                    <h3 class="author-title author"><?php the_author_posts_link(); ?></h3>

                    <div class="author_links">

                        <?php if ( get_the_author_meta( 'facebook_url' ) ) { ?><a class="author_facebook" href="<?php the_author_meta( 'facebook_url' ); ?>" title="Facebook Profile" target="_blank"></a><?php } ?>


                        <?php if ( get_the_author_meta( 'twitter' ) ) { ?><a class="author_twitter" href="https://twitter.com/<?php the_author_meta( 'twitter' ); ?>" title="Follow <?php the_author_meta( 'display_name' ); ?> on Twitter" target="_blank"></a><?php } ?>


                        <?php if ( get_the_author_meta( 'instagram_url' ) ) { ?><a class="author_instagram" href="https://instagram.com/<?php the_author_meta( 'instagram_url' ); ?>" title="Instagram" target="_blank"></a><?php } ?>

                    </div>


                    <p class="author-bio">
                        <?php the_author_meta( 'description' ); ?>
                    </p>
                </div>

            </div>

        <?php endif; ?>


        <?php if ( is_active_sidebar( 'sidebar-post' ) ) : ?>

            <section class="site-widgetized-section section-single">

                <?php dynamic_sidebar( 'sidebar-post' ); ?>

            </section><!-- .site-widgetized-section -->

        <?php endif; ?>


    </footer><!-- .entry-footer -->

</article><!-- #post-## -->