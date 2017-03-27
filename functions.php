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
	wp_register_style( 'wdm-bootstrap-custom-style', get_stylesheet_uri(), array(), null, 'all' );
	wp_enqueue_style( 'wdm-bootstrap-custom-style' );
	wp_register_style('bootstrap-style', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), null, 'all' );
	wp_enqueue_style( 'bootstrap-style' );
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//code.jquery.com/jquery-3.2.1.min.js', array(), null, false );
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'bootstrap-jquery', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bootstrap-jquery' );
}
add_action( 'wp_enqueue_scripts', 'wdm_bootstrap_scripts' );