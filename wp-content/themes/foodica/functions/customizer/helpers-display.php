<?php


function foodica_get_css_rules(){
    return array(
        'color-rules' => array(
            array(
                'id' => 'color-body-text',
                'selector' => 'body',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-logo',
                'selector' => '.navbar-brand a',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-logo-hover',
                'selector' => '.navbar-brand a:hover',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-tagline',
                'selector' => '.navbar-brand .tagline',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-link',
                'selector' => 'a, .zoom-twitter-widget a',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-link-hover',
                'selector' => 'a:hover, .zoom-twitter-widget a:hover',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-button-background',
                'selector' => 'button, input[type=button], input[type=reset], input[type=submit]',
                'rule' => 'background'
            ),
            array(
                'id' => 'color-button-color',
                'selector' => 'button, input[type=button], input[type=reset], input[type=submit]',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-button-background-hover',
                'selector' => 'button:hover, input[type=button]:hover, input[type=reset]:hover, input[type=submit]:hover',
                'rule' => 'background'
            ),
            array(
                'id' => 'color-button-color-hover',
                'selector' => 'button:hover, input[type=button]:hover, input[type=reset]:hover, input[type=submit]:hover',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-top-menu-background',
                'selector' => '.top-navbar',
                'rule' => 'background'
            ),
            array(
                'id' => 'color-top-menu-link',
                'selector' => '.top-navbar .navbar-nav > li > a',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-top-menu-link-hover',
                'selector' => '.top-navbar navbar-nav > li > a:hover',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-top-menu-link-current',
                'selector' => '.top-navbar .navbar-nav > .current-menu-item a, .top-navbar .navbar-nav > .current_page_item a, .top-navbar .navbar-nav > .current-menu-parent a',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-top-menu-social',
                'selector' => '.header_social .zoom-social-icons-list--without-canvas .socicon',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-menu-background',
                'selector' => '.main-navbar',
                'rule' => 'background'
            ),
            array(
                'id' => 'color-menu-link',
                'selector' => '.main-navbar .navbar-nav > li > a',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-menu-link-hover',
                'selector' => '.main-navbar .navbar-nav > li > a:hover',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-menu-link-current',
                'selector' => '.main-navbar .navbar-nav > .current-menu-item a, .main-navbar .navbar-nav > .current_page_item a, .main-navbar .navbar-nav > .current-menu-parent a',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-menu-link-hover',
                'selector' => '.main-navbar .navbar-nav > li > a:hover',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-menu-link-current',
                'selector' => '.main-navbar .navbar-nav > .current-menu-item a, .main-navbar .navbar-nav > .current_page_item a, .main-navbar .navbar-nav > .current-menu-parent a',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-search-icon-background',
                'selector' => '.sb-search .sb-icon-search',
                'rule' => 'background'
            ),
            array(
                'id' => 'color-search-icon',
                'selector' => '.sb-search .sb-icon-search',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-search-icon-background-hover',
                'selector' => '.sb-search .sb-icon-search:hover, .sb-search .sb-search-input',
                'rule' => 'background'
            ),
            array(
                'id' => 'color-search-icon-hover',
                'selector' => '.sb-search .sb-icon-search:hover, .sb-search .sb-search-input',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-slider-post-title',
                'selector' => '.slides li h3 a',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-slider-post-title-hover',
                'selector' => '.slides li h3 a:hover',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-slider-post-cat',
                'selector' => '.slides li .cat-links a',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-slider-post-cat-hover',
                'selector' => '.slides li .cat-links a:hover',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-slider-post-meta',
                'selector' => '.slides li .entry-meta',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-slider-post-meta-link',
                'selector' => '.slides li .entry-meta a',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-slider-post-meta-link-hover',
                'selector' => '.slides li .entry-meta a:hover',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-slider-button-color',
                'selector' => '.slides .slide_button a',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-slider-button-color-hover',
                'selector' => '.slides .slide_button a:hover, .slides .slide_button a:active',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-slider-button-border',
                'selector' => '.slides .slide_button a',
                'rule' => 'border-color'
            ),
            array(
                'id' => 'color-slider-button-border-hover',
                'selector' => '.slides .slide_button a:hover, .slides .slide_button a:active',
                'rule' => 'border-color'
            ),
            // Post
            array(
                'id' => 'color-post-title',
                'selector' => '.entry-title a',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-post-title-hover',
                'selector' => '.entry-title a:hover',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-post-cat',
                'selector' => '.cat-links a',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-post-cat-hover',
                'selector' => '.cat-links a:hover',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-post-meta',
                'selector' => '.entry-meta',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-post-meta-link',
                'selector' => '.entry-meta a',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-post-meta-link-hover',
                'selector' => '.entry-meta a:hover',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-post-button-color',
                'selector' => '.readmore_button a',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-post-button-color-hover',
                'selector' => '.readmore_button a:hover, .readmore_button a:active',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-post-button-border',
                'selector' => '.readmore_button a',
                'rule' => 'border-color'
            ),
            array(
                'id' => 'color-post-button-border-hover',
                'selector' => '.readmore_button a:hover, .readmore_button a:active',
                'rule' => 'border-color'
            ),
            // Infinite Scroll
            array(
                'id' => 'color-infinite-button',
                'selector' => '.infinite-scroll #infinite-handle span',
                'rule' => 'background'
            ),
            array(
                'id' => 'color-infinite-button-hover',
                'selector' => '.infinite-scroll #infinite-handle span:hover',
                'rule' => 'background'
            ),
            // Single Post
            array(
                'id' => 'color-single-title',
                'selector' => '.page h1.entry-title, .single h1.entry-title',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-single-meta',
                'selector' => '.single .entry-meta',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-single-meta-link',
                'selector' => '.single .entry-meta a',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-single-meta-link-hover',
                'selector' => '.single .entry-meta a:hover',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-single-content',
                'selector' => '.entry-content',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-single-ingredients',
                'selector' => '.shortcode-ingredients',
                'rule' => 'background'
            ),
            array(
                'id' => 'color-single-ingredients-title',
                'selector' => '.shortcode-ingredients > h3',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-single-ingredients-text',
                'selector' => '.shortcode-ingredients',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-single-ingredients-lines',
                'selector' => '.shortcode-ingredients > ul > li',
                'rule' => 'border-color'
            ),
            // Widgets
            array(
                'id' => 'color-widget-title',
                'selector' => '.section-title, .widget h3.title',
                'rule' => 'color'
            ),
            // Footer
            array(
                'id' => 'color-footer-link',
                'selector' => '.footer-menu ul li a, .footer-menu ul li a:hover',
                'rule' => 'color'
            ),
            array(
                'id' => 'color-footer-link-hover',
                'selector' => '.footer-menu ul li a:hover',
                'rule' => 'color'
            ),
            array(
                'id' => 'footer-background-color',
                'selector' => '.footer-menu, .section-footer .zoom-instagram-widget__items',
                'rule' => 'background-color'
            ),
        ),
        'font-rules' => array(
            array(
                'id' => 'font-weight-site-body',
                'selector' => 'body',
                'rule' => 'font-weight'
            ),
            array(
                'id' => 'font-style-site-body',
                'selector' => 'body',
                'rule' => 'font-style'
            ),
            // Site Title
            array(
                'id' => 'font-weight-site-title',
                'selector' => '.navbar-brand h1 a',
                'rule' => 'font-weight'
            ),
            array(
                'id' => 'font-style-site-title',
                'selector' => '.navbar-brand h1 a',
                'rule' => 'font-style'
            ),
            array(
                'id' => 'font-transform-site-title',
                'selector' => '.navbar-brand h1 a',
                'rule' => 'text-transform'
            ),
            // Site Tagline
            array(
                'id' => 'font-weight-site-tagline',
                'selector' => '.navbar-brand .tagline',
                'rule' => 'font-weight'
            ),
            array(
                'id' => 'font-style-site-tagline',
                'selector' => '.navbar-brand .tagline',
                'rule' => 'font-style'
            ),
            array(
                'id' => 'font-transform-site-tagline',
                'selector' => '.navbar-brand .tagline',
                'rule' => 'text-transform'
            ),
            // Top Navbar
            array(
                'id' => 'font-weight-nav-top',
                'selector' => '.top-navbar a',
                'rule' => 'font-weight'
            ),
            array(
                'id' => 'font-style-nav-top',
                'selector' => '.top-navbar a',
                'rule' => 'font-style'
            ),
            array(
                'id' => 'font-transform-nav-top',
                'selector' => '.top-navbar a',
                'rule' => 'text-transform'
            ),
            // Main Navbar
            array(
                'id' => 'font-weight-nav',
                'selector' => '.main-navbar a',
                'rule' => 'font-weight'
            ),
            array(
                'id' => 'font-style-nav',
                'selector' => '.main-navbar a',
                'rule' => 'font-style'
            ),
            array(
                'id' => 'font-transform-nav',
                'selector' => '.main-navbar a',
                'rule' => 'text-transform'
            ),
            // Slider
            array(
                'id' => 'font-weight-slider-title',
                'selector' => '.slides li h3, .slides li h3 a',
                'rule' => 'font-weight'
            ),
            array(
                'id' => 'font-style-slider-title',
                'selector' => '.slides li h3, .slides li h3 a',
                'rule' => 'font-style'
            ),
            array(
                'id' => 'font-transform-slider-title',
                'selector' => '.slides li h3, .slides li h3 a',
                'rule' => 'text-transform'
            ),
            // Widgets
            array(
                'id' => 'font-weight-widgets',
                'selector' => '.widget h3.title, .section-title',
                'rule' => 'font-weight'
            ),
            array(
                'id' => 'font-style-widgets',
                'selector' => '.widget h3.title, .section-title',
                'rule' => 'font-style'
            ),
            array(
                'id' => 'font-transform-widgets',
                'selector' => '.widget h3.title, .section-title',
                'rule' => 'text-transform'
            ),
            // Post Title
            array(
                'id' => 'font-weight-post-title',
                'selector' => '.entry-title a',
                'rule' => 'font-weight'
            ),
            array(
                'id' => 'font-style-post-title',
                'selector' => '.entry-title a',
                'rule' => 'font-style'
            ),
            array(
                'id' => 'font-transform-post-title',
                'selector' => '.entry-title a',
                'rule' => 'text-transform'
            ),
            // Single Post Title
            array(
                'id' => 'font-weight-single-post-title',
                'selector' => '.single h1.entry-title',
                'rule' => 'font-weight'
            ),
            array(
                'id' => 'font-style-single-post-title',
                'selector' => '.single h1.entry-title',
                'rule' => 'font-style'
            ),
            array(
                'id' => 'font-transform-single-post-title',
                'selector' => '.single h1.entry-title',
                'rule' => 'text-transform'
            ),
            // Page Title
            array(
                'id' => 'font-weight-page-title',
                'selector' => '.page h1.entry-title',
                'rule' => 'font-weight'
                ),
            array(
                'id' => 'font-style-page-title',
                'selector' => '.page h1.entry-title',
                'rule' => 'font-style'
            ),
            array(
                'id' => 'font-transform-page-title',
                'selector' => '.page h1.entry-title',
                'rule' => 'text-transform'
            ),
            // Footer Menu
            array(
                'id' => 'font-weight-footer-menu',
                'selector' => '.footer-menu ul li',
                'rule' => 'font-weight'
            ),
            array(
                'id' => 'font-style-footer-menu',
                'selector' => '.footer-menu ul li',
                'rule' => 'font-style'
            ),
            array(
                'id' => 'font-transform-footer-menu',
                'selector' => '.footer-menu ul li',
                'rule' => 'text-transform'
            ),

        ),
        'font-extra-rules' => array(
            // Body Text
            array(
                'id' => 'site-body',
                'selector' => 'body'
            ),
            array(
                'id' => 'site-title',
                'selector' => '.navbar-brand h1, .navbar-brand h1 a'
            ),
            array(
                'id' => 'site-tagline',
                'selector' => '.navbar-brand .tagline'
            ),
            // Top Menu Item
            array(
                'id' => 'nav-top',
                'selector' => '.top-navbar a'
            ),
            array(
                'id' => 'nav',
                'selector' => '.main-navbar a'
            ),
            // Slider Title
            array(
                'id' => 'slider-title',
                'selector' => '.slides li h3, .slides li h3 a'
            ),
            // Widgets
            array(
                'id' => 'widgets',
                'selector' => '.widget h3.title, .section-title'
            ),
            // Post Title
            array(
                'id' => 'post-title',
                'selector' => '.entry-title a'
            ),
            // Single Post Title
            array(
                'id' => 'single-post-title',
                'selector' => 'h1.entry-title'
            ),
            // Page Title
            array(
                'id' => 'page-title',
                'selector' => '.page h1.entry-title'
            ),
            // Footer Menu
            array(
                'id' => 'footer-menu',
                'selector' => '.footer-menu ul li'
            )
        )
    );
}
/**
 * Process user options to generate CSS needed to implement the choices.
 *
 * This function reads in the options from theme mods and determines whether a CSS rule is needed to implement an
 * option. CSS is only written for choices that are non-default in order to avoid adding unnecessary CSS. All options
 * are also filterable allowing for more precise control via a child theme or plugin.
 *
 * Note that all CSS for options is present in this function except for the CSS for fonts and the logo, which require
 * a lot more code to implement.
 *
 * @return void
 */
