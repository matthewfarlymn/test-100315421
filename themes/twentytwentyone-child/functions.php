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

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_child_scripts() {
	wp_enqueue_style( 'twenty-twenty-one-child', get_stylesheet_uri(), array( 'twenty-twenty-one-style' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_child_scripts' );
