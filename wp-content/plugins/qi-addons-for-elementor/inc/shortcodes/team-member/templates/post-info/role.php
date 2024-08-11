<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $role ) ) {
	?>
	<p class="qodef-m-role"><?php echo wp_kses_post( wp_strip_all_tags( $role ) ); ?></p>
<?php } ?>
