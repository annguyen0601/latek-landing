<?php

/**
 * file for holding dashboard welcome page for theme
 */
if (!function_exists('avatarnews_welcome_notice')) :
    function avatarnews_welcome_notice()
    {
        if (get_option('avatarnews_dashboard_dismissed_notice')) {
            return;
        }
        global $pagenow;
        $current_screen  = get_current_screen();

        if (is_admin()) {
            if ($current_screen->id !== 'dashboard' && $current_screen->id !== 'themes') {
                return;
            }
            if (is_network_admin()) {
                return;
            }
            if (!current_user_can('manage_options')) {
                return;
            }


?>
            <div class="avatarnews-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice" id="avatarnews-dismiss-notice">
                <div class="info-content">
                    <h3><span class="theme-name"><span><?php echo __('Thank you for using AvatarNews. In order to complete the task correctly, kindly install and activate the recommended plugin.', 'avatarnews'); ?></span></h3>
                    <p class="notice-text"><?php echo __('1. TemplateGalaxy: Please install and activate TemplateGalaxy pluign from our website to use additional patterns, templates  and import demo with "one click demo import" feature.', 'avatarnews') ?></p>
                    <p class="notice-text"><?php echo __('2. Advanced Import: This is required only for the one-click demo import features and can be deleted once the demo is imported.', 'avatarnews') ?></p>
                    <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started with a single click', 'avatarnews'); ?></a>
                    <a href="<?php echo admin_url(); ?>themes.php?page=about-avatarnews" class="button admin-button info-button"><?php echo __('Explore AvatarNews', 'avatarnews'); ?></a>
                </div>
                <div class="avatarnews-theme-screen">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/inc/admin/images/dashboard_screen.png'); ?>" />
                </div>


            </div>
    <?php
        }
    }
endif;
add_action('admin_notices', 'avatarnews_welcome_notice');
function avatarnews_dashboard_dismissble_notice()
{
    check_ajax_referer('avatarnews_nonce', 'nonce');
    update_option('avatarnews_dashboard_dismissed_notice', 1);
}
add_action('wp_ajax_avatarnews_dashboard_dismissble_notice', 'avatarnews_dashboard_dismissble_notice');
add_action('wp_ajax_avatarnews_dismissble_notice', 'avatarnews_dismissble_notice');
// Hook into a custom action when the button is clicked
add_action('wp_ajax_avatarnews_install_and_activate_plugins', 'avatarnews_install_and_activate_plugins');
add_action('wp_ajax_nopriv_avatarnews_install_and_activate_plugins', 'avatarnews_install_and_activate_plugins');
add_action('wp_ajax_avatarnews_rplugin_activation', 'avatarnews_rplugin_activation');
add_action('wp_ajax_nopriv_avatarnews_rplugin_activation', 'avatarnews_rplugin_activation');

// Function to install and activate the plugins



function avatarnews_check_plugin_installed_status($pugin_slug, $plugin_file)
{
    return file_exists(ABSPATH . 'wp-content/plugins/' . $pugin_slug . '/' . $plugin_file) ? true : false;
}

/* Check if plugin is activated */


function avatarnews_check_plugin_active_status($pugin_slug, $plugin_file)
{
    return is_plugin_active($pugin_slug . '/' . $plugin_file) ? true : false;
}

