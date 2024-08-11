<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $subtitle ) ) {
	?>
	<<?php echo qi_addons_for_elementor_framework_sanitize_tags( $subtitle_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> class="qodef-m-subtitle">
		<?php echo qi_addons_for_elementor_framework_wp_kses_html( 'content', $subtitle ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		<?php qi_addons_for_elementor_template_part( 'shortcodes/section-title', 'templates/parts/icon', '', $params ); ?>
	</<?php echo qi_addons_for_elementor_framework_sanitize_tags( $subtitle_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
<?php } ?>
