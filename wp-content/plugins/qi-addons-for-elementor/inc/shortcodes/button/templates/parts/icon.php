<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $button_icon ) && ! empty( $button_icon['value'] ) ) {
	?>
	<span <?php qi_addons_for_elementor_framework_class_attribute( $icon_classes ); ?>>
		<span class="qodef-m-icon-inner">
			<?php \Elementor\Icons_Manager::render_icon( $button_icon, array( 'aria-hidden' => 'true' ) ); ?>
			<?php if ( ! empty( $button_icon_hover_move ) && 'move-horizontal-short' !== $button_icon_hover_move ) { ?>
				<?php \Elementor\Icons_Manager::render_icon( $button_icon, array( 'aria-hidden' => 'true' ) ); ?>
			<?php } ?>
		</span>
	</span>
<?php } ?>
