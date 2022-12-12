<?php
/**
 * Register Block Pattern Category.
 *
 * @package ARTISANTE
 * @since 2.0.0
 */

if ( function_exists( 'register_block_pattern_category' ) ) {
	register_block_pattern_category(
		'site-footer',
		array( 'label' => esc_html__( 'Site footers', 'ARTISANTE' ) )
	);
}

if ( function_exists( 'register_block_pattern_category' ) ) {
	register_block_pattern_category(
		'site-header',
		array( 'label' => esc_html__( 'Site headers', 'ARTISANTE' ) )
	);
}

if ( function_exists( 'register_block_pattern_category' ) ) {
	register_block_pattern_category(
		'layout',
		array( 'label' => esc_html__( 'Page layouts', 'ARTISANTE' ) )
	);
}