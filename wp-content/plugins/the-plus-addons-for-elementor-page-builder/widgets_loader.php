<?php
/**
 * The file that defines the core plugin class
 *
 * @link    https://posimyth.com/
 * @since   1.0.0
 *
 * @package Theplus
 */

namespace TheplusAddons;

use Elementor\Utils;
use Elementor\Core\Settings\Manager as SettingsManager;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * It Is load all widget and dashbord
 *
 * @since 1.0.0
 */
final class L_Theplus_Element_Load {

	/**
	 * Core singleton class
	 *
	 * @var _instance pattern realization
	 */
	private static $instance;

	/**
	 * Get Elementor Plugin Instance
	 *
	 * @return \Elementor\Theplus_Element_Loader
	 */
	public static function elementor() {
		return \Elementor\Plugin::$instance;
	}

	/**
	 * Get Singleton Instance
	 *
	 * This static method ensures that only one instance of the class is created
	 * and provides a way to access that instance.
	 *
	 * @since 1.0.0
	 *
	 * @return Theplus_Element_Loader The single instance of the class.
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * ThePlus_Load Class
	 *
	 * This class is responsible for handling the loading of ThePlus Addons.
	 *
	 * @since 1.0.0
	 */
	private function __construct() {

		// Register class automatically.
		$this->tp_manage_files();

		$this->includes();

		// Finally hooked up all things.
		$this->hooks();

		if ( ! defined( 'THEPLUS_VERSION' ) ) {
			L_Theplus_Elements_Integration()->init();
		}

		theplus_core_cp_lite()->init();

		$this->include_widgets();

		l_theplus_widgets_include();
	}

	/**
	 * Include and manage files related to notices.
	 *
	 * This function includes the class responsible for managing notices in ThePlus plugin.
	 * It includes the file class-tp-notices-main.php from the specified path.
	 *
	 * @since 5.1.18
	 */
	public function tp_manage_files() {
		include L_THEPLUS_PATH . 'includes/notices/class-tp-notices-main.php';
		include L_THEPLUS_PATH . 'includes/user-experience/class-tp-user-experience-main.php';
	}

	/**
	 * Hooks Setup for ThePlus Load Class
	 *
	 * This private method sets up hooks and actions needed for the functionality of the ThePlus Load class.
	 *
	 * @since 5.1.18
	 */
	private function hooks() {
		$theplus_options = get_option( 'theplus_options' );

		$plus_extras = l_theplus_get_option( 'general', 'extras_elements' );

		if ( ( isset( $plus_extras ) && empty( $plus_extras ) && empty( $theplus_options ) ) || ( ! empty( $plus_extras ) && in_array( 'plus_display_rules', $plus_extras ) ) ) {
			add_action( 'wp_head', array( $this, 'print_style' ) );
		}

		add_action( 'elementor/init', array( $this, 'add_elementor_category' ) );
		add_action( 'elementor/editor/after_enqueue_styles', array( $this, 'theplus_editor_styles' ) );

		add_filter( 'upload_mimes', array( $this, 'theplus_mime_types' ) );

		// Include some backend files.
		add_action( 'admin_enqueue_scripts', array( $this, 'theplus_elementor_admin_css' ) );

		if ( is_admin() && current_user_can( 'manage_options' ) ) {
			add_action( 'wp_ajax_tp_get_elementor_pages', array( $this, 'tp_get_elementor_pages' ) );
			add_action( 'wp_ajax_tp_check_elements_status_scan', array( $this, 'tp_check_elements_status_scan' ) );
			add_action( 'wp_ajax_tp_disable_elements_status_scan', array( $this, 'tp_disable_elements_status_scan' ) );
		}
	}

