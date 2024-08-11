<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $button_params ) ) {
	?>
	<div class="qodef-m-button qodef-qi-clear">
		<?php echo QiAddonsForElementor_Button_Shortcode::call_shortcode( $button_params ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</div>
<?php } ?>
