<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $item_text ) ) {
	?>
	<<?php echo qi_addons_for_elementor_framework_sanitize_tags( $item_text_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> itemprop="description" class="qodef-e-text"><?php echo esc_html( $item_text ); ?></<?php echo qi_addons_for_elementor_framework_sanitize_tags( $item_text_tag ); ?>>
<?php } ?>
