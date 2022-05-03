<?php
/**
 * Template Name: Custom home page
 */
get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action('babysitting_day_care_above_slider_section'); ?>
  
  <?php if(get_theme_mod('babysitting_day_care_show_slider') != ''){ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel"> 
        <?php $babysitting_day_care_content_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'babysitting_day_care_slidersettings_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $babysitting_day_care_content_pages[] = $mod;
            }
          }
          if( !empty($babysitting_day_care_content_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $babysitting_day_care_content_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
            <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
              <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                <div class="row">
                  <div class="col-lg-7 col-md-7 col-sm-7 order-bx">
                    <div class="carousel-caption">
                      <div class="inner_carousel">
                        <?php if ( get_theme_mod('babysitting_day_care_slider_short_title',true) != '' ) {?>
                          <h4><?php echo esc_html( get_theme_mod('babysitting_day_care_slider_short_title','') ); ?></h4>
                        <?php }?>
                        <?php if ( get_theme_mod('babysitting_day_care_slider_title',true) != '' ) {?>
                          <h1><?php the_title(); ?></h1> 
                        <?php }?>
                        <?php if ( get_theme_mod('babysitting_day_care_slider_content',true) != '' ) {?>
                          <p><?php $excerpt = get_the_excerpt(); echo esc_html( babysitting_day_care_string_limit_words( $excerpt, esc_attr(get_theme_mod('babysitting_day_care_slider_excerpt','25')))); ?></p>
                        <?php }?>
                        <?php if ( get_theme_mod('babysitting_day_care_slider_button_label','READ MORE') != '' && get_theme_mod('babysitting_day_care_slider_button',true) != '') {?>
                          <div class ="read-more mt-md-4 mt-0">
                            <a href="<?php the_permalink(); ?>"><?php echo esc_html( get_theme_mod('babysitting_day_care_slider_button_label',__('READ MORE','babysitting-day-care')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('babysitting_day_care_slider_button_label',__('READ MORE','babysitting-day-care')) ); ?></span></a>
                          </div>
                        <?php }?>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-5 order-bx1">
                    <?php the_post_thumbnail(); ?>
                  </div>
                </div>
              </div>
            <?php $i++; endwhile; 
            wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon py-1 px-3" aria-hidden="true"><i class="fas fa-long-arrow-alt-left"></i></span>
            <span class="screen-reader-text"><?php esc_html_e('Previous','babysitting-day-care'); ?></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon py-1 px-3" aria-hidden="true"><i class="fas fa-long-arrow-alt-right"></i></span>
            <span class="screen-reader-text"><?php esc_html_e('Next','babysitting-day-care'); ?></span>
          </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action('babysitting_day_care_below_banner_section'); ?>

  <?php if( get_theme_mod('babysitting_day_care_services_title') != '' || get_theme_mod('babysitting_day_care_services_category') != ''){ ?>
    <section id="services" class="py-5 text-center">
      <div class="container">
        <?php if( get_theme_mod('babysitting_day_care_services_title') != ''){ ?>
          <h2><?php echo esc_html(get_theme_mod('babysitting_day_care_services_title','')); ?></h2>
        <?php }?>
        <?php if( get_theme_mod('babysitting_day_care_services_text') != ''){ ?>
          <p class=""><?php echo esc_html(get_theme_mod('babysitting_day_care_services_text','')); ?></p>
        <?php }?>
        <div class="row">
          <?php 
            $babysitting_day_care_catData=  get_theme_mod('babysitting_day_care_services_category');
            if($babysitting_day_care_catData){
            $page_query = new WP_Query(array( 'category_name' => esc_html( $babysitting_day_care_catData ,'babysitting-day-care')));
              $bgcolor = 1; ?>
              <?php while( $page_query->have_posts() ) : $page_query->the_post();?>
                <div class="col-lg-4 col-md-4">
                  <div class="service-content my-4 <?php echo('service-content-bg').$bgcolor ?>">
                    <?php the_post_thumbnail(); ?>
                    <?php if( get_post_meta($post->ID, 'babysitting_day_care_age', true) || get_post_meta($post->ID, 'babysitting_day_care_time', true) ) {?>
                      <div class="meta-feilds">
                        <?php if( get_post_meta($post->ID, 'babysitting_day_care_age', true) ) {?>
                          <span class="me-3"><?php esc_html_e('Age:','babysitting-day-care'); ?> <?php echo esc_html(get_post_meta($post->ID,'babysitting_day_care_age',true)); ?></span>
                        <?php }?>
                        <?php if( get_post_meta($post->ID, 'babysitting_day_care_time', true) ) {?>
                          <span><?php esc_html_e('Time:','babysitting-day-care'); ?> <?php echo esc_html(get_post_meta($post->ID,'babysitting_day_care_time',true)); ?></span>
                        <?php }?>
                      </div>
                    <?php }?>
                    <div class="p-3">
                      <h3><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                      <p><?php $excerpt = get_the_excerpt(); echo esc_html( babysitting_day_care_string_limit_words( $excerpt,10) ); ?></p>
                    </div>
                  </div>
                </div>
                <?php if($bgcolor >= 3){ $bgcolor = 0; } $bgcolor++; endwhile;
              wp_reset_postdata();
            } 
          ?>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action('babysitting_day_care_after_service_section'); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="entry-content"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>