<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( function_exists( 'woocommerce_template_loop_add_to_cart' ) && ! empty( $button_params ) ) {
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo QiAddonsForElementor_Button_Shortcode::call_shortcode( $button_params );
}
