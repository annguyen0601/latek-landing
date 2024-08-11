<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! post_password_required() ) {
	?>
	<div class="qodef-e-read-more">
		<?php
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo QiAddonsForElementor_Button_Shortcode::call_shortcode(
			array_merge(
				$button_params,
				array(
					'button_link' => array(
						'url'               => esc_url( get_the_permalink() ),
						'is_external'       => '',
						'nofollow'          => '',
						'custom_attributes' => '',
					),
				)
			)
		);
		?>
	</div>
<?php } ?>
