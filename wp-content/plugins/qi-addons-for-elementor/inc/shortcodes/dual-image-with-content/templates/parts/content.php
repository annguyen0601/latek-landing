<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $bottom_section ) ) {
	?>
	<div class="qodef-m-content-shortcode">
		<?php
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $bottom_section );
		?>
	</div>
<?php } ?>
