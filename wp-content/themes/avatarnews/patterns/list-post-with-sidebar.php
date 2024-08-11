<?php

/**
 * Title: Post List with Sidebar
 * Slug: avatarnews/list-post-with-sidebar
 * Categories: avatarnews
 */
?>
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