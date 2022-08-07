<?php

add_action('wp_enqueue_scripts', 'wordcamp_lyon_add_styles');

/**
 * Enqueue parent and child styles.
 */
function wordcamp_lyon_add_styles(){
    $parenthandle = 'twentytwenty-style';
    $theme = wp_get_theme();

    // Parent styles.
    wp_enqueue_style(
        $parenthandle,
        get_template_directory_uri() . '/style.css',
        array(),
        $theme->parent()->get('Version')
    );

    // Child styles.
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/build/style-index.css',
        array( $parenthandle )
    );
}
