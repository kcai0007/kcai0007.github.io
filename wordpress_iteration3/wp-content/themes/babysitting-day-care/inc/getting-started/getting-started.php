<?php
//about theme info
add_action( 'admin_menu', 'babysitting_day_care_gettingstarted' );
function babysitting_day_care_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'babysitting-day-care'), esc_html__('Get Started', 'babysitting-day-care'), 'edit_theme_options', 'babysitting_day_care_guide', 'babysitting_day_care_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function babysitting_day_care_admin_theme_style() {
   wp_enqueue_style('babysitting-day-care-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'babysitting_day_care_admin_theme_style');

//guidline for about theme
function babysitting_day_care_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'babysitting-day-care' );
?>
<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Babysitting Day Care WordPress Theme', 'babysitting-day-care' ); ?></h3>
		</div>
		<div class="color_bg_blue">
			<p>Version: <?php echo esc_html($theme['Version']);?></p>
			<p class="intro_version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and flexible WordPress theme.', 'babysitting-day-care' ); ?></p>
			<div class="blink">
				<h4><?php esc_html_e( 'Theme Created By Themesglance', 'babysitting-day-care' ); ?></h4>
			</div>
			<div class="intro-text"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/themesglance-logo.png" alt="" /></div>
			<div class="coupon-code"><?php esc_html_e( 'Get', 'babysitting-day-care' ); ?> 
				<span><?php esc_html_e( '20% off', 'babysitting-day-care' ); ?></span> <?php esc_html_e( 'on Premium Theme with the discount code: ', 'babysitting-day-care' ); ?> <span><?php esc_html_e( '" Get20 "', 'babysitting-day-care' ); ?></span>
			</div>
		</div>
		<div class="started">
			<h3><?php esc_html_e( 'Lite Theme Info', 'babysitting-day-care' ); ?></h3>
			<p><?php esc_html_e( 'Babysitting Day Care is a Bootstrap framework-based WordPress theme designed for babysitters, childcare centers, daycare services, kindergartens, nanny services, children’s clothing stores, toy stores, and any website related to kids. This beautiful theme has a clean design and user-friendly interface letting people of every skill level use this theme with ease. Besides being interactive, this theme has a lot of personalization options allowing you to add your own taste to your website. Optimized codes are included in the design making it really lightweight and smooth to deliver great performance across several devices. Responsive is yet another great feature of this theme. Several sections including the Team, Testimonial, Services are included giving users a fair idea about your babysitting services. The mobile-friendly design of this theme will make the website go smoothly across small screen devices as well, not leaving any possibility for your performance to degrade. The secure and clean codes result in faster page load time making the pages load without any lag. Apart from the various styling options, you will find SEO-friendly codes that will make your website fetch the best ranks on the search engine results page. The animated pages and CSS effects further add to the overall visual appeal of your website.', 'babysitting-day-care')?></p>
			<hr>
			<h3><?php esc_html_e( 'Help Docs', 'babysitting-day-care' ); ?></h3>
			<ul>
				<p><?php esc_html_e( 'Babysitting Day Care', 'babysitting-day-care' ); ?> <a href="<?php echo esc_url( BABYSITTING_DAY_CARE_THEMESGLANCE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'babysitting-day-care' ); ?></a></p>
			</ul>
			<hr>
			<h3><?php esc_html_e( 'Get started with Photography Theme', 'babysitting-day-care' ); ?></h3>
			<div class="col-left-inner"> 
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>		
			<div class="col-right-inner">
				<p><?php esc_html_e( 'Go to', 'babysitting-day-care' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'babysitting-day-care' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'babysitting-day-care' ); ?></p>
				<ul>
					<li><?php esc_html_e( 'Easily customizable ', 'babysitting-day-care' ); ?> </li>
					<li><?php esc_html_e( 'Absolutely free', 'babysitting-day-care' ); ?> </li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'babysitting-day-care'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/responsive-tg.png" alt="" />
			<hr class="firsthr">
			<a href="<?php echo esc_url( BABYSITTING_DAY_CARE_THEMESGLANCE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'babysitting-day-care'); ?></a>
			<a href="<?php echo esc_url( BABYSITTING_DAY_CARE_THEMESGLANCE_PRO_THEME_URL ); ?>"><?php esc_html_e('Buy Pro', 'babysitting-day-care'); ?></a>
			<a href="<?php echo esc_url( BABYSITTING_DAY_CARE_THEMESGLANCE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'babysitting-day-care'); ?></a>
			<hr class="secondhr">
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'babysitting-day-care'); ?></h3>
		<ul>
		 	<li><?php esc_html_e( 'Slider with unlimited slides', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'Simple Menu option', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'Default demo Importer', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'Primary color option', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'Woocommerce Products Section', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'About Section', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'Custom Posttype for “testimonial” listing', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'Features Section', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'Team section with the custom posttype', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'Video Section', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'Newsletter Section', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'Services section', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'Woo Commerce Compatible', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'Blog Post section on home', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'Frequently asked question', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'Latest Blog Post Section', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'Contact page Template', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'Recent Post Widget with thumbnails', 'babysitting-day-care'); ?></li>
		 	<li><?php esc_html_e( 'Blog full width, with left and right sidebar Template', 'babysitting-day-care'); ?></li>
		</ul>
	</div>
	<div class="service">
		<div class="col-md-3">
			<h3><span class="dashicons dashicons-media-document"></span> <?php esc_html_e('Get Support', 'babysitting-day-care'); ?></h3>
			<ol>
				<li>
				<a href="<?php echo esc_url( BABYSITTING_DAY_CARE_THEMESGLANCE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'babysitting-day-care'); ?></a>
				</li>
			</ol>
		</div>
		<div class="col-md-3">
			<h3><span class="dashicons dashicons-welcome-widgets-menus"></span> <?php esc_html_e('Getting Started', 'babysitting-day-care'); ?></h3>
			<ol>
				<li> <?php esc_html_e('Start', 'babysitting-day-care'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'babysitting-day-care'); ?></a> <?php esc_html_e('your website.', 'babysitting-day-care'); ?></li>
			</ol>
		</div>
		<div class="col-md-3">
			<h3><span class="dashicons dashicons-star-filled"></span> <?php esc_html_e('Rate This Theme', 'babysitting-day-care'); ?></h3>
			<ol>
				<li>
					<a href="<?php echo esc_url( BABYSITTING_DAY_CARE_THEMESGLANCE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate it here', 'babysitting-day-care'); ?></a>
				</li>
			</ol>
		</div>
		<div class="col-md-3">
			<h3><span class="dashicons dashicons-editor-help"></span> <?php esc_html_e( 'Help Docs', 'babysitting-day-care' ); ?></h3>
			<ol>
				<li><?php esc_html_e( 'Babysitting Day Care Lite', 'babysitting-day-care' ); ?> <a href="<?php echo esc_url( BABYSITTING_DAY_CARE_THEMESGLANCE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'babysitting-day-care' ); ?></a></li>
			</ol>
		</div>
	</div>
</div>
<?php } ?>