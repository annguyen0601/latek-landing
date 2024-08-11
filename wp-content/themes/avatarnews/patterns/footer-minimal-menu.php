<?php

/**
 * Title: Footer Minimal with Menu
 * Slug: avatarnews/footer-minimal-menu
 * Categories: avatarnews
 */
$avatarnews_agency_url = trailingslashit(get_template_directory_uri());
$avatarnews_images = array(
    $avatarnews_agency_url . 'assets/images/icon_logo.png',
);
?>
<!-- wp:group {"metadata":{"categories":["avatarnews"],"patternName":"avatarnews/footer-minimal-menu","name":"Footer Minimal with Menu"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"74px","bottom":"30px"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:74px;padding-right:var(--wp--preset--spacing--40);padding-bottom:30px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"bottom":"48px"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
    <div class="wp-block-group" style="margin-bottom:48px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:columns {"verticalAlignment":"center"} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"ref":2788,"textColor":"background","overlayMenu":"never","layout":{"type":"flex"}} /--></div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":4744,"width":"48px","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($avatarnews_images[0]) ?>" alt="" class="wp-image-4744" style="width:48px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFF","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
                <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"tiktok"} /-->

                    <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"30px"},"margin":{"top":"28px"}},"border":{"top":{"color":"var:preset|color|gray-color","width":"1px"}}},"layout":{"type":"constrained","contentSize":"480px"}} -->
    <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--gray-color);border-top-width:1px;margin-top:28px;padding-top:40px;padding-bottom:30px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"lineHeight":"1.6"}},"textColor":"background"} -->
        <p class="has-text-align-center has-background-color has-text-color has-link-color" style="line-height:1.6"><?php esc_html_e('Proudly Powered by WordPress | Theme: AvatarNews Design &amp; Developed by WebsiteinWP', 'avatarnews') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->