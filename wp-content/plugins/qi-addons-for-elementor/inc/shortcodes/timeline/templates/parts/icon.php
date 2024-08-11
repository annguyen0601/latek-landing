<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( isset( $item['icon'] ) && ! empty( $item['icon']['value'] ) ) {
	?>
	<div class="qodef-e-icon-holder">
		<?php \Elementor\Icons_Manager::render_icon( $item['icon'], array( 'aria-hidden' => 'true' ) ); ?>
	</div>
<?php } ?>
