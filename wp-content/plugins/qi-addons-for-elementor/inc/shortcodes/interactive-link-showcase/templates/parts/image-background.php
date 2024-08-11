<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div class="qodef-e-image qodef-background" <?php qi_addons_for_elementor_framework_inline_style( $this_shortcode->get_image_styles( $params ) ); ?>>
	<?php echo qi_addons_for_elementor_get_attachment_image( $item_image, 'full' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</div>
