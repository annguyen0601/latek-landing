<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

$sub_pages = QiAddonsForElementor_Admin_General_Page::get_instance()->get_sub_pages();
// phpcs:ignore WordPress.Security.NonceVerification.Recommended
$current_page = ! empty( $_GET['page'] ) ? sanitize_text_field( wp_unslash( $_GET['page'] ) ) : '';

if ( is_array( $sub_pages ) && count( $sub_pages ) > 0 ) {
	?>
	<ul class="qodef-tabs-nav">
	<?php
	foreach ( $sub_pages as $sub_page ) {
		$is_active       = $current_page === $sub_page->get_menu_slug();
		$atts            = $sub_page->get_atts();
		$is_tab_disabled = isset( $atts['disable_tabs'] ) && $atts['disable_tabs'];
		if ( $is_tab_disabled ) {
			continue;
		}
		$classes   = array(
			'qodef-tab-nav-item',
			'qodef-tab--' . $sub_page->get_base(),
		);
		$classes[] = $is_active ? 'qodef-tab--active' : '';
		?>
		
		<li class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
			<?php if ( $is_active ) { ?>
				<span class="qodef-tab-nav-item-label"><?php echo esc_html( $sub_page->get_title() ); ?></span>
			<?php } else { ?>
				<a class="qodef-tab-nav-item-label" href="<?php echo esc_url( admin_url( 'admin.php?page=' . $sub_page->get_menu_slug() ) ); ?>"><?php echo esc_html( $sub_page->get_title() ); ?></a>
			<?php } ?>
		</li>
	<?php } ?>
	</ul>
	<?php
}