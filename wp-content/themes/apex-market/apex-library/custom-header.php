<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
 * @package apex_market
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses apex_market_header_style()
 */
function apex_market_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'apex_market_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'fff',
		'width'                  => 2500,
		'height'                 => 300,
		'flex-height'            => true,
		'wp-head-callback'       => 'apex_market_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'apex_market_custom_header_setup' );

if ( ! function_exists( 'apex_market_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see apex_market_custom_header_setup().
	 */
	function apex_market_header_style() {
		$header_text_color = get_header_textcolor();

		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
		// If the user has set a custom color for the text use that.
		else :
			?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;