<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div <?php qi_addons_for_elementor_framework_class_attribute( $holder_classes ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> <?php qi_addons_for_elementor_framework_inline_attrs( $data_attrs ); ?>>
	<<?php echo qi_addons_for_elementor_framework_sanitize_tags( $text_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> class="qodef-m-text">
		<?php if ( ! empty( $text ) ) { ?>
			<?php echo qi_addons_for_elementor_framework_wp_kses_html( 'content', $text ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		<?php } ?>
		<span class="qodef-typeout-holder">
			<span class="qodef-typeout"></span>
		</span>
	</<?php echo qi_addons_for_elementor_framework_sanitize_tags( $text_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
</div>
