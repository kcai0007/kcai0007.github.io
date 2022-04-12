<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ts">
 *
 * @package advance-coaching
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
  } ?>
  <header role="banner">
    <?php if(get_theme_mod('advance_coaching_preloader_option',true) != '' || get_theme_mod('advance_coaching_responsive_preloader', true) != ''){ ?>
      <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div>
    <?php }?>
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'advance-coaching' ); ?></a>
    <div id="header">
      <?php if( get_theme_mod('advance_coaching_display_topbar', false) != ''){ ?>
        <div class="top-header"> 
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-4 p-0">
                <?php if( get_theme_mod('advance_coaching_time') != ''){ ?>
                  <div class="time p-3 mb-2">
                    <div class="row m-0">
                      <div class="col-lg-3 col-md-3">
                        <i class="far fa-clock"></i>
                      </div>
                      <div class="col-lg-9 col-md-9 p-0 text-md-start">
                        <p class="my-1"><?php echo esc_html( get_theme_mod('advance_coaching_time','' )); ?></p>
                      </div>
                    </div>
                  </div>  
                <?php } ?>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="welcome-text">
                  <?php if( get_theme_mod('advance_coaching_welcome_text') != ''){ ?>
                    <p class="mt-4"><?php echo esc_html( get_theme_mod('advance_coaching_welcome_text','' )); ?></p>
                  <?php } ?>
                </div>
              </div>
              <div class="col-lg-3 col-md-3">
                <div class="request-btn mt-3">
                  <?php if ( get_theme_mod('advance_coaching_course1','') != "" ) {?>
                    <span><a href="<?php echo esc_url(get_theme_mod('advance_coaching_course')); ?>" class="text-uppercase p-lg-3"><?php echo esc_html(get_theme_mod('advance_coaching_course1','')); ?> <i class="fas fa-angle-right ms-3 rounded-circle"></i></a><span class="screen-reader-text"><?php esc_html_e( 'Requestbtn','advance-coaching' );?></span></span>
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      <div class="contact-content">
        <div class="container">
          <div class="menu-bar">
            <div class="row">
              <div class="col-lg-3 col-md-4 logo_bar p-0">
                <div class="logo py-2">
                  <?php if ( has_custom_logo() ) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                  <?php endif; ?>
                  <?php $blog_info = get_bloginfo( 'name' ); ?>
                  <?php if ( ! empty( $blog_info ) ) : ?>
                    <?php if( get_theme_mod('advance_coaching_site_title',true) != ''){ ?>
                      <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-start text-uppercase"><?php bloginfo( 'name' ); ?></a></h1>
                      <?php else : ?>
                        <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-start text-uppercase"><?php bloginfo( 'name' ); ?></a></p>
                      <?php endif; ?>
                    <?php }?>
                  <?php endif; ?>
                  <?php
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) :
                    ?>
                    <?php if( get_theme_mod('advance_coaching_tagline',true) != ''){ ?>
                      <p class="site-description m-0">
                        <?php echo esc_html($description); ?>
                      </p>
                    <?php }?>
                  <?php endif; ?>
                </div>
              </div>         
              <div class="col-lg-9 col-md-8 p-0 align-self-center">
                <div class="topbar">
                  <div class="<?php if( get_theme_mod( 'advance_coaching_sticky_header', false) != '' || get_theme_mod( 'advance_coaching_responsive_sticky_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
                    <?php 
                      if(has_nav_menu('primary')){ ?>
                      <div class="toggle-menu responsive-menu text-center">
                        <button role="tab" class="mobiletoggle"><i class="fas fa-bars m-2 p-2"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','advance-coaching'); ?></span></button>
                      </div>
                    <?php }?>
                    <div class="row m-0">
                      <div class="col-lg-11 col-md-11 align-self-center">
                        <div class="main-menu">
                          <div class="container">
                            <div id="menu-sidebar" class="nav sidebar">
                              <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'advance-coaching' ); ?>">
                                <?php
                                  if(has_nav_menu('primary')){  
                                    wp_nav_menu( array( 
                                      'theme_location' => 'primary',
                                      'container_class' => 'main-menu-navigation clearfix' ,
                                      'menu_class' => 'clearfix',
                                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-lg-0 text-lg-start ps-lg-0">%3$s</ul>',
                                      'fallback_cb' => 'wp_page_menu',
                                    ) );
                                  } 
                                ?>
                                <div class="request-btn mt-3">
                                  <?php if ( get_theme_mod('advance_coaching_course1','') != "" ) {?>
                                    <span><a href="<?php echo esc_url(get_theme_mod('advance_coaching_course')); ?>"><?php echo esc_html(get_theme_mod('advance_coaching_course1','')); ?> <i class="fas fa-angle-right ms-3 rounded-circle"></i></a><span class="screen-reader-text"><?php esc_html_e( 'Requestbtn','advance-coaching' );?></span></span>
                                  <?php }?>
                                </div>
                                <?php get_search_form();?>
                                <a href="javascript:void(0)" class="closebtn responsive-menu"><i class="far fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','advance-coaching'); ?></span></a>
                              </nav>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-1 col-md-1 col-6 align-self-center">
                        <div class="search-box my-3 align-self-center">
                          <button type="button" class="search-open"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="search-outer">
                    <div class="serach_inner w-100 h-100">
                      <?php get_search_form(); ?>
                    </div>
                    <button type="button" class="search-close">X</span></button>
                  </div>
                  <div class="contact_data row m-0">
                    <div class="col-lg-4 col-md-4">
                      <?php if( get_theme_mod('advance_coaching_mail') != ''){ ?>
                      <div class="mail py-2">
                        <div class="row m-0">
                          <div class="col-lg-3 col-md-12">
                            <i class="fas fa-at"></i>
                          </div>
                          <div class="col-lg-9 col-md-12 text-lg-start">
                            <?php if( get_theme_mod('advance_coaching_mail') != ''){ ?>
                              <p class="color mb-0 text-uppercase"><?php echo esc_html( get_theme_mod('advance_coaching_mail','' )); ?></p>
                            <?php } ?>
                            <?php if( get_theme_mod('advance_coaching_mail1') != ''){ ?>
                              <a href="mailto:<?php echo esc_attr( get_theme_mod('advance_coaching_mail1','') ); ?>" class="mb-0"><?php echo esc_html( get_theme_mod('advance_coaching_mail1','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('advance_coaching_mail1','' )); ?></span></a>
                            <?php } ?>
                          </div>
                        </div>  
                      </div>
                      <?php } ?>
                    </div>
                    <div class="col-lg-4 col-md-4">
                      <?php if( get_theme_mod('advance_coaching_phone') != ''){ ?>
                        <div class="mail py-2">
                          <div class="row m-0">
                            <div class="col-lg-3 col-md-12">
                              <i class="fas fa-phone p-2"></i>
                            </div>
                            <div class="col-lg-9 col-md-12 text-lg-start">
                              <?php if( get_theme_mod('advance_coaching_phone') != ''){ ?>
                                <p class="color mb-0 text-uppercase"><?php echo esc_html( get_theme_mod('advance_coaching_phone','' )); ?></p>
                              <?php } ?>
                              <?php if( get_theme_mod('advance_coaching_phone1') != ''){ ?>
                                <a href="tel:<?php echo esc_attr( get_theme_mod('advance_coaching_phone1','' )); ?>" class="mb-0"><?php echo esc_html( get_theme_mod('advance_coaching_phone1','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('advance_coaching_phone1','' )); ?></span></a>
                              <?php } ?>
                            </div>
                          </div> 
                        </div> 
                      <?php } ?> 
                    </div>
                    <div class="col-lg-4 col-md-4">
                      <?php if( get_theme_mod('advance_coaching_address') != ''){ ?>
                        <div class="mail py-2">
                          <div class="row m-0">
                            <div class="col-lg-3 col-md-12">
                              <i class="fas fa-map-marker-alt p-2"></i>
                            </div>
                            <div class="col-lg-9 col-md-12 text-lg-start">
                              <?php if( get_theme_mod('advance_coaching_address') != ''){ ?>
                              <p class="color mb-0 text-uppercase"><?php echo esc_html( get_theme_mod('advance_coaching_address','' )); ?></p>
                              <?php } ?>
                              <?php if( get_theme_mod('advance_coaching_address1') != ''){ ?>
                              <p class="mb-0"><?php echo esc_html( get_theme_mod('advance_coaching_address1','' )); ?></p>
                              <?php } ?>
                            </div>
                          </div>
                        </div>  
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>