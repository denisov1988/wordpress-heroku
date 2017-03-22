<?php

function foodica_option_defaults() {
    $defaults = array(
        /**
         * General
         */
        // Site Title & Tagline
        'hide-tagline'                        => 0,
        // Navbar
        'navbar-hide-search'                  => 0,
        // Logo
        'logo'                                => '',
        'logo-retina-ready'                   => 0,
        'logo-favicon'                        => 0,

        /**
         * Typography
         */
        // Body
        'font-family-site-body'               => 'Merriweather',
        'font-size-site-body'                 => 16,
        'font-weight-site-body'               => 'normal',
        'font-style-site-body'                => 'normal',
        // Site Title & Tag Line
        'font-family-site-title'              => 'Annie Use Your Telescope',
        'font-size-site-title'                => 85,
        'font-weight-site-title'              => 'normal',
        'font-style-site-title'               => 'normal',
        'font-transform-site-title'           => 'none',
        'font-family-site-tagline'            => 'Roboto Condensed',
        'font-size-site-tagline'              => 16,
        'font-weight-site-tagline'            => 'normal',
        'font-style-site-tagline'             => 'normal',
        'font-transform-site-tagline'         => 'uppercase',

        // Top Navigation
        'font-family-nav-top'                 => 'Cabin',
        'font-size-nav-top'                   => 12,
        'font-weight-nav-top'                 => 'normal',
        'font-style-nav-top'                  => 'normal',
        'font-transform-nav-top'              => 'uppercase',
        // Main Navigation
        'font-family-nav'                     => 'Roboto Condensed',
        'font-size-nav'                       => 18,
        'font-weight-nav'                     => 'normal',
        'font-style-nav'                      => 'normal',
        'font-transform-nav'                  => 'uppercase',

        // Slider Title
        'font-family-slider-title'            => 'Roboto Slab',
        'font-size-slider-title'              => 40,
        'font-weight-slider-title'            => 'normal',
        'font-style-slider-title'             => 'normal',
        'font-transform-slider-title'         => 'none',

        // Widgets
        'font-family-widgets'                 => 'Roboto Condensed',
        'font-size-widgets'                   => 18,
        'font-weight-widgets'                 => 'bold',
        'font-style-widgets'                  => 'normal',
        'font-transform-widgets'              => 'uppercase',

        // Post Title
        'font-family-post-title'              => 'Roboto Slab',
        'font-size-post-title'                => 24,
        'font-weight-post-title'              => 'normal',
        'font-style-post-title'               => 'normal',
        'font-transform-post-title'           => 'none',

        // Single Post Title
        'font-family-single-post-title'       => 'Roboto Slab',
        'font-size-single-post-title'         => 44,
        'font-weight-single-post-title'       => 'bold',
        'font-style-single-post-title'        => 'normal',
        'font-transform-single-post-title'    => 'none',

        // Page Title
        'font-family-page-title'              => 'Roboto Slab',
        'font-size-page-title'                => 44,
        'font-weight-page-title'              => 'bold',
        'font-style-page-title'               => 'normal',
        'font-transform-page-title'           => 'none',

        // Footer menu
        'font-family-footer-menu'              => 'Roboto Condensed',
        'font-size-footer-menu'                => 16,
        'font-weight-footer-menu'              => 'normal',
        'font-style-footer-menu'               => 'normal',
        'font-transform-footer-menu'           => 'uppercase',



        /**
         * Color Scheme
         */
        // General
        'color-body-text'                     => '#444444',
        'color-logo'                          => '#363940',
        'color-logo-hover'                    => '#0f7fae',
        'color-tagline'                       => '#c7c7c7',
        'color-link'                          => '#363940',
        'color-link-hover'                    => '#0f7fae',

        // Menu
        'color-top-menu-background'           => '#FAFAFA',
        'color-top-menu-link'                 => '#363940',
        'color-top-menu-link-hover'           => '#0f7fae',
        'color-top-menu-link-current'         => '#0f7fae',
        'color-top-menu-social'               => '#363940',
        'color-menu-background'               => '',
        'color-menu-link'                     => '#363940',
        'color-menu-link-hover'               => '#0f7fae',
        'color-menu-link-current'             => '#0f7fae',
        'color-search-icon-background'        => '#363940',
        'color-search-icon'                   => '#ffffff',
        'color-search-icon-background-hover'  => '#0f7fae',
        'color-search-icon-hover'             => '#ffffff',

        //Slider
        'color-slider-post-title'             => '#363940',
        'color-slider-post-title-hover'       => '#0f7fae',
        'color-slider-post-cat'               => '#9297a4',
        'color-slider-post-cat-hover'         => '#9297a4',
        'color-slider-post-meta'              => '#9297a4',
        'color-slider-post-meta-link'         => '#9297a4',
        'color-slider-post-meta-link-hover'   => '#9297a4',
        'color-slider-button-color'           => '#363940',
        'color-slider-button-color-hover'     => '#000000',
        'color-slider-button-border'          => '#c7c9cf',
        'color-slider-button-border-hover'    => '#888888',


        // Post
        'color-post-title'                    => '#363940',
        'color-post-title-hover'              => '#0f7fae',
        'color-post-cat'                      => '#acacac',
        'color-post-cat-hover'                => '#0f7fae',
        'color-post-meta'                     => '#acacac',
        'color-post-meta-link'                => '#363940',
        'color-post-meta-link-hover'          => '#0f7fae',
        'color-post-button-color'             => '#363940',
        'color-post-button-color-hover'       => '#000000',
        'color-post-button-border'            => '#c7c9cf',
        'color-post-button-border-hover'      => '#888888',


        // Infinite Scroll
        'color-infinite-button'               => '#363940',
        'color-infinite-button-hover'         => '#0f7fae',

        // Single Post
        'color-single-title'                   => '#222222',
        'color-single-meta'                    => '#acacac',
        'color-single-meta-link'               => '#363940',
        'color-single-meta-link-hover'         => '#0f7fae',
        'color-single-content'                 => '#444444',
        'color-single-ingredients'             => '#FBF9E7',
        'color-single-ingredients-title'       => '#222222',
        'color-single-ingredients-text'        => '#736458',
        'color-single-ingredients-lines'       => '#e9e5c9',

        // Buttons
        'color-button-background'             => '#363940',
        'color-button-color'                  => '#ffffff',
        'color-button-background-hover'       => '#0f7fae',
        'color-button-color-hover'            => '#ffffff',

        // Widgets
        'color-widget-title'                  => '#363940',

        // Footer
        'color-footer-link'                   => '#363940',
        'color-footer-link-hover'             => '#0f7fae',
        'footer-background-color'             => '#EFF4F7',

        // Widget Areas
        'footer-widget-areas'                 => 3,

        // Copyright
        'footer-text'                         => sprintf( __( 'Copyright &copy; %1$s %2$s', 'wpzoom' ), date( 'Y' ), get_bloginfo( 'name' ) ),
    );

    return $defaults;
}

function foodica_get_default( $option ) {
    $defaults = foodica_option_defaults();
    $default  = ( isset( $defaults[ $option ] ) ) ? $defaults[ $option ] : false;

    return $default;
}