function foodica_css_add_rules() {
    /**
     * Colors section
     */

    $rules = foodica_get_css_rules();
    foreach($rules['color-rules'] as $color_rule) {
        foodica_css_add_simple_color_rule($color_rule['id'], $color_rule['selector'], $color_rule['rule']);
    }

    foreach($rules['font-rules'] as $font_rule) {
        foodica_css_add_simple_font_rule($font_rule['id'], $font_rule['selector'], $font_rule['rule']);
    }
}

add_action( 'foodica_css', 'foodica_css_add_rules' );

function foodica_css_add_simple_color_rule( $setting_id, $selectors, $declarations ) {
    $value = maybe_hash_hex_color( get_theme_mod( $setting_id, foodica_get_default( $setting_id ) ) );

    if ( $value === foodica_get_default( $setting_id ) ) {
        return;
    }

    if ( strtolower( $value ) === strtolower( foodica_get_default( $setting_id ) ) ) {
        return;
    }

    if ( is_string( $selectors ) ) {
        $selectors = array( $selectors );
    }

    if ( is_string( $declarations ) ) {
        $declarations = array(
            $declarations => $value
        );
    }

    foodica_get_css()->add( array(
        'selectors'    => $selectors,
        'declarations' => $declarations
    ) );
}



function foodica_css_add_simple_font_rule( $setting_id, $selectors, $declarations ) {
    $value =  get_theme_mod( $setting_id, foodica_get_default( $setting_id ) );

    if ( $value === foodica_get_default( $setting_id ) ) {
        return;
    }

    if ( strtolower( $value ) === strtolower( foodica_get_default( $setting_id ) ) ) {
        return;
    }

    if ( is_string( $selectors ) ) {
        $selectors = array( $selectors );
    }

    if ( is_string( $declarations ) ) {
        $declarations = array(
            $declarations => $value
        );
    }

    foodica_get_css()->add( array(
        'selectors'    => $selectors,
        'declarations' => $declarations
    ) );
}
