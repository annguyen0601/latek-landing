<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

$post_thumbnail_id = apply_filters( 'qi_addons_for_elementor_filter_product_list_thumbnail_id', get_post_thumbnail_id(), get_the_ID() );

if ( has_post_thumbnail() ) {
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo qi_addons_for_elementor_get_list_shortcode_item_image( $images_proportion, $post_thumbnail_id, intval( $custom_image_width ), intval( $custom_image_height ) );
}
