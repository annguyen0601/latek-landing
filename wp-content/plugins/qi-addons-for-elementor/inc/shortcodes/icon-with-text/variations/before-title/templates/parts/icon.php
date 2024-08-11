<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div class="qodef-m-icon-holder">
	<?php
	\Elementor\Icons_Manager::render_icon( $icon_type, array( 'aria-hidden' => 'true' ) );
	?>
</div>
