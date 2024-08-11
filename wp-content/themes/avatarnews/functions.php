<?php
if (!defined('AVATARNEWS_VERSION')) {
    // Replace the version number of the theme on each release.
    define('AVATARNEWS_VERSION', wp_get_theme()->get('Version'));
}
define('AVATARNEWS_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('AVATARNEWS_DIR', trailingslashit(get_template_directory()));
define('AVATARNEWS_URL', trailingslashit(get_template_directory_uri()));

if (!function_exists('avatarnews_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function avatarnews_support()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;
add_action('after_setup_theme', 'avatarnews_support');

/*----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (!function_exists('avatarnews_styles')) :
    function avatarnews_styles()
    {
        // registering style for theme
        wp_enqueue_style('avatarnews-style', get_stylesheet_uri(), array(), AVATARNEWS_VERSION);
        if (is_rtl()) {
            wp_enqueue_style('avatarnews-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css');
        }
        // registering js for theme
        wp_enqueue_script('jquery');
    }
endif;

add_action('wp_enqueue_scripts', 'avatarnews_styles');

/**
 * Enqueue scripts for admin area
 */
function avatarnews_admin_style()
{
    if (!is_user_logged_in()) {
        return;
    }
    $hello_notice_current_screen = get_current_screen();
    if (!empty($_GET['page']) && 'about-avatarnews' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard') {
        wp_enqueue_style('avatarnews-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), AVATARNEWS_VERSION, 'all');
        wp_enqueue_script('avatarnews-admin-scripts', get_template_directory_uri() . '/assets/js/avatarnews-admin-scripts.js', array(), AVATARNEWS_VERSION, true);
        wp_localize_script('avatarnews-admin-scripts', 'avatarnews_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('avatarnews_nonce'),
            'redirect_url' => admin_url('themes.php?page=templategalaxy')
        ));
    }
}
add_action('admin_enqueue_scripts', 'avatarnews_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function avatarnews_block_assets()
{
    wp_enqueue_style('avatarnews-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'avatarnews_block_assets');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if (!function_exists('avatarnews_excerpt_more_postfix')) {
    function avatarnews_excerpt_more_postfix($more)
    {
        if (is_admin()) {
            return $more;
        }
        return '...';
    }
    add_filter('excerpt_more', 'avatarnews_excerpt_more_postfix');
}
function avatarnews_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'avatarnews_add_woocommerce_support');
