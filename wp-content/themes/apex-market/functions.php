<?php
/**
 * Apex Market functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package apex_market
 */

if ( ! function_exists( 'apex_market_setup' ) ) :
	function apex_market_setup() {
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'primary_menu' 		=> esc_html__( 'Primary Menu', 'apex-market' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'apex_market_custom_background_args', array(
			'default-color' => 'f8f8f8',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		add_editor_style( array( '/assets/css/editor-style.css', apex_market_get_fonts_url() ) );

		// Gutenberg support
		add_theme_support( 'editor-color-palette', array(
	       	array(
				'name' => esc_html__( 'Blue', 'apex-market' ),
				'slug' => 'blue',
				'color' => '#2c7dfa',
	       	),
	       	array(
	           	'name' => esc_html__( 'Green', 'apex-market' ),
	           	'slug' => 'green',
	           	'color' => '#07d79c',
	       	),
	       	array(
	           	'name' => esc_html__( 'Orange', 'apex-market' ),
	           	'slug' => 'orange',
	           	'color' => '#ff8737',
	       	),
	       	array(
	           	'name' => esc_html__( 'Black', 'apex-market' ),
	           	'slug' => 'black',
	           	'color' => '#2f3633',
	       	),
	       	array(
	           	'name' => esc_html__( 'Grey', 'apex-market' ),
	           	'slug' => 'grey',
	           	'color' => '#82868b',
	       	),
	   	));

		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-font-sizes', array(
		   	array(
		       	'name' => esc_html__( 'small', 'apex-market' ),
		       	'shortName' => esc_html__( 'S', 'apex-market' ),
		       	'size' => 12,
		       	'slug' => 'small'
		   	),
		   	array(
		       	'name' => esc_html__( 'regular', 'apex-market' ),
		       	'shortName' => esc_html__( 'M', 'apex-market' ),
		       	'size' => 16,
		       	'slug' => 'regular'
		   	),
		   	array(
		       	'name' => esc_html__( 'larger', 'apex-market' ),
		       	'shortName' => esc_html__( 'L', 'apex-market' ),
		       	'size' => 36,
		       	'slug' => 'larger'
		   	),
		   	array(
		       	'name' => esc_html__( 'huge', 'apex-market' ),
		       	'shortName' => esc_html__( 'XL', 'apex-market' ),
		       	'size' => 48,
		       	'slug' => 'huge'
		   	)
		));
		add_theme_support('editor-styles');
		add_theme_support( 'wp-block-styles' );
	}
endif;
add_action( 'after_setup_theme', 'apex_market_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function apex_market_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'apex_market_content_width', 790 );
}
add_action( 'after_setup_theme', 'apex_market_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function apex_market_widgets_init() {
	register_sidebar( 
		array(
			'name'          => esc_html__( 'Sidebar', 'apex-market' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'apex-market' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'apex-market' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'apex-market' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'apex-market' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'apex-market' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 3', 'apex-market' ),
			'id'            => 'sidebar-4',
			'description'   => __( 'Add widgets here to appear in your footer.', 'apex-market' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'apex_market_widgets_init' );

/**
* Enqueue theme fonts.
*/
function apex_market_fonts() {
	$fonts_url = apex_market_get_fonts_url();

	// Load Fonts if necessary.
	if ( $fonts_url ) {
		require_once get_theme_file_path( 'apex-library/wptt-webfont-loader.php' );
		wp_enqueue_style( 'apex-market-fonts', wptt_get_webfont_url( $fonts_url ), array(), null );
	}
}
add_action( 'wp_enqueue_scripts', 'apex_market_fonts', 1 );
add_action( 'enqueue_block_editor_assets', 'apex_market_fonts', 1 );

/**
 * Retrieve webfont URL to load fonts locally.
 */
function apex_market_get_fonts_url() {
	$font_families = array(
		'Outfit:wght@100..900',
	);

	$query_args = array(
		'family'  => urlencode( implode( '|', $font_families ) ),
		'subset'  => urlencode( 'latin,latin-ext' ),
		'display' => urlencode( 'swap' ),
	);

	return apply_filters( 'apex_market_get_fonts_url', add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ) );
}

/**
 * Enqueue scripts and styles.
 */
function apex_market_scripts() {

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css' );

	wp_enqueue_style( 'bootstrap-icon', get_template_directory_uri() . '/assets/css/bootstrap-icons.css' );

	wp_enqueue_style( 'apex-market-blocks', get_template_directory_uri() . '/assets/css/blocks.css' );

	wp_enqueue_style( 'apex-market-style', get_stylesheet_uri() );

	wp_enqueue_script( 'apex-market-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'apex-market-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '1.0', true );
	
	$apex_market_l10n = array(
		'quote'          => apex_market_get_svg( array( 'icon' => 'angle-down' ) ),
		'expand'         => esc_html__( 'Expand child menu', 'apex-market' ),
		'collapse'       => esc_html__( 'Collapse child menu', 'apex-market' ),
		'icon'           => apex_market_get_svg( array( 'icon' => 'angle-down', 'fallback' => true ) ),
	);
	
	wp_localize_script( 'apex-market-navigation', 'apex_market_l10n', $apex_market_l10n );

	wp_enqueue_script( 'apex-market-custom-script', get_template_directory_uri() . '/assets/js/theme-custom-script.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'apex_market_scripts' );

/**
 * Enqueue editor styles for Gutenberg
 *
 * @since Apex Market 1.0.0
 */
function apex_market_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'apex-market-block-editor-style', get_theme_file_uri( '/assets/css/editor-blocks.css' ) );
	// Add custom fonts.
	wp_enqueue_style( 'apex-market-fonts', apex_market_get_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'apex_market_block_editor_styles' );

/**
 * Removing category text from category page.
 */
function apex_market_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'apex_market_category_title' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/apex-library/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/apex-library/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/apex-library/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/apex-library/customizer.php';

/**
 * SVG icons functions and filters.
 */
require get_template_directory() . '/apex-library/icon-functions.php';