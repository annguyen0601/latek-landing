<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! function_exists( 'qi_addons_for_elementor_premium_is_plugin_activated' ) || ( function_exists( 'qi_addons_for_elementor_premium_is_plugin_activated' ) && ! qi_addons_for_elementor_premium_is_plugin_activated() ) ) {
	$button_text = apply_filters( 'qi_addons_for_elementor_filter_welcome_premium_box_link_text', esc_html__( 'Upgrade Now', 'qi-addons-for-elementor' ) );
	$button_link = apply_filters( 'qi_addons_for_elementor_filter_welcome_premium_box_link', 'https://qodeinteractive.com/products/plugins/' );
	$button_link = add_query_arg(
		array(
			'utm_source'   => 'dash',
			'utm_medium'   => 'qiaddons',
			'utm_campaign' => 'welcome',
		),
		$button_link
	);
	?>
	<div class="qodef-section-box qodef-section-qi-addons-premium">
		<div class="qodef-section-box-content">
			<h2>
				<?php esc_html_e( 'Qi Addons Premium', 'qi-addons-for-elementor' ); ?>
				<svg class="qodef-star" xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10">
					<path d="m5.5 0 1.513 3.538L11 3.82 7.947 6.288 8.9 10 5.5 7.988 2.1 10l.952-3.712L0 3.82l3.987-.282Z"/>
				</svg>
			</h2>
			<p class="qodef-large"><?php esc_html_e( 'More addons, more power & flexibility', 'qi-addons-for-elementor' ); ?></p>
			<a class="qodef-btn qodef-btn-solid" href="<?php echo esc_url( $button_link ); ?>" target="_blank"><?php echo esc_html( $button_text ); ?></a>
		</div>
		<div class="qodef-section-box-image">
			<img src="<?php echo esc_url( QI_ADDONS_FOR_ELEMENTOR_ADMIN_URL_PATH . '/inc/admin-pages/assets/img/qi-addons-premium.png' ); ?>" alt="<?php esc_attr_e( 'Free Demos', 'qi-addons-for-elementor' ); ?>" />
		</div>
	</div>
	<?php
}
