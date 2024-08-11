<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $item['item_number'] ) ) {
	?>
	<div class="qodef-e-number">
		<?php echo esc_html( $item['item_number'] . '.' ); ?>
	</div>
<?php } ?>
