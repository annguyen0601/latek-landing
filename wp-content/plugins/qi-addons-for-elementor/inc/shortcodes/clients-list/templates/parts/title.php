<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $client_title ) ) :
	?>
	<?php echo '<' . qi_addons_for_elementor_framework_sanitize_tags( $title_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> class="qodef-e-title">
	<?php if ( ! empty( $client_link['url'] ) ) { ?>
		<a href="<?php echo esc_url( $client_link['url'] ); ?>" <?php qi_addons_for_elementor_framework_inline_attrs( qi_addons_for_elementor_get_link_attributes( $client_link ) ); ?>>
	<?php } ?>
		<?php echo esc_html( $client_title ); ?>
	<?php if ( ! empty( $client_link['url'] ) ) { ?>
		</a>
	<?php } ?>
	<?php echo '</' . qi_addons_for_elementor_framework_sanitize_tags( $title_tag ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
<?php endif; ?>
