<?php 
	if ( ! defined( 'ABSPATH' ) ) { exit; }
		
	global $theplus_options,$post_type_options;
		
add_image_size( 'tp-image-grid', 700, 700, true);

// Check Html Tag
function l_theplus_html_tag_check(){
	return [ 'div',
		'h1',
		'h2',
		'h3',
		'h4',
		'h5',
		'h6',
		'a',
		'span',
		'p',
		'header',
		'footer',
		'article',
		'aside',
		'main',
		'nav',		
		'section',		
	];
}		

function l_theplus_validate_html_tag( $check_tag ) {
	return in_array( strtolower( $check_tag ), l_theplus_html_tag_check() ) ? $check_tag : 'div';
}

function theplus_free_purchase_code_content(){
	echo '<div class="tp-pro-note-title"><p style="margin-bottom:40px;font-weight: bolder;">Activate Licence to get access of our Pro Widgets, Features and Design Templates.</p></div>
		<div style="text-align:center;"><img style="width:auto;height:300px;" src="' . esc_url(L_THEPLUS_URL . 'assets/images/panel/plus-design.png') . '" alt="'.esc_attr__('Activate','tpebl').'" class="panel-plus-activate" /></div>
		<div style="display: flex;flex-direction: column;align-items: center;"> 
			<div class="tp-pro-note-step">
				<span>STEP I : </span>
				<span>
					<a href="https://theplusaddons.com/pricing/" target="_blank" rel="noopener noreferrer"> 
						Buy Pro Plugin from our Website 
						<svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.5 1.5L7.5 7L1.5 12" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</a>
				</span>
			</div>
			<div class="tp-pro-note-step">
				<span>STEP II : </span>
				<span>
					<a href="https://store.posimyth.com/dashboard/" target="_blank" rel="noopener noreferrer"> 
						Download Pro Plugin from Dashboard. 
						<svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.5 1.5L7.5 7L1.5 12" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</a>
				</span>
			</div>
			<div class="tp-pro-note-step">
				<span>STEP III : </span>
				<span>
					<a href="https://theplusaddons.com/docs/how-to-activate-the-plus-addons-for-elementor/" target="_blank" rel="noopener noreferrer"> 
						Insert key and Activate Licence.
						<svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.5 1.5L7.5 7L1.5 12" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</a> 
				</span>
			</div>
		</div>';
}
add_action('theplus_free_pro_purchase_code', 'theplus_free_purchase_code_content');

function theplus_free_white_label_content(){
	echo '<div class="tp-pro-note-title"><p style="margin-bottom:50px;">White Label our plugin and setup client\'s branding all around. You can update name, description, Icon and even hide the menu from dashboard. Get our pro version to have access of this feature.</p></div>
		<div style="text-align:center;">
			<img style="width:55%;" src="' . esc_url(L_THEPLUS_URL . 'assets/images/panel/white-lable.png') . '" alt="'.esc_attr__('White Lable','tpebl').'" class="panel-plus-white-lable" />
		</div>
	<div class="tp-pro-note-link"><a href="https://theplusaddons.com/free-vs-pro-compare/" target="_blank" rel="noopener noreferrer">Compare Free vs Pro</a></div>';
}
add_action('theplus_free_pro_white_label', 'theplus_free_white_label_content');
/*panel start*/

//user profile social
function L_theplus_user_social_links( $user_contact ) {   
   $user_contact['tp_phone_number'] = __('Phone Number', 'tpebl');
   $user_contact['tp_profile_facebook'] = __('Facebook Link', 'tpebl');
   $user_contact['tp_profile_twitter'] = __('Twitter Link', 'tpebl');
   $user_contact['tp_profile_instagram'] = __('Instagram', 'tpebl');

   return $user_contact;
}
add_filter('user_contactmethods', 'L_theplus_user_social_links',10);

/* WOOCOMMERCE Mini Cart */
function l_theplus_woocomerce_ajax_cart_update($fragments) {
	if(class_exists('woocommerce')) {		
		ob_start();
		?>			
			
			<div class="cart-wrap"><span><?php echo WC()->cart->get_cart_contents_count(); ?></span></div>
		<?php
		$fragments['.cart-wrap'] = ob_get_clean();
		return $fragments;
	}
}
add_filter('woocommerce_add_to_cart_fragments', 'l_theplus_woocomerce_ajax_cart_update',10,3);

function l_theplus_get_thumb_url(){
	return L_THEPLUS_ASSETS_URL .'images/placeholder-grid.jpg';
}

class L_Theplus_MetaBox {
	
	public static function get($name) {
		global $post;
		
		if (isset($post) && !empty($post->ID)) {
			return get_post_meta($post->ID, $name, true);
		}
		
		return false;
	}
}
function l_theplus_get_option($options_type,$field){
	$theplus_options=get_option( 'theplus_options' );
	$post_type_options=get_option( 'post_type_options' );
	$values='';
	if($options_type=='general'){
		if(isset($theplus_options[$field]) && !empty($theplus_options[$field])){
			$values=$theplus_options[$field];
		}
	}
	if($options_type=='post_type'){
		if(isset($post_type_options[$field]) && !empty($post_type_options[$field])){
			$values=$post_type_options[$field];
		}
	}
	return $values;
}

