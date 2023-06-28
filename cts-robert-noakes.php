<?php
/*!
 * Plugin Name: cts robert noakes
 * Description: cts plugin for customwp.io assessment
 * Version:     1.0.0
 * Author:      Robert Noakes
 * Author URI:  https://robertnoakes.com/
 * Text Domain: cts-robert-noakes
 * Domain Path: /languages/
 * Copyright:   (c) 2023 Robert Noakes (mr@robertnoakes.com)
 * License:     GNU General Public License v3.0
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */
 
add_action( 'plugins_loaded', 'cts_robert_noakes_plugins_loaded' );

/**
 * Load the plugin functionality.
 *
 * @since 1.0.0
 *
 * @return void
 */
function cts_robert_noakes_plugins_loaded() {
	add_action( 'init', 'cts_robert_noakes_init' );
	
	$includes_path = $base_path = dirname(__FILE__) . '/includes/';
	
	require_once( $includes_path . 'class-company.php' );
	require_once( $includes_path . 'class-employee.php' );
}

/**
 * Initialize the plugin.
 *
 * @since 1.0.0
 *
 * @return void
 */
function cts_robert_noakes_init() {
	load_plugin_textdomain( 'cts-robert-noakes', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	
	register_post_type( 'employee', array(
		'labels' => array(
			'name'          => __( 'Employees', 'cta-robert-noakes' ),
			'singular_name' => __( 'Employee', 'cta-robert-noakes' )
		),
		
		'public' => true
	) );
	
	register_post_type( 'company', array(
		'labels' => array(
			'name'          => __( 'Companies', 'cta-robert-noakes' ),
			'singular_name' => __( 'Company', 'cta-robert-noakes' )
		),
		
		'public' => true
	) );
}
