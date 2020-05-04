<?php
/**
 * SMNTCS Orion functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage SMNTCS_Orion
 * @since 1.0.0
 */

/**
 * Register and enqueue styles.
 *
 * @since 1.0.0
 */
function smntcs_orion_register_styles() {

	$parent_style = 'smntcs-orion-parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', null, '1.2' );
	wp_enqueue_style( 'smntcs-orion-child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get( 'Version' ) );
	wp_style_add_data( 'smntcs-retro-child-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'smntcs_orion_register_styles' );
