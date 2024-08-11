<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div class="qodef-section-knowledge-intro">
	<h2><?php echo esc_html__( 'Qi Addons for Elementor Help', 'qi-addons-for-elementor' ); ?></h2>
	<p class="qodef-large"><?php echo esc_html__( 'Check out the Knowledge Base articles, user guide or contact our support professionals', 'qi-addons-for-elementor' ); ?></p>
</div>
<div class="qodef-section-box qodef-section-knowledge">
	<div class="qodef-section-content">
		<div class="qodef-section-content-part">
			<h3><?php esc_html_e( 'Knowledge Base', 'qi-addons-for-elementor' ); ?></h3>
			<p><?php esc_html_e( 'Browse our comprehensive Knowledge Base articles and find answers to all types of WordPress-related questions', 'qi-addons-for-elementor' ); ?></p>
			<a class="qodef-btn qodef-btn-simple" href="https://helpcenter.qodeinteractive.com/?utm_source=dash&utm_medium=qiaddons&utm_campaign=welcome" target="_blank"><?php esc_html_e( 'view more', 'qi-addons-for-elementor' ); ?></a>
		</div>
	</div>
	<div class="qodef-section-knowledge-image">
		<img src="<?php echo esc_url( QI_ADDONS_FOR_ELEMENTOR_ADMIN_URL_PATH . '/inc/admin-pages/assets/img/knowledge-base.png' ); ?>" alt="<?php esc_attr_e( 'Knowledge Base', 'qi-addons-for-elementor' ); ?>"/>
	</div>
</div>