	/**
	 * Include Module Manager and Admin PHP Files
	 *
	 * This private method is called during the class instantiation and loads
	 * the required module manager and admin PHP files.
	 *
	 * @since 1.0.0
	 */
	private function includes() {

		require_once L_THEPLUS_INCLUDES_URL . 'tp-lazy-function.php';

		if ( ! class_exists( 'CMB2' ) ) {
			require_once L_THEPLUS_INCLUDES_URL . 'plus-options/metabox/init.php';
		}

		$option_name = 'default_plus_options';

		$value = '1';

		if ( is_admin() && false === get_option( $option_name ) ) {
			$default_load = get_option( 'theplus_options' );

			$autoload = 'no';

			if ( ! empty( $default_load ) ) {
				add_option( $option_name, $value, '', $autoload );
			} else {
				$theplus_options = get_option( 'theplus_options' );

				$theplus_options['check_elements'] = array( 'tp_accordion', 'tp_adv_text_block', 'tp_blockquote', 'tp_blog_listout', 'tp_button', 'tp_contact_form_7', 'tp_countdown', 'tp_clients_listout', 'tp_gallery_listout', 'tp_flip_box', 'tp_heading_animation', 'tp_header_extras', 'tp_heading_title', 'tp_info_box', 'tp_navigation_menu_lite', 'tp_page_scroll', 'tp_progress_bar', 'tp_number_counter', 'tp_pricing_table', 'tp_scroll_navigation', 'tp_social_icon', 'tp_tabs_tours', 'tp_team_member_listout', 'tp_testimonial_listout', 'tp_video_player' );

				add_option( 'theplus_options', $theplus_options, '', $autoload );
				add_option( $option_name, $value, '', $autoload );
			}
		}

		require_once L_THEPLUS_INCLUDES_URL . 'plus_addon.php';

		if ( file_exists( L_THEPLUS_INCLUDES_URL . 'plus-options/metabox/init.php' ) ) {
			require_once L_THEPLUS_INCLUDES_URL . 'plus-options/includes.php';
		}

		require L_THEPLUS_PATH . 'modules/theplus-core-cp.php';

		require L_THEPLUS_INCLUDES_URL . 'theplus_options.php';

		if ( ! defined( 'THEPLUS_VERSION' ) ) {
			require L_THEPLUS_PATH . 'modules/theplus-integration.php';
		}

		require L_THEPLUS_PATH . 'modules/query-control/module.php';

		require_once L_THEPLUS_PATH . 'modules/helper-function.php';
	}

	/**
	 * Include Widget Files
	 *
	 * This method is responsible for including the required files related to widgets.
	 * It ensures that the necessary files for widgets are loaded.
	 *
	 * @since 1.0.0
	 */
	public function include_widgets() {
		require_once L_THEPLUS_PATH . 'modules/theplus-include-widgets.php';
	}

	/**
	 * Theplus_Element_Loader Class
	 *
	 * This class manages the inclusion of styles for Theplus Elementor Editor.
	 *
	 * @since 1.0.0
	 */
	public function theplus_editor_styles() {

		wp_enqueue_style( 'theplus-ele-admin', L_THEPLUS_ASSETS_URL . 'css/admin/theplus-ele-admin.css', array(), L_THEPLUS_VERSION, false );

		$ui_theme = SettingsManager::get_settings_managers( 'editorPreferences' )->get_model()->get_settings( 'ui_theme' );

		if ( ! empty( $ui_theme ) && 'dark' === $ui_theme ) {
			wp_enqueue_style( 'theplus-ele-admin-dark', L_THEPLUS_ASSETS_URL . 'css/admin/theplus-ele-admin-dark.css', array(), L_THEPLUS_VERSION, false );
		}
	}

	/**
	 * Enqueue Theplus Elementor Admin CSS and JavaScript
	 *
	 * This method enqueues the necessary scripts and styles for Theplus Elementor Admin.
	 * It includes jQuery UI Dialog, Theplus Elementor Admin CSS, and a custom admin JavaScript file.
	 * Additionally, it sets up inline JavaScript variables for AJAX functionality.
	 *
	 * @since 1.0.0
	 */
	public function theplus_elementor_admin_css() {

		wp_enqueue_script( 'jquery-ui-dialog' );
		wp_enqueue_style( 'wp-jquery-ui-dialog' );

		wp_enqueue_style( 'theplus-ele-admin', L_THEPLUS_ASSETS_URL . 'css/admin/theplus-ele-admin.css', array(), L_THEPLUS_VERSION, false );
		wp_enqueue_script( 'theplus-admin-js', L_THEPLUS_ASSETS_URL . 'js/admin/theplus-admin.js', array(), L_THEPLUS_VERSION, false );

		$js_inline = 'var theplus_ajax_url = "' . admin_url( 'admin-ajax.php' ) . '";
		var theplus_ajax_post_url = "' . admin_url( 'admin-post.php' ) . '";
        var theplus_nonce = "' . wp_create_nonce( 'theplus-addons' ) . '";';

		echo wp_print_inline_script_tag( $js_inline );
	}

	/**
	 * Modify Allowed MIME Types for File Uploads
	 *
	 * This function is a WordPress filter used to extend the list of allowed MIME types for file uploads.
	 * It adds support for SVG (Scalable Vector Graphics) and SVGZ (compressed SVG) file types.
	 *
	 * @param array $mimes Associative array of allowed MIME types.
	 * @return array Modified array of allowed MIME types.
	 *
	 * @since 1.0.0
	 */
	public function theplus_mime_types( $mimes ) {
		$mimes['svg']  = 'image/svg+xml';
		$mimes['svgz'] = 'image/svg+xml';

		return $mimes;
	}