function l_theplus_testimonial_post_name(){
	$post_type_options=get_option( 'post_type_options' );
	$testi_post_type=!empty($post_type_options['testimonial_post_type']) ? $post_type_options['testimonial_post_type'] : '';
	$post_name='theplus_testimonial';
	if(isset($testi_post_type) && !empty($testi_post_type)){
		if($testi_post_type=='themes'){
			$post_name=l_theplus_get_option('post_type','testimonial_theme_name');
		}elseif($testi_post_type=='plugin'){
			$get_name=l_theplus_get_option('post_type','testimonial_plugin_name');
			if(isset($get_name) && !empty($get_name)){
				$post_name=l_theplus_get_option('post_type','testimonial_plugin_name');
			}
		}elseif($testi_post_type=='themes_pro'){
			$post_name='testimonial';
		}
	}else{
		$post_name='theplus_testimonial';
	}
	return $post_name;
}
function l_theplus_testimonial_post_category(){
	$post_type_options=get_option( 'post_type_options' );	
	$testi_post_type=!empty($post_type_options['testimonial_post_type']) ? $post_type_options['testimonial_post_type'] : '';
	$taxonomy_name='theplus_testimonial_cat';
	if(isset($testi_post_type) && !empty($testi_post_type)){
		if($testi_post_type=='themes'){
			$taxonomy_name=l_theplus_get_option('post_type','testimonial_category_name');
		}else if($testi_post_type=='plugin'){
			$get_name=l_theplus_get_option('post_type','testimonial_category_plugin_name');
			if(isset($get_name) && !empty($get_name)){
				$taxonomy_name=l_theplus_get_option('post_type','testimonial_category_plugin_name');
			}
		}elseif($testi_post_type=='themes_pro'){
			$taxonomy_name='testimonial_category';
		}
	}else{
		$taxonomy_name='theplus_testimonial_cat';
	}
	return $taxonomy_name;
}
function l_theplus_client_post_name(){
	$post_type_options=get_option( 'post_type_options' );
	$client_post_type=!empty($post_type_options['client_post_type']) ? $post_type_options['client_post_type'] : '';
	$post_name='theplus_clients';
	if(isset($client_post_type) && !empty($client_post_type)){
		if($client_post_type=='themes'){
			$post_name=l_theplus_get_option('post_type','client_theme_name');
		}elseif($client_post_type=='plugin'){
			$get_name=l_theplus_get_option('post_type','client_plugin_name');
			if(isset($get_name) && !empty($get_name)){
				$post_name=l_theplus_get_option('post_type','client_plugin_name');
			}
		}elseif($client_post_type=='themes_pro'){
			$post_name='clients';
		}
	}else{
		$post_name='theplus_clients';
	}
	return $post_name;
}
function l_theplus_client_post_category(){
	$post_type_options=get_option( 'post_type_options' );
	$client_post_type=!empty($post_type_options['client_post_type']) ? $post_type_options['client_post_type'] : '';
	$post_name='theplus_clients_cat';
	if(isset($client_post_type) && !empty($client_post_type)){
		if($client_post_type=='themes'){
			$post_name=l_theplus_get_option('post_type','client_category_name');
		}else if($client_post_type=='plugin'){
			$get_name=l_theplus_get_option('post_type','client_category_plugin_name');
			if(isset($get_name) && !empty($get_name)){
				$post_name=l_theplus_get_option('post_type','client_category_plugin_name');
			}
		}elseif($client_post_type=='themes_pro'){
			$post_name='clients_category';
		}
	}else{
		$post_name='theplus_clients_cat';
	}
	return $post_name;
}
function l_theplus_team_member_post_name(){
	$post_type_options=get_option( 'post_type_options' );
	$team_post_type=!empty($post_type_options['team_member_post_type']) ? $post_type_options['team_member_post_type'] : '';
	$post_name='theplus_team_member';
	if(isset($team_post_type) && !empty($team_post_type)){
		if($team_post_type=='themes'){
			$post_name=l_theplus_get_option('post_type','team_member_theme_name');
		}elseif($team_post_type=='plugin'){
			$get_name=l_theplus_get_option('post_type','team_member_plugin_name');
			if(isset($get_name) && !empty($get_name)){
				$post_name=l_theplus_get_option('post_type','team_member_plugin_name');
			}
		}elseif($team_post_type=='themes_pro'){
			$post_name='team_member';
		}
	}else{
		$post_name='theplus_team_member';
	}
	return $post_name;
}
function l_theplus_team_member_post_category(){
	$post_type_options=get_option( 'post_type_options' );
	$team_post_type=!empty($post_type_options['team_member_post_type']) ? $post_type_options['team_member_post_type'] : '';
	$taxonomy_name='theplus_team_member_cat';
	if(isset($team_post_type) && !empty($team_post_type)){
		if($team_post_type=='themes'){
			$taxonomy_name=l_theplus_get_option('post_type','team_member_category_name');
		}else if($team_post_type=='plugin'){
			$get_name=l_theplus_get_option('post_type','team_member_category_plugin_name');
			if(isset($get_name) && !empty($get_name)){
				$taxonomy_name=l_theplus_get_option('post_type','team_member_category_plugin_name');
			}
		}elseif($team_post_type=='themes_pro'){
			$taxonomy_name='team_member_category';
		}
	}else{
		$taxonomy_name='theplus_team_member_cat';
	}
	return $taxonomy_name;
}
function l_theplus_styling_option(){	
	$theplus_styling_data=get_option( 'theplus_styling_data' );
	
	$css_rules=$js_rules='';
	if(!empty($theplus_styling_data['theplus_custom_css_editor'])){
		$css_rules .='<style>';	
			$theplus_custom_css_editor=$theplus_styling_data['theplus_custom_css_editor'];
			$css_rules .=$theplus_custom_css_editor;
		$css_rules .='</style>';
	}	
	echo $css_rules;
	
	if(!empty($theplus_styling_data['theplus_custom_js_editor'])){		
			$theplus_custom_js_editor=$theplus_styling_data['theplus_custom_js_editor'];
			$js_rules =$theplus_custom_js_editor;
			echo wp_print_inline_script_tag($js_rules);
	}
	
}
add_action('wp_head', 'l_theplus_styling_option');

