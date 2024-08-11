<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div class="qodef-widgets-item <?php echo ( ! $shortcode['active'] ? 'qodef-widgets-item-no-active' : '' ); ?>">
	<div class="qodef-widgets-item-left">
		<div class="qodef-widgets-item-top">
			<h4 class="qodef-widgets-title <?php echo ( $shortcode['premium'] ? 'qodef-premium' : '' ); ?>">
			<span class="qodef-widgets-title-inner">
				<?php echo esc_attr( $shortcode['title'] ); ?>
				<?php
				if ( $shortcode['premium'] ) {
					if ( ! $shortcode['active'] ) {
						?>
						<span class="qodef-widgets-locked">
							<svg xmlns="http://www.w3.org/2000/svg" width="10.667" height="14" viewBox="0 0 10.667 14">
								<path d="M1.333 14a1.284 1.284 0 0 1-.942-.392 1.284 1.284 0 0 1-.392-.942V6a1.284 1.284 0 0 1 .392-.942 1.284 1.284 0 0 1 .942-.392H2V3.333A3.213 3.213 0 0 1 2.975.975 3.212 3.212 0 0 1 5.333 0a3.212 3.212 0 0 1 2.358.975 3.213 3.213 0 0 1 .975 2.358v1.333h.667a1.284 1.284 0 0 1 .942.392 1.284 1.284 0 0 1 .392.942v6.667a1.284 1.284 0 0 1-.392.942 1.284 1.284 0 0 1-.942.392Zm4-3.333a1.284 1.284 0 0 0 .942-.392 1.284 1.284 0 0 0 .392-.942 1.284 1.284 0 0 0-.392-.942 1.284 1.284 0 0 0-.942-.392 1.284 1.284 0 0 0-.942.392 1.284 1.284 0 0 0-.392.942 1.284 1.284 0 0 0 .392.942 1.284 1.284 0 0 0 .942.392Zm-2-6h4V3.334a1.929 1.929 0 0 0-.583-1.417 1.929 1.929 0 0 0-1.417-.583 1.929 1.929 0 0 0-1.417.583 1.929 1.929 0 0 0-.583 1.417Z" fill="#c1c1c1"/>
							</svg>
						</span>
					<?php } else { ?>
						<span class="qodef-widgets-premium-label">
							<?php echo esc_html__( 'premium', 'qi-addons-for-elementor' ); ?>
						</span>
						<?php
					}
				}
				?>
				<?php if ( isset( $shortcode['new'] ) && $shortcode['new'] ) { ?>
					<span class="qodef-widgets-new-label">
							<?php echo esc_html__( 'new', 'qi-addons-for-elementor' ); ?>
						</span>
				<?php } ?>
			</span>
			</h4>
		</div>
		<div class="qodef-widgets-item-bottom">
			<?php qi_addons_for_elementor_framework_template_part( QI_ADDONS_FOR_ELEMENTOR_ADMIN_PATH . '/inc', 'admin-pages', 'sub-pages/widgets/templates/parts/demo', '', array( 'shortcode' => $shortcode ) ); ?>
			<?php qi_addons_for_elementor_framework_template_part( QI_ADDONS_FOR_ELEMENTOR_ADMIN_PATH . '/inc', 'admin-pages', 'sub-pages/widgets/templates/parts/documentation', '', array( 'shortcode' => $shortcode ) ); ?>
			<?php qi_addons_for_elementor_framework_template_part( QI_ADDONS_FOR_ELEMENTOR_ADMIN_PATH . '/inc', 'admin-pages', 'sub-pages/widgets/templates/parts/video', '', array( 'shortcode' => $shortcode ) ); ?>
		</div>
	</div>
	
	<div class="qodef-widgets-item-right">
		<?php if ( $shortcode['active'] ) : ?>
			<div class="qodef-checkbox-toggle qodef-field" data-option-name="<?php echo esc_attr( $shortcode_key ); ?>">
				<input type="checkbox" id="<?php echo esc_attr( $shortcode_key ); ?>" name="<?php echo esc_attr( $shortcode_key ); ?>" value="yes" <?php echo ( isset( $disabled[ $shortcode_key ] ) && $disabled[ $shortcode_key ] === $shortcode['base'] ) ? '' : 'checked'; ?> />
				<label for="<?php echo esc_attr( $shortcode_key ); ?>"><?php echo esc_html( $shortcode['title'] ); ?></label>
			</div>
		<?php else : ?>
			<div class="qodef-checkbox-toggle">
				<label></label>
			</div>
		<?php endif; ?>
	</div>
</div>
