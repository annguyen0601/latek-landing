<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div class="qodef-tabs-vertical-content" id="qodef-tab-<?php echo esc_attr( $_id ); ?>">
	<?php echo qi_addons_for_elementor_framework_wp_kses_html( 'content', $item_content ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</div>
