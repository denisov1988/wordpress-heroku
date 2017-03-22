<?php

if ( ! function_exists( 'foodica_font_get_relative_sizes' ) ) :
    /**
     * Return an array of percentages to use when calculating certain font sizes.
     *
     * @return array    The percentage value relative to another specific size
     */
    function foodica_font_get_relative_sizes() {
        // Relative font sizes
        return apply_filters( 'foodica_font_relative_size', array(

        ) );
    }
endif;

if ( ! function_exists( 'foodica_css_fonts' ) ) :
    /**
     * Build the CSS rules for the custom fonts
     *
     * @return void
     */
    function foodica_css_fonts() {

        $rules = foodica_get_css_rules();

        foreach( $rules['font-extra-rules'] as $rule){
            $declarations = foodica_parse_font_properties( $rule['id'] );
            if ( ! empty( $declarations ) ) {
                foodica_get_css()->add( array( 'selectors' => $rule['selector'], 'declarations' => $declarations, ) );
            }
        }
    }
endif;

add_action( 'foodica_css', 'foodica_css_fonts' );

if ( ! function_exists( 'foodica_parse_font_properties' ) ) :
    /**
     * Cycle through the font options for the given element and collect an array
     * of option values that are non-default.
     *
     * @param  string    $element    The element to parse the options for.
     * @return array                 An array of non-default CSS declarations.
     */
    function foodica_parse_font_properties( $element ) {
        // css_property => sanitize_callback
        $properties = apply_filters( 'foodica_css_font_properties', array(
            'font-family'	=> 'foodica_get_font_stack',
            'font-size'		=> 'absint',
        ), $element );

        $declarations = array();
        foreach ( $properties as $property => $callback ) {
            $value = get_theme_mod( $property . '-' . $element, foodica_get_default( $property . '-' . $element ) );
            if ( false !== $value && $value !== foodica_get_default( $property . '-' . $element ) ) {
                $sanitized_value = call_user_func_array( $callback, array( $value ) );
                if ( 'font-size' === $property ) {
                    $declarations[$property . '-px'] = $sanitized_value . 'px';
                    // $declarations[$property . '-rem'] = foodica_convert_px_to_rem( $sanitized_value ) . 'rem';
                } else {
                    $declarations[$property] = $sanitized_value;
                }
            }
        }

        return $declarations;
    }
endif;

if ( ! function_exists( 'foodica_get_font_stack' ) ) :
    /**
     * Validate the font choice and get a font stack for it.
     *
     * @since  1.0.0.
     *
     * @param  string    $font    The 1st font in the stack.
     * @return string             The full font stack.
     */
    function foodica_get_font_stack( $font ) {
        $all_fonts = foodica_get_all_fonts();

        // Sanitize font choice
        $font = foodica_sanitize_font_choice( $font );

        // Standard font
        if ( isset( $all_fonts[ $font ]['stack'] ) && ! empty( $all_fonts[ $font ]['stack'] ) ) {
            $stack = $all_fonts[ $font ]['stack'];
        } elseif ( in_array( $font, foodica_all_font_choices() ) ) {
            $stack = '"' . $font . '","Helvetica Neue",Helvetica,Arial,sans-serif';
        } else {
            $stack = '"Helvetica Neue",Helvetica,Arial,sans-serif';
        }

        /**
         * Allow developers to filter the full font stack.
         *
         * @param string    $stack    The font stack.
         * @param string    $font     The font.
         */
        return apply_filters( 'foodica_font_stack', $stack, $font );
    }
endif;

if ( ! function_exists( 'foodica_get_relative_font_size' ) ) :
    /**
     * Convert a font size to a relative size based on a starting value and percentage.
     *
     * @since  1.0.0.
     *
     * @param  mixed    $value         The value to base the final value on.
     * @param  mixed    $percentage    The percentage of change.
     * @return float                   The converted value.
     */
    function foodica_get_relative_font_size( $value, $percentage ) {
        return round( (float) $value * ( $percentage / 100 ) );
    }
endif;

if ( ! function_exists( 'foodica_convert_px_to_rem' ) ) :
    /**
     * Given a px value, return a rem value.
     *
     * @since  1.0.0.
     *
     * @param  mixed    $px      The value to convert.
     * @param  mixed    $base    The font-size base for the rem conversion (deprecated).
     * @return float             The converted value.
     */
    function foodica_convert_px_to_rem( $px, $base = 0 ) {
        return (float) $px / 10;
    }