function l_theplus_scroll_animation(){	
	
	$value= '85%';
	
	return $value;
}
function l_theplus_excerpt($limit) {
	$limit = !empty($limit) ? (int) $limit : 0;

	if(method_exists('WPBMap', 'addAllMappedShortcodes')) {
		WPBMap::addAllMappedShortcodes();
	}
		global $post;
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
			array_pop($excerpt);
			$excerpt = implode(" ",$excerpt).'...';
		} else {
			$excerpt = implode(" ",$excerpt);
		}	
		$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	
	return $excerpt;
}
function l_limit_words($string, $word_limit){
	$words = explode(" ",$string);
	return implode(" ",array_splice($words,0,$word_limit));
}	
function l_theplus_get_title($limit) {
	if(method_exists('WPBMap', 'addAllMappedShortcodes')) {
		WPBMap::addAllMappedShortcodes();
	}
		global $post;
		$title = explode(' ', get_the_title(), $limit);
		if (count($title)>=$limit) {
			array_pop($title);
			$title = implode(" ",$title).'...';
		} else {
			$title = implode(" ",$title);
		}	
		$title = preg_replace('`[[^]]*]`','',$title);
	
	return $title;
}
function l_theplus_loading_image_grid($postid='',$type=''){
	global $post;
	$content_image='';
	if($type!='background'){		
		$image_url=L_THEPLUS_ASSETS_URL .'images/placeholder-grid.jpg';
		$content_image='<img width="600" height="600" loading="lazy" src="'.esc_url($image_url).'" alt="'.esc_attr(get_the_title()).'"/>';
		
		return $content_image;
	
	}elseif($type=='background'){
	
		$image_url=L_THEPLUS_ASSETS_URL .'images/placeholder-grid.jpg';
		$data_src='style="background-image:url('.esc_url($image_url).');" ';
		
		return $data_src;
		
	}
}
function l_theplus_loading_bg_image($postid=''){
	global $post;
	$content_image='';
	if(!empty($postid)){
		$featured_image=get_the_post_thumbnail_url($postid,'full');
		if(empty($featured_image)){
			$featured_image=l_theplus_get_thumb_url();
		}
		$content_image='style="background-image:url('.esc_url($featured_image).');"';
		return $content_image;
	}else{
	return $content_image;
	}
}
function l_theplus_array_flatten($array) {
	  if (!is_array($array)) { 
		return FALSE; 
	  } 
	  $result = array(); 
	  foreach ($array as $key => $value) { 
		if (is_array($value)) { 
		  $result = array_merge($result, l_theplus_array_flatten($value)); 
		} 
		else { 
		  $result[$key] = $value; 
		} 
	  } 
	  return $result; 
}
function l_theplus_createSlug($str, $delimiter = '-'){
	
	$slug=preg_replace('/[^A-Za-z0-9-]+/', $delimiter, $str);
	return $slug;
	
} 

/**
 * Load more post
 * 
 * @since 5.5.4
 * @version 5.5.4
 */
