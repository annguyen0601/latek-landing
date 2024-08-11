<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div class="qodef-m-content">
	<?php if ( ! empty( $title ) ) { ?>
		<<?php echo qi_addons_for_elementor_framework_sanitize_tags( $title_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> class="qodef-m-title">
			<?php echo esc_html( $title ); ?>
		</<?php echo qi_addons_for_elementor_framework_sanitize_tags( $title_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php } ?>
	<?php if ( ! empty( $text ) ) { ?>
		<div class="qodef-m-text">
			<?php echo qi_addons_for_elementor_framework_wp_kses_html( 'content', $text ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</div>
	<?php } ?>
</div>
