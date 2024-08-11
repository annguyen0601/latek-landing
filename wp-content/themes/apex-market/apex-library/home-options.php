<?php
/**
 * Theme Options.
 *
 * @package apex_market
 */

// Home
$wp_customize->add_section('apex_market_home_settings', 
	array(    
	'title'       => __('Home Options', 'apex-market'),
	'priority'   => 90,
	'panel'       => 'home_option_panel'
	)
);

//Home Main Heading

$wp_customize->add_setting( 'apex_market_main_heading', array(
	'default'           => esc_html__('Growth Your Business','apex-market'),
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'apex_market_main_heading', array(
	'label'       => __( 'Home Main Heading', 'apex-market' ),
	'section'     => 'apex_market_home_settings',
	'type'        => 'text',
) );

//Home Heading

$wp_customize->add_setting( 'apex_market_heading', array(
	'default'           => esc_html__('Building The Right Foundation Of Your Business','apex-market'),
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'apex_market_heading', array(
	'label'       => __( 'Home Heading', 'apex-market' ),
	'section'     => 'apex_market_home_settings',
	'type'        => 'text',
) );

//Home Content

$wp_customize->add_setting( 'apex_market_content', array(
	'default'           => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','apex-market'),
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'apex_market_content', array(
	'label'       => __( 'Home Content', 'apex-market' ),
	'section'     => 'apex_market_home_settings',
	'type'        => 'text',
) );

//Home Button

$wp_customize->add_setting( 'apex_market_home_button_text', array(
	'default'           => esc_html__('View A Services','apex-market'),
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'apex_market_home_button_text', array(
	'label'       => __( 'Home Button Text', 'apex-market' ),
	'section'     => 'apex_market_home_settings',
	'type'        => 'text',
) );

$wp_customize->add_setting( 'apex_market_home_button_url', array(
	'default'           => '',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'esc_url_raw',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'apex_market_home_button_url', array(
	'label'       => __( 'Home Button Link', 'apex-market' ),
	'section'     => 'apex_market_home_settings',
	'type'        => 'url',
) );

//-------------------------------------------------------//

// Director
$wp_customize->add_section('apex_market_profile_settings', 
	array(    
	'title'       => __('Profile Options', 'apex-market'),
	'priority'   => 90,
	'panel'       => 'home_option_panel'
	)
);

//Director Image

$wp_customize->add_setting('apex_market_director_image', array(
	'default' => get_template_directory_uri() . '/assets/images/profile.png',
	'sanitize_callback' => 'apex_market_sanitize_image'
));

$wp_customize->add_control( new WP_Customize_Image_Control ($wp_customize,
	'apex_market_director_image', array(
		'label' => __( 'Profile Image', 'apex-market' ),
		'section' => 'apex_market_profile_settings',
		'settings' => 'apex_market_director_image'
	)
));

//Director Name

$wp_customize->add_setting( 'apex_market_director_name', array(
	'default'           => esc_html__('James Jackson','apex-market'),
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'apex_market_director_name', array(
	'label'       => __( 'Profile Name', 'apex-market' ),
	'section'     => 'apex_market_profile_settings',
	'type'        => 'text',
) );

//Director Designation

$wp_customize->add_setting( 'apex_market_director_designation', array(
	'default'           => esc_html__('CEO','apex-market'),
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'apex_market_director_designation', array(
	'label'       => __( 'Designation', 'apex-market' ),
	'section'     => 'apex_market_profile_settings',
	'type'        => 'text',
) );

//Director Content

$wp_customize->add_setting( 'apex_market_director_content', array(
	'default'           => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','apex-market'),
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'apex_market_director_content', array(
	'label'       => __( 'Profile Content', 'apex-market' ),
	'section'     => 'apex_market_profile_settings',
	'type'        => 'text',
) );

//-------------------------------------------------------//

// Images
$wp_customize->add_section('apex_market_images_settings', 
	array(    
	'title'       => __('Image Options', 'apex-market'),
	'priority'   => 90,
	'panel'       => 'home_option_panel'
	)
);

//Image 1

$wp_customize->add_setting('apex_market_image_one', array(
	'default' => get_template_directory_uri() . '/assets/images/image1.png',
	'sanitize_callback' => 'apex_market_sanitize_image',
));

$wp_customize->add_control( new WP_Customize_Image_Control ($wp_customize,
	'apex_market_image_one', array(
		'label' => __( 'Image One', 'apex-market' ),
		'section' => 'apex_market_images_settings',
		'settings' => 'apex_market_image_one'
	)
));

//Image 2

$wp_customize->add_setting('apex_market_image_two', array(
	'default' => get_template_directory_uri() . '/assets/images/image2.png',
	'sanitize_callback' => 'apex_market_sanitize_image',
));

$wp_customize->add_control( new WP_Customize_Image_Control ($wp_customize,
	'apex_market_image_two', array(
		'label' => __( 'Image Two', 'apex-market' ),
		'section' => 'apex_market_images_settings',
		'settings' => 'apex_market_image_two'
	)
));