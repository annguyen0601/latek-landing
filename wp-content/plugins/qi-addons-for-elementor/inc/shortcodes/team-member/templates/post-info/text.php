<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $text ) ) {
	?>
	<p class="qodef-m-text">
		<?php echo esc_html( $text ); ?>
	</p>
<?php } ?>
