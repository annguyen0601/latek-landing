<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( function_exists( 'woocommerce_template_loop_product_link_open' ) && function_exists( 'woocommerce_template_loop_product_link_close' ) ) {
	woocommerce_template_loop_product_link_open();
	woocommerce_template_loop_product_link_close();
}
