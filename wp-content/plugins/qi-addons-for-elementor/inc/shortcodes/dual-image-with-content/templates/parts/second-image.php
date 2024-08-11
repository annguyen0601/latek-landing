<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div class="qodef-m-second-image">
	<?php
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo qi_addons_for_elementor_get_list_shortcode_item_image( $second_images_proportion, $second_image, intval( $second_custom_image_width ), intval( $second_custom_image_height ) );
	?>
</div>
