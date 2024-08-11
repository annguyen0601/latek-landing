<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! qi_addons_for_elementor_framework_is_installed( 'woocommerce' ) ) {
	?>
	<div class="qodef-widgets-section qodef-plugin-not-active">
		<div class="qodef-widgets-section-title-holder">
			<h3 class="qodef-widgets-section-title"><?php esc_html_e( 'WooCommerce', 'qi-addons-for-elementor' ); ?></h3>
		</div>
		<p><?php esc_html_e( 'In order to use the WooCommerce widgets that come with Qi Addons, please install & activate the free WooCommerce plugin.', 'qi-addons-for-elementor' ); ?></p>
	</div>
<?php } ?>
