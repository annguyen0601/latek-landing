<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

$title_tag = ! empty( $title_tag ) ? $title_tag : 'h4';

if ( ! empty( $item['item_title'] ) ) {
	?>
	<<?php echo qi_addons_for_elementor_framework_sanitize_tags( $title_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> class="qodef-e-title">
	<?php
	printf(
		'%s %s %s',
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		! empty( $item['item_link']['url'] ) ? '<a itemprop="url" class="qodef-e-title-link" href="' . esc_url( $item['item_link']['url'] ) . '" ' . qi_addons_for_elementor_framework_get_inline_attrs( qi_addons_for_elementor_get_link_attributes( $item['item_link'] ) ) . '>' : '',
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		qi_addons_for_elementor_framework_wp_kses_html( 'content', $item['item_title'] ),
		! empty( $item['item_link']['url'] ) ? '</a>' : ''
	);
	?>
	</<?php echo qi_addons_for_elementor_framework_sanitize_tags( $title_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
<?php } ?>
