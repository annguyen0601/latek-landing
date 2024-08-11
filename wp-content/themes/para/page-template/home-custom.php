<?php
/**
 * Template Name: Home Custom Page
 */
?>

<?php get_header(); ?>

<main id="main" role="main">
  <div class="allsections">
  <?php do_action( 'para_above_slider' ); ?>

  <?php if( get_theme_mod('para_slider_hide_show', false) != ''){ ?> 

    <section id="slider" class=" mw-100">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"> 
          <?php $para_content_pages = array();
            for ( $count = 1; $count <= 4; $count++ ) {
              $mod = intval( get_theme_mod( 'para_slider_page' . $count ));
              if ( 'page-none-selected' != $mod ) {
                $para_content_pages[] = $mod;
              }
            }
            if( !empty($para_content_pages) ) :
              $args = array(
                'post_type' => 'page',
                'post__in' => $para_content_pages,
                'orderby' => 'post__in'
              );
              $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
          ?>     
            <div class="carousel-inner" role="listbox">
              <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
                <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>  
                    <div class="row mr-0">
                        <div class="sliderbg-img pd-0">
                            <?php the_post_thumbnail(); ?>    
                            <div class="s-oly"> </div>             
                        </div>            
                        <div class="slider-content">
                            <!-- <div class="inner_carousel"> -->
                              <p>
                                <i class="fas fa-star"></i>
                                <?php $para_excerpt = get_the_excerpt(); echo esc_html( para_string_limit_words( $para_excerpt,20 ) ); ?>
                              </p>
                              <h2><?php the_title(); ?></h2>
                              <div class="sbttn">
                                <a class="read-btn" href="<?php echo esc_url(get_permalink()); ?>"><?php esc_html_e( 'Explore features', 'para' ); ?><i class="fas fa-chevron-right"></i></a>
                                <a class="v-btn" href="<?php echo esc_attr(get_theme_mod('para_sliderhowitworkbtnlink')); ?>">
                                  <div class="icnbx"><i class="fas fa-play"></i></div>
                                  <span><?php esc_html_e( 'How IT Works', 'para' ); ?></span>
                                </a>
                              </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
              <?php $i++; endwhile; 
              wp_reset_postdata();?>
            </div>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-arrow-left"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Previous', 'para' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-arrow-right"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Next', 'para' );?></span>
        </a>
      <!-- </div>    -->
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action( 'para_below_slider' ); ?>

  <section id="features-section" >
     <div class="feabx">
      <div class="container">
         
            <div class="row mr-0">
              <?php 
              $para_catData = get_theme_mod('para_features_category');
              if ($para_catData) {
                $page_query = new WP_Query(array( 
                  'category_name' => esc_html($para_catData, 'para'),
                  'posts_per_page' => 3 // Limit the number of posts to 3
                ));

                $icons = [
                  get_theme_mod('para_featurebox1icon'),
                  get_theme_mod('para_featurebox2icon'),
                  get_theme_mod('para_featurebox3icon')
                ];

                $counter = 0;

                while ($page_query->have_posts()) : $page_query->the_post();
                  $icon_class = isset($icons[$counter]) ? $icons[$counter] : 'fas fa-briefcase'; // Default icon
                  $counter++;
                  ?>
                  
                  <div class="col-lg-4 col-md-6 col-sm-6 serbx">
                    <div class="features-box ">        
                        <div class="fea-icn">
                            <i class="<?php echo esc_attr($icon_class); ?>"></i>
                        </div>
                        <div class="features-content">
                            <a href="<?php echo esc_url(get_permalink()); ?>">
                              <div class="title"><?php the_title(); ?></div>
                            </a>
                            <p>
                              <?php 
                              $para_excerpt = get_the_excerpt(); 
                              echo esc_html(para_string_limit_words($para_excerpt, 10)); 
                              ?>
                            </p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <!-- </div> -->
                <?php endwhile; 
                wp_reset_postdata();
              } ?>
            </div>
          </div>
      </div>
      <div class="clearfix"></div>
    </section>

  <?php if( get_theme_mod('para_features_category') != ''){ ?>

    <section id="aboutus-section">
      <div class="container">
        
        <div class="row m-0">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="aboutus-content">
               <div class="abt_subtitle">
                  <h6><?php echo esc_html(get_theme_mod('para_aboutussubtitle')); ?></h6>
                </div>
              <h4><?php echo esc_html(get_theme_mod('para_aboutustitle')); ?></h4>
              <p class="description"><?php echo esc_html(get_theme_mod('para_aboutusdescription')); ?></p>
              <ul>
                <li><?php echo esc_html(get_theme_mod('para_aboutuslist1')); ?></li>
                <li><?php echo esc_html(get_theme_mod('para_aboutuslist2')); ?></li>
                <li><?php echo esc_html(get_theme_mod('para_aboutuslist3')); ?></li>
              </ul>
              <div class="aboutus-btn">
                <?php if(get_theme_mod('para_aboutusbtntext') != '') {?>
                  <a href="<?php echo esc_html(get_theme_mod('para_aboutusbtnlinks')); ?>"><?php echo esc_html(get_theme_mod('para_aboutusbtntext')); ?><i class="fas fa-chevron-right"></i></a>
                <?php }?>
              </div>
            </div>
          </div> 
          <div class="col-lg-6 col-md-12 col-sm-12"> 
              <div class="imgbx">
                <div class="row mr-0">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="abtimg1">
                        <?php 
                          $para_aboutus_image1 = get_theme_mod('para_aboutus_image1');

                          if(!empty($para_aboutus_image1)){
                            echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($para_aboutus_image1).'" class="img-responsive secondry-bg-img" />';
                          }else{
                            echo '<img alt="para_aboutus_image1" src="'.get_template_directory_uri().'/assets/images/abt3.jpg" class="img-responsive" />';
                          }
                        ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="abtimg2">
                        <?php 
                          $para_aboutus_image2 = get_theme_mod('para_aboutus_image2');

                          if(!empty($para_aboutus_image2)){
                            echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($para_aboutus_image2).'" class="img-responsive secondry-bg-img" />';
                          }else{
                            echo '<img alt="para_aboutus_image2" src="'.get_template_directory_uri().'/assets/images/abt2.jpg" class="img-responsive" />';
                          }
                        ?>
                        </div>
                    </div>
                </div>

                <div class="yearofex">
                  <div class="exbxinn"></div>
                    <p class="yearofextext"><i class="fas fa-arrow-right"></i><?php echo esc_html(get_theme_mod('para_aboutusyearofextext')); ?></p>
                    <h3 class="yearofexno"><?php echo esc_html(get_theme_mod('para_aboutusyearofexno')); ?></h3>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

  <?php }?>
  <?php do_action( 'para_below_best_sellers' ); ?>

  <!-- <div class="container entry-content py-4">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div> -->
  </div>
</main>
<?php get_footer(); ?>