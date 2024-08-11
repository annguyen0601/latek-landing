<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $item['text'] ) ) {
	?>
	<p class="qodef-e-text">
		<?php echo esc_html( $item['text'] ); ?>
	</p>
	<?php
}
