<?php
/**
 * Custom template tags for this theme.
 *
 * @package Para
 */


if ( ! function_exists( 'para_the_attached_image' ) ) :
/**
 * Prints the attached image with a link to the next attached image.
 */
function para_the_attached_image() {
	$post                = get_post();
	$attachment_size     = apply_filters( 'para_attachment_size', array( 1200, 1200 ) );
	$next_attachment_url = wp_get_attachment_url();
	$attachment_ids 	 = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    =>  1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID'
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );

		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
	wp_reset_postdata();
}
endif;


/**
 * Returns true if a blog has more than 1 category
 */
function para_categorized_blog() {
	if ( false === ( $para_all_the_cool_cats = get_transient( 'para_all_the_cool_cats' ) ) ) {
		// Create an array of all the categories that are attached to posts
		$para_all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		// Count the number of categories that are attached to the posts
		$para_all_the_cool_cats = count( $para_all_the_cool_cats );

		set_transient( 'para_all_the_cool_cats', $para_all_the_cool_cats );
	}

	if ( '1' != $para_all_the_cool_cats ) {
		// This blog has more than 1 category so para_categorized_blog should return true
		return true;
	} else {
		// This blog has only 1 category so para_categorized_blog should return false
		return false;
	}
}

if ( ! function_exists( 'para_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since 1.0
 */
function para_the_custom_logo() {	
	the_custom_logo();
}
endif;

/**
 * Flush out the transients used in para_categorized_blog
 */
function para_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'para_all_the_cool_cats' );
}
add_action( 'edit_category', 'para_category_transient_flusher' );
add_action( 'save_post',     'para_category_transient_flusher' );

/*-- Custom metafield --*/
function para_custom_icon() {
  	add_meta_box( 'bn_meta', __( 'Para Meta Feilds', 'para' ), 'para_meta_icon_callback', 'post', 'normal', 'high' );
}
if (is_admin()){
  	add_action('admin_menu', 'para_custom_icon');
}

function para_meta_icon_callback( $post ) {
  	wp_nonce_field( basename( __FILE__ ), 'para_icon_meta' );
  	$bn_stored_meta = get_post_meta( $post->ID );
  	$para_icon = get_post_meta( $post->ID, 'para_icon', true );
  	if(empty($para_icon)){
	    //add a default value
	    add_post_meta($post->ID, 'para_icon', 'fas fa-print');
    }
  	?>
  	<div id="custom_meta_feilds">
	    <table id="list">
	      	<tbody id="the-list" data-wp-lists="list:meta">
		        <tr id="meta-8">
		          	<td class="left">
		            	<?php esc_html_e( 'Fontawesome icon class', 'para' ); ?>
		          	</td>
		          	<td class="left">
		            	<input type="text" name="para_icon" id="para_icon" value="<?php echo esc_attr($para_icon); ?>" />
		          	</td>
		        </tr>
	      	</tbody>
	    </table>
  	</div>
  	<?php
}

function para_save( $post_id ) {
  	if (!isset($_POST['para_icon_meta']) || !wp_verify_nonce( strip_tags( wp_unslash( $_POST['para_icon_meta']) ), basename(__FILE__))) {
      	return;
  	}
  	if (!current_user_can('edit_post', $post_id)) {
   		return;
  	}
  	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    	return;
  	}
  	if( isset( $_POST[ 'para_icon' ] ) ) {
    	update_post_meta( $post_id, 'para_icon', 'fas fa-print');
  	}
}
add_action( 'save_post', 'para_save' );