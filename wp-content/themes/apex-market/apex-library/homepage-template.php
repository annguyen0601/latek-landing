<?php
/**
 * Template Name: Home Page Template
 */

get_header();
?>

<?php

$apex_market_main_heading = get_theme_mod('apex_market_main_heading', 'Growth Your Business');

$apex_market_heading = get_theme_mod('apex_market_heading', 'Building The Right Foundation Of Your Business');

$apex_market_content = get_theme_mod('apex_market_content', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.');

$apex_market_home_button_text = get_theme_mod('apex_market_home_button_text', 'View A Services');

$apex_market_home_button_url = get_theme_mod('apex_market_home_button_url', 'https://www.google.com/');

$apex_market_director_image = get_theme_mod('apex_market_director_image', get_template_directory_uri() . '/assets/images/profile.png' );

$apex_market_director_name = get_theme_mod('apex_market_director_name', 'James Jackson');

$apex_market_director_designation = get_theme_mod('apex_market_director_designation', 'CEO');

$apex_market_director_content = get_theme_mod('apex_market_director_content', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.');

$apex_market_image_one = get_theme_mod('apex_market_image_one', get_template_directory_uri() . '/assets/images/image1.png' );

$apex_market_image_two = get_theme_mod('apex_market_image_two', get_template_directory_uri() . '/assets/images/image2.png' );

$apex_market_facebook_url = get_theme_mod('apex_market_facebook_url', 'https://www.facebook.com/');

$apex_market_twitter_url = get_theme_mod('apex_market_twitter_url', 'https://www.twitter.com/');

$apex_market_instagram_url = get_theme_mod('apex_market_instagram_url', 'https://www.instagram.com/');

$apex_market_youtube_url = get_theme_mod('apex_market_youtube_url', 'https://www.youtube.com/');

$apex_market_marque = get_theme_mod('apex_market_marque', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');

?>

<div id="content-wrap" class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="homepage-temp">
				<?php if( $apex_market_main_heading ){ ?>
					<h2 class="text-center my-5"><?php echo esc_html($apex_market_main_heading); ?></h2>
				<?php }?>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 align-self-center relative-wrap">
						<?php if( $apex_market_heading ){ ?>
							<h3><?php echo esc_html($apex_market_heading); ?></h3>
						<?php }?>
						<?php if( $apex_market_content ){ ?>
							<p><?php echo esc_html($apex_market_content); ?></p>
						<?php }?>
						<?php if( $apex_market_home_button_text ){ ?>
							<div class="home-button">
								<a href="<?php echo esc_url($apex_market_home_button_url); ?>"><?php echo esc_html($apex_market_home_button_text); ?></a>
							</div>
						<?php }?>
						<div class="profile-wrap">
							<div class="row mt-5">
								<div class="col-lg-2 col-md-2 col-sm-2">
									<?php if( $apex_market_director_image ){ ?>
										<img src="<?php echo esc_url($apex_market_director_image); ?>">
									<?php }?>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3">
									<?php if( $apex_market_director_name ){ ?>
										<h6 class="mb-0"><?php echo esc_html($apex_market_director_name); ?></h6>
									<?php }?>
									<?php if( $apex_market_director_designation ){ ?>
										<span><?php echo esc_html($apex_market_director_designation); ?></span>
									<?php }?>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-7">
									<?php if( $apex_market_director_content ){ ?>
										<p><?php echo esc_html($apex_market_director_content); ?></p>
									<?php }?>
								</div>
							</div>
						</div>
						<div class="social-wrap mt-5 text-center">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
									<p><?php esc_html_e('Follow Us','apex-market'); ?></p>
								</div>
								<div class="col-lg-9 col-md-9 col-sm-9 align-self-center text-md-end">
									<?php if( $apex_market_facebook_url ){ ?>
										<a href="<?php echo esc_url($apex_market_facebook_url); ?>"><i class="bi bi-facebook"></i></a>
									<?php }?>
									<?php if( $apex_market_twitter_url ){ ?>
										<a href="<?php echo esc_url($apex_market_twitter_url); ?>"><i class="bi bi-twitter-x"></i></a>
									<?php }?>
									<?php if( $apex_market_instagram_url ){ ?>
										<a href="<?php echo esc_url($apex_market_instagram_url); ?>"><i class="bi bi-instagram"></i></a>
									<?php }?>
									<?php if( $apex_market_youtube_url ){ ?>
										<a href="<?php echo esc_url($apex_market_youtube_url); ?>"><i class="bi bi-youtube"></i></a>
									<?php }?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
						<div class="image-wrap">
							<?php if( $apex_market_image_one ){ ?>
								<img class="image-one" src="<?php echo esc_url($apex_market_image_one); ?>">
							<?php }?>
							<?php if( $apex_market_image_two ){ ?>
								<img class="image-two" src="<?php echo esc_url($apex_market_image_two); ?>">
							<?php }?>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
</div>

<?php if( $apex_market_marque ){ ?>
	<marquee class="marque-wrap"><?php echo esc_html($apex_market_marque); ?></marquee>
<?php }?>

<?php
get_footer();