<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package apex_market
 */

get_header();
?>

<div id="content-wrap" class="container">
	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'apex-market' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header>

			<div class="blog-archive columns-1 clear">
				<?php if ( have_posts() ) : ?>

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						
						get_template_part( 'apex-library/template-parts/content', 'search' );

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
	</section>

<?php get_sidebar(); ?>

</div>

<?php
get_footer();