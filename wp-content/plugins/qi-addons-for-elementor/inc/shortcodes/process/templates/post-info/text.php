<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $item_text ) ) {
	?>
	<p class="qodef-e-text">
		<?php echo esc_html( $item_text ); ?>
	</p>
<?php } ?>