function L_theplus_more_post_ajax(){
	global $post;
	ob_start();
	$load_attr = isset($_POST["loadattr"]) ? wp_unslash( $_POST["loadattr"] ) : '';
	if(empty($load_attr)){
		ob_get_contents();
		exit;
		ob_end_clean();
	}
	
	$load_attr = L_tp_check_decrypt_key($load_attr);
	$load_attr = json_decode($load_attr,true);
	if(!is_array($load_attr)){
		ob_get_contents();
		exit;
		ob_end_clean();
	}
	
	$nonce = (isset($load_attr["theplus_nonce"])) ? wp_unslash( $load_attr["theplus_nonce"] ) : '';
	if ( ! wp_verify_nonce( $nonce, 'theplus-addons' ) ){
		die ( 'Security checked!');
	}
	
	$paged= (isset($_POST["paged"]) && intval($_POST["paged"]) ) ? wp_unslash( $_POST["paged"] ) : '';
	$offset= (isset($_POST["offset"]) && intval($_POST["offset"]) ) ? wp_unslash( $_POST["offset"] ) : '';
	
	$post_type = isset( $load_attr["post_type"] ) ? sanitize_text_field( wp_unslash($load_attr["post_type"]) ) : '';
	$post_load = isset( $load_attr["load"] ) ? sanitize_text_field( wp_unslash($load_attr["load"]) ) : '';
	$texonomy_category = isset( $load_attr["texonomy_category"] ) ? sanitize_text_field( wp_unslash($load_attr["texonomy_category"]) ) : '';
	$include_posts = isset( $load_attr["include_posts"] ) ? sanitize_text_field( wp_unslash($load_attr["include_posts"]) ) : '';
	$exclude_posts = isset( $load_attr["exclude_posts"] ) ? sanitize_text_field( wp_unslash($load_attr["exclude_posts"]) ) : '';
	$layout =  isset( $load_attr["layout"] ) ? sanitize_text_field( wp_unslash($load_attr["layout"]) ) : '';
	
	$display_post = (isset( $load_attr["display_post"] ) && intval($load_attr["display_post"]) ) ? wp_unslash($load_attr["display_post"]) : 4;
	$category = isset( $load_attr["category"] ) ? wp_unslash($load_attr["category"]) : '';
	$post_tags = isset( $load_attr["post_tags"] ) ? wp_unslash($load_attr["post_tags"]) : '';
	$post_authors = isset( $load_attr["post_authors"] ) ? wp_unslash($load_attr["post_authors"]) : '';
	$desktop_column = (isset( $load_attr["desktop-column"] )  && intval($load_attr["desktop-column"]) ) ? wp_unslash($load_attr["desktop-column"]) : '';
	$tablet_column = (isset( $load_attr["tablet-column"] )  && intval($load_attr["tablet-column"]) ) ? wp_unslash($load_attr["tablet-column"]) : '';
	$mobile_column = (isset( $load_attr["mobile-column"] )  && intval($load_attr["mobile-column"]) ) ? wp_unslash($load_attr["mobile-column"]) : '';
	$style = isset( $load_attr["style"] ) ? sanitize_text_field( wp_unslash($load_attr["style"]) ) : '';
	$style_layout = isset( $load_attr["style_layout"] ) ? sanitize_text_field( wp_unslash($load_attr["style_layout"]) ) : '';
	$filter_category = isset( $load_attr["filter_category"] ) ? wp_unslash($load_attr["filter_category"]) : '';
	$order_by = isset( $load_attr["order_by"] ) ? sanitize_text_field( wp_unslash($load_attr["order_by"]) ) : '';
	$post_order = isset( $load_attr["post_order"] ) ? sanitize_text_field( wp_unslash($load_attr["post_order"]) ) : '';
	$animated_columns = isset( $load_attr["animated_columns"] ) ? sanitize_text_field( wp_unslash($load_attr["animated_columns"]) ) : '';
	$post_load_more = (isset( $load_attr["post_load_more"] ) && intval($load_attr["post_load_more"]) ) ? wp_unslash($load_attr["post_load_more"]) : '';
	
	$metro_column = isset( $load_attr["metro_column"] ) ? wp_unslash($load_attr["metro_column"]) : '';
	$metro_style = isset( $load_attr["metro_style"] ) ? wp_unslash($load_attr["metro_style"]) : '';
	$responsive_tablet_metro = isset( $load_attr["responsive_tablet_metro"] ) ? wp_unslash($load_attr["responsive_tablet_metro"]) : '';
	$tablet_metro_column = isset( $load_attr["tablet_metro_column"] ) ? wp_unslash($load_attr["tablet_metro_column"]) : '';
	$tablet_metro_style = isset( $load_attr["tablet_metro_style"] ) ? wp_unslash($load_attr["tablet_metro_style"]) : '';
	
	$display_post_title = isset( $load_attr["display_post_title"] ) ? wp_unslash($load_attr["display_post_title"]) : '';
	$post_title_tag = isset( $load_attr["post_title_tag"] ) ? wp_unslash($load_attr["post_title_tag"]) : '';

	$author_prefix = isset( $load_attr["author_prefix"] ) ? wp_unslash($load_attr["author_prefix"]) : '';

	$title_desc_word_break = isset( $load_attr["title_desc_word_break"] ) ? wp_unslash($load_attr["title_desc_word_break"]) : '';
	
	$feature_image = isset( $load_attr["feature_image"] ) ? wp_unslash($load_attr["feature_image"]) : '';
	
	$display_post_meta = isset( $load_attr["display_post_meta"] ) ? wp_unslash($load_attr["display_post_meta"]) : '';
	$post_meta_tag_style = isset( $load_attr["post_meta_tag_style"] ) ? wp_unslash($load_attr["post_meta_tag_style"]) : '';
	$display_excerpt = isset( $load_attr["display_excerpt"] ) ? wp_unslash($load_attr["display_excerpt"]) : '';
	$post_excerpt_count = isset( $load_attr["post_excerpt_count"] ) ? wp_unslash($load_attr["post_excerpt_count"]) : '';
	$display_post_category = isset( $load_attr["display_post_category"] ) ? wp_unslash($load_attr["display_post_category"]) : '';
	$post_category_style = isset( $load_attr["post_category_style"] ) ? wp_unslash($load_attr["post_category_style"]) : '';
	$dpc_all = isset( $load_attr["dpc_all"] ) ? wp_unslash($load_attr["dpc_all"]) : '';
	
	$desktop_class=$tablet_class=$mobile_class='';

	if ( 'carousel' !== $layout && 'metro' !== $layout ) {
		$desktop_class = 'tp-col-lg-' . esc_attr( $desktop_column );
		$tablet_class  = 'tp-col-md-' . esc_attr( $tablet_column );
		$mobile_class  = 'tp-col-sm-' . esc_attr( $mobile_column );
		$mobile_class .= ' tp-col-' . esc_attr( $mobile_column );
	}

	$clientContentFrom="";
	if($post_load=='clients'){
		$clientContentFrom = isset( $load_attr['SourceType'] ) ? $load_attr['SourceType'] : '';
		$disable_link = isset( $load_attr['disable_link'] ) ? $load_attr['disable_link'] : '';
	}

	$j=1;
	$args = array(
		'post_type' => $post_type,
		'posts_per_page' => $post_load_more,
		$texonomy_category => $category,
		'offset' => $offset,
		'orderby'	=>$order_by,
		'post_status' =>'publish',
		'order'	=>$post_order
	);
	
	if('' !== $exclude_posts){
		$exclude_posts =explode(",",$exclude_posts);
		$args['post__not_in'] = $exclude_posts;
	}
	if('' !== $include_posts){
		$include_posts =explode(",",$include_posts);
		$args['post__in'] = $include_posts;
	}

	if ( '' !== $post_tags && $post_type=='post') {
		$post_tags =explode(",",$post_tags);
		$args['tax_query'] = array(
		'relation' => 'AND',
			array(
				'taxonomy'         => 'post_tag',
				'terms'            => $post_tags,
				'field'            => 'term_id',
				'operator'         => 'IN',
				'include_children' => true,
			),
		);
	}
	
	if('' !== $post_authors && $post_type=='post'){
		$args['author'] = $post_authors;
	}
	
	$ji=($post_load_more*$paged)-$post_load_more+$display_post+1;
	$ij='';
	$tablet_metro_class=$tablet_ij='';
	$loop = new WP_Query($args);		
		if ( $loop->have_posts() ) :
			while ($loop->have_posts()) {
				$loop->the_post();
				
				if($post_load=='blogs'){
					include L_THEPLUS_PATH ."includes/ajax-load-post/blog-style.php";
				}				
				$ji++;
			}
			$content = ob_get_contents();
			ob_end_clean();
		endif;
	wp_reset_postdata();
	echo $content;
	exit;
	ob_end_clean();
}
add_action('wp_ajax_L_theplus_more_post','L_theplus_more_post_ajax');
add_action('wp_ajax_nopriv_L_theplus_more_post', 'L_theplus_more_post_ajax');

/**
 * Check dycrypt Key
 * 
 * @since 5.5.4
 * @version 5.5.4
 */
function L_tp_check_decrypt_key($key){   	 
	$decrypted = L_tp_plus_simple_decrypt( $key, 'dy' );
	return $decrypted;
}

/**
 * Simple decrypt function
 * 
 * @since 5.5.4
 * @version 5.5.4
 */
function L_tp_plus_simple_decrypt( $string, $action = 'dy' ) {
	// you may change these values to your own
	$tppk=get_option( 'theplus_purchase_code' );
	$generated = !empty(get_option( 'tp_key_random_generate' )) ? get_option( 'tp_key_random_generate' ) : 'PO$_key';
	
	$secret_key = ( isset($tppk['tp_api_key']) && !empty($tppk['tp_api_key']) ) ? $tppk['tp_api_key'] : $generated;
	$secret_iv = 'PO$_iv';

	$output = false;
	$encrypt_method = "AES-128-CBC";
	$key = hash( 'sha256', $secret_key );
	$iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );

	if( $action == 'ey' ) {
		$output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
	}
	else if( $action == 'dy' ){
		$output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
	}

	return $output;
}

/**
 * Metro layout for ajax load
 * 
 * @since 5.5.4
 * @version 5.5.4
 */
