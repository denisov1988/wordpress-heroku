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
    
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter43721884 = new Ya.Metrika({
                    id:43721884,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/43721884" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

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