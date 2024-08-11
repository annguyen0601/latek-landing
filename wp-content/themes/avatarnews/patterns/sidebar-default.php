<?php

/**
 * Title: Sidebar Default
 * Slug: avatarnews/sidebar-default
 * Categories: avatarnews
 */
$avatarnews_agency_url = trailingslashit(get_template_directory_uri());
$avatarnews_images = array(
    $avatarnews_agency_url . 'assets/images/tick_mark.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"24px","right":"24px"},"margin":{"top":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0px;padding-top:30px;padding-right:24px;padding-bottom:30px;padding-left:24px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-primary-background-color has-background" style="padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Search', 'avatarnews') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search the site...","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"1px","color":"#E7E7E7","radius":"0px"}}} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"24px","right":"24px"},"margin":{"top":"22px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:22px;padding-top:30px;padding-right:24px;padding-bottom:30px;padding-left:24px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-primary-background-color has-background" style="padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Latest Posts', 'avatarnews') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":13,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"15px"}}} -->
        <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"15px"},"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"100px"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100px"><!-- wp:post-featured-image {"isLink":true,"height":"84px","style":{"border":{"radius":"0px"}}} /--></div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0"}}} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"16px"},"spacing":{"margin":{"top":"0","bottom":"10px","left":"0","right":"0"}}}} /-->

                <!-- wp:post-date {"format":"M j, Y","className":"is-style-post-date-with-icon","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"24px","right":"24px"},"margin":{"top":"22px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:22px;padding-top:30px;padding-right:24px;padding-bottom:30px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"20px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="margin-bottom:20px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-primary-background-color has-background" style="padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Latest Comments', 'avatarnews') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:latest-comments {"displayExcerpt":false,"className":"avatarnews-latest-comments"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"24px","right":"24px"},"margin":{"top":"20px","bottom":"20px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:20px;margin-bottom:20px;padding-top:30px;padding-right:24px;padding-bottom:30px;padding-left:24px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-primary-background-color has-background" style="padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Categories', 'avatarnews') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:categories {"showPostCounts":true,"className":"is-style-avatarnews-categories-bullet-hide-style avatarnews-sidebar-categories","style":{"typography":{"lineHeight":"2","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"20px"}}}} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"24px","right":"24px"},"margin":{"top":"20px","bottom":"20px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:20px;margin-bottom:20px;padding-top:30px;padding-right:24px;padding-bottom:30px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"20px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group" style="margin-bottom:20px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-primary-background-color has-background" style="padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Archives', 'avatarnews') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:archives {"showPostCounts":true,"className":"avatarnews-archive-list"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"24px","right":"24px"},"margin":{"top":"20px","bottom":"20px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;margin-top:20px;margin-bottom:20px;padding-top:30px;padding-right:24px;padding-bottom:30px;padding-left:24px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-primary-background-color has-background" style="padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Tags', 'avatarnews') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:tag-cloud {"smallestFontSize":"14px","largestFontSize":"14px","className":"avatarnews-tags-list"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-primary-background-color has-background" style="padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"500"}},"textColor":"light-color"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:500"><?php esc_html_e('Signup Newsletter', 'avatarnews') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"20px"}}}} -->
    <p class="has-text-align-left" style="margin-top:20px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'avatarnews') ?></p>
    <!-- /wp:paragraph -->
    <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"20px"}}}} -->
    <?php esc_html_e('Insert the contact form shortcode with the additional CSS class- "avatarnews-newsletter-section"', 'avatarnews') ?>
    <!-- /wp:paragraph -->
    <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":4638,"width":"16px","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($avatarnews_images[0]) ?>" alt="" class="wp-image-4638" style="width:16px" /></figure>
        <!-- /wp:image -->

        <!-- wp:paragraph {"style":{"spacing":{"padding":{"bottom":"0px","top":"5px"}}}} -->
        <p style="padding-top:5px;padding-bottom:0px"><?php esc_html_e('By signing up, you agree to the our terms and our Privacy Policy agreement.', 'avatarnews') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->