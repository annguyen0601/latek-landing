<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div class="qodef-e-image">
	<?php
	if ( ! empty( $item['image'] ) ) {
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo qi_addons_for_elementor_get_attachment_image( $item['image'], $image_proportion );
	}
	?>
</div>
