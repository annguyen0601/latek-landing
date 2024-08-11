<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div id="qodef-page" class="qodef-admin-page qodef-dashboard-admin qodef-admin-content-grid">
	<?php $this_object->get_header(); ?>
	<div class="qodef-admin-content qodef-admin-grid qodef-admin-layout--columns qodef-admin-col-num--1 qodef-admin-gutter--normal">
		<div class="qodef-admin-grid-inner">
			<div class="qodef-admin-container qodef-admin-grid-item qodef-admin-col--12">
				<?php
				if ( ! isset( $disable_tabs ) || ! $disable_tabs ) {
					qi_addons_for_elementor_framework_template_part( QI_ADDONS_FOR_ELEMENTOR_ADMIN_PATH . '/inc', 'admin-pages', 'templates/parts/tabs' );
				}
				?>
				<?php $this_object->get_content(); ?>
			</div>
		</div>
	</div>
</div>
