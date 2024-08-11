<?php 

	$para_custom_css = '';

	// Site Title Color
	$para_site_title_color = get_theme_mod('para_site_title_color');
	$para_custom_css .= '.logo h1 a, .logo p.site-title a {';
		$para_custom_css .= 'color: ' . esc_attr($para_site_title_color) . ';';
	$para_custom_css .= '}';

	// Site Tagline Color
	$para_site_tagline_color = get_theme_mod('para_site_tagline_color');
	$para_custom_css .= '.logo p.site-description {';
		$para_custom_css .= 'color: ' . esc_attr($para_site_tagline_color) . ';';
	$para_custom_css .= '}';

	// Topbar Color

	$para_topheadbg_color = get_theme_mod('para_topheadbg_color');
	$para_custom_css .= ' #header .top-head {';
		$para_custom_css .= 'background: ' . esc_attr($para_topheadbg_color) . ';';
	$para_custom_css .= '}';

	$para_topheadphoneicon_color = get_theme_mod('para_topheadphoneicon_color');
	$para_custom_css .= ' #header .phbtn a i {';
		$para_custom_css .= 'color: ' . esc_attr($para_topheadphoneicon_color) . ';';
	$para_custom_css .= '}';

	$para_topheadphnnum_color = get_theme_mod('para_topheadphnnum_color');
	$para_custom_css .= ' #header .phbtn a {';
		$para_custom_css .= 'color: ' . esc_attr($para_topheadphnnum_color) . ';';
	$para_custom_css .= '}';

	$para_topheadphnnumhrv_color = get_theme_mod('para_topheadphnnumhrv_color');
	$para_custom_css .= ' #header .phbtn a:hover {';
		$para_custom_css .= 'color: ' . esc_attr($para_topheadphnnumhrv_color) . ';';
	$para_custom_css .= '}';

	$para_topheadbtntexticon_color = get_theme_mod('para_topheadbtntexticon_color');
	$para_custom_css .= ' #header .bttn a {';
		$para_custom_css .= 'color: ' . esc_attr($para_topheadbtntexticon_color) . ';';
	$para_custom_css .= '}';

	$para_topheadbtnbg_color = get_theme_mod('para_topheadbtnbg_color');
	$para_custom_css .= ' #header .bttn a {';
		$para_custom_css .= 'background: ' . esc_attr($para_topheadbtnbg_color) . ';';
	$para_custom_css .= '}';

	$para_topheadbtntexticonhrv_color = get_theme_mod('para_topheadbtntexticonhrv_color');
	$para_custom_css .= ' #header .bttn a:hover {';
		$para_custom_css .= 'color: ' . esc_attr($para_topheadbtntexticonhrv_color) . ';';
	$para_custom_css .= '}';

	$para_headermenu_color = get_theme_mod('para_headermenu_color');
	$para_custom_css .= ' .primary-navigation ul li a,.sf-arrows .sf-with-ul:after {';
		$para_custom_css .= 'color: ' . esc_attr($para_headermenu_color) . ';';
	$para_custom_css .= '}';

	$para_headeractivemenuhover_color = get_theme_mod('para_headeractivemenuhover_color');
	$para_custom_css .= ' .primary-navigation .current_page_item a,.primary-navigation a:hover {';
		$para_custom_css .= 'color: ' . esc_attr($para_headeractivemenuhover_color) . ';';
	$para_custom_css .= '}';

	$para_headeractivemenuhoverbg_color = get_theme_mod('para_headeractivemenuhoverbg_color');
	$para_custom_css .= ' .primary-navigation .current_page_item a,.primary-navigation a:hover {';
		$para_custom_css .= 'background: ' . esc_attr($para_headeractivemenuhoverbg_color) . ';';
	$para_custom_css .= '}';

	$para_headersubmenu_color = get_theme_mod('para_headersubmenu_color');
	$para_custom_css .= ' .primary-navigation ul ul a {';
		$para_custom_css .= 'color: ' . esc_attr($para_headersubmenu_color) . ';';
	$para_custom_css .= '}';

	$para_headersubmenuhover_color = get_theme_mod('para_headersubmenuhover_color');
	$para_custom_css .= ' .primary-navigation ul ul a:hover {';
		$para_custom_css .= 'color: ' . esc_attr($para_headersubmenuhover_color) . ';';
	$para_custom_css .= '}';

	$para_headersubmenubg_color = get_theme_mod('para_headersubmenubg_color');
	$para_custom_css .= ' .primary-navigation ul ul a {';
		$para_custom_css .= 'background: ' . esc_attr($para_headersubmenubg_color) . ';';
	$para_custom_css .= '}';

	$para_headersubmenubghover_color = get_theme_mod('para_headersubmenubghover_color');
	$para_custom_css .= ' .primary-navigation ul ul a:hover {';
		$para_custom_css .= 'background: ' . esc_attr($para_headersubmenubghover_color) . ';';
	$para_custom_css .= '}';



	// Slider
	$para_slider_hide_show = get_theme_mod('para_slider_hide_show',false);
	if($para_slider_hide_show == true){
		$para_custom_css .= '.page-template-home-custom .inner-head {';
			$para_custom_css .= 'display: none;';
		$para_custom_css .= '}';
	}

	$paraslider_subtitle_color = get_theme_mod('paraslider_subtitle_color');
	$para_custom_css .= ' #slider .slider-content p {';
		$para_custom_css .= 'color: ' . esc_attr($paraslider_subtitle_color) . ';';
	$para_custom_css .= '}';
	$paraslider_subtitle_color = get_theme_mod('paraslider_subtitle_color');
	$para_custom_css .= ' #slider .slider-content p {';
		$para_custom_css .= 'border-color: ' . esc_attr($paraslider_subtitle_color) . ';';
	$para_custom_css .= '}';

	$paraslider_title_color = get_theme_mod('paraslider_title_color');
	$para_custom_css .= ' #slider .slider-content h2 {';
		$para_custom_css .= 'color: ' . esc_attr($paraslider_title_color) . ';';
	$para_custom_css .= '}';

	$paraslider_btntext_color = get_theme_mod('paraslider_btntext_color');
	$para_custom_css .= ' #slider .read-btn {';
		$para_custom_css .= 'color: ' . esc_attr($paraslider_btntext_color) . ';';
	$para_custom_css .= '}';

	$paraslider_btnbg_color = get_theme_mod('paraslider_btnbg_color');
	$para_custom_css .= ' #slider .read-btn {';
		$para_custom_css .= 'background: ' . esc_attr($paraslider_btnbg_color) . ';';
	$para_custom_css .= '}';

	$paraslider_btntexthover_color = get_theme_mod('paraslider_btntexthover_color');
	$para_custom_css .= ' #slider .read-btn:hover {';
		$para_custom_css .= 'color: ' . esc_attr($paraslider_btntexthover_color) . ';';
	$para_custom_css .= '}';

	$paraslider_btnbghover_color = get_theme_mod('paraslider_btnbghover_color');
	$para_custom_css .= '  #slider .read-btn:hover {';
		$para_custom_css .= 'background: ' . esc_attr($paraslider_btnbghover_color) . ';';
	$para_custom_css .= '}';

	$paraslider_howitworkbtntext_color = get_theme_mod('paraslider_howitworkbtntext_color');
	$para_custom_css .= '  #slider .v-btn span {';
		$para_custom_css .= 'color: ' . esc_attr($paraslider_howitworkbtntext_color) . '; border-color: ' . esc_attr($paraslider_howitworkbtntext_color) . ';';
	$para_custom_css .= '}';

	$paraslider_howitworkbtntexthrv_color = get_theme_mod('paraslider_howitworkbtntexthrv_color');
	$para_custom_css .= '  #slider .v-btn span:hover {';
		$para_custom_css .= 'color: ' . esc_attr($paraslider_howitworkbtntexthrv_color) . ';';
	$para_custom_css .= '}';

	$paraslider_howitworkbtnicon_color = get_theme_mod('paraslider_howitworkbtnicon_color');
	$para_custom_css .= '  #slider .v-btn .icnbx i {';
		$para_custom_css .= 'color: ' . esc_attr($paraslider_howitworkbtnicon_color) . ';';
	$para_custom_css .= '}';

	$paraslider_howitworkbtniconbg_color = get_theme_mod('paraslider_howitworkbtniconbg_color');
	$para_custom_css .= '  #slider .v-btn .icnbx i {';
		$para_custom_css .= 'background: ' . esc_attr($paraslider_howitworkbtniconbg_color) . ';';
	$para_custom_css .= '}';

	$paraslider_howitworkbtniconbrd_color = get_theme_mod('paraslider_howitworkbtniconbrd_color');
	$para_custom_css .= '  #slider .v-btn .icnbx:after {';
		$para_custom_css .= 'border-color: ' . esc_attr($paraslider_howitworkbtniconbrd_color) . ';  border-right: 2px solid transparent;';
	$para_custom_css .= '}';
	$paraslider_howitworkbtniconbrd_color = get_theme_mod('paraslider_howitworkbtniconbrd_color');
	$para_custom_css .= '  #slider .v-btn .icnbx {';
		$para_custom_css .= 'border-color: ' . esc_attr($paraslider_howitworkbtniconbrd_color) . ';';
	$para_custom_css .= '}';

	$paraslider_arrows_color = get_theme_mod('paraslider_arrows_color');
	$para_custom_css .= '  #slider .carousel-control-next-icon i, #slider .carousel-control-prev-icon i {';
		$para_custom_css .= 'color: ' . esc_attr($paraslider_arrows_color) . '; border-color: ' . esc_attr($paraslider_arrows_color) . ';';
	$para_custom_css .= '}';

	$paraslider_arrowsbg_color = get_theme_mod('paraslider_arrowsbg_color');
	$para_custom_css .= '  #slider .carousel-control-next-icon i, #slider .carousel-control-prev-icon i {';
		$para_custom_css .= 'background: ' . esc_attr($paraslider_arrowsbg_color) . ';';
	$para_custom_css .= '}';



	//about us

	$paraaboutus_subtitle_color = get_theme_mod('paraaboutus_subtitle_color');
	$para_custom_css .= '  #aboutus-section .abt_subtitle h6 {';
		$para_custom_css .= 'color: ' . esc_attr($paraaboutus_subtitle_color) . ';';
	$para_custom_css .= '}';
	$paraaboutus_subtitle_color = get_theme_mod('paraaboutus_subtitle_color');
	$para_custom_css .= '  #aboutus-section .abt_subtitle {';
		$para_custom_css .= 'border-color: ' . esc_attr($paraaboutus_subtitle_color) . ';';
	$para_custom_css .= '}';

	$paraaboutus_title_color = get_theme_mod('paraaboutus_title_color');
	$para_custom_css .= '  #aboutus-section .aboutus-content h4 {';
		$para_custom_css .= 'color: ' . esc_attr($paraaboutus_title_color) . ';';
	$para_custom_css .= '}';

	$paraaboutus_description_color = get_theme_mod('paraaboutus_description_color');
	$para_custom_css .= '  #aboutus-section .description {';
		$para_custom_css .= 'color: ' . esc_attr($paraaboutus_description_color) . ';';
	$para_custom_css .= '}';

	$paraaboutus_list_color = get_theme_mod('paraaboutus_list_color');
	$para_custom_css .= '  #aboutus-section .aboutus-content li {';
		$para_custom_css .= 'color: ' . esc_attr($paraaboutus_list_color) . ';';
	$para_custom_css .= '}';

	$paraaboutus_listicon_color = get_theme_mod('paraaboutus_listicon_color');
	$para_custom_css .= '  #aboutus-section .aboutus-content li:before {';
		$para_custom_css .= 'color: ' . esc_attr($paraaboutus_listicon_color) . ';';
	$para_custom_css .= '}';

	$paraaboutus_btntext_color = get_theme_mod('paraaboutus_btntext_color');
	$para_custom_css .= ' #aboutus-section .aboutus-btn a {';
		$para_custom_css .= 'color: ' . esc_attr($paraaboutus_btntext_color) . ';';
	$para_custom_css .= '}';

	$paraaboutus_btnbg_color = get_theme_mod('paraaboutus_btnbg_color');
	$para_custom_css .= ' #aboutus-section .aboutus-btn a {';
		$para_custom_css .= 'background: ' . esc_attr($paraaboutus_btnbg_color) . ';';
	$para_custom_css .= '}';

	$paraaboutus_btntexthover_color = get_theme_mod('paraaboutus_btntexthover_color');
	$para_custom_css .= ' #aboutus-section .aboutus-btn a:hover {';
		$para_custom_css .= 'color: ' . esc_attr($paraaboutus_btntexthover_color) . ';';
	$para_custom_css .= '}';

	$paraaboutus_btnbghover_color = get_theme_mod('paraaboutus_btnbghover_color');
	$para_custom_css .= '  #aboutus-section .aboutus-btn a:hover {';
		$para_custom_css .= 'background: ' . esc_attr($paraaboutus_btnbghover_color) . ';';
	$para_custom_css .= '}';
	
	$paraaboutus_yearofexpno_color = get_theme_mod('paraaboutus_yearofexpno_color');
	$para_custom_css .= ' #aboutus-section .yearofex h3 {';
		$para_custom_css .= 'color: ' . esc_attr($paraaboutus_yearofexpno_color) . ';';
	$para_custom_css .= '}';

	$paraaboutus_yearofexptext_color = get_theme_mod('paraaboutus_yearofexptext_color');
	$para_custom_css .= '  #aboutus-section .yearofextext {';
		$para_custom_css .= 'color: ' . esc_attr($paraaboutus_yearofexptext_color) . ';';
	$para_custom_css .= '}';

	$paraaboutus_yearofexptextbg_color = get_theme_mod('paraaboutus_yearofexptextbg_color');
	$para_custom_css .= ' #aboutus-section .yearofex {';
		$para_custom_css .= 'background: ' . esc_attr($paraaboutus_yearofexptextbg_color) . ';';
	$para_custom_css .= '}';



	//featuress

	$parafeaturess_icon_color = get_theme_mod('parafeaturess_icon_color');
	$para_custom_css .= ' #features-section .fea-icn i {';
		$para_custom_css .= 'color: ' . esc_attr($parafeaturess_icon_color) . ';';
	$para_custom_css .= '}';

	$parafeaturess_iconbg_color = get_theme_mod('parafeaturess_iconbg_color');
	$para_custom_css .= ' #features-section .fea-icn {';
		$para_custom_css .= 'background: ' . esc_attr($parafeaturess_iconbg_color) . ';';
	$para_custom_css .= '}';

	$parafeaturess_title_color = get_theme_mod('parafeaturess_title_color');
	$para_custom_css .= ' #features-section .features-content .title {';
		$para_custom_css .= 'color: ' . esc_attr($parafeaturess_title_color) . ';';
	$para_custom_css .= '}';

	$parafeaturess_titlehrv_color = get_theme_mod('parafeaturess_titlehrv_color');
	$para_custom_css .= ' #features-section .features-box:hover .features-content .title {';
		$para_custom_css .= 'color: ' . esc_attr($parafeaturess_titlehrv_color) . ';';
	$para_custom_css .= '}';

	$parafeaturess_description_color = get_theme_mod('parafeaturess_description_color');
	$para_custom_css .= ' #features-section .features-content p {';
		$para_custom_css .= 'color: ' . esc_attr($parafeaturess_description_color) . ';';
	$para_custom_css .= '}';

	$parafeaturess_boxbg_color = get_theme_mod('parafeaturess_boxbg_color');
	$para_custom_css .= ' #features-section .features-box {';
		$para_custom_css .= 'background: ' . esc_attr($parafeaturess_boxbg_color) . ';';
	$para_custom_css .= '}';


	//footer
	$parafooter_copyrighttext_color = get_theme_mod('parafooter_copyrighttext_color');
	$para_custom_css .= ' #footer-section .copyright p {';
		$para_custom_css .= 'color: ' . esc_attr($parafooter_copyrighttext_color) . ';';
	$para_custom_css .= '}';

	$parafooter_copyrightbg_color = get_theme_mod('parafooter_copyrightbg_color');
	$para_custom_css .= ' .copyright{';
		$para_custom_css .= 'background: ' . esc_attr($parafooter_copyrightbg_color) . ';';
	$para_custom_css .= '}';

	$parafooter_copyrightbg_color = get_theme_mod('parafooter_copyrightbg_color');
	$para_custom_css .= ' #footer-section .f_tbrd {';
		$para_custom_css .= 'border-color: ' . esc_attr($parafooter_copyrightbg_color) . ';';
	$para_custom_css .= '}';

	$parafooter_bg_color = get_theme_mod('parafooter_bg_color');
	$para_custom_css .= ' #footer-section {';
		$para_custom_css .= 'background: ' . esc_attr($parafooter_bg_color) . ';';
	$para_custom_css .= '}';

	$parafooter_text_color = get_theme_mod('parafooter_text_color');
	$para_custom_css .= ' .footersec .widget li,
	#footer-section h1,#footer-section h2,#footer-section h3,
	#footer-section h4,#footer-section h5,#footer-section h6,.widget_text p,
	#footer-section a, #footer-section .logo a, #footer-section .logo p {';
		$para_custom_css .= 'color: ' . esc_attr($parafooter_text_color) . ';';
	$para_custom_css .= '}';

	
	$parafooter_activemenu_color = get_theme_mod('parafooter_activemenu_color');
	$para_custom_css .= ' #footer-section .current-menu-item a {';
		$para_custom_css .= 'color: ' . esc_attr($parafooter_activemenu_color) . ';';
	$para_custom_css .= '}';


