<?php
/**
 * Menus configuration.
 *
 * @package Epagreenlite
 */

add_action( 'after_setup_theme', 'epagreenlite_register_menus', 5 );
function epagreenlite_register_menus() {

	register_nav_menus( array(
		'main'   => esc_html__( 'Main', 'epagreenlite' ),
		'footer' => esc_html__( 'Footer', 'epagreenlite' ),
		'social' => esc_html__( 'Social', 'epagreenlite' ),
	) );
}
