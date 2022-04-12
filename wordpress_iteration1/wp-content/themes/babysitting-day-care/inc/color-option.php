<?php
	
	

	$babysitting_day_care_custom_css = '';

	// Layout Options
	$babysitting_day_care_theme_layout = get_theme_mod( 'babysitting_day_care_theme_layout_options','Default Theme');
    if($babysitting_day_care_theme_layout == 'Default Theme'){
		$babysitting_day_care_custom_css .='body{';
			$babysitting_day_care_custom_css .='max-width: 100%;';
		$babysitting_day_care_custom_css .='}';
	}else if($babysitting_day_care_theme_layout == 'Container Theme'){
		$babysitting_day_care_custom_css .='body{';
			$babysitting_day_care_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$babysitting_day_care_custom_css .='}';
	}else if($babysitting_day_care_theme_layout == 'Box Container Theme'){
		$babysitting_day_care_custom_css .='body{';
			$babysitting_day_care_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$babysitting_day_care_custom_css .='}';
	}
	
	/*--------- Preloader Color Option -------*/
	$babysitting_day_care_preloader_color = get_theme_mod('babysitting_day_care_preloader_color');

	if($babysitting_day_care_preloader_color != false){
		$babysitting_day_care_custom_css .=' .tg-loader{';
			$babysitting_day_care_custom_css .='border-color: '.esc_attr($babysitting_day_care_preloader_color).';';
		$babysitting_day_care_custom_css .='} ';
		$babysitting_day_care_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$babysitting_day_care_custom_css .='background-color: '.esc_attr($babysitting_day_care_preloader_color).';';
		$babysitting_day_care_custom_css .='} ';
	}

	$babysitting_day_care_preloader_bg_color = get_theme_mod('babysitting_day_care_preloader_bg_color');

	if($babysitting_day_care_preloader_bg_color != false){
		$babysitting_day_care_custom_css .=' #overlayer, .preloader{';
			$babysitting_day_care_custom_css .='background-color: '.esc_attr($babysitting_day_care_preloader_bg_color).';';
		$babysitting_day_care_custom_css .='} ';
	}

	/*--------- Top Header ----------*/
	$babysitting_day_care_top_bar = get_theme_mod('babysitting_day_care_top_header',false);

	if($babysitting_day_care_top_bar == false){
		$babysitting_day_care_custom_css .=' .page-template-custom-front-page #header{';
			$babysitting_day_care_custom_css .='top: 10px;';
		$babysitting_day_care_custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/

	$babysitting_day_care_top_button_padding = get_theme_mod('babysitting_day_care_top_button_padding');
	$babysitting_day_care_bottom_button_padding = get_theme_mod('babysitting_day_care_bottom_button_padding');
	$babysitting_day_care_left_button_padding = get_theme_mod('babysitting_day_care_left_button_padding');
	$babysitting_day_care_right_button_padding = get_theme_mod('babysitting_day_care_right_button_padding');
	if($babysitting_day_care_top_button_padding != false || $babysitting_day_care_bottom_button_padding != false || $babysitting_day_care_left_button_padding != false || $babysitting_day_care_right_button_padding != false){
		$babysitting_day_care_custom_css .='.blogbtn a, .read-more a, #comments input[type="submit"].submit{';
			$babysitting_day_care_custom_css .='padding-top: '.esc_attr($babysitting_day_care_top_button_padding).'px; padding-bottom: '.esc_attr($babysitting_day_care_bottom_button_padding).'px; padding-left: '.esc_attr($babysitting_day_care_left_button_padding).'px; padding-right: '.esc_attr($babysitting_day_care_right_button_padding).'px; display:inline-block;';
		$babysitting_day_care_custom_css .='}';
	}

	$babysitting_day_care_button_border_radius = get_theme_mod('babysitting_day_care_button_border_radius');
	$babysitting_day_care_custom_css .='.blogbtn a, .read-more a, #comments input[type="submit"].submit{';
		$babysitting_day_care_custom_css .='border-radius: '.esc_attr($babysitting_day_care_button_border_radius).'px;';
	$babysitting_day_care_custom_css .='}';

	/*----------- Copyright css -----*/
	$babysitting_day_care_copyright_top_padding = get_theme_mod('babysitting_day_care_top_copyright_padding');
	$babysitting_day_care_copyright_bottom_padding = get_theme_mod('babysitting_day_care_bottom_copyright_padding');
	if($babysitting_day_care_copyright_top_padding != '' || $babysitting_day_care_copyright_bottom_padding != ''){
		$babysitting_day_care_custom_css .='.inner{';
			$babysitting_day_care_custom_css .='padding-top: '.esc_attr($babysitting_day_care_copyright_top_padding).'px; padding-bottom: '.esc_attr($babysitting_day_care_copyright_bottom_padding).'px; ';
		$babysitting_day_care_custom_css .='}';
	}

	$babysitting_day_care_copyright_alignment = get_theme_mod('babysitting_day_care_copyright_alignment', 'center');
	if($babysitting_day_care_copyright_alignment == 'center' ){
		$babysitting_day_care_custom_css .='#footer .copyright p{';
			$babysitting_day_care_custom_css .='text-align: '. $babysitting_day_care_copyright_alignment .';';
		$babysitting_day_care_custom_css .='}';
	}elseif($babysitting_day_care_copyright_alignment == 'left' ){
		$babysitting_day_care_custom_css .='#footer .copyright p{';
			$babysitting_day_care_custom_css .=' text-align: '. $babysitting_day_care_copyright_alignment .';';
		$babysitting_day_care_custom_css .='}';
	}elseif($babysitting_day_care_copyright_alignment == 'right' ){
		$babysitting_day_care_custom_css .='#footer .copyright p{';
			$babysitting_day_care_custom_css .='text-align: '. $babysitting_day_care_copyright_alignment .';';
		$babysitting_day_care_custom_css .='}';
	}

	$babysitting_day_care_copyright_font_size = get_theme_mod('babysitting_day_care_copyright_font_size');
	$babysitting_day_care_custom_css .='#footer .copyright p{';
		$babysitting_day_care_custom_css .='font-size: '.esc_attr($babysitting_day_care_copyright_font_size).'px;';
	$babysitting_day_care_custom_css .='}';

	/*------ Topbar padding ------*/
	$babysitting_day_care_top_topbar_padding = get_theme_mod('babysitting_day_care_top_topbar_padding');
	$babysitting_day_care_bottom_topbar_padding = get_theme_mod('babysitting_day_care_bottom_topbar_padding');
	if($babysitting_day_care_top_topbar_padding != false || $babysitting_day_care_bottom_topbar_padding != false){
		$babysitting_day_care_custom_css .='.top-bar, .page-template-custom-front-page .top-bar{';
			$babysitting_day_care_custom_css .='padding-top: '.esc_attr($babysitting_day_care_top_topbar_padding).'px !important; padding-bottom: '.esc_attr($babysitting_day_care_bottom_topbar_padding).'px !important; ';
		$babysitting_day_care_custom_css .='}';
	}

	/*------ Woocommerce ----*/
	$babysitting_day_care_product_border = get_theme_mod('babysitting_day_care_product_border',true);

	if($babysitting_day_care_product_border == false){
		$babysitting_day_care_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$babysitting_day_care_custom_css .='border: 0;';
		$babysitting_day_care_custom_css .='}';
	}

	$babysitting_day_care_product_top = get_theme_mod('babysitting_day_care_product_top_padding',10);
	$babysitting_day_care_product_bottom = get_theme_mod('babysitting_day_care_product_bottom_padding',10);
	$babysitting_day_care_product_left = get_theme_mod('babysitting_day_care_product_left_padding',10);
	$babysitting_day_care_product_right = get_theme_mod('babysitting_day_care_product_right_padding',10);
	if($babysitting_day_care_product_top != false || $babysitting_day_care_product_bottom != false || $babysitting_day_care_product_left != false || $babysitting_day_care_product_right != false){
		$babysitting_day_care_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$babysitting_day_care_custom_css .='padding-top: '.esc_attr($babysitting_day_care_product_top).'px; padding-bottom: '.esc_attr($babysitting_day_care_product_bottom).'px; padding-left: '.esc_attr($babysitting_day_care_product_left).'px; padding-right: '.esc_attr($babysitting_day_care_product_right).'px;';
		$babysitting_day_care_custom_css .='}';
	}

	$babysitting_day_care_product_border_radius = get_theme_mod('babysitting_day_care_product_border_radius');
	if($babysitting_day_care_product_border_radius != false){
		$babysitting_day_care_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$babysitting_day_care_custom_css .='border-radius: '.esc_attr($babysitting_day_care_product_border_radius).'px;';
		$babysitting_day_care_custom_css .='}';
	}

	/*----- WooCommerce button css --------*/
	$babysitting_day_care_product_button_top = get_theme_mod('babysitting_day_care_product_button_top_padding',10);
	$babysitting_day_care_product_button_bottom = get_theme_mod('babysitting_day_care_product_button_bottom_padding',10);
	$babysitting_day_care_product_button_left = get_theme_mod('babysitting_day_care_product_button_left_padding',15);
	$babysitting_day_care_product_button_right = get_theme_mod('babysitting_day_care_product_button_right_padding',15);
	if($babysitting_day_care_product_button_top != false || $babysitting_day_care_product_button_bottom != false || $babysitting_day_care_product_button_left != false || $babysitting_day_care_product_button_right != false){
		$babysitting_day_care_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$babysitting_day_care_custom_css .='padding-top: '.esc_attr($babysitting_day_care_product_button_top).'px; padding-bottom: '.esc_attr($babysitting_day_care_product_button_bottom).'px; padding-left: '.esc_attr($babysitting_day_care_product_button_left).'px; padding-right: '.esc_attr($babysitting_day_care_product_button_right).'px;';
		$babysitting_day_care_custom_css .='}';
	}

	$babysitting_day_care_product_button_border_radius = get_theme_mod('babysitting_day_care_product_button_border_radius');
	if($babysitting_day_care_product_button_border_radius != false){
		$babysitting_day_care_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, a.checkout-button.button.alt.wc-forward, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit{';
			$babysitting_day_care_custom_css .='border-radius: '.esc_attr($babysitting_day_care_product_button_border_radius).'px;';
		$babysitting_day_care_custom_css .='}';
	}

	/*----- WooCommerce product sale css --------*/
	$babysitting_day_care_product_sale_top = get_theme_mod('babysitting_day_care_product_sale_top_padding');
	$babysitting_day_care_product_sale_bottom = get_theme_mod('babysitting_day_care_product_sale_bottom_padding');
	$babysitting_day_care_product_sale_left = get_theme_mod('babysitting_day_care_product_sale_left_padding');
	$babysitting_day_care_product_sale_right = get_theme_mod('babysitting_day_care_product_sale_right_padding');
	if($babysitting_day_care_product_sale_top != false || $babysitting_day_care_product_sale_bottom != false || $babysitting_day_care_product_sale_left != false || $babysitting_day_care_product_sale_right != false){
		$babysitting_day_care_custom_css .='.woocommerce span.onsale {';
			$babysitting_day_care_custom_css .='padding-top: '.esc_attr($babysitting_day_care_product_sale_top).'px; padding-bottom: '.esc_attr($babysitting_day_care_product_sale_bottom).'px; padding-left: '.esc_attr($babysitting_day_care_product_sale_left).'px; padding-right: '.esc_attr($babysitting_day_care_product_sale_right).'px;';
		$babysitting_day_care_custom_css .='}';
	}

	$babysitting_day_care_product_sale_border_radius = get_theme_mod('babysitting_day_care_product_sale_border_radius',50);
	if($babysitting_day_care_product_sale_border_radius != false){
		$babysitting_day_care_custom_css .='.woocommerce span.onsale {';
			$babysitting_day_care_custom_css .='border-radius: '.esc_attr($babysitting_day_care_product_sale_border_radius).'px;';
		$babysitting_day_care_custom_css .='}';
	}

	$babysitting_day_care_menu_case = get_theme_mod('babysitting_day_care_product_sale_position', 'Right');
	if($babysitting_day_care_menu_case == 'Right' ){
		$babysitting_day_care_custom_css .='.woocommerce ul.products li.product .onsale{';
			$babysitting_day_care_custom_css .=' left:auto; right:0;';
		$babysitting_day_care_custom_css .='}';
	}elseif($babysitting_day_care_menu_case == 'Left' ){
		$babysitting_day_care_custom_css .='.woocommerce ul.products li.product .onsale{';
			$babysitting_day_care_custom_css .=' left:-10px; right:auto;';
		$babysitting_day_care_custom_css .='}';
	}

	$babysitting_day_care_product_sale_font_size = get_theme_mod('babysitting_day_care_product_sale_font_size',13);
	$babysitting_day_care_custom_css .='.woocommerce span.onsale {';
		$babysitting_day_care_custom_css .='font-size: '.esc_attr($babysitting_day_care_product_sale_font_size).'px;';
	$babysitting_day_care_custom_css .='}';


	/*---- Comment form ----*/
	$babysitting_day_care_comment_width = get_theme_mod('babysitting_day_care_comment_width', '100');
	$babysitting_day_care_custom_css .='#comments textarea{';
		$babysitting_day_care_custom_css .=' width:'.esc_attr($babysitting_day_care_comment_width).'%;';
	$babysitting_day_care_custom_css .='}';

	$babysitting_day_care_comment_submit_text = get_theme_mod('babysitting_day_care_comment_submit_text', 'Post Comment');
	if($babysitting_day_care_comment_submit_text == ''){
		$babysitting_day_care_custom_css .='#comments p.form-submit {';
			$babysitting_day_care_custom_css .='display: none;';
		$babysitting_day_care_custom_css .='}';
	}

	$babysitting_day_care_comment_title = get_theme_mod('babysitting_day_care_comment_title', 'Leave a Reply');
	if($babysitting_day_care_comment_title == ''){
		$babysitting_day_care_custom_css .='#comments h2#reply-title {';
			$babysitting_day_care_custom_css .='display: none;';
		$babysitting_day_care_custom_css .='}';
	}

	/*------ Footer background css -------*/
	$babysitting_day_care_footer_bg_color = get_theme_mod('babysitting_day_care_footer_bg_color');
	if($babysitting_day_care_footer_bg_color != false){
		$babysitting_day_care_custom_css .='.footerinner{';
			$babysitting_day_care_custom_css .='background-color: '.esc_attr($babysitting_day_care_footer_bg_color).';';
		$babysitting_day_care_custom_css .='}';
	}

	$babysitting_day_care_footer_bg_image = get_theme_mod('babysitting_day_care_footer_bg_image');
	if($babysitting_day_care_footer_bg_image != false){
		$babysitting_day_care_custom_css .='.footerinner{';
			$babysitting_day_care_custom_css .='background: url('.esc_attr($babysitting_day_care_footer_bg_image).');';
		$babysitting_day_care_custom_css .='}';
	}

	/*----- Featured image css -----*/
	$babysitting_day_care_feature_image_border_radius = get_theme_mod('babysitting_day_care_feature_image_border_radius');
	if($babysitting_day_care_feature_image_border_radius != false){
		$babysitting_day_care_custom_css .='.blog-sec img{';
			$babysitting_day_care_custom_css .='border-radius: '.esc_attr($babysitting_day_care_feature_image_border_radius).'px;';
		$babysitting_day_care_custom_css .='}';
	}

	$babysitting_day_care_feature_image_shadow = get_theme_mod('babysitting_day_care_feature_image_shadow');
	if($babysitting_day_care_feature_image_shadow != false){
		$babysitting_day_care_custom_css .='.blog-sec img{';
			$babysitting_day_care_custom_css .='box-shadow: '.esc_attr($babysitting_day_care_feature_image_shadow).'px '.esc_attr($babysitting_day_care_feature_image_shadow).'px '.esc_attr($babysitting_day_care_feature_image_shadow).'px #aaa;';
		$babysitting_day_care_custom_css .='}';
	}

	/*------ Sticky header padding ------------*/
	$babysitting_day_care_top_sticky_header_padding = get_theme_mod('babysitting_day_care_top_sticky_header_padding');
	$babysitting_day_care_bottom_sticky_header_padding = get_theme_mod('babysitting_day_care_bottom_sticky_header_padding');
	$babysitting_day_care_custom_css .=' .fixed-header{';
		$babysitting_day_care_custom_css .=' padding-top: '.esc_attr($babysitting_day_care_top_sticky_header_padding).'px; padding-bottom: '.esc_attr($babysitting_day_care_bottom_sticky_header_padding).'px';
	$babysitting_day_care_custom_css .='}';

	/*------ Related products ---------*/
	$babysitting_day_care_related_products = get_theme_mod('babysitting_day_care_single_related_products',true);
	if($babysitting_day_care_related_products == false){
		$babysitting_day_care_custom_css .=' .related.products{';
			$babysitting_day_care_custom_css .='display: none;';
		$babysitting_day_care_custom_css .='}';
	}

	/*-------- Menu Font Size --------*/
	$babysitting_day_care_menu_font_size = get_theme_mod('babysitting_day_care_menu_font_size',14);
	if($babysitting_day_care_menu_font_size != false){
		$babysitting_day_care_custom_css .='.nav-menu li a{';
			$babysitting_day_care_custom_css .='font-size: '.esc_attr($babysitting_day_care_menu_font_size).'px;';
		$babysitting_day_care_custom_css .='}';
	}

	$babysitting_day_care_menu_font_weight = get_theme_mod('babysitting_day_care_menu_font_weight');
	$babysitting_day_care_custom_css .='.nav-menu li a{';
		$babysitting_day_care_custom_css .='font-weight: '.esc_attr($babysitting_day_care_menu_font_weight).';';
	$babysitting_day_care_custom_css .='}';

	// Featured image header
	$header_image_url = babysitting_day_care_banner_image( $image_url = '' );
	$babysitting_day_care_custom_css .='#page-site-header{';
		$babysitting_day_care_custom_css .='background-image: url('. esc_url( $header_image_url ).'); background-size: cover;';
	$babysitting_day_care_custom_css .='}';

	$babysitting_day_care_post_featured_image = get_theme_mod('babysitting_day_care_post_featured_image', 'in-content');
	if($babysitting_day_care_post_featured_image == 'banner' ){
		$babysitting_day_care_custom_css .='.single #wrapper h1, .page #wrapper h1, .page #wrapper img{';
			$babysitting_day_care_custom_css .=' display: none;';
		$babysitting_day_care_custom_css .='}';
		$babysitting_day_care_custom_css .='.page-template-custom-front-page #page-site-header{';
			$babysitting_day_care_custom_css .=' display: none;';
		$babysitting_day_care_custom_css .='}';
	}

	// Woocommerce Shop page pagination
	$babysitting_day_care_shop_page_navigation = get_theme_mod('babysitting_day_care_shop_page_navigation',true);
	if ($babysitting_day_care_shop_page_navigation == false) {
		$babysitting_day_care_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$babysitting_day_care_custom_css .='display: none;';
		$babysitting_day_care_custom_css .='}';
	}

	/*----- Blog Post display type css ------*/
	$babysitting_day_care_blog_post_display_type = get_theme_mod('babysitting_day_care_blog_post_display_type', 'blocks');
	if($babysitting_day_care_blog_post_display_type == 'without blocks' ){
		$babysitting_day_care_custom_css .='.blog .blog-sec, .blog #sidebar .widget{';
			$babysitting_day_care_custom_css .='border: 0;';
		$babysitting_day_care_custom_css .='}';
	}

	/*---------- Responsive style ---------*/
	if (get_theme_mod('babysitting_day_care_hide_topbar_responsive',true) == true && get_theme_mod('babysitting_day_care_top_header',false) == false) {
		$babysitting_day_care_custom_css .='.top-bar{';
			$babysitting_day_care_custom_css .=' display: none;';
		$babysitting_day_care_custom_css .='} ';
	}
	if (get_theme_mod('babysitting_day_care_hide_topbar_responsive',true) == false) {
		$babysitting_day_care_custom_css .='@media screen and (max-width: 575px){
			.top-bar{';
			$babysitting_day_care_custom_css .=' display: none;';
		$babysitting_day_care_custom_css .='} }';
	} else if(get_theme_mod('babysitting_day_care_hide_topbar_responsive',true) == true){
		$babysitting_day_care_custom_css .='@media screen and (max-width: 575px){
			.top-bar{';
			$babysitting_day_care_custom_css .=' display: block;';
		$babysitting_day_care_custom_css .='} }';
	}

	// Metabox Seperator
	$babysitting_day_care_metabox_seperator = get_theme_mod('babysitting_day_care_metabox_seperator');
	if($babysitting_day_care_metabox_seperator != '' ){
		$babysitting_day_care_custom_css .='.post-info span:after{';
			$babysitting_day_care_custom_css .=' content: "'.esc_attr($babysitting_day_care_metabox_seperator).'"; padding-left:10px;';
		$babysitting_day_care_custom_css .='}';
		$babysitting_day_care_custom_css .='.post-info span:last-child:after{';
			$babysitting_day_care_custom_css .=' content: none;';
		$babysitting_day_care_custom_css .='}';
	}

	/*---- Slider Content Position -----*/
	$babysitting_day_care_top_position = get_theme_mod('babysitting_day_care_slider_top_position');
	$babysitting_day_care_bottom_position = get_theme_mod('babysitting_day_care_slider_bottom_position');
	$babysitting_day_care_left_position = get_theme_mod('babysitting_day_care_slider_left_position');
	$babysitting_day_care_right_position = get_theme_mod('babysitting_day_care_slider_right_position');
	if($babysitting_day_care_top_position != false || $babysitting_day_care_bottom_position != false || $babysitting_day_care_left_position != false || $babysitting_day_care_right_position != false){
		$babysitting_day_care_custom_css .='#slider .carousel-caption{';
			$babysitting_day_care_custom_css .='top: '.esc_attr($babysitting_day_care_top_position).'%; bottom: '.esc_attr($babysitting_day_care_bottom_position).'%; left: '.esc_attr($babysitting_day_care_left_position).'%; right: '.esc_attr($babysitting_day_care_right_position).'%;';
		$babysitting_day_care_custom_css .='}';
	}

	// Site title Font Size
	$babysitting_day_care_site_title_font_size = get_theme_mod('babysitting_day_care_site_title_font_size', '25');
	$babysitting_day_care_custom_css .='.logo h1, .logo p.site-title{';
		$babysitting_day_care_custom_css .='font-size: '.esc_attr($babysitting_day_care_site_title_font_size).'px;';
	$babysitting_day_care_custom_css .='}';

	// Site tagline Font Size
	$babysitting_day_care_site_tagline_font_size = get_theme_mod('babysitting_day_care_site_tagline_font_size', '14');
	$babysitting_day_care_custom_css .='.logo p.site-description{';
		$babysitting_day_care_custom_css .='font-size: '.esc_attr($babysitting_day_care_site_tagline_font_size).'px;';
	$babysitting_day_care_custom_css .='}';

	// responsive settings
	if (get_theme_mod('babysitting_day_care_preloader_responsive',false) == true && get_theme_mod('babysitting_day_care_preloader',false) == false) {
		$babysitting_day_care_custom_css .='@media screen and (min-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$babysitting_day_care_custom_css .=' visibility: hidden;';
		$babysitting_day_care_custom_css .='} }';
	}
	if (get_theme_mod('babysitting_day_care_preloader_responsive',false) == false) {
		$babysitting_day_care_custom_css .='@media screen and (max-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$babysitting_day_care_custom_css .=' visibility: hidden;';
		$babysitting_day_care_custom_css .='} }';
	}