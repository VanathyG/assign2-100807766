<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

function musicalinstrumentschild_wp_enqueue_scripts() {
    $parenthandle = 'twentytwentyone-style'; // This is 'twentytwentyone-style' for the Twenty Twenty One theme.
    $theme = wp_get_theme();
    wp_enqueue_style(
        $parenthandle, get_template_directory_uri() . '/style.css',
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style(
        'musicalinstrumentschild-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}
add_action( 'wp_enqueue_scripts', 'musicalinstrumentschild_wp_enqueue_scripts' );

