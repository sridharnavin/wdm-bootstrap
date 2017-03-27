<?php
/**
 * WDM Bootstrap functions and definitions
 *
 * @since 1.0
 */

/**
 * Enqueue scripts and styles.
 */
function wdm_bootstrap_scripts() {
	// Theme stylesheet.
	wp_enqueue_style( 'wdm-bootstrap-custom-style', get_stylesheet_uri() );
	wp_enqueue_style('bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
}
add_action( 'wp_enqueue_scripts', 'wdm_bootstrap_scripts' );