function L_theplus_load_metro_style_layout($columns='1',$metro_column='3',$metro_style='style-1'){
	$i=($columns!='') ? $columns : 1;
	if(!empty($metro_column)){
		//style-3
		if($metro_column=='3' && $metro_style=='style-1'){
			$i=($i<=10) ? $i : ($i%10);			
		}
		if($metro_column=='3' && $metro_style=='style-2'){
			$i=($i<=9) ? $i : ($i%9);			
		}
		if($metro_column=='3' && $metro_style=='style-3'){
			$i=($i<=15) ? $i : ($i%15);			
		}
		if($metro_column=='3' && $metro_style=='style-4'){
			$i=($i<=8) ? $i : ($i%8);			
		}
		//style-4
		if($metro_column=='4' && $metro_style=='style-1'){
			$i=($i<=12) ? $i : ($i%12);			
		}
		if($metro_column=='4' && $metro_style=='style-2'){
			$i=($i<=14) ? $i : ($i%14);			
		}
		if($metro_column=='4' && $metro_style=='style-3'){
			$i=($i<=12) ? $i : ($i%12);			
		}
		//style-5
		if($metro_column=='5' && $metro_style=='style-1'){
			$i=($i<=18) ? $i : ($i%18);			
		}
		//style-6
		if($metro_column=='6' && $metro_style=='style-1'){
			$i=($i<=16) ? $i : ($i%16);			
		}
	}
	return $i;
}

if(!function_exists('plus_simple_crypt')){
	function plus_simple_crypt( $string, $action = 'dy' ) {
	    $secret_key = 'PO$_key';
	    $secret_iv = 'PO$_iv';
	    $output = false;
	    $encrypt_method = "AES-128-CBC";
	    $key = hash( 'sha256', $secret_key );
	    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
	 
	    if( $action == 'ey' ) {
	        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
	    }
	    else if( $action == 'dy' ){
	        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
	    }
	 
	    return $output;
	}
}


add_action('elementor/widgets/register', function($widgets_manager){
  $elementor_widget_blacklist = [
  'plus-elementor-widget',
];

  foreach($elementor_widget_blacklist as $widget_name){
    $widgets_manager->unregister($widget_name);
  }
}, 15);

    /**
	 * Registered widgets.
	 *
	 * @since 5.4.1
	 *
	 */

