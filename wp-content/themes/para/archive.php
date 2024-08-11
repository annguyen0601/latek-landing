<?php
/**
 * Displaying Archive pages.
 * @package Para
 */

get_header(); ?>

<?php /** post section **/ ?>
<div class="post-wrapper mt-5">
    <div class="container">
        <main id="main" role="main" class="content-with-sidebar">
            <?php
            $para_layout = get_theme_mod( 'para_theme_options','One Column');
            if($para_layout == 'One Column'){?>
                <div id="firstbox">
                    <?php
                        the_archive_title( '<h1 class="page-title mb-3">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <div class="row">
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();?>
                                <div class="col-lg-4 col-md-6">
                                    <?php get_template_part( 'template-parts/post/content',get_post_format() ); ?> 
                                </div>
                            <?php endwhile;
                            else :
                              get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                    </div>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => esc_html__( 'Previous page', 'para' ),
                                'next_text'          => esc_html__( 'Next page', 'para' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'para' ) . ' </span>',
                            ));
                        ?>
                    </div>
                </div>
                <div class="clearfix"></div>
            <?php }else if($para_layout == 'Three Columns'){?>
                <div class="row">
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
                    <div id="firstbox" class="col-lg-6 col-md-6">
                        <?php
                            the_archive_title( '<h1 class="page-title mb-3">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                              get_template_part( 'template-parts/post/content',get_post_format() ); 
                            endwhile;
                            else :
                              get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                          <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                              'prev_text'          => esc_html__( 'Previous page', 'para' ),
                              'next_text'          => esc_html__( 'Next page', 'para' ),
                              'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'para' ) . ' </span>',
                            ) );
                          ?>
                        </div>
                    </div>
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
                </div>
            <?php }else if($para_layout == 'Four Columns'){?>
                <div class="row">
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
                    <div id="firstbox" class="col-lg-3 col-md-3">
                        <?php
                            the_archive_title( '<h1 class="page-title mb-3">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <?php if ( have_posts() ) :
                          /* Start the Loop */
                            while ( have_posts() ) : the_post();
                              get_template_part( 'template-parts/post/content',get_post_format() ); 
                            endwhile;
                            else :
                              get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => esc_html__( 'Previous page', 'para' ),
                                    'next_text'          => esc_html__( 'Next page', 'para' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'para' ) . ' </span>',
                                ) );
                            ?>
                        </div>
                    </div>
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3'); ?></div>
                </div>
            <?php }else if($para_layout == 'Right Sidebar'){?>
                <div class="row">
                    <div id="firstbox" class="col-lg-8 col-md-8">
                        <?php
                            the_archive_title( '<h1 class="page-title mb-3">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <div class="row">
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();?>
                                    <div class="col-lg-6 col-md-6">
                                        <?php get_template_part( 'template-parts/post/content',get_post_format() ); ?> 
                                    </div>
                                <?php endwhile;
                                else :
                                  get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                        </div>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => esc_html__( 'Previous page', 'para' ),
                                    'next_text'          => esc_html__( 'Next page', 'para' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'para' ) . ' </span>',
                                ));
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
                </div>
            <?php }else if($para_layout == 'Left Sidebar'){?>
                <div class="row">
                    <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
                    <div id="firstbox" class="col-lg-8 col-md-8">
                        <?php
                            the_archive_title( '<h1 class="page-title mb-3">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <div class="row">
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();?>
                                    <div class="col-lg-6 col-md-6">
                                        <?php get_template_part( 'template-parts/post/content',get_post_format() ); ?> 
                                    </div>
                                <?php endwhile;
                                else :
                                  get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                        </div>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => esc_html__( 'Previous page', 'para' ),
                                    'next_text'          => esc_html__( 'Next page', 'para' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'para' ) . ' </span>',
                                ) );
                            ?>
                        </div>
                    </div>
                </div>
            <?php }else if($para_layout == 'Grid Layout'){?>
                <div id="firstbox">
                    <?php
                        the_archive_title( '<h1 class="page-title mb-3">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                    <div class="row">
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                              get_template_part( 'template-parts/post/grid-layout' );
                            endwhile;
                            else :
                              get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                    </div>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => esc_html__( 'Previous page', 'para' ),
                                'next_text'          => esc_html__( 'Next page', 'para' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'para' ) . ' </span>',
                            ));
                        ?>
                    </div>
                </div>
            <?php }else {?>
                <div class="row">
                    <div id="firstbox" class="col-lg-8 col-md-8">
                        <?php
                            the_archive_title( '<h1 class="page-title mb-3">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                        ?>
                        <div class="row">
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();?>
                                    <div class="col-lg-6 col-md-6">
                                        <?php get_template_part( 'template-parts/post/content',get_post_format() ); ?> 
                                    </div>
                                <?php endwhile;
                                else :
                                  get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                        </div>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => esc_html__( 'Previous page', 'para' ),
                                    'next_text'          => esc_html__( 'Next page', 'para' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'para' ) . ' </span>',
                                ));
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4"><?php get_sidebar(); ?></div>
                </div>
            <?php } ?>
        </main>
    </div>
</div>

<?php get_footer(); ?>