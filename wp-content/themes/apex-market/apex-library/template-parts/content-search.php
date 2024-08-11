<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package apex_market
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-post-item">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="featured-image">
				<?php apex_market_post_thumbnail(); ?>
			</div>
		<?php endif; ?>
    
        <div class="entry-container">
        	<div class="entry-meta">
        		<?php apex_market_entry_footer(); ?>
				<?php apex_market_posted_on(); ?>
        	</div>
	
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
			</header>

			<?php $apex_market_excerpt = get_the_excerpt();
			if ( !empty($apex_market_excerpt) ) { ?>
				<div class="entry-content">
					<?php the_excerpt(); ?>
				</div>
			<?php } ?>

			<?php $apex_market_read_more_label = get_theme_mod( 'apex_market_read_more_label' , 'Read More' );
			if ( !empty($apex_market_read_more_label) ) { ?>
				<div class="read-more">
					<a href="<?php the_permalink(); ?>"><?php echo esc_html($apex_market_read_more_label);?></a>
				</div>
			<?php } ?>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->