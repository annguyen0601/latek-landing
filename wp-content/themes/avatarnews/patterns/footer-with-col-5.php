<?php

/**
 * Title: Footer 5 Column Layout
 * Slug: avatarnews/footer-with-col-5
 * Categories: avatarnews
 */
$avatarnews_agency_url = trailingslashit(get_template_directory_uri());
$avatarnews_images = array(
    $avatarnews_agency_url . 'assets/images/icon_logo.png',
);
?>
<!-- wp:group {"metadata":{"categories":["avatarnews"],"patternName":"avatarnews/footer-with-col-5","name":"Footer"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","top":"3rem"}}},"backgroundColor":"background-alt","textColor":"contrast","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group has-contrast-color has-background-alt-background-color has-text-color has-background" style="padding-top:3rem;padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|70","left":"40px"}}}} -->
    <div class="wp-block-columns" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"bottom":"0px"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-style:none;border-width:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":4744,"width":"54px","height":"54px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($avatarnews_images[0]) ?>" alt="" class="wp-image-4744" style="object-fit:cover;width:54px;height:54px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"}},"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
            <p class="has-foreground-alt-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-right:0;margin-bottom:var(--wp--preset--spacing--30);margin-left:0;font-size:16px"><?php esc_html_e('Bringing the World to Your Fingertips', 'avatarnews') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"}},"textColor":"background"} -->
            <h3 class="wp-block-heading has-background-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--40);font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Company', 'avatarnews') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-secondary is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":2,"textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} -->
            <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2;text-decoration:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-secondary is-style-list-style-no-bullet has-link-color"><!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('About Us', 'avatarnews') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Blog', 'avatarnews') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Our Team', 'avatarnews') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Career', 'avatarnews') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Contact Us', 'avatarnews') ?></a></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"}},"textColor":"background"} -->
            <h3 class="wp-block-heading has-background-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--40);font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Products', 'avatarnews') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-secondary is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":2,"textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} -->
            <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2;text-decoration:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-secondary is-style-list-style-no-bullet has-link-color"><!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Fashion Hunt', 'avatarnews') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Daily Newspaper', 'avatarnews') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Weekly Magazine', 'avatarnews') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('E-Magazine', 'avatarnews') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Press &amp; Newsroom', 'avatarnews') ?></a></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"}},"textColor":"background"} -->
            <h3 class="wp-block-heading has-background-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--40);font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Categories', 'avatarnews') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:categories {"className":"is-style-avatarnews-categories-bullet-hide-style-white-color","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"right":"0","left":"0"}}}} /-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px"}},"textColor":"background"} -->
            <h3 class="wp-block-heading has-background-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--40);font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Support', 'avatarnews') ?></h3>
            <!-- /wp:heading -->

            <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-secondary is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":2},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}}} -->
            <ul style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2" class="wp-block-list is-style-hide-bullet-list-link-hover-style-secondary is-style-list-style-no-bullet has-link-color"><!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Privacy Policy', 'avatarnews') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Term &amp; Conditions', 'avatarnews') ?></a></li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li><a href="#"><?php esc_html_e('Support', 'avatarnews') ?></a></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0","bottom":"16px","left":"0"},"margin":{"top":"60px"}},"border":{"top":{"color":"var:preset|color|gray-color","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--gray-color);border-top-width:1px;margin-top:60px;padding-top:0px;padding-right:0;padding-bottom:16px;padding-left:0"><!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","openInNewTab":true,"className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"0","left":"20px"},"margin":{"right":"0","left":"0","top":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:40px;margin-right:0;margin-left:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

            <!-- wp:social-link {"url":"#","service":"x"} /-->

            <!-- wp:social-link {"url":"#","service":"spotify"} /-->

            <!-- wp:social-link {"url":"#","service":"instagram"} /-->

            <!-- wp:social-link {"url":"#","service":"pinterest"} /-->

            <!-- wp:social-link {"url":"#","service":"tiktok"} /-->
        </ul>
        <!-- /wp:social-links -->

        <!-- wp:paragraph {"textColor":"foreground-alt"} -->
        <p class="has-foreground-alt-color has-text-color"><?php esc_html_e('Proudly powered by WordPress&nbsp;|&nbsp;avatarnews - Made with Love by WebsiteinWP.', 'avatarnews') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->