endif;

if ( ! function_exists( 'foodica_get_font_property_option_keys' ) ) :
    /**
     * Return all the option keys for the specified font property.
     *
     * @param  string    $property    The font property to search for.
     * @return array                  Array of matching font option keys.
     */
    function foodica_get_font_property_option_keys( $property ) {
        $all_keys = array_keys( foodica_option_defaults() );

        $font_keys = array();
        foreach ( $all_keys as $key ) {
            if ( preg_match( '/^font-' . $property . '-/', $key ) ) {
                $font_keys[] = $key;
            }
        }

        return $font_keys;
    }
endif;

if ( ! function_exists( 'foodica_get_google_font_uri' ) ) :
    /**
     * Build the HTTP request URL for Google Fonts.
     *
     * @return string    The URL for including Google Fonts.
     */
    function foodica_get_google_font_uri() {
        // Grab the font choices
        $font_keys = array(
            'font-family-site-body',
            'font-family-site-title',
            'font-family-site-tagline',
            'font-family-nav',
            'font-family-slider-title',
            'font-family-slider-content',
            'font-family-widgets',
            'font-family-post-title',
            'font-family-single-post-title',
            'font-family-page-title'
        );

        $fonts = array();
        foreach ( $font_keys as $key ) {
            $fonts[] = get_theme_mod( $key, foodica_get_default( $key ) );
        }

        // De-dupe the fonts
        $fonts         = array_unique( $fonts );
        $allowed_fonts = foodica_get_google_fonts();
        $family        = array();

        // Validate each font and convert to URL format
        foreach ( $fonts as $font ) {
            $font = trim( $font );

            // Verify that the font exists
            if ( array_key_exists( $font, $allowed_fonts ) ) {
                // Build the family name and variant string (e.g., "Open+Sans:regular,italic,700")
                $family[] = urlencode( $font . ':' . join( ',', foodica_choose_google_font_variants( $font, $allowed_fonts[ $font ]['variants'] ) ) );
            }
        }

        // Convert from array to string
        if ( empty( $family ) ) {
            return '';
        } else {
            $request = '//fonts.googleapis.com/css?family=' . implode( '|', $family );
        }

        // Load the font subset
        $subset = get_theme_mod( 'font-subset', foodica_get_default( 'font-subset' ) );

        if ( 'all' === $subset ) {
            $subsets_available = foodica_get_google_font_subsets();

            // Remove the all set
            unset( $subsets_available['all'] );

            // Build the array
            $subsets = array_keys( $subsets_available );
        } else {
            $subsets = array(
                'latin',
                $subset,
            );
        }

        // Append the subset string
        if ( ! empty( $subsets ) ) {
            $request .= urlencode( '&subset=' . join( ',', $subsets ) );
        }

        /**
         * Filter the Google Fonts URL.
         *
         * @since 1.2.3.
         *
         * @param string    $url    The URL to retrieve the Google Fonts.
         */
        return apply_filters( 'foodica_get_google_font_uri', esc_url( $request ) );
    }
endif;

if ( ! function_exists( 'foodica_choose_google_font_variants' ) ) :
    /**
     * Given a font, chose the variants to load for the theme.
     *
     * Attempts to load regular, italic, and 700. If regular is not found, the first variant in the family is chosen. italic
     * and 700 are only loaded if found. No fallbacks are loaded for those fonts.
     *
     * @param  string    $font        The font to load variants for.
     * @param  array     $variants    The variants for the font.
     * @return array                  The chosen variants.
     */
    function foodica_choose_google_font_variants( $font, $variants = array() ) {
        $chosen_variants = array();
        if ( empty( $variants ) ) {
            $fonts = foodica_get_google_fonts();

            if ( array_key_exists( $font, $fonts ) ) {
                $variants = $fonts[ $font ]['variants'];
            }
        }

        // If a "regular" variant is not found, get the first variant
        if ( ! in_array( 'regular', $variants ) ) {
            $chosen_variants[] = $variants[0];
        } else {
            $chosen_variants[] = 'regular';
        }

        // Only add "italic" if it exists
        if ( in_array( 'italic', $variants ) ) {
            $chosen_variants[] = 'italic';
        }

        // Only add "700" if it exists
        if ( in_array( '700', $variants ) ) {
            $chosen_variants[] = '700';
        }

        /**
         * Allow developers to alter the font variant choice.
         *
         * @param array     $variants    The list of variants for a font.
         * @param string    $font        The font to load variants for.
         * @param array     $variants    The variants for the font.
         */
        return apply_filters( 'foodica_font_variants', array_unique( $chosen_variants ), $font, $variants );
    }
