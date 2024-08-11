<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $close_icon ) ) {
	?>
	<span class="qodef-m-close-icon">
		<?php \Elementor\Icons_Manager::render_icon( $close_icon, array( 'aria-hidden' => 'true' ) ); ?>
	</span>
<?php } ?>
