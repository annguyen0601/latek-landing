<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

$title_tag = isset( $name_tag ) && ! empty( $name_tag ) ? $name_tag : 'h4';

if ( ! empty( $name ) ) {
	?>
	<<?php echo qi_addons_for_elementor_framework_sanitize_tags( $title_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> itemprop="name" class="qodef-m-title">
		<?php echo esc_html( $name ); ?>
	</<?php echo qi_addons_for_elementor_framework_sanitize_tags( $title_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<?php
}
