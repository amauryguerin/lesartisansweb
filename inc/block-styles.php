<?php
/**
 * Block styles.
 *
 * @package ARTISANTE
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @return void
 */
function ARTISANTE_register_block_styles() {
/* 	register_block_style(
		'core/columns',
		array(
			'name'  => 'ARTISANTE-box-shadow',
			'label' => __( 'Box shadow', 'ARTISANTE' ),
		)
	); */
}
add_action( 'init', 'ARTISANTE_register_block_styles' );
