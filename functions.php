<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ARTISANTE
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'ARTISANTE_VERSION', wp_get_theme()->get( 'Version' ) );

/*
 * Check if the WordPress version is 6.0 or higher, and if the PHP version is at least 7.2.
 * If not, do not activate.
 */
if ( version_compare( $GLOBALS['wp_version'], '6.0', '<' ) || version_compare( PHP_VERSION_ID, '70200', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Adds theme-supports.
 *
 * @since 1.2.4
 * @return void
 */
function ARTISANTE_setup() {
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );
	// Enqueue editor styles.
	add_theme_support( 'editor-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	add_theme_support( 'post-thumbnails' );

}
add_action( 'after_setup_theme', 'ARTISANTE_setup' );

// Block styles.
require_once 'inc/block-styles.php';

// Block categories.
require_once 'inc/block-pattern-categories.php';

/**
 * Enqueue the style.css file.
 *
 * @return void
 * @since 1.0.0
 */
function ARTISANTE_styles() {
	wp_enqueue_style(
		'ARTISANTE-style',
		get_stylesheet_uri(),
		[],
		ARTISANTE_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'ARTISANTE_styles' );

/**
 * Enqueue the script file.
 *
 * @return void
 * @since 1.0.1
 */
function ARTISANTE_scripts() {
	wp_enqueue_script(
		'ARTISANTE-script', get_template_directory_uri() . '/js/script.js', array(), ARTISANTE_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'ARTISANTE_scripts' );

/**
 * Show '(No title)' if post has no title.
 */
add_filter(
	'the_title',
	function( $title ) {
		if ( ! is_admin() && empty( $title ) ) {
			$title = __( '(No title)', 'ARTISANTE' );
		}

		return $title;
	}
);
