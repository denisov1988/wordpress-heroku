<?php
/**
 * Theme functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 */

if ( ! function_exists( 'foodica_setup' ) ) :
/**
 * Theme setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 */
function foodica_setup() {
    // This theme styles the visual editor to resemble the theme style.
    add_editor_style( array( 'css/editor-style.css' ) );

    /* Image Sizes */

    add_image_size( 'loop', 360, 240, true );
    add_image_size( 'loop-sticky', 750, 500, true );
    add_image_size( 'loop-large', 750 );
    add_image_size( 'loop-full', 1140, 500, true );

    add_image_size( 'featured-cat-small', 90, 70, true );


    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    // Register nav menus
    register_nav_menus( array(
        'secondary' => __( 'Top Menu', 'wpzoom' ),
        'primary' => __( 'Main Menu', 'wpzoom' ),
        'tertiary' => __( 'Footer Menu', 'wpzoom' )

    ) );


    /*
     * JetPack Infinite Scroll
     */
    add_theme_support( 'infinite-scroll', array(
        'container' => 'recent-posts',
        'wrapper' => false,
        'footer' => false
    ) );

}
endif;
add_action( 'after_setup_theme', 'foodica_setup' );



/*  Add support for Custom Background
==================================== */

add_theme_support( 'custom-background' );


/*  Add Support for Shortcodes in Excerpt
========================================== */

add_filter( 'the_excerpt', 'shortcode_unautop' );
add_filter( 'the_excerpt', 'do_shortcode' );

add_filter( 'widget_text', 'shortcode_unautop' );
add_filter( 'widget_text', 'do_shortcode' );



/*  Recommended Plugins
========================================== */
function zoom_register_theme_required_plugins_callback($plugins){

    $plugins =  array_merge(array(

        array(
            'name'         => 'Jetpack',
            'slug'         => 'jetpack',
            'required'     => false,
        ),

        array(
            'name'         => 'Instagram Widget by WPZOOM',
            'slug'         => 'instagram-widget-by-wpzoom',
            'required'     => false,
        ),

        array(
            'name'         => 'MailPoet Newsletters',
            'slug'         => 'wysija-newsletters',
            'required'     => false,
        ),

        array(
            'name'         => 'Rating-Widget: Star Review System',
            'slug'         => 'rating-widget',
            'required'     => false,
        )

    ), $plugins);

    return $plugins;
}

add_filter('zoom_register_theme_required_plugins', 'zoom_register_theme_required_plugins_callback');




/*  Let users change "Older Posts" button text from Jetpack Infinite Scroll
========================================== */

function foodica_infinite_scroll_js_settings( $settings ) {
    $settings['text'] = esc_js( esc_html( option::get( 'infinite_scroll_handle_text' ) ) );

    return $settings;
}
add_filter( 'infinite_scroll_js_settings', 'foodica_infinite_scroll_js_settings' );


/* Enable Excerpts for Pages
==================================== */

add_action( 'init', 'wpzoom_excerpts_to_pages' );
function wpzoom_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}



/*  Custom Excerpt Length
==================================== */

function new_excerpt_length( $length ) {
    return (int) option::get( "excerpt_length" ) ? (int)option::get( "excerpt_length" ) : 50;
}

add_filter( 'excerpt_length', 'new_excerpt_length' );



/*  Maximum width for images in posts
=========================================== */

if ( ! isset( $content_width ) ) $content_width = 750;



if ( ! function_exists( 'foodica_get_the_archive_title' ) ) :
/* Custom Archives titles.
=================================== */
function foodica_get_the_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }

    return $title;
}
endif;
add_filter( 'get_the_archive_title', 'foodica_get_the_archive_title' );



if ( ! function_exists( 'foodica_alter_main_query' ) ) :
/**
 * Alter main WordPress Query to exclude specific categories
 * and posts from featured slider if this is configured via Theme Options.
 *
 * @param $query WP_Query
 */
function foodica_alter_main_query( $query ) {
    // until this is fixed https://core.trac.wordpress.org/ticket/27015
    $is_front = false;

    if ( get_option( 'page_on_front' ) == 0 ) {
        $is_front = is_front_page();
    } else {
        $is_front = $query->get( 'page_id' ) == get_option( 'page_on_front' );
    }

    if ( $query->is_main_query() && $is_front ) {
        if ( option::is_on( 'hide_featured' ) ) {
            $featured_posts = new WP_Query( array(
                'post__not_in'   => get_option( 'sticky_posts' ),
                'posts_per_page' => option::get( 'slideshow_posts' ),
                'meta_key'       => 'wpzoom_is_featured',
                'meta_value'     => 1
            ) );

            $postIDs = array();
            while ( $featured_posts->have_posts() ) {
                $featured_posts->the_post();
                $postIDs[] = get_the_ID();
            }

            wp_reset_postdata();

            $query->set( 'post__not_in', $postIDs );
        }

        if ( count( option::get( 'recent_part_exclude' ) ) ) {
            $query->set( 'cat', '-' . implode( ',-', (array) option::get('recent_part_exclude') ) );
        }
    }
}
endif;
add_action( 'pre_get_posts', 'foodica_alter_main_query' );





/* Register custom shortcodes
==================================== */

function wpz_shortcode_ingredients( $atts, $content = null ) {
    extract( shortcode_atts( array(
      'title' => __( 'Ingredients', 'wpzoom' ),
    ), $atts ) );

    return '<div class="shortcode-ingredients"><h3>' . esc_attr($title) . '</h3>' . do_shortcode( $content ) . '</div>' . "\n";
}
add_shortcode( 'ingredients', 'wpz_shortcode_ingredients' );