endif;

if ( ! function_exists( 'foodica_sanitize_font_subset' ) ) :
    /**
     * Sanitize the Character Subset choice.
     *
     * @param  string    $value    The value to sanitize.
     * @return array               The sanitized value.
     */
    function foodica_sanitize_font_subset( $value ) {
        if ( ! array_key_exists( $value, foodica_get_google_font_subsets() ) ) {
            $value = 'latin';
        }

        /**
         * Filter the sanitized subset choice.
         *
         * @param string    $value    The chosen subset value.
         */
        return apply_filters( 'foodica_sanitize_font_subset', $value );
    }
endif;

if ( ! function_exists( 'foodica_get_google_font_subsets' ) ) :
    /**
     * Retrieve the list of available Google font subsets.
     *
     * @since  1.0.0.
     *
     * @return array    The available subsets.
     */
    function foodica_get_google_font_subsets() {
        /**
         * Filter the list of supported Google Font subsets.
         *
         * @since 1.2.3.
         *
         * @param array    $subsets    The list of subsets.
         */
        return apply_filters( 'foodica_get_google_font_subsets', array(
            'all'          => __( 'All', 'wpzoom' ),
            'cyrillic'     => __( 'Cyrillic', 'wpzoom' ),
            'cyrillic-ext' => __( 'Cyrillic Extended', 'wpzoom' ),
            'devanagari'   => __( 'Devanagari', 'wpzoom' ),
            'greek'        => __( 'Greek', 'wpzoom' ),
            'greek-ext'    => __( 'Greek Extended', 'wpzoom' ),
            'khmer'        => __( 'Khmer', 'wpzoom' ),
            'latin'        => __( 'Latin', 'wpzoom' ),
            'latin-ext'    => __( 'Latin Extended', 'wpzoom' ),
            'vietnamese'   => __( 'Vietnamese', 'wpzoom' ),
        ) );
    }
endif;

if ( ! function_exists( 'foodica_sanitize_font_choice' ) ) :
    /**
     * Sanitize a font choice.
     *
     * @param  string    $value    The font choice.
     * @return string              The sanitized font choice.
     */
    function foodica_sanitize_font_choice( $value ) {
        if ( ! is_string( $value ) ) {
            // The array key is not a string, so the chosen option is not a real choice
            return '';
        } else if ( array_key_exists( $value, foodica_all_font_choices() ) ) {
            return $value;
        } else {
            return '';
        }
    }
endif;

if ( ! function_exists( 'foodica_font_choices_placeholder' ) ) :
    /**
     * Add a placeholder for the large font choices array, which will be loaded
     * in via JavaScript.
     *
     * @since 1.3.0.
     *
     * @return array
     */
    function foodica_font_choices_placeholder() {
        return array( 'placeholder' => __( 'Loading&hellip;', 'wpzoom' ) );
    }
endif;

if ( ! function_exists( 'foodica_all_font_choices' ) ) :
    /**
     * Packages the font choices into value/label pairs for use with the customizer.
     *
     * @return array    The fonts in value/label pairs.
     */
    function foodica_all_font_choices() {
        $fonts   = foodica_get_all_fonts();
        $choices = array();

        // Repackage the fonts into value/label pairs
        foreach ( $fonts as $key => $font ) {
            $choices[ $key ] = $font['label'];
        }

        /**
         * Allow for developers to modify the full list of fonts.
         *
         * @param array    $choices    The list of all fonts.
         */
        return apply_filters( 'foodica_all_font_choices', $choices );
    }
endif;

