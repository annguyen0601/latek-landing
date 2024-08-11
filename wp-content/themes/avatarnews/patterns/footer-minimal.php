<?php

/**
 * Title: Footer Minimal
 * Slug: avatarnews/footer-minimal
 * Categories: avatarnews
 */
$avatarnews_agency_url = trailingslashit(get_template_directory_uri());
$avatarnews_images = array(
    $avatarnews_agency_url . 'assets/images/icon_logo.png',
);
?>
<!-- wp:group {"metadata":{"categories":["avatarnews"],"patternName":"avatarnews/footer-minimal","name":"Footer Minimal"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"74px","bottom":"30px"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:74px;padding-right:var(--wp--preset--spacing--40);padding-bottom:30px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"bottom":"24px"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-style:none;border-width:0px;margin-bottom:24px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":4744,"width":"84px","height":"84px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($avatarnews_images[0]) ?>" alt="" class="wp-image-4744" style="object-fit:cover;width:84px;height:84px" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFF","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

        <!-- wp:social-link {"url":"#","service":"x"} /-->

        <!-- wp:social-link {"url":"#","service":"instagram"} /-->

        <!-- wp:social-link {"url":"#","service":"tiktok"} /-->

        <!-- wp:social-link {"url":"#","service":"youtube"} /-->

        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

        <!-- wp:social-link {"url":"#","service":"pinterest"} /-->
    </ul>
    <!-- /wp:social-links -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"30px"},"margin":{"top":"28px"}},"border":{"top":{"width":"0px","style":"none"}}},"layout":{"type":"constrained","contentSize":"480px"}} -->
    <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:28px;padding-top:0px;padding-bottom:30px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"lineHeight":"1.6"}},"textColor":"background"} -->
        <p class="has-text-align-center has-background-color has-text-color has-link-color" style="line-height:1.6"><?php esc_html_e('Proudly Powered by WordPress | Theme: AvatarNews Design &amp; Developed by WebsiteinWP', 'avatarnews') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->