	/**
	 * Get all pages
	 *
	 * @since 1.0.0
	 */
	public function tp_get_elementor_pages() {
		$security = ! empty( $_REQUEST['security'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['security'] ) ) : '';

		if ( ! wp_verify_nonce( $security, 'theplus-addons' ) ) {
			wp_send_json_error( esc_html__( 'Invalid security', 'tpebl' ) );
		}

		if ( ! current_user_can( 'install_plugins' ) ) {
			wp_send_json_error( esc_html__( 'Invalid User', 'tpebl' ) );
		}

		global $wpdb;

		$post_ids = $wpdb->get_col( 'SELECT `post_id` FROM `' . $wpdb->postmeta . '`WHERE `meta_key` = \'_elementor_version\';' );

		$tp_widgets_list = '';

		$page = ! empty( $_GET['page'] ) ? sanitize_text_field( wp_unslash( $_GET['page'] ) ) : '';

		if ( 'tpewidpage' === $page ) {
			$theplus_options = get_option( 'theplus_options' );
			if ( ! empty( $theplus_options ) && isset( $theplus_options['check_elements'] ) ) {
				$tp_widgets_list = $theplus_options['check_elements'];
			}
		}

		if ( empty( $post_ids ) ) {
			wp_send_json_error( esc_html__( 'Empty post list.', 'tpebl' ) );
		}

		$scan_post_ids = array();
		$countwidgets  = array();
		foreach ( $post_ids as $post_id ) {
			if ( 'revision' === get_post_type( $post_id ) ) {
				continue;
			}

			$get_widgets = $this->tp_check_elements_status_scan( $post_id, $tp_widgets_list );

			$scan_post_ids[ $post_id ] = $get_widgets;
			if ( ! empty( $get_widgets ) ) {
				foreach ( $get_widgets as $value ) {
					if ( ! empty( $value ) && in_array( $value, $tp_widgets_list ) ) {
						$countwidgets[ $value ] = ( isset( $countwidgets[ $value ] ) ? absint( $countwidgets[ $value ] ) : 0 ) + 1;
					}
				}
			}
		}

		$output = array();
		$val1   = count( $tp_widgets_list );
		$val2   = count( $countwidgets );
		$val3   = $val1 - $val2;

		$output['message'] = '* ' . $val3 . ' Unused Widgets Found!';
		$output['widgets'] = $countwidgets;

		wp_send_json_success( $output );
	}

	/**
	 * Check Elements Status for Scanning
	 *
	 * This function is responsible for checking the status of elements during a scanning process.
	 * It takes a post ID and a list of The Plus Addons widgets, then performs the necessary checks.
	 *
	 * @since 1.0.0
	 *
	 * @param int   $post_id         Optional. The post ID to check elements status for.
	 * @param array $tp_widgets_list Optional. The list of The Plus Addons widgets.
	 */
	public function tp_check_elements_status_scan( $post_id = '', $tp_widgets_list = '' ) {

		$security = ! empty( $_REQUEST['security'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['security'] ) ) : '';

		if ( ! wp_verify_nonce( $security, 'theplus-addons' ) ) {
			wp_send_json_error( esc_html__( 'Invalid security', 'tpebl' ) );
		}

		if ( ! current_user_can( 'install_plugins' ) ) {
			wp_send_json_error( esc_html__( 'Invalid User', 'tpebl' ) );
		}

		if ( ! empty( $post_id ) ) {
			$meta_data = \Elementor\Plugin::$instance->documents->get( $post_id );

			if ( is_object( $meta_data ) ) {
				$meta_data = $meta_data->get_elements_data();
			}

			if ( empty( $meta_data ) ) {
				return '';
			}

			$to_return = array();
	
			\Elementor\Plugin::$instance->db->iterate_data(
				$meta_data,
				function ( $element ) use ( $tp_widgets_list, &$to_return ) {
					$page = ! empty( $_GET['page'] ) ? wp_unslash( $_GET['page'] ) : '';

					if ( 'tpewidpage' === $page ) {
						if ( ! empty( $element['widgetType'] ) && array_key_exists( str_replace( '-', '_', $element['widgetType'] ), array_flip( $tp_widgets_list ) ) ) {
							$to_return[] = str_replace( '-', '_', $element['widgetType'] );
						}
					}
				}
			);
		}

		return array_values( $to_return );
	}

