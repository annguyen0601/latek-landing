<?php
/**
 * Exit if accessed directly.
 *
 * @link       https://posimyth.com/
 * @since      5.5.6
 *
 * @package    Theplus
 * @subpackage ThePlus/Notices
 * */

/**
 * Exit if accessed directly.
 * */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Wdesignkit_Banner' ) ) {

	/**
	 * This class used for only load widget notice
	 *
	 * @since 5.5.6
	 */
	class Wdesignkit_Banner {

		/**
		 * Instance
		 *
		 * @since 5.5.6
		 * @access private
		 * @static
		 * @var instance of the class.
		 */
		private static $instance = null;

		/**
		 * Instance
		 *
		 * @since 5.5.6
		 * @version 5.5.6
		 * @access public
		 * @var w_d_s_i_g_n_k_i_t_slug
		 */
		public $w_d_s_i_g_n_k_i_t_slug = 'wdesignkit/wdesignkit.php';

		/**
		 * Instance
		 *
		 * Ensures only one instance of the class is loaded or can be loaded.
		 *
		 * @since 5.5.6
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
		 * @since 5.5.6
		 * @version 5.5.6
		 * @access public
		 */
		public function __construct() {

            add_action( 'wdesignkit_banner_notice', array( $this, 'tp_widget_banner_notice' ) );
            add_action( 'wdesignkit_banner_notice_footer', array( $this, 'tp_widget_banner_notice_footer' ) );
			add_action( 'wp_ajax_tp_install_wdkit', array( $this, 'tp_install_wdkit' ) );

			add_action( 'admin_enqueue_scripts', array( $this, 'wdkit_onboarding_assets' ) );
		}

		/**
		 * Call Css File here.
		 *
		 * @since 5.5.6
		 * @param page $page api code number.
		 */
		public function wdkit_onboarding_assets( $page ) {
			if ( 'toplevel_page_theplus_welcome_page' === $page ||'theplus-settings_page_theplus_import_data' === $page || 'theplus-settings_page_theplus_options' === $page ) {
		        wp_enqueue_script( 'theplus-onbording-js', L_THEPLUS_URL . 'assets/js/admin/tp-wdkit-banner.js', array(), L_THEPLUS_VERSION, true );
			    wp_enqueue_style( 'tp-wdkit-banner.css', L_THEPLUS_URL . 'assets/css/admin/tp-wdkit-banner.css', array(), L_THEPLUS_VERSION );

			}
		}

		/**
		 * wdesignkit notice
		 *
		 * @since 5.5.6
		 * @version 5.5.6
		 * @access public
		 */
		public function tp_widget_banner_notice() {
			$plugin_status = $this->check_plugin_status();
			?>

            <div class='theplus_wdkit_new_banner'>
                <div class='theplus_wdkit_new_banner_left'>
                    <h2 class='theplus_wdkit_new_banner_heading'><?php echo esc_html__('Get 1000+ Predesigned Elementor Templates & Sections', 'tpebl'); ?></h2>
                    <p class='theplus_new_banner_sub_txt'><?php echo esc_html__('Uniquely designed Elementor Templates for every website type made with Elementor & The Plus Addons for Elementor Widgets.', 'tpebl'); ?></p>
                    <div class='theplus_wdkit_new_banner_btn_group'>
                        <?php if ($plugin_status['installed'] == false) { ?>
                            <a class="theplus_wdkit_new_banner_btn" href='#' data-link='<?php echo esc_url($plugin_status['plugin_page_url']); ?>'>
                                <div class="theplus-enable-text"><?php echo esc_html__('Enable Templates', 'tpebl'); ?></div>
                                <div class="wkit-publish-loader">
                                    <div class="wb-loader-circle"></div>
                                </div>
                            </a>
                        <?php } else { ?>
                            <a class="theplus-visit-plugin" href='<?php echo esc_url($plugin_status['plugin_page_url']); ?>' target='_blank'>
                                <div class="theplus-enable-text"><?php echo esc_html__('Visit Plugin', 'tpebl'); ?></div>
                            </a>
                        <?php } ?>
                        <a class='theplus_wdkit_new_banner_btn_link' href='https://wdesignkit.com/browse/template?builder=1001&temp_type=pagetemplate&utm_source=wpbackend&utm_medium=widgets&utm_campaign=links' target='_blank'><?php echo esc_html__('Learn More', 'tpebl'); ?></a>
                    </div>
                </div>

                <div class='theplus_wdkit_new_banner_right'>
                    <img class='theplus_wdkit_banner_hero_img' src="<?php echo esc_url(L_THEPLUS_ASSETS_URL); ?>/images/predesigned-elementor-templates.png" />
                </div>
            </div>

			<?php
		}

		/**
		 * wdesignkit notice
		 *
		 * @since 5.5.6
		 * @version 5.5.6
		 * @access public
		 */
		public function tp_widget_banner_notice_footer() {
			$plugin_status = $this->check_plugin_status();
			?>
			<div class='theplus_wdkit_new_banner_bottom_sm_card'>
				<div class='theplus_wdkit_new_banner'>
					<div class='theplus_wdkit_new_banner_left'>
						<h2 class='theplus_wdkit_new_banner_heading'>
							<?php echo esc_html__('Get 1000+ Predesigned Elementor Templates & Sections', 'tpebl'); ?>
						</h2>
						<p class='theplus_new_banner_sub_txt'>
							<?php echo esc_html__('Uniquely designed Elementor Templates for every website type made with Elementor & The Plus Addons for Elementor Widgets.', 'tpebl'); ?>
						</p>
						<div class='theplus_wdkit_new_banner_btn_group'>
							<?php if ($plugin_status['installed'] == false) { ?>
								<a class="theplus_wdkit_new_banner_btn" href='#' data-link='<?php echo esc_url($plugin_status['plugin_page_url']); ?>'>
									<div class="theplus-enable-text">
										<?php echo esc_html__('Enable Templates', 'tpebl'); ?>
									</div>
									<div class="wkit-publish-loader">
										<div class="wb-loader-circle"></div>
									</div>
								</a>
							<?php } else { ?>
								<a class="theplus-visit-plugin" href='<?php echo esc_url($plugin_status['plugin_page_url']); ?>' target='_blank'>
									<div class="theplus-enable-text">
										<?php echo esc_html__('Visit Plugin', 'tpebl'); ?>
									</div>
								</a>
							<?php } ?>
							<a class='theplus_wdkit_new_banner_btn_link' href='https://wdesignkit.com/browse/template?builder=1001&temp_type=pagetemplate&utm_source=wpbackend&utm_medium=widgets&utm_campaign=links' target='_blank'>
								<?php echo esc_html__('Learn More', 'tpebl'); ?>
							</a>
						</div>
					</div>

					<div class='theplus_wdkit_new_banner_right'>
						<img class='theplus_wdkit_banner_hero_img' src="<?php echo esc_url(L_THEPLUS_ASSETS_URL); ?>/images/predesigned-elementor-templates.png" />
					</div>
				</div>

				<div class='theplus_wdkit_new_banner theplus_pink_card'>
					<div class='theplus_wdkit_new_banner_left'>
						<h2 class='theplus_wdkit_new_banner_heading'>
							<?php echo esc_html__('Get Extra 50+ Unique Elementor Widgets', 'tpebl'); ?>
						</h2>
						<p class='theplus_new_banner_sub_txt'>
							<?php echo esc_html__('Pre-coded Extra Elementor Widgets from our WDesignKit Library. These are uniquely designed widgets for Elementor.', 'tpebl'); ?>
						</p>
						<div class='theplus_wdkit_new_banner_btn_group'>
							<?php if ($plugin_status['installed'] == false) { ?>
								<a class="theplus_wdkit_new_banner_btn" href='#' data-link='<?php echo esc_url($plugin_status['plugin_page_url']); ?>'>
									<div class="theplus-enable-text">
										<?php echo esc_html__('Enable Templates', 'tpebl'); ?>
									</div>
									<div class="wkit-publish-loader">
										<div class="wb-loader-circle"></div>
									</div>
								</a>
							<?php } else { ?>
								<a class="theplus-visit-plugin" href='<?php echo esc_url($plugin_status['plugin_page_url']); ?>' target='_blank'>
									<div class="theplus-enable-text">
										<?php echo esc_html__('Visit Plugin', 'tpebl'); ?>
									</div>
								</a>
							<?php } ?>
							<a class='theplus_wdkit_new_banner_btn_link' href='https://wdesignkit.com/browse/template?builder=1001&temp_type=pagetemplate&utm_source=wpbackend&utm_medium=widgets&utm_campaign=links' target='_blank'>
								<?php echo esc_html__('Learn More', 'tpebl'); ?>
							</a>
						</div>
					</div>

					<div class='theplus_wdkit_new_banner_right'>
						<img class='theplus_wdkit_banner_hero_img' src="<?php echo esc_url(L_THEPLUS_ASSETS_URL); ?>/images/three-cards.png" />
					</div>
				</div>
			</div>

			<?php
		}

		/**
		 * Install Wdesign kit
		 *
		 * @since 5.4.0
		 */
		public function tp_install_wdkit() {
			check_ajax_referer( 'theplus-addons', 'security' );

			if ( ! is_user_logged_in() || ! current_user_can( 'manage_options' ) ) {
				wp_send_json_error( array( 'content' => __( 'Insufficient permissions.', 'uichemy' ) ) );
			}

			$installed_plugins = get_plugins();

			include_once ABSPATH . 'wp-admin/includes/file.php';
			include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
			include_once ABSPATH . 'wp-admin/includes/class-automatic-upgrader-skin.php';
			include_once ABSPATH . 'wp-admin/includes/class-plugin-upgrader.php';

			$result   = array();
			$response = wp_remote_post(
				'http://api.wordpress.org/plugins/info/1.0/',
				array(
					'body' => array(
						'action'  => 'plugin_information',
						'request' => serialize(
							(object) array(
								'slug'   => 'wdesignkit',
								'fields' => array(
									'version' => false,
								),
							)
						),
					),
				)
			);

			$plugin_info = unserialize( wp_remote_retrieve_body( $response ) );

			if ( ! $plugin_info ) {
				wp_send_json_error( array( 'content' => __( 'Failed to retrieve plugin information.', 'tpebl' ) ) );
			}

			$skin     = new \Automatic_Upgrader_Skin();
			$upgrader = new \Plugin_Upgrader( $skin );

			$plugin_basename = $this->w_d_s_i_g_n_k_i_t_slug;
			
			if ( ! isset( $installed_plugins[ $plugin_basename ] ) && empty( $installed_plugins[ $plugin_basename ] ) ) {
				$installed = $upgrader->install( $plugin_info->download_link );

				$activation_result = activate_plugin( $plugin_basename );

				$success = null === $activation_result;
				$result  = $this->tp_response( 'Success Install WDesignKit', 'Success Install WDesignKit', $success, '' );

			} elseif ( isset( $installed_plugins[ $plugin_basename ] ) ) {
				$activation_result = activate_plugin( $plugin_basename );

				$success = null === $activation_result;
				$result  = $this->tp_response( 'Success Install WDesignKit', 'Success Install WDesignKit', $success, '' );

			}

			wp_send_json( $result );
		}

		/**
		 * Response
		 *
		 * @param string  $message pass message.
		 * @param string  $description pass message.
		 * @param boolean $success pass message.
		 * @param string  $data pass message.
		 *
		 * @since 5.4.0
		 */
		public function tp_response( $message = '', $description = '', $success = false, $data = '' ) {
			return array(
				'message'     => $message,
				'description' => $description,
				'success'     => $success,
				'data'        => $data,
			);
		}

		/**
		 * Check plugin status
		 *
		 * @since 5.5.6
		 * @access private
		 * @return array
		 */

		private function check_plugin_status() {
			$installed_plugins = get_plugins();

			$plugin_page_url = add_query_arg(
				array(
					'page' => 'wdesign-kit'
				),
				admin_url('admin.php')
			);

			$installed = false;
			if ( is_plugin_active( $this->w_d_s_i_g_n_k_i_t_slug ) || isset( $installed_plugins[ $this->w_d_s_i_g_n_k_i_t_slug ] ) ) {
				$installed = true;
			}

			return array(
				'installed' => $installed,
				'plugin_page_url' => $plugin_page_url,
			);
		}
	}

	Wdesignkit_Banner::instance();
}
