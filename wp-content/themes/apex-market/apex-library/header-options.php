<?php
/**
 * Theme Options.
 *
 * @package apex_market
 */

// Add Panel.
$wp_customize->add_panel( 'home_option_panel',
	array(
	'title'      => __( 'Homepage Options', 'apex-market' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

// Header
$wp_customize->add_section('apex_market_header_settings', 
	array(    
	'title'       => __('Header Options', 'apex-market'),
	'priority'   => 90,
	'panel'       => 'home_option_panel'
	)
);

//Header Text

$wp_customize->add_setting( 'apex_market_top_header_text', array(
	'default'           => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','apex-market'),
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'apex_market_top_header_text', array(
	'label'       => __( 'Header Text', 'apex-market' ),
	'section'     => 'apex_market_header_settings',
	'type'        => 'text',
) );

//Header Button

$wp_customize->add_setting( 'apex_market_top_header_button', array(
	'default'           => esc_html__('Get A Quote','apex-market'),
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'apex_market_top_header_button', array(
	'label'       => __( 'Header Button Text', 'apex-market' ),
	'section'     => 'apex_market_header_settings',
	'type'        => 'text',
) );

$wp_customize->add_setting( 'apex_market_top_header_button_link', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'apex_market_top_header_button_link', array(
	'label'       => __( 'Header Button Link', 'apex-market' ),
	'section'     => 'apex_market_header_settings',
	'type'        => 'url',
) );