	/**
	 * Disable The Plus Addons Elements Status Scan
	 *
	 * This function is responsible for handling requests to disable The Plus Addons elements
	 * based on the scanned data provided in the request.
	 *
	 * @since 1.0.0
	 */
	public function tp_disable_elements_status_scan() {

		$security = ! empty( $_REQUEST['security'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['security'] ) ) : '';

		if ( ! wp_verify_nonce( $security, 'theplus-addons' ) ) {
			wp_send_json_error( esc_html__( 'Invalid security', 'tpebl' ) );
		}

		if ( ! current_user_can( 'install_plugins' ) ) {
			wp_send_json_error( esc_html__( 'Invalid User', 'tpebl' ) );
		}

		$message = '';

		$sacaneddatapass = ! empty( $_GET['SacanedDataPass'] ) ? wp_unslash( $_GET['SacanedDataPass'] ) : '';
		if ( isset( $sacaneddatapass ) && ! empty( $sacaneddatapass ) ) {
			$tp_widgets_list = '';

			$page = ! empty( $_GET['page'] ) ? sanitize_text_field( wp_unslash( $_GET['page'] ) ) : '';
			if ( 'tpewidpage' === $page ) {
				$theplus_options = get_option( 'theplus_options' );

				if ( ! empty( $theplus_options ) && isset( $theplus_options['check_elements'] ) ) {
					$tp_widgets_list = $theplus_options['check_elements'];

					$val1 = count( $tp_widgets_list );
					$val2 = count( $sacaneddatapass );
					$val3 = $val1 - $val2;

					$theplus_options['check_elements'] = array_keys( $sacaneddatapass );

					update_option( 'theplus_options', $theplus_options, null, 'no' );

					l_theplus_library()->remove_backend_dir_files();
					$message = 'We have scanned your site and disabled ' . $val3 . ' unused The Plus Addons widgets.';
				}
			}
		}

		wp_send_json_success( $message );

		exit;
	}

	/**
	 * Print style.
	 *
	 * Adds custom CSS to the HEAD html tag. The CSS that emphasise the maintenance
	 * mode with red colors.
	 *
	 * Fired by `admin_head` and `wp_head` filters.
	 *
	 * @since 2.1.0
	 */
	public function print_style() {
		?>
			<style>*:not(.elementor-editor-active) .plus-conditions--hidden {display: none;}</style>
		<?php
	}

	/**
	 * Add Elementor Category for PlusEssential Elements
	 *
	 * This method is responsible for adding a custom category to the Elementor Page Builder
	 * for PlusEssential elements.
	 *
	 * @since 1.0.0
	 */
	public function add_elementor_category() {

		$elementor = \Elementor\Plugin::$instance;

		// Add elementor category.
		$elementor->elements_manager->add_category(
			'plus-essential',
			array(
				'title' => esc_html__( 'PlusEssential', 'tpebl' ),
				'icon'  => 'fa fa-plug',
			),
			1
		);
		$elementor->elements_manager->add_category(
			'plus-listing',
			array(
				'title' => esc_html__( 'PlusListing', 'tpebl' ),
				'icon'  => 'fa fa-plug',
			),
			1
		);
		$elementor->elements_manager->add_category(
			'plus-creatives',
			array(
				'title' => esc_html__( 'PlusCreatives', 'tpebl' ),
				'icon'  => 'fa fa-plug',
			),
			1
		);
		$elementor->elements_manager->add_category(
			'plus-tabbed',
			array(
				'title' => esc_html__( 'PlusTabbed', 'tpebl' ),
				'icon'  => 'fa fa-plug',
			),
			1
		);
		$elementor->elements_manager->add_category(
			'plus-adapted',
			array(
				'title' => esc_html__( 'PlusAdapted', 'tpebl' ),
				'icon'  => 'fa fa-plug',
			),
			1
		);
		$elementor->elements_manager->add_category(
			'plus-header',
			array(
				'title' => esc_html__( 'PlusHeader', 'tpebl' ),
				'icon'  => 'fa fa-plug',
			),
			1
		);
		$elementor->elements_manager->add_category(
			'plus-builder',
			array(
				'title' => esc_html__( 'PlusBuilder', 'tpebl' ),
				'icon'  => 'fa fa-plug',
			),
			1
		);
		$elementor->elements_manager->add_category(
			'plus-woo-builder',
			array(
				'title' => esc_html__( 'PlusWooBuilder', 'tpebl' ),
				'icon'  => 'fa fa-plug',
			),
			1
		);
		$elementor->elements_manager->add_category(
			'plus-search-filter',
			array(
				'title' => esc_html__( 'PlusSearchFilters', 'tpebl' ),
				'icon'  => 'fa fa-plug',
			),
			1
		);
		$elementor->elements_manager->add_category(
			'plus-depreciated',
			array(
				'title' => esc_html__( 'PlusDepreciated', 'tpebl' ),
				'icon'  => 'fa fa-plug',
			),
			1
		);
	}
}

L_Theplus_Element_Load::instance();