<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

$image_proportion = ! empty( $proportion ) ? $proportion : 'full';

if ( ! empty( $image ) ) { ?>
	<div class="qodef-m-image">
		<?php echo qi_addons_for_elementor_get_attachment_image( $image, $image_proportion ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</div>
<?php } ?>
