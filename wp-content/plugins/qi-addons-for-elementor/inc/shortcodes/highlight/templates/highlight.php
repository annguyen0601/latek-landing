<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<<?php echo qi_addons_for_elementor_framework_sanitize_tags( $text_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> <?php qi_addons_for_elementor_framework_class_attribute( $holder_classes ); ?> <?php qi_addons_for_elementor_framework_inline_attrs( $data_attrs ); ?>>
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo qi_addons_for_elementor_framework_wp_kses_html( 'content', $text );
	?>
</<?php echo qi_addons_for_elementor_framework_sanitize_tags( $text_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
