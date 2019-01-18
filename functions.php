<?php
// Ikony - thumbnails
add_theme_support( 'post-thumbnails' );

function remove_max_srcset_image_width( $max_width ) {
    $max_width = 1800;
    return $max_width;
}
add_filter( 'max_srcset_image_width', 'remove_max_srcset_image_width' );

add_image_size( 'full-hd', 1920, 1080 );
add_image_size( 'tablet-retina', 1536, 0 );
add_image_size( 'laptop', 1366, 0 );
add_image_size( 'tablet', 600, 0 );
add_image_size( 'mobile-xhq', 500, 0 );
add_image_size( 'mobile-hq', 400, 0 );
add_image_size( 'mobile-lq', 200, 0 );

function content_image_sizes_attr($sizes, $size) {
    $width = $size[0];
 
    return '(max-width: 2160px) 100vw, 2160px';
}
add_filter('wp_calculate_image_sizes', 'content_image_sizes_attr', 10 , 2);

//responsywne CSSy
function galeria_scripts() {

    wp_enqueue_style( 
        'galeria-mobile',
        get_stylesheet_directory_uri() . '/mobile.css',
        array(),
        null,
        'screen and (orientation: portrait) and (max-width: 430px)' 
    );
 
    wp_enqueue_style( 
        'galeria-tablet',
        get_stylesheet_directory_uri() . '/tablet.css',
        array(),
        null,
        'screen and (min-width: 431px) and (max-width: 1024px), screen and (min-width: 700px) and (max-aspect-ratio: 4/3)'
    );

    wp_enqueue_style( 
        'galeria-desktop',
        get_stylesheet_directory_uri() . '/desktop.css',
        array(),
        null,
        'screen and (min-width: 1025px) and (min-aspect-ratio: 4/3)'
    );

}
add_action( 'wp_enqueue_scripts', 'galeria_scripts' );

function loadingScripts(){
    wp_enqueue_script(
        'slider',
        get_template_directory_uri() . '/slider.js',
        false,
        null,
        'true'
    );


    wp_enqueue_script(
        'mobile-menu',
        get_template_directory_uri() . '/mobilemenu.js',
        false,
        null,
        'true'
    );
}

add_action('wp_enqueue_scripts', 'loadingScripts');



function my_home_category( $query ) { 
    if ( $query->is_home() && $query->is_main_query() ) 
    { $query->set( 'cat', '2, 3, 4'); } 
    } 
    add_action( 'pre_get_posts', 'my_home_category' );