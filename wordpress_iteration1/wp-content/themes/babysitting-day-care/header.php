<?php
/**
 * The Header for our theme.
 * @package Babysitting Day Care
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}?>
	
	<?php if(get_theme_mod('babysitting_day_care_preloader',false) || get_theme_mod('babysitting_day_care_preloader_responsive',false)){ ?>
	    <?php if(get_theme_mod( 'babysitting_day_care_preloader_type','Square') == 'Square'){ ?>
	        <div id="overlayer"></div>
	        <span class="tg-loader">
	        	<span class="tg-loader-inner"></span>
	        </span>
	    <?php }else if(get_theme_mod( 'babysitting_day_care_preloader_type') == 'Circle') {?>    
	        <div class="preloader text-center">
		        <div class="preloader-container">
		            <span class="animated-preloader"></span>
		        </div>
	        </div>
	    <?php }?>
	<?php }?>
	<header role="banner">
		<a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'babysitting-day-care' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'babysitting-day-care' ); ?></span></a>
		<?php if (has_nav_menu('primary')){ ?>
			<div class="toggle-menu responsive-menu">
        <button role="tab" class="mobiletoggle"><i class="<?php echo esc_html(get_theme_mod('babysitting_day_care_menu_open_icon','fas fa-bars')); ?> me-2"></i><?php echo esc_html( get_theme_mod('babysitting_day_care_mobile_menu_label', __('Menu','babysitting-day-care'))); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('babysitting_day_care_mobile_menu_label', __('Menu','babysitting-day-care'))); ?></span></button>
      </div>
    <?php }?>		
		<?php if(get_theme_mod('babysitting_day_care_top_header',false) == true || get_theme_mod('babysitting_day_care_hide_topbar_responsive',true) == true){ ?>
			<div class="top-bar py-3 text-center text-md-start">
				<div class="container">
	    		<div class="row">
		      	<div class="col-lg-8 col-md-8 col-sm-8 align-self-center">
	          	<?php if ( get_theme_mod('babysitting_day_care_topbar_text','') != "" ) {?>
								<p class="mb-0"><?php echo esc_html(get_theme_mod('babysitting_day_care_topbar_text','')); ?></p>
							<?php }?>
		      	</div>
		      	<div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
		      		<div class="top-bar-btn text-md-end text-center my-3 my-md-0">
		          	<?php if ( get_theme_mod('babysitting_day_care_topbar_button_link','') != "" || get_theme_mod('babysitting_day_care_topbar_button_text','') != "" ) {?>
									<a href="<?php echo esc_url(get_theme_mod('babysitting_day_care_topbar_button_link','')); ?>" class="mb-0"><?php echo esc_html(get_theme_mod('babysitting_day_care_topbar_button_text','')); ?></a>
								<?php }?>
							</div>
		      	</div>
			    </div>
			  </div>
			</div>
		<?php }?>
		<div id="header" class="py-4 text-center text-md-start">
			<div class="container">
				<div class="row m-0">
					<div class="col-lg-3 col-md-4 col-sm-4 align-self-center">
						<div class="logo">
	          	<?php if ( has_custom_logo() ) : ?>
	            	<div class="site-logo"><?php the_custom_logo(); ?></div>
	            <?php endif; ?>
	              <?php $blog_info = get_bloginfo( 'name' ); ?>
	              <?php if ( ! empty( $blog_info ) ) : ?>
	              	<?php if( get_theme_mod('babysitting_day_care_show_site_title',true) != ''){ ?>
		                <?php if ( is_front_page() && is_home() ) : ?>
		                	<h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		                <?php else : ?>
		                  <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		                <?php endif; ?>
		            <?php }?>
	            <?php endif; ?>
	            <?php if( get_theme_mod('babysitting_day_care_show_tagline',true) != ''){ ?>
	                <?php
	                $description = get_bloginfo( 'description', 'display' );
	                if ( $description || is_customize_preview() ) :
	                ?>
	                	<p class="site-description m-0">
	                    <?php echo esc_html($description); ?>
	                	</p>
	                <?php endif; ?>
	            <?php }?>
		        </div>
					</div>
					<div class="col-lg-5 col-md-1 col-sm-1 align-self-center">
						<div class="<?php if( get_theme_mod( 'babysitting_day_care_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
	            <div id="sidelong-menu" class="nav side-nav">
	              <nav id="primary-site-navigation" class="nav-menu ps-lg-3 p-0" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'babysitting-day-care' ); ?>">
	              	<?php if (has_nav_menu('primary')){
	                  wp_nav_menu( array( 
	                    'theme_location' => 'primary',
	                    'container_class' => 'main-menu-navigation clearfix' ,
	                    'menu_class' => 'clearfix',
	                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
	                    'fallback_cb' => 'wp_page_menu',
	                  ) ); 
	              	}?>
	                <a href="javascript:void(0)" class="closebtn responsive-menu"><?php echo esc_html( get_theme_mod('babysitting_day_care_close_menu_label', __('Close Menu','babysitting-day-care'))); ?><i class="<?php echo esc_html(get_theme_mod('babysitting_day_care_menu_close_icon','fas fa-times-circle')); ?> m-3"></i><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('babysitting_day_care_close_menu_label', __('Close Menu','babysitting-day-care'))); ?></span></a>
	              </nav>
	            </div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-3 align-self-center">
						<div class="social-media text-md-end">
		          <?php if( get_theme_mod( 'babysitting_day_care_facebook_url') != '') { ?>
		            <a href="<?php echo esc_url( get_theme_mod( 'babysitting_day_care_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f me-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook', 'babysitting-day-care' ); ?></span></a>
		          <?php } ?>
		          <?php if( get_theme_mod( 'babysitting_day_care_twitter_url') != '') { ?>
		            <a href="<?php echo esc_url( get_theme_mod( 'babysitting_day_care_twitter_url','' ) ); ?>"><i class="fab fa-twitter me-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter', 'babysitting-day-care' ); ?></span></a>
		          <?php } ?>
		          <?php if( get_theme_mod( 'babysitting_day_care_insta_url') != '') { ?>
		            <a href="<?php echo esc_url( get_theme_mod( 'babysitting_day_care_insta_url','' ) ); ?>"><i class="fab fa-instagram me-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram', 'babysitting-day-care' ); ?></span></a>
		          <?php } ?>
		          <?php if( get_theme_mod( 'babysitting_day_care_pinterest_url') != '') { ?>
		            <a href="<?php echo esc_url( get_theme_mod( 'babysitting_day_care_pinterest_url','' ) ); ?>"><i class="fab fa-pinterest-p me-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest', 'babysitting-day-care' ); ?></span></a>
		          <?php } ?> 
		          <?php if( get_theme_mod( 'babysitting_day_care_youtube_url') != '') { ?>
		            <a href="<?php echo esc_url( get_theme_mod( 'babysitting_day_care_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube', 'babysitting-day-care' ); ?></span></a>
		          <?php } ?>
		        </div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-4 align-self-center">
						<?php if ( get_theme_mod('babysitting_day_care_call','') != "" ) {?>
							<p class="call-info mb-0 text-md-end"><a href="tel:<?php echo esc_attr(get_theme_mod('babysitting_day_care_call','')); ?>"><i class="<?php echo esc_html(get_theme_mod('babysitting_day_care_phone_icon','fas fa-phone-volume')); ?> pe-2"></i><?php echo esc_html(get_theme_mod('babysitting_day_care_call','')); ?><span class="screen-reader-text"><?php esc_html_e('Phone Number', 'babysitting-day-care') ?></span></a></p>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php if(get_theme_mod('babysitting_day_care_post_featured_image') == 'banner' ){
    if( is_singular() ) {?>
    	<div id="page-site-header">
        <div class='page-header'> 
        	<?php the_title( '<h1>', '</h1>' ); ?>
        </div>
    	</div>
    <?php }
	}?>