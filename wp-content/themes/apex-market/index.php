<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package apex_market
 */

get_header();
?>

<div id="content-wrap" class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="blog-archive columns-1 clear">
				<?php
				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						get_template_part( 'apex-library/template-parts/content', get_post_type() );

					endwhile;

				else :

					get_template_part( 'apex-library/template-parts/content', 'none' );

				endif;
				?>
			</div>

			<?php
			the_posts_pagination(
				array(
					'prev_text'          => apex_market_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'apex-market' ) . '</span>',
					'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'apex-market' ) . '</span>' . apex_market_get_svg( array( 'icon' => 'arrow-right' ) ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'apex-market' ) . ' </span>',
				)
			); ?>
		</main>
	</div>

<?php get_sidebar(); ?>

</div>

<?php
get_footer();