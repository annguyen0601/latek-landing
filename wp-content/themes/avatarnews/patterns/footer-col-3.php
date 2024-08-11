<?php

/**
 * Title: Footer with column 3 Box Style
 * Slug: avatarnews/footer-col-3
 * Categories: avatarnews
 */
$avatarnews_agency_url = trailingslashit(get_template_directory_uri());
$avatarnews_images = array(
    $avatarnews_agency_url . 'assets/images/icon_logo.png',
);
?>
<!-- wp:group {"metadata":{"categories":["avatarnews"],"patternName":"avatarnews/footer-col-3","name":"Footer with column 3 Box Style"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"74px","bottom":"30px"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:74px;padding-right:var(--wp--preset--spacing--40);padding-bottom:30px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"borderColor":"gray-color"} -->
        <div class="wp-block-column has-border-color has-gray-color-border-color" style="border-width:1px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:image {"id":4744,"width":"48px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($avatarnews_images[0]) ?>" alt="" class="wp-image-4744" style="width:48px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none"}},"textColor":"light-color","fontSize":"x-large"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color has-x-large-font-size" style="font-style:normal;font-weight:600;text-transform:none"><?php esc_html_e('Avatar', 'avatarnews') ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php esc_html_e('News', 'avatarnews') ?></mark></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
            <p class="has-background-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'avatarnews') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"40px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="margin-top:40px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"18px"}},"textColor":"light-color"} -->
                <p class="has-light-color-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('14th Street, Caltech, New Jersey, Alabama, United States', 'avatarnews') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"18px"}},"textColor":"light-color"} -->
                <p class="has-light-color-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('+1 (888) 012-3456', 'avatarnews') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"18px"}},"textColor":"light-color"} -->
                <p class="has-light-color-color has-text-color has-link-color" style="font-size:18px"><?php esc_html_e('email@example.com', 'avatarnews') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"width":"1px"}},"borderColor":"gray-color"} -->
        <div class="wp-block-column has-border-color has-gray-color-border-color" style="border-width:1px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|gray-color","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--gray-color);border-bottom-width:1px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"0px","right":"0px"}},"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;padding-top:10px;padding-right:0px;padding-bottom:10px;padding-left:0px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color"} -->
                        <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:600"><?php esc_html_e('Latest Articles', 'avatarnews') ?></h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:query {"queryId":13,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"15px"}}} -->
                <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"15px"},"margin":{"top":"0","bottom":"0"}}}} -->
                <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"100px"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100px"><!-- wp:post-featured-image {"isLink":true,"height":"84px","style":{"border":{"radius":"0px"}}} /--></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"}}} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"18px"},"spacing":{"margin":{"top":"0","bottom":"10px","left":"0","right":"0"}}}} /-->

                        <!-- wp:post-date {"format":"M j, Y","className":"is-style-post-date-with-icon","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
                <!-- /wp:post-template -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"width":"1px"}},"borderColor":"gray-color"} -->
        <div class="wp-block-column has-border-color has-gray-color-border-color" style="border-width:1px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|gray-color","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--gray-color);border-bottom-width:1px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"0px","right":"0px"}},"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:2px;padding-top:10px;padding-right:0px;padding-bottom:10px;padding-left:0px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color"} -->
                        <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:600"><?php esc_html_e('Tags', 'avatarnews') ?></h2>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:tag-cloud {"smallestFontSize":"14px","largestFontSize":"14px","className":"avatarnews-footer-tags"} /-->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"30px"},"margin":{"top":"60px"}},"border":{"top":{"width":"0px","style":"none"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
    <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:60px;padding-top:20px;padding-bottom:30px"><!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFF","className":"is-style-logos-only avatarnews-social-icons","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}}} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only avatarnews-social-icons"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

            <!-- wp:social-link {"url":"#","service":"x"} /-->

            <!-- wp:social-link {"url":"#","service":"instagram"} /-->

            <!-- wp:social-link {"url":"#","service":"youtube"} /-->

            <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
        </ul>
        <!-- /wp:social-links -->

        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
        <p class="has-background-color has-text-color has-link-color"><?php esc_html_e('Proudly Powered by WordPress | Theme: AvatarNews by WebsiteinWP', 'avatarnews') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->