require_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/misc.php');
require_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
function avatarnews_install_and_activate_plugins()
{
    check_ajax_referer('avatarnews_nonce', 'nonce');
    // Define the plugins to be installed and activated
    $recommended_plugins = array(
        array(
            'slug' => 'templategalaxy',
            'file' => 'templategalaxy.php',
            'name' => __('TemplateGalaxy', 'avatarnews')
        ),
        array(
            'slug' => 'advanced-import',
            'file' => 'advanced-import.php',
            'name' =>  __('Advanced Import', 'avatarnews')
        )
        // Add more plugins here as needed
    );

    // Include the necessary WordPress functions


    // Set up a transient to store the installation progress
    set_transient('install_and_activate_progress', array(), MINUTE_IN_SECONDS * 10);

    // Loop through each plugin
    foreach ($recommended_plugins as $plugin) {
        $plugin_slug = $plugin['slug'];
        $plugin_file = $plugin['file'];
        $plugin_name = $plugin['name'];

        // Check if the plugin is active
        if (is_plugin_active($plugin_slug . '/' . $plugin_file)) {
            avatarnews_update_install_and_activate_progress($plugin_name, 'Already Active');
            continue; // Skip to the next plugin
        }

        // Check if the plugin is installed but not active
        if (avatarnews_is_plugin_installed($plugin_slug . '/' . $plugin_file)) {
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);
            if (is_wp_error($activate)) {
                avatarnews_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            avatarnews_update_install_and_activate_progress($plugin_name, 'Activated');
            continue; // Skip to the next plugin
        }

        // Plugin is not installed or activated, proceed with installation
        avatarnews_update_install_and_activate_progress($plugin_name, 'Installing');

        // Fetch plugin information
        $api = plugins_api('plugin_information', array(
            'slug' => $plugin_slug,
            'fields' => array('sections' => false),
        ));

        // Check if plugin information is fetched successfully
        if (is_wp_error($api)) {
            avatarnews_update_install_and_activate_progress($plugin_name, 'Error');
            continue; // Skip to the next plugin
        }

        // Set up the plugin upgrader
        $upgrader = new Plugin_Upgrader();
        $install = $upgrader->install($api->download_link);

        // Check if installation is successful
        if ($install) {
            // Activate the plugin
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);

            // Check if activation is successful
            if (is_wp_error($activate)) {
                avatarnews_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            avatarnews_update_install_and_activate_progress($plugin_name, 'Activated');
        } else {
            avatarnews_update_install_and_activate_progress($plugin_name, 'Error');
        }
    }

    // Delete the progress transient
    $redirect_url = admin_url('themes.php?page=advanced-import');

    // Delete the progress transient
    delete_transient('install_and_activate_progress');
    // Return JSON response
    wp_send_json_success(array('redirect_url' => $redirect_url));
}

// Function to check if a plugin is installed but not active
function avatarnews_is_plugin_installed($plugin_slug)
{
    $plugins = get_plugins();
    return isset($plugins[$plugin_slug]);
}

// Function to update the installation and activation progress
function avatarnews_update_install_and_activate_progress($plugin_name, $status)
{
    $progress = get_transient('install_and_activate_progress');
    $progress[] = array(
        'plugin' => $plugin_name,
        'status' => $status,
    );
    set_transient('install_and_activate_progress', $progress, MINUTE_IN_SECONDS * 10);
}

