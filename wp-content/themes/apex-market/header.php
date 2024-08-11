<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package apex_market
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'wp_body_open' ); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'apex-market' ); ?></a>

	<?php if( is_front_page() || !is_paged() ) {
		get_template_part( 'apex-library/header', 'image' );
	} ?>

	<?php
		$apex_market_top_header_text = get_theme_mod('apex_market_top_header_text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
	?>

	<?php if( $apex_market_top_header_text ){ ?>
		<section id="top-header">
			<div class="container">
				<p><i class="bi bi-megaphone me-2"></i> <?php echo esc_html( $apex_market_top_header_text ); ?></p>
			</div>
		</section>
	<?php }?>
	
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="site-branding text-center text-md-start">
						<div class="site-branding-logo">
							<?php the_custom_logo(); ?>
						</div>

						<div class="site-branding-text">
							<?php if ( is_front_page() ) : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else : ?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php endif; ?>

							<?php
							$apex_market_description = get_bloginfo( 'description', 'display' );

							if ( $apex_market_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo esc_html( $apex_market_description ); ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-7 text-center">
					<nav id="site-navigation" class="main-navigation navigation-menu">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<?php
								echo apex_market_get_svg( array( 'icon' => 'bars' ) );
								echo apex_market_get_svg( array( 'icon' => 'close' ) );
							?>
							<span class="primary-menu-label"><?php esc_html_e( 'Menu', 'apex-market' ); ?></span>
						</button>

						<?php
						wp_nav_menu( array(
							'theme_location' => 'primary_menu',
			    			'container' 	 => 'div',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'nav-menu',
						) );
						?>
					</nav>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2">
					<?php
						$apex_market_top_header_button = get_theme_mod('apex_market_top_header_button','Get A Quote');
						$apex_market_top_header_button_link = get_theme_mod( 'apex_market_top_header_button_link','https://www.google.com/');
					?>
					<?php if( $apex_market_top_header_button ){ ?>
						<div class="header-button text-center text-md-end">
							<a href="<?php echo esc_url( $apex_market_top_header_button_link ); ?>"><?php echo esc_html( $apex_market_top_header_button ); ?></a>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">