if ( ! function_exists( 'foodica_all_font_choices_js' ) ) :
    /**
     * Compile the font choices for better handling as a JSON object
     *
     * @return array
     */
    function foodica_all_font_choices_js() {
        $fonts   = foodica_get_all_fonts();
        $choices = array();

        // Repackage the fonts into value/label pairs
        foreach ( $fonts as $key => $font ) {
            $choices[] = array( 'k' => $key, 'l' => $font['label'] );
        }

        return $choices;
    }
endif;

if ( ! function_exists( 'foodica_get_all_fonts' ) ) :
    /**
     * Compile font options from different sources.
     *
     * @return array    All available fonts.
     */
    function foodica_get_all_fonts() {
        $heading1       = array( 1 => array( 'label' => sprintf( '--- %s ---', __( 'Standard Fonts', 'wpzoom' ) ) ) );
        $standard_fonts = foodica_get_standard_fonts();
        $heading2       = array( 2 => array( 'label' => sprintf( '--- %s ---', __( 'Google Fonts', 'wpzoom' ) ) ) );
        $google_fonts   = foodica_get_google_fonts();

        /**
         * Allow for developers to modify the full list of fonts.
         *
         * @param array    $fonts    The list of all fonts.
         */
        return apply_filters( 'foodica_all_fonts', array_merge( $heading1, $standard_fonts, $heading2, $google_fonts ) );
    }
endif;

if ( ! function_exists( 'foodica_get_standard_fonts' ) ) :
    /**
     * Return an array of standard websafe fonts.
     *
     * @return array    Standard websafe fonts.
     */
    function foodica_get_standard_fonts() {
        /**
         * Allow for developers to modify the standard fonts.
         *
         * @param array    $fonts    The list of standard fonts.
         */
        return apply_filters( 'foodica_get_standard_fonts', array(
            'serif' => array(
                'label' => _x( 'Serif', 'font style', 'wpzoom' ),
                'stack' => 'Georgia,Times,"Times New Roman",serif'
            ),
            'sans-serif' => array(
                'label' => _x( 'Sans Serif', 'font style', 'wpzoom' ),
                'stack' => '"Helvetica Neue",Helvetica,Arial,sans-serif'
            ),
            'monospace' => array(
                'label' => _x( 'Monospaced', 'font style', 'wpzoom' ),
                'stack' => 'Monaco,"Lucida Sans Typewriter","Lucida Typewriter","Courier New",Courier,monospace'
            )
        ) );
    }
endif;


if ( ! function_exists( 'foodica_get_google_fonts' ) ) :
    /**
     * Return an array of all available Google Fonts.
     *
     * @return array    All Google Fonts.
     */
    function foodica_get_google_fonts() {
        /**
         * Allow for developers to modify the allowed Google fonts.
         *
         * @param array    $fonts    The list of Google fonts with variants and subsets.
         */
        return foodica_get_google_fonts_from_api();
    }
endif;

if (!function_exists('foodica_get_google_fonts_from_api')) :

    function foodica_get_google_fonts_from_api()
    {
        $api_url = apply_filters('foodica_google_fonts_api_url', 'https://www.googleapis.com/webfonts/v1/webfonts?key=');
        $api_key = apply_filters('foodica_google_fonts_api_key', 'AIzaSyALmRY1LOeH4eIRhrQ35yJPHHAye9ujPkA');
        if (($transient = get_site_transient('foodica_google_fonts_json')) === false) {

            $response = wp_remote_get($api_url . $api_key);
            $transient = wp_remote_retrieve_body($response);

            if (
                200 === wp_remote_retrieve_response_code($response)
                &&
                !is_wp_error($transient) && !empty($transient)
            ) {
                set_site_transient('foodica_google_fonts_json', $transient, WEEK_IN_SECONDS);
            }
        }

        $transient = json_decode($transient, true);
        $transient = array_reduce($transient['items'], 'foodica_transform_google_fonts_array', array());
        return apply_filters('foodica_get_google_fonts_from_api', $transient);
    }
endif;

if (!function_exists('foodica_transform_google_fonts_array')):
    /**
     * Create new array of fonts from api google fonts api response.
     *
     * @param $collector
     * @param $active
     * @return mixed
     */
    function foodica_transform_google_fonts_array($collector, $active)
    {
        $collector[$active['family']] = array(
            'label' => $active['family'],
            'variants' => $active['variants'],
            'subsets' => $active['subsets']
        );
        return $collector;
    }
endif;