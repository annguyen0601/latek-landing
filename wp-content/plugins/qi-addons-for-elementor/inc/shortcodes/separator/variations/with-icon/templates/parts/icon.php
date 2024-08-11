<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $separator_icon ) ) {
	?>
	<span class="qodef-m-separator-icon">
		<?php \Elementor\Icons_Manager::render_icon( $separator_icon, array( 'aria-hidden' => 'true' ) ); ?>
	</span>
	<?php
}
