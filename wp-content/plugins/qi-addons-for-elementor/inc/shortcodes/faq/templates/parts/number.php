<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( 'yes' === $enable_numbered ) {
	?>
	<span class="qodef-e-number">
		<?php echo esc_html( $number ); ?>
	</span>
	<?php
}
