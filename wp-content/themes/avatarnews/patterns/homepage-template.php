<?php

/**
 * Title: Homepage Content Template
 * Slug: avatarnews/homepage-template
 * Categories: avatarnews
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<main class="wp-block-group" style="padding-top:24px;padding-right:var(--wp--preset--spacing--40);padding-bottom:24px;padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"10px","left":"10px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"queryId":6,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template -->
                <!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":500,"gradient":"dark-gradient","contentPosition":"bottom left","className":"avatarnews-hover-cover","style":{"spacing":{"padding":{"left":"24px","right":"24px","top":"20px","bottom":"20px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left avatarnews-hover-cover" style="padding-top:20px;padding-right:24px;padding-bottom:20px;padding-left:24px;min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round"} /-->

                        <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"40px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:post-author-name {"className":"is-style-author-name-with-white-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"capitalize"}},"textColor":"light-color"} /-->

                            <!-- wp:post-date {"format":"M j, Y","className":"is-style-post-date-with-white-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} /-->
                        </div>
                        <!-- /wp:group -->
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
        <!-- /wp:column -->

        <!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"10px"}}} -->
        <div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"queryId":6,"query":{"perPage":"1","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template -->
                <!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":245,"gradient":"dark-gradient","contentPosition":"bottom left","className":"avatarnews-hover-cover","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left avatarnews-hover-cover" style="padding-top:20px;padding-right:24px;padding-bottom:20px;padding-left:24px;min-height:245px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round"} /-->

                        <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"30px","lineHeight":"1.5"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:post-author-name {"className":"is-style-author-name-with-white-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"capitalize"}},"textColor":"light-color"} /-->

                            <!-- wp:post-date {"format":"M j, Y","className":"is-style-post-date-with-white-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} /-->
                        </div>
                        <!-- /wp:group -->
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

            <!-- wp:query {"queryId":6,"query":{"perPage":"2","pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"grid","columnCount":"2"}} -->
                <!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":245,"gradient":"dark-gradient","contentPosition":"bottom left","className":"avatarnews-hover-cover","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"20px","right":"20px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left avatarnews-hover-cover" style="padding-top:16px;padding-right:20px;padding-bottom:16px;padding-left:20px;min-height:245px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span>
                    <div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round"} /-->

                        <!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontSize":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:post-author-name {"className":"is-style-author-name-with-white-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"capitalize"}},"textColor":"light-color"} /-->

                            <!-- wp:post-date {"format":"M j, Y","className":"is-style-post-date-with-white-icon","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} /-->
                        </div>
                        <!-- /wp:group -->
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
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
        <div class="wp-block-column"><!-- wp:query {"queryId":6,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template -->
                <!-- wp:columns {"verticalAlignment":"center","className":"is-style-default","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"},"blockGap":{"top":"24px","left":"24px"}},"border":{"radius":"0px"}},"backgroundColor":"light-color"} -->
                <div class="wp-block-columns are-vertically-aligned-center is-style-default has-light-color-background-color has-background" style="border-radius:0px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:post-featured-image {"isLink":true,"height":"300px"} /--></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"5px"}}} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round"} /-->

                        <!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}},"fontSize":"big"} /-->

                        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:post-author-name {"className":"is-style-author-name-with-icon","style":{"typography":{"textTransform":"capitalize"}}} /-->

                            <!-- wp:post-date {"format":"M j, Y","className":"is-style-post-date-with-icon"} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:post-excerpt {"excerptLength":29,"style":{"spacing":{"margin":{"top":"14px"}}},"fontSize":"normal"} /-->

                        <!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"margin":{"top":"16px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;margin-top:16px"><!-- wp:read-more {"content":"Continue Reading","className":"is-style-readmore-hover-secondary-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"24px","right":"24px"},"margin":{"top":"12px"}}},"backgroundColor":"primary","textColor":"light-color"} /--></div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
                <!-- /wp:post-template -->

                <!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"className":"avatarnews-pagination","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"24px"}},"layout":{"type":"flex","justifyContent":"center"}} -->
                <!-- wp:query-pagination-previous /-->

                <!-- wp:query-pagination-numbers /-->

                <!-- wp:query-pagination-next /-->
                <!-- /wp:query-pagination -->

                <!-- wp:query-no-results -->
                <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
                <p></p>
                <!-- /wp:paragraph -->
                <!-- /wp:query-no-results -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"30%"} -->
        <div class="wp-block-column" style="flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"avatarnews","area":"uncategorized"} /--></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

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
</main>
<!-- /wp:group -->