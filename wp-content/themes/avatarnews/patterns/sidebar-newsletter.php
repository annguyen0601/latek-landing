<?php

/**
 * Title: Sidebar Newsletter
 * Slug: avatarnews/sidebar-newsletter
 * Categories: avatarnews
 */
$avatarnews_agency_url = trailingslashit(get_template_directory_uri());
$avatarnews_images = array(
    $avatarnews_agency_url . 'assets/images/tick_mark.png',
);
?>
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

    <!-- wp:contact-form-7/contact-form-selector {"id":3709,"hash":"75b59b3","title":"Newsletter Form","className":"avatarnews-newsletter-section"} -->
    <div class="wp-block-contact-form-7-contact-form-selector avatarnews-newsletter-section">[contact-form-7 id="75b59b3" title="Newsletter Form"]</div>
    <!-- /wp:contact-form-7/contact-form-selector -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group"><!-- wp:image {"id":4638,"width":"16px","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($avatarnews_images[0]) ?>" alt="" class="wp-image-4638" style="width:16px" /></figure>
        <!-- /wp:image -->

        <!-- wp:paragraph {"style":{"spacing":{"padding":{"bottom":"0px","top":"5px"}}}} -->
        <p style="padding-top:5px;padding-bottom:0px"><?php esc_html_e('By signing up, you agree to the our terms and our&nbsp;Privacy Policy&nbsp;agreement.', 'avatarnews') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->