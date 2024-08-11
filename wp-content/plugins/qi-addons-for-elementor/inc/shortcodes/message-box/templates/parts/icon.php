<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $icon ) ) {
	?>
	<span class="qodef-m-icon">
		<?php \Elementor\Icons_Manager::render_icon( $icon, array( 'aria-hidden' => 'true' ) ); ?>
	</span>
<?php } ?>
