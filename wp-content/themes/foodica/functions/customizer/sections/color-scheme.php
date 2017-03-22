<?php

function foodica_customizer_define_color_scheme_sections( $sections ) {
    $panel           = WPZOOM::$theme_raw_name . '_color-scheme';
    $colors_sections = array();

    $colors_sections['color'] = array(
        'panel'   => $panel,
        'title'   => __( 'General', 'wpzoom' ),
        'options' => array(

            'color-body-text' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Body Text', 'wpzoom' ),
                ),
            ),

            'color-logo' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Logo Color', 'wpzoom' ),
                ),
            ),


            'color-logo-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Logo Color on Hover', 'wpzoom' ),
                ),
            ),

            'color-tagline' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Site Description', 'wpzoom' ),
                ),
            ),


            'color-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Link Color', 'wpzoom' ),
                ),
            ),

            'color-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Link Color on Hover', 'wpzoom' ),
                ),
            ),

            'color-button-background' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Buttons Background', 'wpzoom' ),
                ),
            ),

            'color-button-color' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Buttons Text Color', 'wpzoom' ),
                ),
            ),

            'color-button-background-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Buttons Background on Hover', 'wpzoom' ),
                ),
            ),

            'color-button-color-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Buttons Text Color on Hover', 'wpzoom' ),
                ),
            ),


        )
    );

    $colors_sections['color-top-menu'] = array(
        'panel'   => $panel,
        'title'   => __( 'Top Menu', 'wpzoom' ),
        'options' => array(

            'color-top-menu-background' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Menu Background', 'wpzoom' ),
                ),
            ),

            'color-top-menu-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Menu Item', 'wpzoom' ),
                ),
            ),


            'color-top-menu-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Menu Item Hover', 'wpzoom' ),
                ),
            ),

            'color-top-menu-link-current' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Menu Current Item', 'wpzoom' ),
                ),
            ),

            'color-top-menu-social' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Social Icons Color', 'wpzoom' ),
                    'description'        => __( 'If you don\'t have Social Icons in the top bar, just install the plugin  <a href="https://wordpress.org/plugins/social-icons-widget-by-wpzoom/" target="_blank">Social Icons Widget by WPZOOM</a>, and then add the <strong>Social Icons</strong> widget in the <strong>Header Social Icons</strong> widget area on <strong>Widgets</strong> page.', 'wpzoom' ),
                ),
            ),


        )
    );


    $colors_sections['color-main-menu'] = array(
        'panel'   => $panel,
        'title'   => __( 'Main Menu', 'wpzoom' ),
        'options' => array(

            'color-menu-background' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Main Menu Background', 'wpzoom' ),
                ),
            ),

            'color-menu-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Menu Item', 'wpzoom' ),
                ),
            ),

            'color-menu-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Menu Item Hover', 'wpzoom' ),
                ),
            ),

            'color-menu-link-current' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Menu Current Item', 'wpzoom' ),
                ),
            ),

            'color-search-icon-background' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Search Icon Background', 'wpzoom' ),
                ),
            ),

            'color-search-icon' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Search Icon Color', 'wpzoom' ),
                ),
            ),

            'color-search-icon-background-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Search Icon Background on Hover', 'wpzoom' ),
                ),
            ),

            'color-search-icon-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Search Icon Color on Hover', 'wpzoom' ),
                ),
            ),


        )
    );

    $colors_sections['color-slider'] = array(
        'panel'   => $panel,
        'title'   => __( 'Featured Slider', 'wpzoom' ),
        'options' => array(

            'color-slider-post-title' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Post Title', 'wpzoom' ),
                ),
            ),

            'color-slider-post-title-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Post Title Hover', 'wpzoom' ),
                ),
            ),

            'color-slider-post-cat' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Category Link', 'wpzoom' ),
                ),
            ),

            'color-slider-post-cat-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Category Link Hover', 'wpzoom' ),
                ),
            ),

            'color-slider-post-meta' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Post Meta', 'wpzoom' ),
                ),
            ),

            'color-slider-post-meta-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Post Meta Link', 'wpzoom' ),
                ),
            ),

            'color-slider-post-meta-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Post Meta Link Hover', 'wpzoom' ),
                ),
            ),


            'color-slider-button-color' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Button Text', 'wpzoom' ),
                ),
            ),

            'color-slider-button-color-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Button Text Hover', 'wpzoom' ),
                ),
            ),

            'color-slider-button-border' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Button Border', 'wpzoom' ),
                ),
            ),

            'color-slider-button-border-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Button Border Hover', 'wpzoom' ),
                ),
            ),


        )
    );

    $colors_sections['color-posts'] = array(
        'panel'   => $panel,
        'title'   => __( 'Recent Posts', 'wpzoom' ),
        'options' => array(

            'color-post-title' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Post Title', 'wpzoom' ),
                ),
            ),

            'color-post-title-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Post Title Hover', 'wpzoom' ),
                ),
            ),

            'color-post-cat' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Post Category', 'wpzoom' ),
                ),
            ),

            'color-post-cat-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Post Category Hover', 'wpzoom' ),
                ),
            ),

            'color-post-meta' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Post Meta', 'wpzoom' ),
                ),
            ),

            'color-post-meta-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Post Meta Link', 'wpzoom' ),
                ),
            ),

            'color-post-meta-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Post Meta Link Hover', 'wpzoom' ),
                ),
            ),

            'color-post-button-color' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Read More Button Text', 'wpzoom' ),
                ),
            ),

            'color-post-button-color-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Read More Button Text Hover', 'wpzoom' ),
                ),
            ),

            'color-post-button-border' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Read More Button Border', 'wpzoom' ),
                ),
            ),

            'color-post-button-border-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Read More Button Border Hover', 'wpzoom' ),
                ),
            ),


        )
    );

    $colors_sections['color-navigation'] = array(
        'panel'   => $panel,
        'title'   => __( 'Page Navigation', 'wpzoom' ),
        'options' => array(

            'color-infinite-button' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Jetpack Infinite Scroll Button', 'wpzoom' ),
                    'description'        => __( 'If you have the Infinite Scroll feature enabled, you can change here the color of the "Older Posts" button. You can find more instructions in <a href="http://www.wpzoom.com/documentation/tempo/#infinite" target="_blank">Documentation</a>', 'wpzoom' ),
                ),
            ),

            'color-infinite-button-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Jetpack Infinite Scroll Button Hover', 'wpzoom' ),
                ),
            ),


        )
    );



    $colors_sections['color-single'] = array(
        'panel'   => $panel,
        'title'   => __( 'Individual Posts and Pages', 'wpzoom' ),
        'options' => array(

            'color-single-title' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Post/Page Title', 'wpzoom' ),
                ),
            ),

            'color-single-meta' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Post Meta', 'wpzoom' ),
                ),
            ),

            'color-single-meta-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Post Meta Link', 'wpzoom' ),
                ),
            ),

            'color-single-meta-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Post Meta Link Hover', 'wpzoom' ),
                ),
            ),

            'color-single-content' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Post/Page Text Color', 'wpzoom' ),
                ),
            ),

            'color-single-ingredients' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Ingredients Shortcode Background', 'wpzoom' ),
                ),
            ),

            'color-single-ingredients-title' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Ingredients Shortcode Title', 'wpzoom' ),
                ),
            ),

            'color-single-ingredients-text' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Ingredients Shortcode Text Color', 'wpzoom' ),
                ),
            ),

            'color-single-ingredients-lines' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Ingredients Shortcode Divider Color', 'wpzoom' ),
                ),
            ),


        )
    );


    $colors_sections['color-widgets'] = array(
        'panel'   => $panel,
        'title'   => __( 'Widgets', 'wpzoom' ),
        'options' => array(

            'color-widget-title' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Widget Title', 'wpzoom' ),
                ),
            ),


        )
    );

    $colors_sections['color-footer'] = array(
        'panel'   => $panel,
        'title'   => __( 'Footer', 'wpzoom' ),
        'options' => array(


            'footer-background-color' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Footer Background Color', 'wpzoom' ),
                ),
            ),

            'color-footer-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Footer Menu Link', 'wpzoom' ),
                ),
            ),

            'color-footer-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                    'transport'  => 'postMessage'
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Footer Menu Link Hover', 'wpzoom' ),
                ),
            ),

        )
    );

    return array_merge( $sections, $colors_sections );
}

add_filter( 'zoom_customizer_sections', 'foodica_customizer_define_color_scheme_sections' );
