<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $item_title ) ) {
	?>
	<<?php echo qi_addons_for_elementor_framework_sanitize_tags( $item_title_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> class="qodef-e-title">
		<?php echo esc_html( $item_title ); ?>
	</<?php echo qi_addons_for_elementor_framework_sanitize_tags( $item_title_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
<?php } ?>
