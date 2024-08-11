<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! function_exists( 'qi_addons_for_elementor_add_interactive_banner_variation_from_bottom' ) ) {
	/**
	 * Function that add variation layout for this module
	 *
	 * @param array $variations
	 *
	 * @return array
	 */
	function qi_addons_for_elementor_add_interactive_banner_variation_from_bottom( $variations ) {
		$variations['from-bottom'] = esc_html__( 'From Bottom', 'qi-addons-for-elementor' );

		return $variations;
	}

	add_filter( 'qi_addons_for_elementor_filter_interactive_banner_layouts', 'qi_addons_for_elementor_add_interactive_banner_variation_from_bottom' );
}
