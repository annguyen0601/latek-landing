<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div class="qodef-m-main-image">
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo qi_addons_for_elementor_get_list_shortcode_item_image( $main_images_proportion, $main_image, intval( $main_custom_image_width ), intval( $main_custom_image_height ) );
	?>
</div>
