<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $label ) ) {
	?>
	<span class="qodef-m-label">
		<?php echo esc_html( $label ); ?>
	</span>
<?php } ?>
