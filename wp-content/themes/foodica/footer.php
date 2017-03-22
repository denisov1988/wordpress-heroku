<?php
/**
 * The template for displaying the footer
 *
 */

$widgets_areas = (int) get_theme_mod( 'footer-widget-areas', foodica_get_default( 'footer-widget-areas' ) );

$has_active_sidebar = false;
if ( $widgets_areas > 0 ) {
    $i = 1;

    while ( $i <= $widgets_areas ) {
        if ( is_active_sidebar( 'footer_' . $i ) ) {
            $has_active_sidebar = true;
            break;
        }

        $i++;
    }
}

?>

    </div><!-- ./inner-wrap -->

    <footer id="colophon" class="site-footer" role="contentinfo">

        <?php if ( $has_active_sidebar ) : ?>

            <div class="footer-widgets widgets widget-columns-<?php echo esc_attr( $widgets_areas ); ?>">
                    <?php for ( $i = 1; $i <= $widgets_areas; $i ++ ) : ?>

                        <div class="column">
                            <?php dynamic_sidebar( 'footer_' . $i ); ?>
                        </div><!-- .column -->

                    <?php endfor; ?>

                    <div class="clear"></div>
            </div><!-- .footer-widgets -->


        <?php endif; ?>



        <?php if ( is_active_sidebar( 'widgetized_section' ) ) : ?>

            <section class="site-widgetized-section section-footer">
                <div class="widgets clearfix">

                    <?php dynamic_sidebar( 'widgetized_section' ); ?>

                </div>
            </section><!-- .site-widgetized-section -->

        <?php endif; ?>


        <?php if ( has_nav_menu( 'tertiary' ) ) { ?>

            <div class="footer-menu">
                <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-footer', 'theme_location' => 'tertiary', 'depth' => '1' ) ); ?>
            </div>

        <?php } ?>


        <div class="site-info">

            <?php echo get_theme_mod( 'footer-text', foodica_get_default( 'footer-text' ) ); ?>

            <?php printf( __( '&mdash; Designed by %s', 'wpzoom' ), '<a href="http://www.wpzoom.com/" target="_blank" rel="designer">WPZOOM</a>' ); ?>

        </div><!-- .site-info -->
    </footer><!-- #colophon -->

</div>
<?php wp_footer(); ?>

</body>
</html>