<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<a itemprop="url" href="<?php echo esc_url( $link_url['url'] ); ?>" class="qodef-m-banner-link" <?php qi_addons_for_elementor_framework_inline_attrs( qi_addons_for_elementor_get_link_attributes( $link_url ) ); ?>></a>
