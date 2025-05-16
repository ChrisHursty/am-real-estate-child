<?php
/**
 * AM Real Estate Child functions.php
 */

// 1) Enqueue parent + child styles:
add_action( 'wp_enqueue_scripts', function() {
    // Parent
    wp_enqueue_style( 'amre-parent-style', get_template_directory_uri() . '/style.css' );
    // Child
    wp_enqueue_style( 'amre-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'amre-parent-style' )
    );
} );

// 2) Force the Month view on the main Events archive
add_filter( 'tribe_events_views_v2_default_view', function( $default ) {
    return 'month';
} );
