<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package apex_market
 */

?>
	</div>

	<footer id="colophon" class="site-footer">
		<?php if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) : ?>
			<div id="footer-widgets" class="container">
				<?php
					get_template_part( 'apex-library/footer', 'widgets' );
				?>
			</div>
		<?php endif; ?>

		<div class="site-info">
			<div class="container">
				<?php
				$apex_market_copyright_text = sprintf( __( 'Theme Apex Market By Apex Themes', 'apex-market' ) ); ?>

				<?php echo $apex_market_copyright_text; ?>
			</div>
		</div>
	</footer>

	<a href="#page" class="to-top"></a>
	
</div>

<?php wp_footer(); ?>

</body>
</html>
