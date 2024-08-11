<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $text ) ) {
	?>
	<div class="qodef-m-text"><?php echo qi_addons_for_elementor_framework_wp_kses_html( 'content', $text ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
<?php } ?>
