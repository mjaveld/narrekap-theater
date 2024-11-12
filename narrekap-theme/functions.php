<?php
/**
 * Narrekap Theater Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Narrekap
 * @since Narrekap 1.0
 */

add_action( 'wp_enqueue_scripts', 'narrekap_enqueue_styles' );

function narrekap_enqueue_styles() {
    $cache_bust_theme_version = wp_get_theme()->get('Version');
    $cache_bust_development = time();
    $cache_bust = "$cache_bust_theme_version-$cache_bust_development";

    wp_enqueue_style( 
        'narrekap-normalize',
        get_parent_theme_file_uri( 'assets/css/normalize.css' ),
        null,
        $cache_bust);

    wp_enqueue_style( 
        'narrekap-resets',
        get_parent_theme_file_uri( 'assets/css/resets.css' ),
        null,
        $cache_bust);

	wp_enqueue_style( 
        'narrekap-main-style',
        get_stylesheet_uri(),
        array("narrekap-normalize", "narrekap-resets"),
        $cache_bust);
}

 