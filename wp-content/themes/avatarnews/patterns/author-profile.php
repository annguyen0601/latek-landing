<?php

/**
 * Title: Author Profile
 * Slug: avatarnews/author-profile
 * Categories: avatarnews
 */
$avatarnews_agency_url = trailingslashit(get_template_directory_uri());
$avatarnews_images = array(
    $avatarnews_agency_url . 'assets/images/author_photo.jpg',
);
?>
<!-- wp:group {"style":{"color":{"gradient":"linear-gradient(180deg,rgb(231,237,254) 56%,rgb(255,255,255) 56%)"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"140px","bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group has-background" style="background:linear-gradient(180deg,rgb(231,237,254) 56%,rgb(255,255,255) 56%);padding-top:140px;padding-right:var(--wp--preset--spacing--40);padding-bottom:64px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":2677,"width":"400px","height":"399px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}}} -->
    <figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url($avatarnews_images[0]) ?>" alt="" class="wp-image-2677" style="border-radius:50%;object-fit:cover;width:400px;height:399px" /></figure>
    <!-- /wp:image -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"40px"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-top:40px"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"600"}},"textColor":"heading-color"} -->
        <h2 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="font-size:40px;font-style:normal;font-weight:600"><?php esc_html_e('Zelina Powel', 'avatarnews') ?></h2>
        <!-- /wp:heading -->

        <!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"primary"} -->
        <h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color" style="font-style:normal;font-weight:400"><?php esc_html_e('Content Writer/Traveller/Blogger', 'avatarnews') ?></h4>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"28px"}}}} -->
        <p class="has-text-align-center" style="margin-top:28px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.', 'avatarnews') ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:social-links {"style":{"spacing":{"margin":{"top":"28px"},"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
        <ul class="wp-block-social-links" style="margin-top:28px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

            <!-- wp:social-link {"url":"#","service":"x"} /-->

            <!-- wp:social-link {"url":"#","service":"instagram"} /-->

            <!-- wp:social-link {"url":"#","service":"youtube"} /-->

            <!-- wp:social-link {"url":"#","service":"pinterest"} /-->

            <!-- wp:social-link {"url":"#","service":"tiktok"} /-->
        </ul>
        <!-- /wp:social-links -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->