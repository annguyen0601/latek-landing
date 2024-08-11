<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $item['title'] ) ) {
	?>
	<<?php echo qi_addons_for_elementor_framework_sanitize_tags( $title_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> class="qodef-e-title">
	<?php if ( ! empty( $item['link']['url'] ) ) { ?>
		<a itemprop="url" href="<?php echo esc_url( $item['link']['url'] ); ?>" <?php qi_addons_for_elementor_framework_inline_attrs( qi_addons_for_elementor_get_link_attributes( $item['link'] ) ); ?>>
	<?php } ?>
	<?php echo esc_html( $item['title'] ); ?>
	<?php if ( ! empty( $item['link']['url'] ) ) { ?>
		</a>
	<?php } ?>
	</<?php echo qi_addons_for_elementor_framework_sanitize_tags( $title_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php
}
