<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

include_once QI_ADDONS_FOR_ELEMENTOR_SHORTCODES_PATH . '/banner/class-qiaddonsforelementor-banner-shortcode.php';

foreach ( glob( QI_ADDONS_FOR_ELEMENTOR_SHORTCODES_PATH . '/banner/variations/*/include.php' ) as $variation ) {
	include_once $variation;
}
