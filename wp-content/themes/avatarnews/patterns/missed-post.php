<?php

/**
 * Title: You May Missed Posts
 * Slug: avatarnews/missed-posts
 * Categories: avatarnews
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-primary-background-color has-background" style="padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color"} -->
                <h2 class="wp-block-heading has-light-color-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:600"><?php esc_html_e('You May Missed', 'avatarnews') ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":6,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":"3"}} -->
        <!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":280,"gradient":"dark-gradient","contentPosition":"bottom left","className":"avatarnews-hover-cover","style":{"spacing":{"padding":{"left":"16px","right":"16px","top":"16px","bottom":"16px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-cover has-custom-content-position is-position-bottom-left avatarnews-hover-cover" style="padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px;min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span>
            <div class="wp-block-cover__inner-container"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"24px"}}} /-->

                <!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round"} /-->

                <!-- wp:post-date {"format":"M j, Y"} /-->
            </div>
        </div>
        <!-- /wp:cover -->
        <!-- /wp:post-template -->

        <!-- wp:query-no-results -->
        <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
        <p></p>
        <!-- /wp:paragraph -->
        <!-- /wp:query-no-results -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->