function wpz_shortcode_directions( $atts, $content = null ) {
    extract( shortcode_atts( array(
      'title' => __( 'Directions', 'wpzoom' ),
    ), $atts ) );

    return '<div class="shortcode-directions instructions"><h3>' . esc_attr($title) . '</h3>' . do_shortcode( $content ) . '</div>' . "\n";
}
add_shortcode( 'directions', 'wpz_shortcode_directions' );

function add_recipe_buttons() {
    if ( !current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
        return;
    }

    if ( get_user_option('rich_editing') == 'true' ) {
        add_filter( 'mce_external_plugins', 'add_recipe_tinymce_plugin' );
        add_filter( 'mce_buttons', 'register_recipe_buttons' );
    }
}
add_action( 'init', 'add_recipe_buttons' );

function register_recipe_buttons( $buttons ) {
    array_push( $buttons, "|", "ingredients", "directions" );
    return $buttons;
}
function add_recipe_tinymce_plugin( $plugin_array ) {
    $plugin_array['recipe'] = get_template_directory_uri() . '/functions/assets/js/recipe_buttons.js';
    return $plugin_array;
}

function recipe_refresh_mce( $ver ) {
    $ver += 3;
    return $ver;
}
add_filter( 'tiny_mce_version', 'recipe_refresh_mce' );

function recipe_enqueue_scripts() {
    wp_localize_script(
        'jquery',
        'wpzRecipeL10n',
        array(
            'titleIngredients' => __( 'WPZOOM Recipe Ingredients Shortcode', 'wpzoom' ),
            'titleDirections' => __( 'WPZOOM Recipe Directions Shortcode', 'wpzoom' ),
            'listItemsHere' => __( 'Place your list items here', 'wpzoom' ),
            'shortcodeIngredientsTitle' => __( 'Ingredients', 'wpzoom' ),
            'shortcodeDirectionsTitle' => __( 'Directions', 'wpzoom' )
        )
    );
}
add_action( 'admin_enqueue_scripts', 'recipe_enqueue_scripts' );


/* Register Custom Fields in Profile: Facebook, Twitter
===================================================== */

add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>

    <h3><?php _e('Additional Profile Information', 'wpzoom'); ?></h3>

    <table class="form-table">


        <tr>
            <th><label for="twitter"><?php _e('Twitter Username', 'wpzoom'); ?></label></th>

            <td>
                <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e('Please enter your Twitter username', 'wpzoom'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="facebook_url"><?php _e('Facebook Profile URL', 'wpzoom'); ?></label></th>

            <td>
                <input type="text" name="facebook_url" id="facebook_url" value="<?php echo esc_attr( get_the_author_meta( 'facebook_url', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e('Please enter your Facebook profile URL', 'wpzoom'); ?></span>
            </td>
        </tr>

        <tr>
            <th><label for="facebook_url"><?php _e('Instagram Username', 'wpzoom'); ?></label></th>

            <td>
                <input type="text" name="instagram_url" id="instagram_url" value="<?php echo esc_attr( get_the_author_meta( 'instagram_url', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e('Please enter your Instagram username', 'wpzoom'); ?></span>
            </td>
        </tr>

    </table>
<?php }

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

    if ( !current_user_can( 'edit_user', $user_id ) )
        return false;

    update_user_meta( $user_id, 'instagram_url', $_POST['instagram_url'] );
    update_user_meta( $user_id, 'facebook_url', $_POST['facebook_url'] );
    update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
}



/* Enqueue scripts and styles for the front end.
=========================================== */

function foodica_scripts() {
    if ( '' !== $google_request = foodica_get_google_font_uri() ) {
        wp_enqueue_style( 'foodica-google-fonts', $google_request, WPZOOM::$themeVersion );
    }

    // Load our main stylesheet.
    wp_enqueue_style( 'foodica-style', get_stylesheet_uri() );

    wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/css/media-queries.css', array(), WPZOOM::$themeVersion );

    wp_enqueue_style( 'foodica-google-font-default', '//fonts.googleapis.com/css?family=Cabin:400,500|Annie+Use+Your+Telescope|Roboto+Condensed:400,700|Roboto+Slab:400,700,300|Merriweather:400,400italic,700,700italic&subset=latin,cyrillic,greek' );

    wp_enqueue_style( 'dashicons' );

    wp_enqueue_script( 'mmenu', get_template_directory_uri() . '/js/jquery.mmenu.min.all.js', array( 'jquery' ), WPZOOM::$themeVersion, true );

    wp_enqueue_script( 'flickity', get_template_directory_uri() . '/js/flickity.pkgd.min.js', array(), WPZOOM::$themeVersion, true );

    wp_enqueue_script( 'fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), WPZOOM::$themeVersion, true );

    wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.min.js', array( 'jquery' ), WPZOOM::$themeVersion, true );

    wp_enqueue_script( 'search_button', get_template_directory_uri() . '/js/search_button.js', array(), WPZOOM::$themeVersion, true );

    $themeJsOptions = option::getJsOptions();

    wp_enqueue_script( 'foodica-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), WPZOOM::$themeVersion, true );
    wp_localize_script( 'foodica-script', 'zoomOptions', $themeJsOptions );
}

add_action( 'wp_enqueue_scripts', 'foodica_scripts' );