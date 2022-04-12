<?php
	
	$advance_coaching_theme_color = get_theme_mod('advance_coaching_theme_color');

	$advance_coaching_custom_css = '';

	$advance_coaching_custom_css .='.read-moresec a:hover, .logo, .top-header .time, .request-btn a i, #slider .carousel-control-next-icon i,#slider .carousel-control-prev-icon i, #slider .inner_carousel .read-btn a i, #coaching .read-more a i, .read-more-btn a i, #footer input[type="submit"], .copyright, #footer .tagcloud a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,#sidebar input[type="submit"], #sidebar .tagcloud a:hover, .pagination a:hover, .pagination .current, #footer input[type="submit"], #comments a.comment-reply-link, .tags p a:hover,.meta-nav:hover,#menu-sidebar input[type="submit"], .toggle-menu i, input[type="submit"], .logo_bar, #footer .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{';
		$advance_coaching_custom_css .='background-color: '.esc_attr($advance_coaching_theme_color).';';
	$advance_coaching_custom_css .='}';

	$advance_coaching_custom_css .='.woocommerce-message::before, h1.entry-title,h1.page-title, h2.woocommerce-loop-product__title,.metabox a, .metabox i, .metabox .entry-comments, .tags i, .tags p a, .contact_data .mail i,#sidebar ul li a:hover,.meta-nav, .page-template-custom-front-page .search-box i, .page-box .metabox a, .entry-content a, .comment-body p a, .entry-content code, #footer li a:hover, h2.entry-title, h1.page-title, #footer .textwidget a, .entry-content a, #sidebar .textwidget a, .comment-body p a, .woocommerce-product-details__short-description p a{';
		$advance_coaching_custom_css .='color: '.esc_attr($advance_coaching_theme_color).';';
	$advance_coaching_custom_css .='}';

	$advance_coaching_custom_css .='.woocommerce-message, .primary-navigation ul ul li:first-child{';
		$advance_coaching_custom_css .='border-top-color: '.esc_attr($advance_coaching_theme_color).';';
	$advance_coaching_custom_css .='}';

	$advance_coaching_custom_css .='#footer input[type="search"],.primary-navigation ul ul, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button{';
		$advance_coaching_custom_css .='border-color: '.esc_attr($advance_coaching_theme_color).';';
	$advance_coaching_custom_css .='}';

	$advance_coaching_custom_css .='#comments input[type="submit"].submit, nav.woocommerce-MyAccount-navigation ul li{';
		$advance_coaching_custom_css .='background-color: '.esc_attr($advance_coaching_theme_color).'!important;';
	$advance_coaching_custom_css .='}';

	// media
	$advance_coaching_custom_css .='@media screen and (max-width:1000px) {';
	if($advance_coaching_theme_color){
		$advance_coaching_custom_css .='#menu-sidebar, .primary-navigation ul ul a, .primary-navigation li a:hover, .primary-navigation li:hover a,.primary-navigation ul ul ul ul, .primary-navigation a:focus, .page-template-custom-front-page .primary-navigation a:focus, .page-template-custom-front-page .primary-navigation a:hover, .primary-navigation li a:hover, .primary-navigation li:hover a{
			background-image: linear-gradient(-90deg, #000 0%, '.esc_attr($advance_coaching_theme_color).' 120%);
		}';
		$advance_coaching_custom_css .='.page-template-custom-front-page .contact_data .mail i{';
			$advance_coaching_custom_css .='color: '.esc_attr($advance_coaching_theme_color).'!important;';
		$advance_coaching_custom_css .='}';
	}
	$advance_coaching_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$advance_coaching_theme_lay = get_theme_mod( 'advance_coaching_theme_options','Default');
    if($advance_coaching_theme_lay == 'Default'){
		$advance_coaching_custom_css .='body{';
			$advance_coaching_custom_css .='max-width: 100%;';
		$advance_coaching_custom_css .='}';
		$advance_coaching_custom_css .='.page-template-custom-home-page .middle-header{';
			$advance_coaching_custom_css .='width: 97.3%';
		$advance_coaching_custom_css .='}';
	}else if($advance_coaching_theme_lay == 'Container'){
		$advance_coaching_custom_css .='body{';
			$advance_coaching_custom_css .='width: 100%; padding-right: 15px !important; padding-left: 15px !important; margin-right: auto !important; margin-left: auto !important;';
		$advance_coaching_custom_css .='}';
		$advance_coaching_custom_css .='.page-template-custom-home-page .middle-header{';
			$advance_coaching_custom_css .='width: 97.7%';
		$advance_coaching_custom_css .='}';
		$advance_coaching_custom_css .='.page-template-custom-front-page .contact-content{';
			$advance_coaching_custom_css .='right: 0';
		$advance_coaching_custom_css .='}';
		$advance_coaching_custom_css .='.serach_outer{';
			$advance_coaching_custom_css .='width: 97.7%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$advance_coaching_custom_css .='}';
	}else if($advance_coaching_theme_lay == 'Box Container'){
		$advance_coaching_custom_css .='body{';
			$advance_coaching_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$advance_coaching_custom_css .='}';
		$advance_coaching_custom_css .='.serach_outer{';
			$advance_coaching_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0;';
		$advance_coaching_custom_css .='}';
		$advance_coaching_custom_css .='.request-btn a{';
			$advance_coaching_custom_css .='padding:14px 10px';
		$advance_coaching_custom_css .='}';
		$advance_coaching_custom_css .='.page-template-custom-front-page .contact-content{';
			$advance_coaching_custom_css .='right: 0; left:0;';
		$advance_coaching_custom_css .='}';
		$advance_coaching_custom_css .='.page-template-custom-front-page .menu-bar{';
			$advance_coaching_custom_css .='padding-left:15px;';
		$advance_coaching_custom_css .='}';
		$advance_coaching_custom_css .='@media screen and (max-width:1200px){
		.page-template-custom-front-page .menu-bar{';
			$advance_coaching_custom_css .='padding-left:0;';
		$advance_coaching_custom_css .='} }';
	}

	$advance_coaching_show_header = get_theme_mod( 'advance_coaching_display_topbar', true);
	if($advance_coaching_show_header == false){
		$advance_coaching_custom_css .='.page-template-custom-front-page .contact-content{';
			$advance_coaching_custom_css .='margin-top: 0;';
		$advance_coaching_custom_css .='}';
	}

	$advance_coaching_show_slider = get_theme_mod( 'advance_coaching_slider_hide', false);
	if($advance_coaching_show_slider == false){
		$advance_coaching_custom_css .='.page-template-custom-front-page .contact-content{';
			$advance_coaching_custom_css .='background-color:#051f31; position: static;';
		$advance_coaching_custom_css .='}';
		$advance_coaching_custom_css .='.page-template-custom-front-page .menu-bar{';
			$advance_coaching_custom_css .='background-color:transparent;';
		$advance_coaching_custom_css .='}';
		$advance_coaching_custom_css .='.page-template-custom-front-page .primary-navigation a, .page-template-custom-front-page .sf-arrows .sf-with-ul:after, .page-template-custom-front-page .contact_data .mail p{';
			$advance_coaching_custom_css .='color:#fff;';
		$advance_coaching_custom_css .='}';
	}

	/*--------------Slider Content Layout -------------------*/
	$advance_coaching_theme_lay = get_theme_mod( 'advance_coaching_slider_content_alignment','Left');
    if($advance_coaching_theme_lay == 'Left'){
		$advance_coaching_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$advance_coaching_custom_css .='text-align:left; left:15%; right:45%;';
		$advance_coaching_custom_css .='}';
	}else if($advance_coaching_theme_lay == 'Center'){
		$advance_coaching_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$advance_coaching_custom_css .='text-align:center !important; left:20%; right:20%;';
		$advance_coaching_custom_css .='}';
	}else if($advance_coaching_theme_lay == 'Right'){
		$advance_coaching_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$advance_coaching_custom_css .='text-align:right !important; left:45%; right:15%;';
		$advance_coaching_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$advance_coaching_theme_lay = get_theme_mod( 'advance_coaching_slider_image_opacity','0.7');
	if($advance_coaching_theme_lay == '0'){
		$advance_coaching_custom_css .='#slider img{';
			$advance_coaching_custom_css .='opacity:0';
		$advance_coaching_custom_css .='}';
		}else if($advance_coaching_theme_lay == '0.1'){
		$advance_coaching_custom_css .='#slider img{';
			$advance_coaching_custom_css .='opacity:0.1';
		$advance_coaching_custom_css .='}';
		}else if($advance_coaching_theme_lay == '0.2'){
		$advance_coaching_custom_css .='#slider img{';
			$advance_coaching_custom_css .='opacity:0.2';
		$advance_coaching_custom_css .='}';
		}else if($advance_coaching_theme_lay == '0.3'){
		$advance_coaching_custom_css .='#slider img{';
			$advance_coaching_custom_css .='opacity:0.3';
		$advance_coaching_custom_css .='}';
		}else if($advance_coaching_theme_lay == '0.4'){
		$advance_coaching_custom_css .='#slider img{';
			$advance_coaching_custom_css .='opacity:0.4';
		$advance_coaching_custom_css .='}';
		}else if($advance_coaching_theme_lay == '0.5'){
		$advance_coaching_custom_css .='#slider img{';
			$advance_coaching_custom_css .='opacity:0.5';
		$advance_coaching_custom_css .='}';
		}else if($advance_coaching_theme_lay == '0.6'){
		$advance_coaching_custom_css .='#slider img{';
			$advance_coaching_custom_css .='opacity:0.6';
		$advance_coaching_custom_css .='}';
		}else if($advance_coaching_theme_lay == '0.7'){
		$advance_coaching_custom_css .='#slider img{';
			$advance_coaching_custom_css .='opacity:0.7';
		$advance_coaching_custom_css .='}';
		}else if($advance_coaching_theme_lay == '0.8'){
		$advance_coaching_custom_css .='#slider img{';
			$advance_coaching_custom_css .='opacity:0.8';
		$advance_coaching_custom_css .='}';
		}else if($advance_coaching_theme_lay == '0.9'){
		$advance_coaching_custom_css .='#slider img{';
			$advance_coaching_custom_css .='opacity:0.9';
		$advance_coaching_custom_css .='}';
		}

	/*---------------- Button Settings option------------------*/
	$advance_coaching_button_padding_top_bottom = get_theme_mod('advance_coaching_button_padding_top_bottom');
	$advance_coaching_button_padding_left_right = get_theme_mod('advance_coaching_button_padding_left_right');
	$advance_coaching_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .read-btn a, #comments .form-submit input[type="submit"],#coaching .read-more a{';
		$advance_coaching_custom_css .='padding-top: '.esc_attr($advance_coaching_button_padding_top_bottom).'px !important; padding-bottom: '.esc_attr($advance_coaching_button_padding_top_bottom).'px !important; padding-left: '.esc_attr($advance_coaching_button_padding_left_right).'px !important; padding-right: '.esc_attr($advance_coaching_button_padding_left_right).'px !important; display:inline-block;';
	$advance_coaching_custom_css .='}';

	$advance_coaching_button_border_radius = get_theme_mod('advance_coaching_button_border_radius');
	$advance_coaching_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .read-btn a, #comments .form-submit input[type="submit"], #coaching .read-more a{';
		$advance_coaching_custom_css .='border-radius: '.esc_attr($advance_coaching_button_border_radius).'px;';
	$advance_coaching_custom_css .='}';

	/*-----------------------------Responsive Setting --------------------*/
	$advance_coaching_stickyheader = get_theme_mod( 'advance_coaching_responsive_sticky_header',false);
	if($advance_coaching_stickyheader == true && get_theme_mod( 'advance_coaching_sticky_header') == false){
    	$advance_coaching_custom_css .='.fixed-header{';
			$advance_coaching_custom_css .='position:static;';
		$advance_coaching_custom_css .='} ';
	}
    if($advance_coaching_stickyheader == true){
    	$advance_coaching_custom_css .='@media screen and (max-width:575px) {';
		$advance_coaching_custom_css .='.fixed-header{';
			$advance_coaching_custom_css .='position:fixed;';
		$advance_coaching_custom_css .='} }';
	}else if($advance_coaching_stickyheader == false){
		$advance_coaching_custom_css .='@media screen and (max-width:575px) {';
		$advance_coaching_custom_css .='.fixed-header{';
			$advance_coaching_custom_css .='position:static;';
		$advance_coaching_custom_css .='} }';
	}

	$advance_coaching_slider = get_theme_mod( 'advance_coaching_responsive_slider',false);
	if($advance_coaching_slider == true && get_theme_mod( 'advance_coaching_slider_hide', false) == false){
    	$advance_coaching_custom_css .='#slider{';
			$advance_coaching_custom_css .='display:none;';
		$advance_coaching_custom_css .='} ';
	}
    if($advance_coaching_slider == true){
    	$advance_coaching_custom_css .='@media screen and (max-width:575px) {';
		$advance_coaching_custom_css .='#slider{';
			$advance_coaching_custom_css .='display:block;';
		$advance_coaching_custom_css .='} }';
	}else if($advance_coaching_slider == false){
		$advance_coaching_custom_css .='@media screen and (max-width:575px) {';
		$advance_coaching_custom_css .='#slider{';
			$advance_coaching_custom_css .='display:none;';
		$advance_coaching_custom_css .='} }';
	}

	$advance_coaching_slider = get_theme_mod( 'advance_coaching_responsive_scroll',true);
	if($advance_coaching_slider == true && get_theme_mod( 'advance_coaching_enable_disable_scroll', true) == false){
    	$advance_coaching_custom_css .='#scroll-top{';
			$advance_coaching_custom_css .='display:none !important;';
		$advance_coaching_custom_css .='} ';
	}
    if($advance_coaching_slider == true){
    	$advance_coaching_custom_css .='@media screen and (max-width:575px) {';
		$advance_coaching_custom_css .='#scroll-top{';
			$advance_coaching_custom_css .='visibility: visible !important;';
		$advance_coaching_custom_css .='} }';
	}else if($advance_coaching_slider == false){
		$advance_coaching_custom_css .='@media screen and (max-width:575px) {';
		$advance_coaching_custom_css .='#scroll-top{';
			$advance_coaching_custom_css .='visibility: hidden !important;';
		$advance_coaching_custom_css .='} }';
	}

	$advance_coaching_sidebar = get_theme_mod( 'advance_coaching_responsive_sidebar',true);
    if($advance_coaching_sidebar == true){
    	$advance_coaching_custom_css .='@media screen and (max-width:575px) {';
		$advance_coaching_custom_css .='#sidebar{';
			$advance_coaching_custom_css .='display:block;';
		$advance_coaching_custom_css .='} }';
	}else if($advance_coaching_sidebar == false){
		$advance_coaching_custom_css .='@media screen and (max-width:575px) {';
		$advance_coaching_custom_css .='#sidebar{';
			$advance_coaching_custom_css .='display:none;';
		$advance_coaching_custom_css .='} }';
	}

	$advance_coaching_loader = get_theme_mod( 'advance_coaching_responsive_preloader', true);
	if($advance_coaching_loader == true && get_theme_mod( 'advance_coaching_preloader_option', true) == false){
    	$advance_coaching_custom_css .='#loader-wrapper{';
			$advance_coaching_custom_css .='display:none;';
		$advance_coaching_custom_css .='} ';
	}
    if($advance_coaching_loader == true){
    	$advance_coaching_custom_css .='@media screen and (max-width:575px) {';
		$advance_coaching_custom_css .='#loader-wrapper{';
			$advance_coaching_custom_css .='display:block;';
		$advance_coaching_custom_css .='} }';
	}else if($advance_coaching_loader == false){
		$advance_coaching_custom_css .='@media screen and (max-width:575px) {';
		$advance_coaching_custom_css .='#loader-wrapper{';
			$advance_coaching_custom_css .='display:none;';
		$advance_coaching_custom_css .='} }';
	}

	/*------------------ Skin Option  -------------------*/
	$advance_coaching_theme_lay = get_theme_mod( 'advance_coaching_background_skin_mode','Transparent Background');
    if($advance_coaching_theme_lay == 'With Background'){
		$advance_coaching_custom_css .='.page-box,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin, .noresult-content{';
			$advance_coaching_custom_css .='background-color: #fff; padding:10px;';
		$advance_coaching_custom_css .='}';
	}else if($advance_coaching_theme_lay == 'Transparent Background'){
		$advance_coaching_custom_css .='#sidebar aside, .page-box-single{';
			$advance_coaching_custom_css .='background-color: transparent;';
		$advance_coaching_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$advance_coaching_top_bottom_product_button_padding = get_theme_mod('advance_coaching_top_bottom_product_button_padding', 10);
	$advance_coaching_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$advance_coaching_custom_css .='padding-top: '.esc_attr($advance_coaching_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($advance_coaching_top_bottom_product_button_padding).'px;';
	$advance_coaching_custom_css .='}';

	$advance_coaching_left_right_product_button_padding = get_theme_mod('advance_coaching_left_right_product_button_padding', 16);
	$advance_coaching_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$advance_coaching_custom_css .='padding-left: '.esc_attr($advance_coaching_left_right_product_button_padding).'px; padding-right: '.esc_attr($advance_coaching_left_right_product_button_padding).'px;';
	$advance_coaching_custom_css .='}';

	$advance_coaching_product_button_border_radius = get_theme_mod('advance_coaching_product_button_border_radius', 0);
	$advance_coaching_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$advance_coaching_custom_css .='border-radius: '.esc_attr($advance_coaching_product_button_border_radius).'px;';
	$advance_coaching_custom_css .='}';

	$advance_coaching_show_related_products = get_theme_mod('advance_coaching_show_related_products',true);
	if($advance_coaching_show_related_products == false){
		$advance_coaching_custom_css .='.related.products{';
			$advance_coaching_custom_css .='display: none;';
		$advance_coaching_custom_css .='}';
	}

	$advance_coaching_show_wooproducts_border = get_theme_mod('advance_coaching_show_wooproducts_border', false);
	if($advance_coaching_show_wooproducts_border == true){
		$advance_coaching_custom_css .='.products li{';
			$advance_coaching_custom_css .='border: 1px solid #767676;';
		$advance_coaching_custom_css .='}';
	}

	$advance_coaching_top_bottom_wooproducts_padding = get_theme_mod('advance_coaching_top_bottom_wooproducts_padding',0);
	$advance_coaching_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$advance_coaching_custom_css .='padding-top: '.esc_attr($advance_coaching_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($advance_coaching_top_bottom_wooproducts_padding).'px !important;';
	$advance_coaching_custom_css .='}';

	$advance_coaching_left_right_wooproducts_padding = get_theme_mod('advance_coaching_left_right_wooproducts_padding',0);
	$advance_coaching_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$advance_coaching_custom_css .='padding-left: '.esc_attr($advance_coaching_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($advance_coaching_left_right_wooproducts_padding).'px !important;';
	$advance_coaching_custom_css .='}';

	$advance_coaching_wooproducts_border_radius = get_theme_mod('advance_coaching_wooproducts_border_radius',0);
	$advance_coaching_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$advance_coaching_custom_css .='border-radius: '.esc_attr($advance_coaching_wooproducts_border_radius).'px;';
	$advance_coaching_custom_css .='}';

	$advance_coaching_wooproducts_box_shadow = get_theme_mod('advance_coaching_wooproducts_box_shadow',0);
	$advance_coaching_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$advance_coaching_custom_css .='box-shadow: '.esc_attr($advance_coaching_wooproducts_box_shadow).'px '.esc_attr($advance_coaching_wooproducts_box_shadow).'px '.esc_attr($advance_coaching_wooproducts_box_shadow).'px #e4e4e4;';
	$advance_coaching_custom_css .='}';

	/*-------------- Footer Text -------------------*/
	$advance_coaching_copyright_content_align = get_theme_mod('advance_coaching_copyright_content_align');
	if($advance_coaching_copyright_content_align != false){
		$advance_coaching_custom_css .='.copyright{';
			$advance_coaching_custom_css .='text-align: '.esc_attr($advance_coaching_copyright_content_align).';';
		$advance_coaching_custom_css .='}';
	}

	$advance_coaching_footer_content_font_size = get_theme_mod('advance_coaching_footer_content_font_size', 16);
	$advance_coaching_custom_css .='.copyright p{';
		$advance_coaching_custom_css .='font-size: '.esc_attr($advance_coaching_footer_content_font_size).'px !important;';
	$advance_coaching_custom_css .='}';

	$advance_coaching_copyright_padding = get_theme_mod('advance_coaching_copyright_padding', 20);
	$advance_coaching_custom_css .='.copyright{';
		$advance_coaching_custom_css .='padding-top: '.esc_attr($advance_coaching_copyright_padding).'px; padding-bottom: '.esc_attr($advance_coaching_copyright_padding).'px;';
	$advance_coaching_custom_css .='}';

	$advance_coaching_footer_widget_bg_color = get_theme_mod('advance_coaching_footer_widget_bg_color');
	$advance_coaching_custom_css .='#footer{';
		$advance_coaching_custom_css .='background-color: '.esc_attr($advance_coaching_footer_widget_bg_color).';';
	$advance_coaching_custom_css .='}';

	$advance_coaching_footer_widget_bg_image = get_theme_mod('advance_coaching_footer_widget_bg_image');
	if($advance_coaching_footer_widget_bg_image != false){
		$advance_coaching_custom_css .='#footer{';
			$advance_coaching_custom_css .='background: url('.esc_attr($advance_coaching_footer_widget_bg_image).');';
		$advance_coaching_custom_css .='}';
	}

	// scroll to top
	$advance_coaching_scroll_font_size_icon = get_theme_mod('advance_coaching_scroll_font_size_icon', 22);
	$advance_coaching_custom_css .='#scroll-top .fas{';
		$advance_coaching_custom_css .='font-size: '.esc_attr($advance_coaching_scroll_font_size_icon).'px;';
	$advance_coaching_custom_css .='}';

	// Slider Height 
	$advance_coaching_slider_image_height = get_theme_mod('advance_coaching_slider_image_height');
	$advance_coaching_custom_css .='#slider img{';
		$advance_coaching_custom_css .='height: '.esc_attr($advance_coaching_slider_image_height).'px;';
	$advance_coaching_custom_css .='}';

	// Display Blog Post 
	$advance_coaching_display_blog_page_post = get_theme_mod( 'advance_coaching_display_blog_page_post','Without Box');
    if($advance_coaching_display_blog_page_post == 'In Box'){
		$advance_coaching_custom_css .='.page-box{';
			$advance_coaching_custom_css .='border:solid 1px #051f31; margin:20px 0; padding:15px;';
		$advance_coaching_custom_css .='}';
	}

	// slider overlay
	$advance_coaching_slider_overlay = get_theme_mod('advance_coaching_slider_overlay', true);
	if($advance_coaching_slider_overlay == false){
		$advance_coaching_custom_css .='#slider img{';
			$advance_coaching_custom_css .='opacity:1;';
		$advance_coaching_custom_css .='}';
	} 
	$advance_coaching_slider_image_overlay_color = get_theme_mod('advance_coaching_slider_image_overlay_color', true);
	if($advance_coaching_slider_overlay != false){
		$advance_coaching_custom_css .='#slider{';
			$advance_coaching_custom_css .='background-color: '.esc_attr($advance_coaching_slider_image_overlay_color).';';
		$advance_coaching_custom_css .='}';
	}

	// site title and tagline font size option
	$advance_coaching_site_title_size_option = get_theme_mod('advance_coaching_site_title_size_option', 37);{
	$advance_coaching_custom_css .='.logo h1 a, .logo p a{';
	$advance_coaching_custom_css .='font-size: '.esc_attr($advance_coaching_site_title_size_option).'px;';
		$advance_coaching_custom_css .='}';
	}

	$advance_coaching_site_tagline_size_option = get_theme_mod('advance_coaching_site_tagline_size_option', 12);{
	$advance_coaching_custom_css .='.logo p{';
	$advance_coaching_custom_css .='font-size: '.esc_attr($advance_coaching_site_tagline_size_option).'px !important;';
		$advance_coaching_custom_css .='}';
	}

	// woocommerce product sale settings
	$advance_coaching_border_radius_product_sale = get_theme_mod('advance_coaching_border_radius_product_sale',0);
	$advance_coaching_custom_css .='.woocommerce span.onsale {';
		$advance_coaching_custom_css .='border-radius: '.esc_attr($advance_coaching_border_radius_product_sale).'px;';
	$advance_coaching_custom_css .='}';

	$advance_coaching_align_product_sale = get_theme_mod('advance_coaching_align_product_sale', 'Right');
	if($advance_coaching_align_product_sale == 'Right' ){
		$advance_coaching_custom_css .='.woocommerce ul.products li.product .onsale{';
			$advance_coaching_custom_css .=' left:auto; right:0;';
		$advance_coaching_custom_css .='}';
	}elseif($advance_coaching_align_product_sale == 'Left' ){
		$advance_coaching_custom_css .='.woocommerce ul.products li.product .onsale{';
			$advance_coaching_custom_css .=' left:0; right:auto;';
		$advance_coaching_custom_css .='}';
	}

	$advance_coaching_product_sale_font_size = get_theme_mod('advance_coaching_product_sale_font_size',14);
	$advance_coaching_custom_css .='.woocommerce span.onsale{';
		$advance_coaching_custom_css .='font-size: '.esc_attr($advance_coaching_product_sale_font_size).'px;';
	$advance_coaching_custom_css .='}';


	// preloader background option
	$advance_coaching_loader_background_color_settings = get_theme_mod('advance_coaching_loader_background_color_settings');
	$advance_coaching_custom_css .='#loader-wrapper .loader-section{';
		$advance_coaching_custom_css .='background-color: '.esc_attr($advance_coaching_loader_background_color_settings).';';
	$advance_coaching_custom_css .='} ';

	// fixed header padding option
	$advance_coaching_sticky_header_padding_settings = get_theme_mod('advance_coaching_sticky_header_padding_settings', 0);
	$advance_coaching_custom_css .='.fixed-header{';
		$advance_coaching_custom_css .='padding: '.esc_attr($advance_coaching_sticky_header_padding_settings).'px;';
	$advance_coaching_custom_css .='}';

	// woocommerce Product Navigation
	$advance_coaching_products_navigation = get_theme_mod('advance_coaching_products_navigation', 'Yes');
	if($advance_coaching_products_navigation == 'No'){
		$advance_coaching_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$advance_coaching_custom_css .='display: none;';
		$advance_coaching_custom_css .='}';
	}

	// featured image setting
	$advance_coaching_featured_img_border_radius = get_theme_mod('advance_coaching_featured_img_border_radius', 0);
	$advance_coaching_custom_css .='.box-image img{';
		$advance_coaching_custom_css .='border-radius: '.esc_attr($advance_coaching_featured_img_border_radius).'px;';
	$advance_coaching_custom_css .='}';

	$advance_coaching_featured_img_box_shadow = get_theme_mod('advance_coaching_featured_img_box_shadow',0);
	$advance_coaching_custom_css .='.box-image img{';
		$advance_coaching_custom_css .='box-shadow: '.esc_attr($advance_coaching_featured_img_box_shadow).'px '.esc_attr($advance_coaching_featured_img_box_shadow).'px '.esc_attr($advance_coaching_featured_img_box_shadow).'px #ccc;';
	$advance_coaching_custom_css .='}';

	// slider top and bottom padding
	$advance_coaching_top_bottom_slider_content_space = get_theme_mod('advance_coaching_top_bottom_slider_content_space');
	$advance_coaching_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
		$advance_coaching_custom_css .='top: '.esc_attr($advance_coaching_top_bottom_slider_content_space).'%; bottom: '.esc_attr($advance_coaching_top_bottom_slider_content_space).'%;';
	$advance_coaching_custom_css .='}';