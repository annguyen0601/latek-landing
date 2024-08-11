<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $text_field ) ) :
	?>
	<?php echo '<' . qi_addons_for_elementor_framework_sanitize_tags( $text_tag );  // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> class="qodef-m-text">
		<?php echo esc_html( $text_field ); ?>
	<?php echo '</' . qi_addons_for_elementor_framework_sanitize_tags( $text_tag );  // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
<?php endif; ?>
