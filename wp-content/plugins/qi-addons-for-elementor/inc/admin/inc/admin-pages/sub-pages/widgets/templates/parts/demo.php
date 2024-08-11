<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $shortcode['demo'] ) ) :
	?>
	<a href="<?php echo esc_url( $shortcode['demo'] ); ?>" target="_blank"><?php esc_html_e( 'Demo', 'qi-addons-for-elementor' ); ?></a>
<?php endif; ?>
