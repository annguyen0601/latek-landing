<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div <?php qi_addons_for_elementor_framework_class_attribute( $holder_classes ); ?> <?php qi_addons_for_elementor_framework_inline_attrs( $data_attrs, true ); ?>>
	<div class="qodef-m-inner">
		<div class="qodef-m-canvas-holder">
			<div class="qodef-m-canvas">
				<canvas></canvas>
			</div>
		</div>
		<?php if ( ! empty( $title ) ) { ?>
			<<?php echo qi_addons_for_elementor_framework_sanitize_tags( $title_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> class="qodef-m-title">
				<?php
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo qi_addons_for_elementor_framework_wp_kses_html( 'content', $title );
				?>
			</<?php echo qi_addons_for_elementor_framework_sanitize_tags( $title_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
		<?php } ?>
		<?php if ( ! empty( $text ) ) { ?>
			<p class="qodef-m-text">
				<?php
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				echo qi_addons_for_elementor_framework_wp_kses_html( 'content', $text );
				?>
			</p>
		<?php } ?>
	</div>
</div>
