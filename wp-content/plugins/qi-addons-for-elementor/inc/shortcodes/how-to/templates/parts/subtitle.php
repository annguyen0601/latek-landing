<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $subtitle ) ) {
	?>
	<span class="qodef-m-subtitle">
		<?php echo esc_html( $subtitle ); ?>
	</span>
<?php } ?>