function l_registered_widgets(){
	// widgets class map
	return apply_filters('theplus/l_registered_widgets', [
		
		'tp-adv-text-block' => [
			'dependency' => [],
		],
		'tp-accordion' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/tabs-tours/plus-tabs-tours.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/accordion/plus-accordion.min.js',
				],
			],
		],
		'tp-age-gate'=> array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/age-gate/plus-method.css',
				),
				'js'  => array(

					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/age-gate/plus-age-gate.min.js',
				),
			),
		),
		'tp-ag-method-1'=> array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/age-gate/plus-method-1.css',
				),
			),
		),
		'tp-ag-method-2'=> array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/age-gate/plus-method-2.css',
				),
			),
		),
		'tp-ag-method-3'=> array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/age-gate/plus-method-3.css',
				),
			),
		),
		'tp-blockquote'=> array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/block-quote/plus-block-quote.css',
				),
			),
		),
		'tp-bq-bl_1'=> array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/block-quote/plus-block-layout1.css',
				),
			),
		),
		'tp-bq-bl_2'=> array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/block-quote/plus-block-layout2.css',
				),
			),
		),
		'tp-bq-bl_3' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/block-quote/plus-block-layout3.css',
				),
			),
		),
		'tp-blog-listout' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/extra/tp-bootstrap-grid.css',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/blog-list/plus-bloglist-style.css',
				),
				'js'  => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/posts-listing/plus-posts-listing.min.js',
				),
			),
		),
		'tp-bloglistout-style-1' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/blog-list/plus-bloglist-style-1.css',
				),
			),
		),
		'plus-listing-metro' => [
			'dependency' => [
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/imagesloaded.pkgd.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/isotope.pkgd.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/posts-listing/plus-posts-metro-list.min.js',
				],
			],
		],
		'plus-listing-masonry' => [
			'dependency' => [
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/imagesloaded.pkgd.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/isotope.pkgd.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/packery-mode.pkgd.min.js',
				],
			],
		],
		'tp-button' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style.css',
				),
			),
		),
		'tp-button-style-1' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-1.css',
				),
			),
		),
		'tp-button-style-2' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-2.css',
				),
			),
		),
		'tp-button-style-3'             => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-3.css',
				),
			),
		),
		'tp-button-style-4'             => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-4.css',
				),
			),
		),
		'tp-button-style-5'             => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-5.css',
				),
			),
		),
		'tp-button-style-6'             => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-6.css',
				),
			),
		),
		'tp-button-style-7'             => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-7.css',
				),
			),
		),
		'tp-button-style-8'             => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-8.css',
				),
			),
		),
		'tp-button-style-9'             => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-9.css',
				),
			),
		),
		'tp-button-style-10'            => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-10.css',
				),
			),
		),
		'tp-button-style-11'            => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-11.css',
				),
			),
		),
		'tp-button-style-12'            => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-12.css',
				),
			),
		),
		'tp-button-style-13'            => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-13.css',
				),
			),
		),
		'tp-button-style-14'            => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-14.css',
				),
			),
		),
		'tp-button-style-15'            => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-15.css',
				),
			),
		),
		'tp-button-style-16'            => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-16.css',
				),
			),
		),
		'tp-button-style-17'            => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-17.css',
				),
			),
		),
		'tp-button-style-18'            => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-18.css',
				),
			),
		),
		'tp-button-style-19'            => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-19.css',
				),
			),
		),
		'tp-button-style-20'            => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-20.css',
				),
			),
		),
		'tp-button-style-21'            => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-21.css',
				),
			),
		),
		'tp-button-style-22'            => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-22.css',
				),
			),
		),
		'tp-button-style-24'            => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/tp-button/tp-button-style-24.css',
				),
			),
		),
		'tp-carousel-anything' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/extra/slick.min.css',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/carousel/plus-carousel.css',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/carousel-anything/plus-carousel-anything.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/slick.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/general/plus-slick-carousel.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/carousel-anything/plus-carousel-anything.min.js',
				],
			],
		],
		'tp-caldera-forms' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/forms-style/plus-caldera-form.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/js/main/forms-style/plus-caldera-form.js',
				],
			],
		],
		'tp-contact-form-7' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .  'assets/css/extra/tp-bootstrap-grid.css',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/forms-style/plus-cf7-style.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/js/main/forms-style/plus-cf7-form.js',
				],
			],
		],
		'tp-clients-listout' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .  'assets/css/extra/tp-bootstrap-grid.css',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/client-list/plus-client-list.css',					
				],
				'js' => [					
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/posts-listing/plus-posts-listing.min.js',
				],
			],
		],
		'tp-countdown' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/countdown/plus-cd-style.css',
				),
				'js'  => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/countdown/plus-countdown.min.js',
				),
			),
		),
		'tp-countdown-style-1' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/countdown/plus-cd-s-1.css',
				),
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/jquery.downCount.js',
				]
			),
		),
		'tp-countdown-style-2' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/countdown/plus-cd-s-2.css',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/extra/countdown/flipdown.min.css',
				),
				'js'=>[
				    L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/countdown/flipdown.min.js',
				]
 
			),
		),
		'tp-countdown-style-3' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/countdown/plus-cd-s-3.css',
				),
				'js' =>[
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/countdown/progressbar.min.js',
				]
			),
		),
		'tp-dark-mode' => [
			'dependency' => [
				'css' => [										
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/darkmode/plus-dark-mode.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/js/extra/darkmode.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/js/main/darkmode/plus-dark-mode.min.js',
				],
			],
		],
		'tp-dynamic-categories' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/extra/tp-bootstrap-grid.css',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/dynamic-categories/plus-dynamic-categories.css',
				],
			],
		],
		'tp-dynamic-categories-style_1' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/dynamic-categories/dynamic-style-1.css',
				],
			],
		],
		'tp-dynamic-categories-style_2' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/dynamic-categories/dynamic-style-2.css',
				],
			],
		],
		'tp-dynamic-categories-style_3' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/dynamic-categories/dynamic-style-3.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/dynamic-category/plus-dynamic-category.min.js',	
				],
			],
		],
		'tp-everest-form' => [
			'dependency' => [
				'css' => [					
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/forms-style/plus-everest-form.css',
				],
			],
		],
		'tp-smooth-scroll' => [
			'dependency' => [
				'js' => [					
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/js/extra/smooth-scroll.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/js/main/smooth-scroll/plus-smooth-scroll.min.js',
				],
			],
		],
		'tp-style-list' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/stylist-list/plus-style-list.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/stylist-list/plus-stylist-list.min.js',
				],
			],
		],
		'tp-flip-box' => [
			'dependency' => [
				'css' => [					
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/info-box/plus-infobox-style.css',
				],
			],
		],		
		'tp-gallery-listout' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/extra/tp-bootstrap-grid.css',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/gallery-list/plus-gallery-list.css',
				),
				'js'  => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/posts-listing/plus-posts-listing.min.js',
				),
			),
		),
		'tp-gallery-listout-style-1' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/gallery-list/plus-gl-style1.css',
				),
			),
		),
		'tp-gallery-listout-style-2' => array(
            'dependency' => array(
                'css' => array(
                    L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/gallery-list/plus-gl-style2.css',
                ),
            ),
        ),
		'tp-gravityt-form' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/forms-style/plus-gravity-form.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/js/main/forms-style/plus-gravity-form.js',
				]
			],
		],		
		'tp-heading-animation' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/heading-animation/tp-heading-animation.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/js/main/heading-animation/plus-heading-animation.min.js',
				]
			],
		],
		'tp-heading-animation-style-1' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/heading-animation/heading-animation-style-1.css',
				],
			],
		],
		'tp-heading-animation-style-2' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/heading-animation/heading-animation-style-2.css',
				],
			],
		],
		'tp-heading-animation-style-3' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/heading-animation/heading-animation-style-3.css',
				],
			],
		],
		'tp-heading-animation-style-4' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/heading-animation/heading-animation-style-4.css',
				],
			],
		],
		'tp-heading-animation-style-5' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/heading-animation/heading-animation-style-5.css',
				],
			],
		],
		'tp-heading-animation-style-6' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/heading-animation/heading-animation-style-6.css',
				],
			],
		],
		'tp-header-extras' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/header-extras/plus-header-extras.min.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/js/main/header-extras/plus-header-extras.min.js',
				],
			],
		],
		'tp-heading-title' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/heading-title/plus-ht-style.css',
				),
			),
		),
		'tp-heading-title-style_1' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/heading-title/plus-ht-style-1.css',
				),
			),
		),
		'tp-heading-title-style_2' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/heading-title/plus-ht-style-2.css',
				),
			),
		),
		'tp-heading-title-style_3' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/heading-title/plus-ht-style-3.css',
				),
			),
		),
		'tp-heading-title-style_4' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/heading-title/plus-ht-style-4.css',
				),
			),
		),
		'tp-heading-title-style_5' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/heading-title/plus-ht-style-5.css',
				),
			),
		),
		'tp-heading-title-style_6' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/heading-title/plus-ht-style-6.css',
				),
			),
		),
		'tp-heading-title-style_7' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/heading-title/plus-ht-style-7.css',
				),
			),
		),
		'tp-heading-title-style_8' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/heading-title/plus-ht-style-8.css',
				),
			),
		),
		'tp-heading-title-style_9' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/heading-title/plus-ht-style-9.css',
				),
			),
		),
		'tp-heading-title-style_10' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/heading-title/plus-ht-style-10.css',
				),
			),
		),
		'tp-heading-title-style_11' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/heading-title/plus-ht-style-11.css',
				),
			),
		),
		'tp-info-box' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/info-box/plus-infobox-style.css',
				),
			),
		),
		'tp-info-box-style_1' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/info-box/plus-infobox-style-1.css',
				),
			),
		),
		'tp-info-box-style_3'  => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/info-box/plus-infobox-style-3.css',
				),
			),
		),
		'tp-info-box-style_4' => [
            'dependency' => [
                'css' => [                  
                    L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/info-box/plus-infobox-style-4.css',
                ],
            ],
        ],
		'tp-messagebox' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/messagebox/plus-messagebox.min.css',
				],
				'js' => [					
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/messagebox/plus-messagebox.min.js',
				],
			],
		],
		'tp-navigation-menu-lite' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/navigation-menu-lite/plus-nav-menu-lite.min.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/js/main/navigation-menu-lite/plus-nav-menu-lite.min.js',
				],
			],
		],
		'tp-ninja-form' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/forms-style/plus-ninja-form.css',
				],
			],
		],
		'tp-number-counter' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/number-counter/plus-nc.css',
				),
				'js'  => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/numscroller.js',
				),
			),
		),
		'tp-number-counter-style-1' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/number-counter/plus-nc-style-1.css',
				),
			),
		),
		'tp-number-counter-style-2' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/number-counter/plus-nc-style-2.css',
				),
			),
		),
		'tp-post-featured-image' => [
			'dependency' => [
				'css' => [					
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/post-feature-image/plus-post-image.min.css',					
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/js/main/post-feature-image/plus-post-feature-image.min.js',
				],
			],
		],
		'tp-post-title' => [
			'dependency' => [
				'css' => [					
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/post-title/plus-post-title.min.css',					
				],				
			],
		],
		'tp-post-content' => [
			'dependency' => [
				'css' => [					
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/post-content/plus-post-content.min.css',					
				],				
			],
		],
		'tp-post-meta' => [
			'dependency' => [
				'css' => [					
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/post-meta-info/plus-post-meta-info.min.css',
				],
				
			],
		],
		'tp-post-author' => [
			'dependency' => [
				'css' => [					
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/post-author/plus-post-author.min.css',
				],				
			],
		],
		'tp-post-comment' => [
			'dependency' => [
				'css' => [					
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/post-comment/plus-post-comment.min.css',
				],				
			],
		],
		'tp-post-navigation' => [
			'dependency' => [
				'css' => [					
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/extra/tp-bootstrap-grid.css',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/post-navigation/plus-post-navigation.min.css',
				],				
			],
		],
		'tp-page-scroll'=> array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/page-scroll/plus-page-scroll.css',
				),
				'js'  => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/page-scroll/plus-page-scroll.min.js',
				),
			),
		),
		'tp-fullpage' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/extra/fullpage.css',
				],
				'js'  => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/js/extra/fullpage.js',
				],
			],
		],
		'tp-pricing-table' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/pricing-table/plus-pricing-table.css',
				),
				'js'  => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/pricing-table/plus-pricing-table.min.js',
				),
			),
		),
		'tp-pricing-table-style-1'  => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/pricing-table/plus-pricing-style-1.css',
				),
			),
		),
		'tp-pricing-ribbon' => array(
            'dependency' => array(
                'css' => array(
                    L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/pricing-table/plus-table-ribbon.css',
                ),
            ),
        ),
		'tp-post-search' => [
			'dependency' => [
				'css' => [					
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/mailchimp/plus-mailchimp.css',
				],
			],
		],
		'tp-progress-bar' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/progress-piechart/plus-progress.css',
				),
				'js'  => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/jquery.waypoints.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/progress-bar/plus-progress-bar.min.js',
				),
			),
		),
		'tp-piechart' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/progress-piechart/plus-piechart.css',
				),
				'js'  => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/circle-progress.js',
				),
			),
		),
		'tp-process-steps' => [
            'dependency' => [
                'css' => [
                    L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/process-steps/plus-process-steps.css',
                ],
            ],
        ],
        'tp-process-bg' => [
            'dependency' => [
                'css' => [
                    L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/process-steps/plus-process-bg.css',
                ],
            ],
        ],
        'tp-process-counter' => [
            'dependency' => [
                'css' => [
                    L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/process-steps/plus-process-counter.css',
                ],
            ],
        ],
		'tp-process-steps-js' => [
			'dependency' => [
				'js' => [					
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/process-steps/plus-process-steps.min.js',
				],
			],
		],
		'tp-scroll-navigation' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/scroll-navigation/plus-scroll-navigation.css',
				),
				'js'  => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/pagescroll2id.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/scroll-navigation/plus-scroll-navigation.min.js',
				),
			),
		),
		'tp-scroll-navigation-style-1' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/scroll-navigation/plus-sn-style-1.css',
				),
			),
		),
		'tp-social-embed' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/social-embed/plus-social-embed.min.css',
				],		
			],
		],
		'tp-social-icon'                  => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/social-icon/plus-social-icon-style.css',
				),
			),
		),
		'tp-social-icon-style-1'          => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/social-icon/plus-social-icon-style-1.css',
				),
			),
		),
		'tp-social-icon-style-2'          => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/social-icon/plus-social-icon-style-2.css',
				),
			),
		),
		'tp-social-icon-style-3'          => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/social-icon/plus-social-icon-style-3.css',
				),
			),
		),
		'tp-social-icon-style-4'          => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/social-icon/plus-social-icon-style-4.css',
				),
			),
		),
		'tp-social-icon-style-5'          => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/social-icon/plus-social-icon-style-5.css',
				),
			),
		),
		'tp-social-icon-style-6'          => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/social-icon/plus-social-icon-style-6.css',
				),
			),
		),
		'tp-social-icon-style-7'          => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/social-icon/plus-social-icon-style-7.css',
				),
			),
		),
		'tp-social-icon-style-8'          => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/social-icon/plus-social-icon-style-8.css',
				),
			),
		),
		'tp-social-icon-style-9'          => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/social-icon/plus-social-icon-style-9.css',
				),
			),
		),
		'tp-social-icon-style-10'         => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/social-icon/plus-social-icon-style-10.css',
				),
			),
		),
		'tp-social-icon-style-11'         => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/social-icon/plus-social-icon-style-11.css',
				),
			),
		),
		'tp-social-icon-style-12'         => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/social-icon/plus-social-icon-style-12.css',
				),
			),
		),
		'tp-social-icon-style-13'         => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/social-icon/plus-social-icon-style-13.css',
				),
			),
		),
		'tp-social-icon-style-14'         => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/social-icon/plus-social-icon-style-14.css',
				),
			),
		),
		'tp-social-icon-style-15'         => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/social-icon/plus-social-icon-style-15.css',
				),
			),
		),
		'tp-syntax-highlighter' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/syntax-highlighter/plus-syntax-highlighter.css',
				],
			],
		],
		'tp-syntax-highlighter-icons' => [
			'dependency' => [
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/syntax-highlighter/tp-copy-dow-icons.js',
				],
			],
		],
		'tp-switcher' => [
            'dependency' => [
                'css' => [
                    L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/switcher/plus-switcher.css',
                ],
                'js' => [
                    L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/switcher/plus-switcher.min.js',
                ],
            ],
        ],
		'prism_default' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/syntax-highlighter/plus-default-theme.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/syntax-highlighter/prism-default.js',
				],
			],
		],
		'prism_coy' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/syntax-highlighter/plus-copy-theme.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/syntax-highlighter/prism-coy.js',
				],
			],
		],
		'prism_dark' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/syntax-highlighter/plus-dark-theme.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/syntax-highlighter/prism-dark.js',
				],
			],
		],
		'prism_funky' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/syntax-highlighter/plus-funky-theme.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/syntax-highlighter/prism-funky.js',
				],
			],
		],
		'prism_okaidia' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/syntax-highlighter/plus-okaidia-theme.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/syntax-highlighter/prism-okaidia.js',
				],
			],
		],
		'prism_solarizedlight' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/syntax-highlighter/plus-solarized.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/syntax-highlighter/prism-solarizedlight.js',
				],
			],
		],
		'prism_tomorrownight' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/syntax-highlighter/plus-tomorrow-theme.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/syntax-highlighter/prism-tomorrownight.js',
				],
			],
		],
		'prism_twilight' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/syntax-highlighter/plus-twilight-theme.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/syntax-highlighter/prism-twilight.js',
				],
			],
		],
		'tp-tabs-tours' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/tabs-tours/plus-tabs-tours.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/tabs-tours/plus-tabs-tours.min.js',
				],
			],
		],
		'tp-team-member-listout' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/extra/tp-bootstrap-grid.css',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/team-member-list/plus-team-member-style.css',
				),
				'js'  => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/posts-listing/plus-posts-listing.min.js',
				),
			),
		),
		'tp-team-member-listout-style-1' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/team-member-list/plus-team-member-style-1.css',
				),
			),
		),
		'tp-team-member-listout-style-3' => [
			'dependency' => [
				'css' => [					
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/team-member-list/plus-team-member-style-3.css',
				],
			],
		],
		'tp-table' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/data-table/plus-data-table.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/jquery.datatables.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/data-table/plus-data-table.min.js',
				],
			],
		],
		'tp-carosual-extra' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/extra/slick.min.css',
				),
				'js' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/slick.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/general/plus-slick-carousel.min.js',
				),
			),
		),
		'tp-bootstrap-grid' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/extra/tp-bootstrap-grid.css',
				),
			),
		),
		'tp-testimonial-listout' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/testimonial/plus-testimonial.css',
				),
				'js'  => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/imagesloaded.pkgd.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/testimonial/plus-testimonial.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/posts-listing/plus-posts-listing.min.js',
				),
			),
		),
		'tp-testimonial-listout-style-1' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/testimonial/plus-ts1.css',
				),
			),
		),
		'tp-testimonial-listout-style-2' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/testimonial/plus-ts2.css',
				),
			),
		),
		'tp-testimonial-listout-style-4' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/testimonial/plus-ts4.css',
				),
			),
		),
		'tp-arrows-style-2' => array(
			'dependency' => array(
				'css' => array(
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/arrows/plus-arrows-style-2.css',
				),
			),
        ),
		'tp-arrows-style' => array(
		    'dependency' => array(
				'css' => array(
				     L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/arrows/plus-arrows-style.css',
				 ),
		    ),
		),
		'tp-carousel-style-1' => array(
		     'dependency' => array(
				'css' => array(
				     L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/carousel/plus-carousel-style-1.css',
				 ),
		    ),
		),
		'tp-carousel-style' => array(
		     'dependency' => array(
		        'css' => array(
		            L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/carousel/plus-carousel.css',
		        ),
		    ),
		),
		'tp-video-player' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/video-player/plus-video-player.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/video-player/plus-video-player.min.js',
				],
			],
		],
		'tp-lity-extra' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/extra/lity.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/lity.min.js',
				]
			],
		],
		'tp-wp-forms' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/css/main/forms-style/plus-wpforms-form.css',
				],
			],
		],
		'plus-velocity' => [
			'dependency' => [
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/jquery.waypoints.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/velocity/velocity.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/velocity/velocity.ui.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/general/plus-animation-load.min.js',
				],
			],
		],
		'plus-alignmnet-effect' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .  'assets/css/main/plus-extra-adv/plus-alignmnet.css',
				],
			],
		],
		'plus-widget-error' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .  'assets/css/main/plus-extra-adv/plus-widget-error.css',
				],
			],
		],
		'plus-responsive-visibility' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .  'assets/css/main/plus-extra-adv/plus-responsive-visibility.css',
				],
			],
		],
		'plus-content-hover-effect' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .  'assets/css/main/plus-extra-adv/plus-content-hover-effect.min.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .  'assets/js/main/general/plus-content-hover-effect.min.js',
				],
			],
		],
		'plus-equal-height' => [
			'dependency' => [
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/equal-height/plus-equal-height.min.js',
				],
			],
		],
		'plus-lazyLoad' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .'assets/css/main/lazy_load/tp-lazy_load.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/lazyload.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/lazy_load/tp-lazy_load.js',
				],
			],
		],
		'plus-backend-editor' => [
			'dependency' => [
				'css' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .  'assets/css/main/plus-extra-adv/plus-content-hover-effect.min.css',
				],
				'js' => [
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/jquery.waypoints.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/general/modernizr.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/velocity/velocity.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/extra/velocity/velocity.ui.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/plus-extra-adv/plus-backend-editor.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR . 'assets/js/main/general/plus-animation-load.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .  'assets/js/main/general/plus-content-hover-effect.min.js',
					L_THEPLUS_PATH . DIRECTORY_SEPARATOR .  'assets/js/admin/tp-advanced-shadow-layout.js',
				],
			],
		],
	]);
}