function avatarnews_dashboard_menu()
{
    add_theme_page(esc_html__('About AvatarNews', 'avatarnews'), esc_html__('About AvatarNews', 'avatarnews'), 'edit_theme_options', 'about-avatarnews', 'avatarnews_theme_info_display');
}
add_action('admin_menu', 'avatarnews_dashboard_menu');
function avatarnews_theme_info_display()
{ ?>
    <div class="dashboard-about-avatarnews">
        <h1> <?php echo __('Welcome to AvatarNews- Full Site Editing WordPress Theme', 'avatarnews') ?></h1>
        <p><?php echo __('AvatarNews is the ultimate WordPress theme designed for blog, news, and magazine websites. Offering full site editing capabilities, this theme allows you to customize every aspect of your site with ease. Choose from multiple fully customizable headers and footers, and leverage the intuitive drag-and-drop builder to create a clean and minimal design. With 5 pre-built starter site demos ready for one-click import, AvatarNews provides a seamless setup experience. Ideal for bloggers, news portals, magazines, and niche bloggers such as travelers, food enthusiasts, and fashion and lifestyle influencers, AvatarNews delivers the versatility and tools you need to create a professional and engaging online presence. Explore more about AvatarNews at https://websiteinwp.com/avatarnews-wordpress-theme-for-blogging/', 'avatarnews') ?></p>
        <h3><span class="theme-name"><span><?php echo __('Recommended Plugins:', 'avatarnews'); ?></span></h3>
        <p class="notice-text"><?php echo __('1. TemplateGalaxy: Please install and activate TemplateGalaxy pluign from our website to use additional patterns, templates  and import demo with "one click demo import" feature.', 'avatarnews') ?></p>
        <p class="notice-text"><?php echo __('2. Advanced Import: This is required only for the one-click demo import features and can be deleted once the demo is imported.', 'avatarnews') ?></p>
        <a href="#" id="install-activate-button" class="installing-all-pluign button admin-button info-button"><?php echo __('Getting started with a single click', 'avatarnews'); ?></a>
        <h3 class="avatarnews-baisc-guideline-header"><?php echo __('Basic Theme Setup', 'avatarnews') ?></h3>
        <div class="avatarnews-baisc-guideline">
            <div class="featured-box">
                <ul>
                    <li><strong><?php echo __('Setup Header Layout:', 'avatarnews') ?></strong>
                        <ul>
                            <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Header:', 'avatarnews') ?></li>
                            <li> - <?php echo __('click on Header > Click on Edit (Icon) -> Add or Remove Requirend block/content as your requirement.:', 'avatarnews') ?></li>
                            <li> - <?php echo __('Click on save to update your layout', 'avatarnews') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="featured-box">
                <ul>
                    <li><strong><?php echo __('Setup Footer Layout:', 'avatarnews') ?></strong>
                        <ul>
                            <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Footer:', 'avatarnews') ?></li>
                            <li> - <?php echo __('click on Footer > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'avatarnews') ?></li>
                            <li> - <?php echo __('Click on save to update your layout', 'avatarnews') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="featured-box">
                <ul>
                    <li><strong><?php echo __('Setup Templates like Homepage/404/Search/Page/Single and more templates Layout:', 'avatarnews') ?></strong>
                        <ul>
                            <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'avatarnews') ?></li>
                            <li> - <?php echo __('click on Template(You need to edit/update) > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'avatarnews') ?></li>
                            <li> - <?php echo __('Click on save to update your layout', 'avatarnews') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="featured-box">
                <ul>
                    <li><strong><?php echo __('Restore/Reset Default Content layout of Template(Like: Frontpage/Blog/Archive etc.)', 'avatarnews') ?></strong>
                        <ul>
                            <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'avatarnews') ?></li>
                            <li> - <?php echo __('Click on Manage all Templates', 'avatarnews') ?></li>
                            <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template', 'avatarnews') ?></li>
                            <li> - <?php echo __('Click on Clear Customization', 'avatarnews') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="featured-box">
                <ul>
                    <li><strong><?php echo __('Restore/Reset Default Content layout of Template Parts(Header/Footer/Sidebar)', 'avatarnews') ?></strong>
                        <ul>
                            <li> - <?php echo __('Go to Appearance -> Editor -> Patterns:', 'avatarnews') ?></li>
                            <li> - <?php echo __('Click on Manage All Template Parts', 'avatarnews') ?></li>
                            <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template parts', 'avatarnews') ?></li>
                            <li> - <?php echo __('Click on Clear Customization', 'avatarnews') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="featured-list">
            <div class="half-col free-features">
                <h3><?php echo __('AvatarNews Features (Free)', 'avatarnews') ?></h3>
                <ul>
                    <li> <strong>- <?php echo __('Pre-build sections', 'avatarnews') ?></strong>
                        <ul>

                            <li> <?php echo __('Featured Banner', 'avatarnews') ?></li>
                            <li> <?php echo __('About Us Section', 'avatarnews') ?></li>
                            <li> <?php echo __('Newsletter Section', 'avatarnews') ?></li>
                            <li> <?php echo __('Post List Section', 'avatarnews') ?></li>
                            <li> <?php echo __('Post List with Sidebar Section', 'avatarnews') ?></li>
                            <li> <?php echo __('Post Grid Section', 'avatarnews') ?></li>
                            <li> <?php echo __('Author Profile Layout', 'avatarnews') ?></li>
                        </ul>
                    <li>
                    <li> <strong>- <?php echo __('Base Templates Ready', 'avatarnews') ?></strong>
                        <ul>
                            <li> <?php echo __('404 Template', 'avatarnews') ?></li>
                            <li> <?php echo __('Archive Template', 'avatarnews') ?></li>
                            <li> <?php echo __('Blank Template', 'avatarnews') ?></li>
                            <li> <?php echo __('Front Page Template', 'avatarnews') ?></li>
                            <li> <?php echo __('Blog Home Template', 'avatarnews') ?></li>
                            <li> <?php echo __('Index Page Template', 'avatarnews') ?></li>
                            <li> <?php echo __('Search Template', 'avatarnews') ?></li>
                            <li> <?php echo __('Page Template', 'avatarnews') ?></li>
                            <li> <?php echo __('Product Catalog Template', 'avatarnews') ?></li>
                            <li> <?php echo __('Product Single Page Template', 'avatarnews') ?></li>
                            <li> <?php echo __('Blank Template', 'avatarnews') ?></li>

                        </ul>
                    <li>
                    <li><strong> - <?php echo __('2 Pre-built ready to import starter sites', 'avatarnews') ?></strong></li>
                    <li><strong> - <?php echo __('9 Global Styles Variations', 'avatarnews') ?></strong></li>
                    <li><strong> - <?php echo __('10+ Pre-built ready to use patterns/section collection', 'avatarnews') ?></strong></li>
                    <li><strong> - <?php echo __('Fully Customizable Header Layout - 5', 'avatarnews') ?></strong></li>
                    <li> <strong>- <?php echo __('Fully Customizable Footer Layout - 5 ', 'avatarnews') ?></strong></li>
                    <li><strong> - <?php echo __('Multiple Typography Option', 'avatarnews') ?></strong></li>
                    <li> <strong>- <?php echo __('Advanced Color Options', 'avatarnews') ?></strong></li>
                </ul>
            </div>
            <div class="half-col pro-features">
                <h3><?php echo __('Premium Version Offer', 'avatarnews') ?></h3>
                <ul>
                    <li><?php echo __('Includes all free features', 'avatarnews') ?></li>
                    <li><?php echo __('4 more additional (6 total) Pre-build ready to import starter sites', 'avatarnews') ?></li>
                    <li><?php echo __('40+ Pre-built ready to use patterns/section collection', 'avatarnews') ?></li>
                    <li><?php echo __('Multiple Featured Banner with Slider Patterns', 'avatarnews') ?></li>
                    <li><?php echo __('Multiple Post Carousel Pattern - 4+', 'avatarnews') ?></li>
                    <li><?php echo __('Multiple News Ticker Layouts', 'avatarnews') ?></li>
                    <li><?php echo __('Multiple Flash News Layouts', 'avatarnews') ?></li>
                    <li><?php echo __('Multiple Breaking News Layouts', 'avatarnews') ?></li>
                    <li><?php echo __('Social Share Icons display shortcode as Pattern', 'avatarnews') ?></li>
                    <li><?php echo __('Breadcrumb display shortcode as Pattern', 'avatarnews') ?></li>
                    <li><?php echo __('Related Posts display shortcode as Pattern', 'avatarnews') ?></li>
                    <li><?php echo __('Current Date display shortcode as Pattern', 'avatarnews') ?></li>
                    <li><?php echo __('Current Time display shortcode as Pattern', 'avatarnews') ?></li>
                </ul>
                <a href="https://websiteinwp.com/plan-and-pricing/" class="upgrade-btn button" target="_blank"><?php echo __('Upgrade to Pro', 'avatarnews') ?></a>
            </div>
        </div>
    </div>
<?php
}
