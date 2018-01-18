<?php

/* ----------------------------------------------------------------------------------
Register Child Styles & Scripts
---------------------------------------------------------------------------------- */
add_action('wp_enqueue_scripts', function () {
    if (!is_admin()) {
        wp_register_style(
            'catalystwp-child-styles',
            get_stylesheet_directory_uri() . '/assets/build/css/main.css'
        );
    } // End if !is_admin()
}, 5);

/* ----------------------------------------------------------------------------------
Enqueue custom Styles & Scripts
---------------------------------------------------------------------------------- */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('catalystwp-child-styles');
}, 125);
