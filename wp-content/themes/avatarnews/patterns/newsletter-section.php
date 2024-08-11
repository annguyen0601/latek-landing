<?php

/**
 * Title: Newsletter Section
 * Slug: avatarnews/newsletter-section
 * Categories: avatarnews
 */
$avatarnews_agency_url = trailingslashit(get_template_directory_uri());
$avatarnews_images = array(
    $avatarnews_agency_url . 'assets/images/tick_mark.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color","fontSize":"x-large"} -->
    <h2 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color has-x-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Signup Newsletter', 'avatarnews') ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'avatarnews') ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:contact-form-7/contact-form-selector {"id":3709,"hash":"75b59b3","title":"Newsletter Form","className":"avatarnews-newsletter-section"} -->
    <div class="wp-block-contact-form-7-contact-form-selector avatarnews-newsletter-section">[contact-form-7 id="75b59b3" title="Newsletter Form"]</div>
    <!-- /wp:contact-form-7/contact-form-selector -->

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