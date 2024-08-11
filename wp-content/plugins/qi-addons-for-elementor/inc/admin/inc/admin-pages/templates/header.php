<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

$header_title = ! empty( $header_title ) ? $header_title : esc_html__( 'Qi Addons for Elementor', 'qi-addons-for-elementor' );
$header_text  = ! empty( $header_text ) ? $header_text : esc_html__( 'Welcome to a comprehensive library of 100+ custom, flexible & easily styled Elementor widgets', 'qi-addons-for-elementor' );
?>
<div class="qodef-admin-header">
	<div class="qodef-header-left">
		<div class="qodef-header-left-inner">
			<div class="qodef-logo-holder">
				<a href="https://qodeinteractive.com/?utm_source=dash&utm_medium=qiaddons&utm_campaign=welcome" target="_blank">
					<img height="50" src="<?php echo esc_url( QI_ADDONS_FOR_ELEMENTOR_ADMIN_URL_PATH . '/inc/admin-pages/assets/img/logo-qode-interactive.png' ); ?>" alt="<?php esc_attr_e( 'Admin Qode Interactive image', 'qi-addons-for-elementor' ); ?>"/>
				</a>
			</div>
			<div class="qodef-header-text-holder">
				<h3 class="qodef-header-title"><?php echo esc_html( $header_title ); ?></h3>
				<p class="qodef-large qodef-header-text"><?php echo esc_html( $header_text ); ?></p>
			</div>
		</div>
	</div>
</div>
