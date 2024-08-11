<?php
/**
 * Para Theme Customizer
 *
 * @package Para
 */

/**
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Para_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Para_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Para_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Para Pro', 'para' ),
					'pro_text' => esc_html__( 'Go Pro', 'para' ),
					'pro_url'  => esc_url( 'https://www.logicalthemes.com/product/themes/premium-business-wordpress-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'para-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'para-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Para_Customize::get_instance();

function para_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'para_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => esc_html__( 'LT Settings', 'para' ),
	) );

	//Layout Setting
	$wp_customize->add_section( 'para_left_right' , array(
    	'title'      => esc_html__( 'General Settings', 'para' ),
		'priority'   => null,
		'panel' => 'para_panel_id'
	) );

	$wp_customize->add_setting('para_theme_options',array(
        'default' => 'One Column',
        'sanitize_callback' => 'para_sanitize_choices'
	));
	$wp_customize->add_control('para_theme_options',array(
        'type' => 'radio',
        'description' => __( 'Choose sidebar between different options', 'para' ),
        'label' => esc_html__( 'Post Sidebar Layout.', 'para' ),
        'section' => 'para_left_right',
        'choices' => array(
            'One Column' => esc_html__('One Column ','para'),
            'Three Columns' => esc_html__('Three Columns','para'),
            'Four Columns' => esc_html__('Four Columns','para'),
            'Right Sidebar' => esc_html__('Right Sidebar','para'),
            'Left Sidebar' => esc_html__('Left Sidebar','para'),
            'Grid Layout' => esc_html__('Grid Layout','para')
        ),
	));

	$para_font_array = array(
        '' =>'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' =>'Acme', 
        'Anton' => 'Anton', 
        'Architects Daughter' =>'Architects Daughter',
        'Arimo' => 'Arimo', 
        'Arsenal' =>'Arsenal',
        'Arvo' =>'Arvo',
        'Alegreya' =>'Alegreya',
        'Alfa Slab One' =>'Alfa Slab One',
        'Averia Serif Libre' =>'Averia Serif Libre', 
        'Bangers' =>'Bangers', 
        'Boogaloo' =>'Boogaloo', 
        'Bad Script' =>'Bad Script',
        'Bitter' =>'Bitter', 
        'Bree Serif' =>'Bree Serif', 
        'BenchNine' =>'BenchNine',
        'Cabin' =>'Cabin',
        'Cardo' =>'Cardo', 
        'Courgette' =>'Courgette', 
        'Cherry Swash' =>'Cherry Swash',
        'Cormorant Garamond' =>'Cormorant Garamond', 
        'Crimson Text' =>'Crimson Text',
        'Cuprum' =>'Cuprum', 
        'Cookie' =>'Cookie',
        'Chewy' =>'Chewy',
        'Days One' =>'Days One',
        'Dosis' =>'Dosis',
        'Droid Sans' =>'Droid Sans', 
        'Economica' =>'Economica', 
        'Fredoka One' =>'Fredoka One',
        'Fjalla One' =>'Fjalla One',
        'Francois One' =>'Francois One', 
        'Frank Ruhl Libre' => 'Frank Ruhl Libre', 
        'Gloria Hallelujah' =>'Gloria Hallelujah',
        'Great Vibes' =>'Great Vibes', 
        'Handlee' =>'Handlee', 
        'Hammersmith One' =>'Hammersmith One',
        'Inconsolata' =>'Inconsolata',
        'Indie Flower' =>'Indie Flower', 
        'IM Fell English SC' =>'IM Fell English SC',
        'Julius Sans One' =>'Julius Sans One',
        'Josefin Slab' =>'Josefin Slab',
        'Josefin Sans' =>'Josefin Sans',
        'Kanit' =>'Kanit',
        'Lobster' =>'Lobster',
        'Lato' => 'Lato',
        'Lora' =>'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather',
        'Monda' =>'Monda',
        'Montserrat' =>'Montserrat',
        'Muli' =>'Muli',
        'Marck Script' =>'Marck Script',
        'Noto Serif' =>'Noto Serif',
        'Open Sans' =>'Open Sans',
        'Overpass' => 'Overpass', 
        'Overpass Mono' =>'Overpass Mono',
        'Oxygen' =>'Oxygen',
        'Orbitron' =>'Orbitron',
        'Patua One' =>'Patua One',
        'Pacifico' =>'Pacifico',
        'Padauk' =>'Padauk',
        'Playball' =>'Playball',
        'Playfair Display' =>'Playfair Display',
        'PT Sans' =>'PT Sans',
        'Philosopher' =>'Philosopher',
        'Permanent Marker' =>'Permanent Marker',
        'Poiret One' =>'Poiret One',
        'Quicksand' =>'Quicksand',
        'Quattrocento Sans' =>'Quattrocento Sans',
        'Raleway' =>'Raleway',
        'Rubik' =>'Rubik',
        'Rokkitt' =>'Rokkitt',
        'Russo One' => 'Russo One', 
        'Righteous' =>'Righteous', 
        'Slabo' =>'Slabo', 
        'Source Sans Pro' =>'Source Sans Pro',
        'Shadows Into Light Two' =>'Shadows Into Light Two',
        'Shadows Into Light' =>  'Shadows Into Light',
        'Sacramento' =>'Sacramento',
        'Shrikhand' =>'Shrikhand',
        'Tangerine' => 'Tangerine',
        'Ubuntu' =>'Ubuntu',
        'VT323' =>'VT323',
        'Varela Round' =>'Varela Round',
        'Vampiro One' =>'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' =>'Volkhov',
        'Yanone Kaffeesatz' =>'Yanone Kaffeesatz'
    );

	//Typography
	$wp_customize->add_section( 'para_typography', array(
    	'title'      => __( 'Typography', 'para' ),
		'priority'   => null,
		'panel' => 'para_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'para_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_paragraph_color', array(
		'label' => __('Paragraph Color', 'para'),
		'section' => 'para_typography',
		'settings' => 'para_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('para_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'para_sanitize_choices'
	));
	$wp_customize->add_control(
	    'para_paragraph_font_family', array(
	    'section'  => 'para_typography',
	    'label'    => __( 'Paragraph Fonts','para'),
	    'type'     => 'select',
	    'choices'  => $para_font_array,
	));

	$wp_customize->add_setting('para_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','para'),
		'section'	=> 'para_typography',
		'setting'	=> 'para_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'para_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_atag_color', array(
		'label' => __('"a" Tag Color', 'para'),
		'section' => 'para_typography',
		'settings' => 'para_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('para_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'para_sanitize_choices'
	));
	$wp_customize->add_control(
	    'para_atag_font_family', array(
	    'section'  => 'para_typography',
	    'label'    => __( '"a" Tag Fonts','para'),
	    'type'     => 'select',
	    'choices'  => $para_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'para_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_li_color', array(
		'label' => __('"li" Tag Color', 'para'),
		'section' => 'para_typography',
		'settings' => 'para_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('para_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'para_sanitize_choices'
	));
	$wp_customize->add_control(
	    'para_li_font_family', array(
	    'section'  => 'para_typography',
	    'label'    => __( '"li" Tag Fonts','para'),
	    'type'     => 'select',
	    'choices'  => $para_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'para_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_h1_color', array(
		'label' => __('H1 Color', 'para'),
		'section' => 'para_typography',
		'settings' => 'para_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('para_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'para_sanitize_choices'
	));
	$wp_customize->add_control(
	    'para_h1_font_family', array(
	    'section'  => 'para_typography',
	    'label'    => __( 'H1 Fonts','para'),
	    'type'     => 'select',
	    'choices'  => $para_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('para_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_h1_font_size',array(
		'label'	=> __('H1 Font Size','para'),
		'section'	=> 'para_typography',
		'setting'	=> 'para_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'para_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_h2_color', array(
		'label' => __('H2 Color', 'para'),
		'section' => 'para_typography',
		'settings' => 'para_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('para_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'para_sanitize_choices'
	));
	$wp_customize->add_control(
	    'para_h2_font_family', array(
	    'section'  => 'para_typography',
	    'label'    => __( 'H2 Fonts','para'),
	    'type'     => 'select',
	    'choices'  => $para_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('para_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_h2_font_size',array(
		'label'	=> __('H2 Font Size','para'),
		'section'	=> 'para_typography',
		'setting'	=> 'para_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'para_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_h3_color', array(
		'label' => __('H3 Color', 'para'),
		'section' => 'para_typography',
		'settings' => 'para_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('para_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'para_sanitize_choices'
	));
	$wp_customize->add_control(
	    'para_h3_font_family', array(
	    'section'  => 'para_typography',
	    'label'    => __( 'H3 Fonts','para'),
	    'type'     => 'select',
	    'choices'  => $para_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('para_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_h3_font_size',array(
		'label'	=> __('H3 Font Size','para'),
		'section'	=> 'para_typography',
		'setting'	=> 'para_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'para_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_h4_color', array(
		'label' => __('H4 Color', 'para'),
		'section' => 'para_typography',
		'settings' => 'para_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('para_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'para_sanitize_choices'
	));
	$wp_customize->add_control(
	    'para_h4_font_family', array(
	    'section'  => 'para_typography',
	    'label'    => __( 'H4 Fonts','para'),
	    'type'     => 'select',
	    'choices'  => $para_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('para_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_h4_font_size',array(
		'label'	=> __('H4 Font Size','para'),
		'section'	=> 'para_typography',
		'setting'	=> 'para_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'para_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_h5_color', array(
		'label' => __('H5 Color', 'para'),
		'section' => 'para_typography',
		'settings' => 'para_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('para_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'para_sanitize_choices'
	));
	$wp_customize->add_control(
	    'para_h5_font_family', array(
	    'section'  => 'para_typography',
	    'label'    => __( 'H5 Fonts','para'),
	    'type'     => 'select',
	    'choices'  => $para_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('para_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_h5_font_size',array(
		'label'	=> __('H5 Font Size','para'),
		'section'	=> 'para_typography',
		'setting'	=> 'para_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'para_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_h6_color', array(
		'label' => __('H6 Color', 'para'),
		'section' => 'para_typography',
		'settings' => 'para_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('para_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'para_sanitize_choices'
	));
	$wp_customize->add_control(
	    'para_h6_font_family', array(
	    'section'  => 'para_typography',
	    'label'    => __( 'H6 Fonts','para'),
	    'type'     => 'select',
	    'choices'  => $para_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('para_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_h6_font_size',array(
		'label'	=> __('H6 Font Size','para'),
		'section'	=> 'para_typography',
		'setting'	=> 'para_h6_font_size',
		'type'	=> 'text'
	));

	//Topbar section
	$wp_customize->add_section('para_topbar',array(
		'title'	=> esc_html__('Topbar','para'),
		'priority'	=> null,
		'panel' => 'para_panel_id',
	));

	$wp_customize->add_setting( 'para_sticky_header',array(
		'default'	=> false,
      	'sanitize_callback'	=> 'para_sanitize_checkbox'
    ) );
    $wp_customize->add_control('para_sticky_header',array(
    	'type' => 'checkbox',
    	'description' => __( 'Click on the checkbox to enable sticky header.', 'para' ),
        'label' => __( 'Sticky Header','para' ),
        'section' => 'para_topbar'
    ));

	$wp_customize->add_setting('para_phoneno',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_phoneno',array(
		'label'	=> __('Add Phone Number','para'),
		'section' => 'para_topbar',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('para_headerbtntext',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_headerbtntext',array(
		'label'	=> __('Button Text','para'),
		'section' => 'para_topbar',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('para_headerbtnlink',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_headerbtnlink',array(
		'label'	=> __('Button Link','para'),
		'section' => 'para_topbar',
		'type'	 => 'text'
	));
	
	$wp_customize->add_setting( 'para_topheadbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_topheadbg_color', array(
		'label' => __('BG Color', 'para'),
		'section' => 'para_topbar',
		'settings' => 'para_topheadbg_color',
	)));

	$wp_customize->add_setting( 'para_topheadphoneicon_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_topheadphoneicon_color', array(
		'label' => __('Phone Number Icon Color', 'para'),
		'section' => 'para_topbar',
		'settings' => 'para_topheadphoneicon_color',
	)));

	$wp_customize->add_setting( 'para_topheadphnnum_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_topheadphnnum_color', array(
		'label' => __('Phone Number Color', 'para'),
		'section' => 'para_topbar',
		'settings' => 'para_topheadphnnum_color',
	)));

	$wp_customize->add_setting( 'para_topheadphnnumhrv_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_topheadphnnumhrv_color', array(
		'label' => __('Phone Number Hover Color', 'para'),
		'section' => 'para_topbar',
		'settings' => 'para_topheadphnnumhrv_color',
	)));

	$wp_customize->add_setting( 'para_topheadbtntexticon_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_topheadbtntexticon_color', array(
		'label' => __('Button Text & Icon Color', 'para'),
		'section' => 'para_topbar',
		'settings' => 'para_topheadbtntexticon_color',
	)));

	$wp_customize->add_setting( 'para_topheadbtnbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_topheadbtnbg_color', array(
		'label' => __('Button BG Color', 'para'),
		'section' => 'para_topbar',
		'settings' => 'para_topheadbtnbg_color',
	)));

	$wp_customize->add_setting( 'para_topheadbtntexticonhrv_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_topheadbtntexticonhrv_color', array(
		'label' => __('Button Text & Icon Hover Color', 'para'),
		'section' => 'para_topbar',
		'settings' => 'para_topheadbtntexticonhrv_color',
	)));


	$wp_customize->add_setting( 'para_headermenu_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_headermenu_color', array(
		'label' => __('Menu Color', 'para'),
		'section' => 'para_topbar',
		'settings' => 'para_headermenu_color',
	)));

	$wp_customize->add_setting( 'para_headeractivemenuhover_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_headeractivemenuhover_color', array(
		'label' => __('Active Menu & Hover Color', 'para'),
		'section' => 'para_topbar',
		'settings' => 'para_headeractivemenuhover_color',
	)));

	$wp_customize->add_setting( 'para_headeractivemenuhoverbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_headeractivemenuhoverbg_color', array(
		'label' => __('Active Menu & Hover BG Color', 'para'),
		'section' => 'para_topbar',
		'settings' => 'para_headeractivemenuhoverbg_color',
	)));

	$wp_customize->add_setting( 'para_headersubmenu_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_headersubmenu_color', array(
		'label' => __('Submenu Color', 'para'),
		'section' => 'para_topbar',
		'settings' => 'para_headersubmenu_color',
	)));
	
	$wp_customize->add_setting( 'para_headersubmenuhover_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_headersubmenuhover_color', array(
		'label' => __('Submenu Hover Color', 'para'),
		'section' => 'para_topbar',
		'settings' => 'para_headersubmenuhover_color',
	)));

	$wp_customize->add_setting( 'para_headersubmenubg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_headersubmenubg_color', array(
		'label' => __('Submenu BG Color', 'para'),
		'section' => 'para_topbar',
		'settings' => 'para_headersubmenubg_color',
	)));

	$wp_customize->add_setting( 'para_headersubmenubghover_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_headersubmenubghover_color', array(
		'label' => __('Submenu BG Hover Color', 'para'),
		'section' => 'para_topbar',
		'settings' => 'para_headersubmenubghover_color',
	)));


	//home page slider
	$wp_customize->add_section( 'para_slidersettings' , array(
    	'title'      => esc_html__( 'Slider Settings', 'para' ),
		'priority'   => null,
		'panel' => 'para_panel_id'
	) );

	$wp_customize->add_setting('para_slider_hide_show',array(
       'default' => false,
       'sanitize_callback'	=> 'para_sanitize_checkbox'
	));
	$wp_customize->add_control('para_slider_hide_show',array(
	   'type' => 'checkbox',
	   'description' => __( 'Click on the checkbox to enable slider.', 'para' ),
	   'label' => esc_html__('Show / Hide slider','para'),
	   'section' => 'para_slidersettings',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'para_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'para_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'para_slider_page' . $count, array(
			'label'    => esc_html__( 'Select Slider Page', 'para' ),
			'section'  => 'para_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('para_sliderhowitworkbtnlink',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_sliderhowitworkbtnlink',array(
		'label'	=> __('How IT Works Button Link','para'),
		'section' => 'para_slidersettings',
		'type'	 => 'text'
	));
	
	$wp_customize->add_setting( 'paraslider_subtitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraslider_subtitle_color', array(
		'label' => __('SubTitle Color', 'para'),
		'section' => 'para_slidersettings',
		'settings' => 'paraslider_subtitle_color',
	)));
	

	$wp_customize->add_setting( 'paraslider_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraslider_title_color', array(
		'label' => __('Title Color', 'para'),
		'section' => 'para_slidersettings',
		'settings' => 'paraslider_title_color',
	)));


	$wp_customize->add_setting( 'paraslider_btntext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraslider_btntext_color', array(
		'label' => __('Explore Features Button Text Color', 'para'),
		'section' => 'para_slidersettings',
		'settings' => 'paraslider_btntext_color',
	)));

	$wp_customize->add_setting( 'paraslider_btnbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraslider_btnbg_color', array(
		'label' => __('Explore Features Button BG Color', 'para'),
		'section' => 'para_slidersettings',
		'settings' => 'paraslider_btnbg_color',
	)));

	$wp_customize->add_setting( 'paraslider_btntexthover_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraslider_btntexthover_color', array(
		'label' => __('Explore Features Button Text Hover Color', 'para'),
		'section' => 'para_slidersettings',
		'settings' => 'paraslider_btntexthover_color',
	)));

	$wp_customize->add_setting( 'paraslider_btnbghover_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraslider_btnbghover_color', array(
		'label' => __('Explore Features Button BG Hover Color', 'para'),
		'section' => 'para_slidersettings',
		'settings' => 'paraslider_btnbghover_color',
	)));

	$wp_customize->add_setting( 'paraslider_howitworkbtntext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraslider_howitworkbtntext_color', array(
		'label' => __('How IT Works Button Text Color', 'para'),
		'section' => 'para_slidersettings',
		'settings' => 'paraslider_howitworkbtntext_color',
	)));

	$wp_customize->add_setting( 'paraslider_howitworkbtntexthrv_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraslider_howitworkbtntexthrv_color', array(
		'label' => __('How IT Works Button Text Hover Color', 'para'),
		'section' => 'para_slidersettings',
		'settings' => 'paraslider_howitworkbtntexthrv_color',
	)));

	$wp_customize->add_setting( 'paraslider_howitworkbtnicon_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraslider_howitworkbtnicon_color', array(
		'label' => __('How IT Works Button Icon Color', 'para'),
		'section' => 'para_slidersettings',
		'settings' => 'paraslider_howitworkbtnicon_color',
	)));

	$wp_customize->add_setting( 'paraslider_howitworkbtniconbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraslider_howitworkbtniconbg_color', array(
		'label' => __('How IT Works Button Icon BG Color', 'para'),
		'section' => 'para_slidersettings',
		'settings' => 'paraslider_howitworkbtniconbg_color',
	)));

	$wp_customize->add_setting( 'paraslider_howitworkbtniconbrd_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraslider_howitworkbtniconbrd_color', array(
		'label' => __('How IT Works Button Icon Border Color', 'para'),
		'section' => 'para_slidersettings',
		'settings' => 'paraslider_howitworkbtniconbrd_color',
	)));


	$wp_customize->add_setting( 'paraslider_arrows_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraslider_arrows_color', array(
		'label' => __('Arrows Color', 'para'),
		'section' => 'para_slidersettings',
		'settings' => 'paraslider_arrows_color',
	)));

	$wp_customize->add_setting( 'paraslider_arrowsbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraslider_arrowsbg_color', array(
		'label' => __('Arrows BG Color', 'para'),
		'section' => 'para_slidersettings',
		'settings' => 'paraslider_arrowsbg_color',
	)));

	

	// featuress Settings
	$wp_customize->add_section('para_featuress_section',array(
		'title'	=> __('Features Settings','para'),
		'panel' => 'para_panel_id',
	));
	

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('para_features_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'para_sanitize_choices',
	));
	$wp_customize->add_control('para_features_category',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => esc_html__('Select Category To Display Post','para'),
		'section' => 'para_featuress_section',
	));

	$wp_customize->add_setting('para_featurebox1icon',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_featurebox1icon',array(
		'label'	=> __('Box 1 Icon','para'),
		'description'	=> __('Add icon like this "fas fa-briefcase"','para'),
		'section' => 'para_featuress_section',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('para_featurebox2icon',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_featurebox2icon',array(
		'label'	=> __('Box 2 Icon','para'),
		'description'	=> __('Add icon like this "fas fa-briefcase"','para'),
		'section' => 'para_featuress_section',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('para_featurebox3icon',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_featurebox3icon',array(
		'label'	=> __('Box 3 Icon','para'),
		'description'	=> __('Add icon like this "fas fa-briefcase"','para'),
		'section' => 'para_featuress_section',
		'type'	 => 'text'
	));

	$wp_customize->add_setting( 'parafeaturess_icon_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'parafeaturess_icon_color', array(
		'label' => __('Icon Color', 'para'),
		'section' => 'para_featuress_section',
		'settings' => 'parafeaturess_icon_color',
	)));

	$wp_customize->add_setting( 'parafeaturess_iconbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'parafeaturess_iconbg_color', array(
		'label' => __('Icon BG Color', 'para'),
		'section' => 'para_featuress_section',
		'settings' => 'parafeaturess_iconbg_color',
	)));

	$wp_customize->add_setting( 'parafeaturess_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'parafeaturess_title_color', array(
		'label' => __('Title Color', 'para'),
		'section' => 'para_featuress_section',
		'settings' => 'parafeaturess_title_color',
	)));

	$wp_customize->add_setting( 'parafeaturess_titlehrv_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'parafeaturess_titlehrv_color', array(
		'label' => __('Title Hover Color', 'para'),
		'section' => 'para_featuress_section',
		'settings' => 'parafeaturess_titlehrv_color',
	)));

	$wp_customize->add_setting( 'parafeaturess_description_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'parafeaturess_description_color', array(
		'label' => __('Description Color', 'para'),
		'section' => 'para_featuress_section',
		'settings' => 'parafeaturess_description_color',
	)));

	$wp_customize->add_setting( 'parafeaturess_boxbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'parafeaturess_boxbg_color', array(
		'label' => __('Box BG Color', 'para'),
		'section' => 'para_featuress_section',
		'settings' => 'parafeaturess_boxbg_color',
	)));


	// aboutus Section
	$wp_customize->add_section('para_aboutus_section',array(
		'title'	=> __('AboutUs Settings','para'),
		'panel' => 'para_panel_id',
	));

	$wp_customize->add_setting('para_aboutussubtitle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_aboutussubtitle',array(
		'label'	=> __('Sub Title','para'),
		'section' => 'para_aboutus_section',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('para_aboutustitle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_aboutustitle',array(
		'label'	=> __('Title','para'),
		'section' => 'para_aboutus_section',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('para_aboutusdescription',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_aboutusdescription',array(
		'label'	=> __('Description','para'),
		'section' => 'para_aboutus_section',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('para_aboutuslist1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_aboutuslist1',array(
		'label'	=> __('List 1','para'),
		'section' => 'para_aboutus_section',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('para_aboutuslist2',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_aboutuslist2',array(
		'label'	=> __('List 2','para'),
		'section' => 'para_aboutus_section',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('para_aboutuslist3',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_aboutuslist3',array(
		'label'	=> __('List 3','para'),
		'section' => 'para_aboutus_section',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('para_aboutusbtntext',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_aboutusbtntext',array(
		'label'	=> __('Button Text','para'),
		'section' => 'para_aboutus_section',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('para_aboutusbtnlinks',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_aboutusbtnlinks',array(
		'label'	=> __('Button Link','para'),
		'section' => 'para_aboutus_section',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('para_aboutusyearofextext',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_aboutusyearofextext',array(
		'label'	=> __('Years Of Experience Top Text','para'),
		'section' => 'para_aboutus_section',
		'type'	 => 'text'
	));

	$wp_customize->add_setting('para_aboutusyearofexno',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('para_aboutusyearofexno',array(
		'label'	=> __('Years Of Experience Number','para'),
		'section' => 'para_aboutus_section',
		'type'	 => 'text'
	));
	

	$wp_customize->add_setting(
    	'para_aboutus_image1',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'para_aboutus_image1',
	        array(
			    'label'   		=> __('Image 1','para'),
				'description'   		=> __('Image size 417*546','para'),
	            'section' => 'para_aboutus_section',
	            'settings' => 'para_aboutus_image1',
	        )
	    )
	);

	$wp_customize->add_setting(
    	'para_aboutus_image2',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'para_aboutus_image2',
	        array(
			    'label'   		=> __('Image 2','para'),
				'description'   		=> __('Image size 417*546','para'),
	            'section' => 'para_aboutus_section',
	            'settings' => 'para_aboutus_image2',
	        )
	    )
	);

	$wp_customize->add_setting( 'paraaboutus_subtitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraaboutus_subtitle_color', array(
		'label' => __('SubTitle Color', 'para'),
		'section' => 'para_aboutus_section',
		'settings' => 'paraaboutus_subtitle_color',
	)));

	$wp_customize->add_setting( 'paraaboutus_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraaboutus_title_color', array(
		'label' => __('Title Color', 'para'),
		'section' => 'para_aboutus_section',
		'settings' => 'paraaboutus_title_color',
	)));


	$wp_customize->add_setting( 'paraaboutus_description_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraaboutus_description_color', array(
		'label' => __('Description Color', 'para'),
		'section' => 'para_aboutus_section',
		'settings' => 'paraaboutus_description_color',
	)));

	$wp_customize->add_setting( 'paraaboutus_list_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraaboutus_list_color', array(
		'label' => __('List Color', 'para'),
		'section' => 'para_aboutus_section',
		'settings' => 'paraaboutus_list_color',
	)));

	$wp_customize->add_setting( 'paraaboutus_listicon_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraaboutus_listicon_color', array(
		'label' => __('List Icon Color', 'para'),
		'section' => 'para_aboutus_section',
		'settings' => 'paraaboutus_listicon_color',
	)));

	$wp_customize->add_setting( 'paraaboutus_btntext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraaboutus_btntext_color', array(
		'label' => __('Button Text Color', 'para'),
		'section' => 'para_aboutus_section',
		'settings' => 'paraaboutus_btntext_color',
	)));

	$wp_customize->add_setting( 'paraaboutus_btnbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraaboutus_btnbg_color', array(
		'label' => __('Button BG Color', 'para'),
		'section' => 'para_aboutus_section',
		'settings' => 'paraaboutus_btnbg_color',
	)));

	$wp_customize->add_setting( 'paraaboutus_btntexthover_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraaboutus_btntexthover_color', array(
		'label' => __('Button Text Hover Color', 'para'),
		'section' => 'para_aboutus_section',
		'settings' => 'paraaboutus_btntexthover_color',
	)));

	$wp_customize->add_setting( 'paraaboutus_btnbghover_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraaboutus_btnbghover_color', array(
		'label' => __('Button BG Hover Color', 'para'),
		'section' => 'para_aboutus_section',
		'settings' => 'paraaboutus_btnbghover_color',
	)));

	$wp_customize->add_setting( 'paraaboutus_yearofexpno_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraaboutus_yearofexpno_color', array(
		'label' => __('Years Of Experience Number Color', 'para'),
		'section' => 'para_aboutus_section',
		'settings' => 'paraaboutus_yearofexpno_color',
	)));

	$wp_customize->add_setting( 'paraaboutus_yearofexptext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraaboutus_yearofexptext_color', array(
		'label' => __('Years Of Experience Text Color', 'para'),
		'section' => 'para_aboutus_section',
		'settings' => 'paraaboutus_yearofexptext_color',
	)));

	$wp_customize->add_setting( 'paraaboutus_yearofexptextbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'paraaboutus_yearofexptextbg_color', array(
		'label' => __('Years Of Experience BG Color', 'para'),
		'section' => 'para_aboutus_section',
		'settings' => 'paraaboutus_yearofexptextbg_color',
	)));


	

	//footer
	$wp_customize->add_section('para_footer_section',array(
		'title'	=> esc_html__('Footer Settings','para'),
		'panel' => 'para_panel_id'
	));
		
	$wp_customize->add_setting('para_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('para_footer_copy',array(
		'label'	=> esc_html__('Copyright Text','para'),
		'section'	=> 'para_footer_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'parafooter_copyrighttext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'parafooter_copyrighttext_color', array(
		'label' => __('Copyright Text Color', 'para'),
		'section' => 'para_footer_section',
		'settings' => 'parafooter_copyrighttext_color',
	)));

	$wp_customize->add_setting( 'parafooter_copyrightbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'parafooter_copyrightbg_color', array(
		'label' => __('Copyright BG Color', 'para'),
		'section' => 'para_footer_section',
		'settings' => 'parafooter_copyrightbg_color',
	)));

	$wp_customize->add_setting( 'parafooter_bg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'parafooter_bg_color', array(
		'label' => __('BG Color', 'para'),
		'section' => 'para_footer_section',
		'settings' => 'parafooter_bg_color',
	)));

	$wp_customize->add_setting( 'parafooter_text_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'parafooter_text_color', array(
		'label' => __('Text Color', 'para'),
		'section' => 'para_footer_section',
		'settings' => 'parafooter_text_color',
	)));

	$wp_customize->add_setting( 'parafooter_activemenu_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'parafooter_activemenu_color', array(
		'label' => __('Active Menu Color', 'para'),
		'section' => 'para_footer_section',
		'settings' => 'parafooter_activemenu_color',
	)));


	//Wocommerce Shop Page
	$wp_customize->add_section('para_woocommerce_shop_page',array(
		'title'	=> __('Woocommerce Shop Page','para'),
		'panel' => 'para_panel_id'
	));

	$wp_customize->add_setting( 'para_products_per_column' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'para_sanitize_choices',
	) );
	$wp_customize->add_control( 'para_products_per_column', array(
		'label'    => __( 'Product Per Columns', 'para' ),
		'description'	=> __('How many products should be shown per Column?','para'),
		'section'  => 'para_woocommerce_shop_page',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	)  );

	$wp_customize->add_setting('para_products_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'para_sanitize_float',
	));	
	$wp_customize->add_control('para_products_per_page',array(
		'label'	=> __('Product Per Page','para'),
		'description'	=> __('How many products should be shown per page?','para'),
		'section'	=> 'para_woocommerce_shop_page',
		'type'		=> 'number'
	));

	

	// logo site title
	$wp_customize->add_setting('para_site_title_tagline',array(
       'default' => true,
       'sanitize_callback'	=> 'para_sanitize_checkbox'
    ));
    $wp_customize->add_control('para_site_title_tagline',array(
       'type' => 'checkbox',
       'label' => __('Display Site Title and Tagline in Header','para'),
       'section' => 'title_tagline'
    ));

    $wp_customize->add_setting( 'para_site_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_site_title_color', array(
		'label' => __('Site Title Color', 'para'),
		'section' => 'title_tagline',
		'settings' => 'para_site_title_color',
	)));

    $wp_customize->add_setting( 'para_site_tagline_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'para_site_tagline_color', array(
		'label' => __('Site Tagline Color', 'para'),
		'section' => 'title_tagline',
		'settings' => 'para_site_tagline_color',
	)));
}
add_action( 'customize_register', 'para_customize_register' );