<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

$image_proportion = isset( $image_proportion ) ? $image_proportion : 'full';

if ( ! empty( $image ) ) {
	?>
	<div class="qodef-m-media-image">
		<?php
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo qi_addons_for_elementor_get_attachment_image( $image, $image_proportion );
		?>
	</div>
<?php } ?>
