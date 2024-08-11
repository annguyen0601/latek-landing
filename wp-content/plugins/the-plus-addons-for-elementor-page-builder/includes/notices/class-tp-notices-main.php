<?php
/**
 * It is Main File to load all Notice, Upgrade Menu and all
 *
 * @link       https://posimyth.com/
 * @since      5.3.3
 *
 * @package    Theplus
 * @subpackage ThePlus/Notices
 * */

namespace Theplus\Notices;

/**
 * Exit if accessed directly.
 * */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Tp_Widget_Notice' ) ) {

	/**
	 * This class used for only load All Notice Files
	 *
	 * @since 5.3.3
	 */
	class Tp_Notices_Main {

		/**
		 * Instance
		 *
		 * @since 5.3.3
		 * @access private
		 * @static
		 * @var instance of the class.
		 */
		private static $instance = null;

		/**
		 * White label Option
		 *
		 * @var string
		 */
		public $whitelabel = '';

		/**
		 * White label Option
		 *
		 * @var string
		 */
		public $hidden_label = '';

		/**
		 * Instance
		 *
		 * Ensures only one instance of the class is loaded or can be loaded.
		 *
		 * @since 5.3.3
		 * @access public
		 * @static
		 * @return instance of the class.
		 */
		public static function instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		/**
		 * Constructor
		 *
		 * Perform some compatibility checks to make sure basic requirements are meet.
		 *
		 * @since 5.3.3
		 * @access public
		 */
		public function __construct() {
			$this->tp_white_label();
			$this->tp_notices_manage();
		}

		/**
		 * Here add globel class varible for white label
		 *
		 * @since 5.3.3
		 * @access public
		 */
		public function tp_white_label() {
			$this->whitelabel   = get_option( 'theplus_white_label' );
			$this->hidden_label = ! empty( $this->whitelabel['tp_hidden_label'] ) ? $this->whitelabel['tp_hidden_label'] : '';
		}

		/**
		 * Initiate our hooks
		 *
		 * @since 5.3.3
		 * @access public
		 */
		public function tp_notices_manage() {

			if ( is_admin() && current_user_can( 'manage_options' ) ) {
				include L_THEPLUS_PATH . 'includes/notices/class-tp-plugin-page.php';

				if ( empty( $this->whitelabel ) || 'on' !== $this->hidden_label ) {
					include L_THEPLUS_PATH . 'includes/notices/class-tp-widget-notice.php';
					include L_THEPLUS_PATH . 'includes/notices/class-tp-dashboard-overview.php';
				}

				/**Remove Key In Databash*/
				include L_THEPLUS_PATH . 'includes/notices/class-tp-notices-remove.php';
			}

			if ( is_admin() && current_user_can( 'install_plugins' ) ) {
				// include L_THEPLUS_PATH . 'includes/notices/class-tp-tpag-install-notice.php';
			}
		}
	}

	Tp_Notices_Main::instance();
}
