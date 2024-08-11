<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $separator_params ) ) {
	?>
	<div class="qodef-m-separator qodef-qi-clear">
		<?php echo QiAddonsForElementor_Separator_Shortcode::call_shortcode( $separator_params ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</div>
<?php } ?>
