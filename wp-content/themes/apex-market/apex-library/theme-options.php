<?php
/**
 * Theme Options.
 *
 * @package apex_market
 */

// Add Panel.
$wp_customize->add_panel( 'theme_option_panel',
	array(
	'title'      => __( 'Theme Options', 'apex-market' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

// Sidebar section
$wp_customize->add_section('section_sidebar', array(    
	'title'       => __('Sidebar Options', 'apex-market'),
	'panel'       => 'theme_option_panel'    
));

// Blog Sidebar Option
$wp_customize->add_setting('blog_sidebar', 
	array(
	'default' 			=> 'right-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'apex_market_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('blog_sidebar', 
	array(		
	'label' 	=> __('Blog Sidebar', 'apex-market'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'blog_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'apex-market'),						
		'right-sidebar' => __( 'Right Sidebar', 'apex-market'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'apex-market'),	
		),	
	)
);

// Single Post Sidebar Option
$wp_customize->add_setting('single_post_sidebar', 
	array(
	'default' 			=> 'right-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'apex_market_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('single_post_sidebar', 
	array(		
	'label' 	=> __('Single Post Sidebar', 'apex-market'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'single_post_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'apex-market'),						
		'right-sidebar' => __( 'Right Sidebar', 'apex-market'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'apex-market'),	
		),	
	)
);

// Archive Sidebar Option
$wp_customize->add_setting('archive_sidebar', 
	array(
	'default' 			=> 'right-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'apex_market_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('archive_sidebar', 
	array(		
	'label' 	=> __('Archive Sidebar', 'apex-market'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'archive_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'apex-market'),						
		'right-sidebar' => __( 'Right Sidebar', 'apex-market'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'apex-market'),	
		),	
	)
);

// Page Sidebar Option
$wp_customize->add_setting('page_sidebar', 
	array(
	'default' 			=> 'no-sidebar',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'apex_market_sanitize_select',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control('page_sidebar', 
	array(		
	'label' 	=> __('Page Sidebar', 'apex-market'),
	'section' 	=> 'section_sidebar',
	'settings'  => 'page_sidebar',
	'type' 		=> 'radio',
	'choices' 	=> array(		
		'left-sidebar' 	=> __( 'Left Sidebar', 'apex-market'),						
		'right-sidebar' => __( 'Right Sidebar', 'apex-market'),	
		'no-sidebar' 	=> __( 'No Sidebar', 'apex-market'),	
		),	
	)
);

// Excerpt Length
$wp_customize->add_section('section_excerpt_length', 
	array(    
	'title'       => __('Excerpt Length', 'apex-market'),
	'panel'       => 'theme_option_panel'    
	)
);

$wp_customize->add_setting( 'excerpt_length', array(
	'default'           => '15',
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'apex_market_sanitize_number_range',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'excerpt_length', array(
	'label'       => __( 'Excerpt Length', 'apex-market' ),
	'description' => __( 'Note: Min 5 & Max 100.', 'apex-market' ),
	'section'     => 'section_excerpt_length',
	'type'        => 'number',
	'input_attrs' => array( 'min' => 5, 'max' => 100, 'style' => 'width: 55px;' ),
) );

// Read More
$wp_customize->add_section('section_read_more', 
	array(    
	'title'       => __('Read More', 'apex-market'),
	'panel'       => 'theme_option_panel'    
	)
);

$wp_customize->add_setting( 'apex_market_read_more_label', array(
	'default'           => esc_html__('Read More', 'apex-market'),
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'apex_market_read_more_label', array(
	'label'       => __( 'Read More Label', 'apex-market' ),
	'section'     => 'section_read_more',
	'type'        => 'text',
) );