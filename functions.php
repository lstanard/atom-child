<?php

/**
 * catalyst_wp_theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package catalyst_wp_theme
 */
add_action(
    'after_setup_theme',
    /**
     * Sets up theme defaults and registers support for various WordPress features and loads our various actions.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */

    function () {
        //auto load scripts
        foreach (glob(get_stylesheet_directory() . "/config/*.php") as $filename) {
            require_once($filename);
        }
        foreach (glob(get_stylesheet_directory() . "/hooks/*.php") as $filename) {
            require_once($filename);
        }

        /**
         * Custom includes below:
         */
    },
    1
);
