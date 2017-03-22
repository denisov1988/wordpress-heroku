<?php
/*-----------------------------------------------------------------------------------*/
/* Initializing Widgetized Areas (Sidebars)				 							 */
/*-----------------------------------------------------------------------------------*/


register_sidebar(array('name'=>'Sidebar',
   'id' => 'Sidebar',
   'before_widget' => '<div class="widget %2$s" id="%1$s">',
   'after_widget' => '<div class="clear"></div></div>',
   'before_title' => '<h3 class="title">',
   'after_title' => '</h3>',
));


register_sidebar(array('name'=>'Homepage (Below the Slider)',
    'id' => 'homepage-top',
    'description' => 'Widget area for: 2-4 "Featured Category" widgets or 1 "WPZOOM: Carousel Slider" widget.',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget' => '<div class="clear"></div></div>',
    'before_title' => '<h3 class="title">',
    'after_title' => '</h3>',
));


register_sidebar(array('name'=>'Single Post (after content)',
   'id' => 'sidebar-post',
   'description' => 'Widget area that appears in individual posts after the content. Can be used for a Newsletter Form (Recommended plugin: MailPoet).',
   'before_widget' => '<div class="widget %2$s" id="%1$s">',
   'after_widget' => '<div class="clear"></div></div>',
   'before_title' => '<h3 class="title">',
   'after_title' => '</h3>',
));


/*----------------------------------*/
/* Footer widgetized areas		    */
/*----------------------------------*/

register_sidebar( array(
    'name'          => 'Footer: Column 1',
    'id'            => 'footer_1',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget'  => '<div class="clear"></div></div>',
    'before_title'  => '<h3 class="title">',
    'after_title'   => '</h3>',
) );

register_sidebar( array(
    'name'          => 'Footer: Column 2',
    'id'            => 'footer_2',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget'  => '<div class="clear"></div></div>',
    'before_title'  => '<h3 class="title">',
    'after_title'   => '</h3>',
) );

register_sidebar( array(
    'name'          => 'Footer: Column 3',
    'id'            => 'footer_3',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget'  => '<div class="clear"></div></div>',
    'before_title'  => '<h3 class="title">',
    'after_title'   => '</h3>',
) );

register_sidebar( array(
    'name'          => 'Footer: Column 4',
    'id'            => 'footer_4',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget'  => '<div class="clear"></div></div>',
    'before_title'  => '<h3 class="title">',
    'after_title'   => '</h3>',
) );


register_sidebar(array('name'=>'Footer (Full-width Area)',
    'description' => 'Widget area for "Instagram" widget.',
    'id' => 'widgetized_section',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget' => '<div class="clear"></div></div>',
    'before_title' => '<h3 class="title">',
    'after_title' => '</h3>',
));



/* WooCommerce Sidebar
===============================*/

register_sidebar( array(
    'name'          => 'WooCommerce Sidebar',
    'id'            => 'sidebar-shop',
    'description'   => 'Right sidebar for WooCommerce pages. Leave empty for a full-width shop page.',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget'  => '<div class="cleaner">&nbsp;</div></div>',
    'before_title'  => '<h3 class="title">',
    'after_title'   => '</h3>',
) );



/* Header - for social icons
===============================*/

register_sidebar(array(
    'name'=>'Header Social Icons',
    'id' => 'header_social',
    'description' => 'Widget area in the header. Install the "Social Icons Widget by WPZOOM" plugin and add the widget here.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="title"><span>',
    'after_title' => '</span></h3>',
));
