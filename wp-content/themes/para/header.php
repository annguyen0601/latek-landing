<?php
/**
 * Display Header.
 * @package Para
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}?>
	<header role="banner" class="banner">
		<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'para' ); ?></a>
		<div id="header">
			<div class="header-box">
				<div class="top-head ">
					<div class="container">	
						<div class=" row">
							<div class="col-lg-2 col-md-3 col-sm-3 col-8 pd-0">
								<div class="logobx">
									<!-- <div class="logobxinn"></div> -->
									<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
								</div>
							</div>
							<div class="col-lg-6 col-md-2 col-sm-2 col-4">
								<div class="menu-section text-lg-center">
									<div class="<?php if( get_theme_mod( 'para_sticky_header', false) != '') { ?>sticky-menubox<?php } else { ?>close-sticky <?php } ?>">
										<?php get_template_part( 'template-parts/navigation/site', 'nav' ); ?>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-7 col-sm-7 txt">
								<div class="row mr-0">
									<div class="col-lg-7 col-md-7 col-sm-7 col-7 phbtn">
										<?php if(get_theme_mod('para_phoneno') != ''){ ?>
											<a href="tel:<?php echo esc_attr(get_theme_mod('para_phoneno')); ?>"><i class="fas fa-phone"></i>
											<?php echo esc_html(get_theme_mod('para_phoneno')); ?></a>
										<?php }?>	
									</div>
									<div class="col-lg-5 col-md-5 col-sm-5 col-5 bttn">
										<a href="<?php echo esc_attr(get_theme_mod('para_headerbtnlink')); ?>">
											<?php echo esc_html(get_theme_mod('para_headerbtntext')); ?><i class="fa fa-angle-right" ></i>
											<div class="clearfix"></div>
										</a>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php if(is_singular()) {?>
		<div class="inner-head">
			<img src="<?php if ( get_header_image() ){ echo esc_url(get_header_image()); } else { echo esc_url(get_template_directory_uri()) ?>/assets/images/head-bg.png<?php }?>" class="head-img" alt="<?php echo esc_attr__('Header Background Image', 'para'); ?>">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 align-self-center">
						<div class="header-content">
							<h1><?php single_post_title(); ?></h1>
							<div class="lt-breadcrumbs">
								<?php para_breadcrumb(); ?>
							</div>
						</div>
					</div>
					<?php if(has_post_thumbnail()){?>
						<div class="col-lg-6 col-md-6 align-self-end">
							
						</div>
					<?php }?>
				</div>
				
			</div>
		</div>
	<?php }?>