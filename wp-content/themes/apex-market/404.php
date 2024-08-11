<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package apex_market
 */

get_header();
?>

<div id="content-wrap" class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="error-404 not-found">
				<header class="page-header">
					<h3 class="title"><?php esc_html_e( '404', 'apex-market' ); ?></h3>
					<h1 class="page-title"><?php esc_html_e( 'This is not the page you are looking for. ', 'apex-market' ); ?></h1>
				</header>

				<div class="page-content">
					<p><?php esc_html_e( 'It appears that nothing was discovered here. Could you try a search or one of the sites below?', 'apex-market' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</section>
		</main>
	</div>
</div>

<?php
get_footer();