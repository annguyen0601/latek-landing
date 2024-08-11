<?php
/**
 * Apex Market Theme Customizer
 *
 * @package apex_market
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function apex_market_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Load sanitize functions.
	include get_template_directory() . '/apex-library/sanitize.php';

	// Load header options.
	include get_template_directory() . '/apex-library/header-options.php';

	// Load home options.
	include get_template_directory() . '/apex-library/home-options.php';

	// Load theme options.
	include get_template_directory() . '/apex-library/theme-options.php';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'apex_market_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'apex_market_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'apex_market_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function apex_market_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function apex_market_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function apex_market_customize_preview_js() {
	wp_enqueue_script( 'apex-market-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'apex_market_customize_preview_js' );