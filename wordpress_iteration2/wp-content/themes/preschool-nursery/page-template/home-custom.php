<?php
/**
 * Template Name: Home Custom Page
 */
get_header(); ?>

<main id="main" role="main">
  <?php do_action( 'preschool_nursery_before_slider' ); ?>

  <?php if( get_theme_mod('preschool_nursery_slider_arrows', false) != '' || get_theme_mod( 'preschool_nursery_enable_disable_slider', false) != ''){ ?>
    <section id="slider">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('preschool_nursery_slider_speed', 3000)); ?>"> 
        <?php $preschool_nursery_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'preschool_nursery_slide_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $preschool_nursery_slider_pages[] = $mod;
            }
          }
          if( !empty($preschool_nursery_slider_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $preschool_nursery_slider_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php the_post_thumbnail(); ?>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <?php if( get_theme_mod('preschool_nursery_slider_title',true) != ''){ ?>
                  <h1 class="text-capitalize"><?php the_title();?></h1>
                <?php } ?>
                <?php if( get_theme_mod('preschool_nursery_slider_content',true) != ''){ ?>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( preschool_nursery_string_limit_words( $excerpt, esc_attr(get_theme_mod('preschool_nursery_slider_excerpt_number','15')))); ?></p>
                <?php } ?>
                <?php if (get_theme_mod( 'preschool_nursery_slider_button',true) != '' || get_theme_mod( 'preschool_nursery_show_hide_slider_button',true) != ''){ ?>
                  <?php if( get_theme_mod('preschool_nursery_slider_button_text','Contact Us') != ''){ ?>
                    <div class ="readbutton mt-lg-4 mt-md-2">
                      <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('preschool_nursery_slider_button_text','Contact Us'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('preschool_nursery_slider_button_text','Contact Us'));?></span></a>
                    </div>
                  <?php } ?>
                <?php } ?>
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
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','preschool-nursery' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','preschool-nursery' );?></span>
        </a>
      </div> 
      <div class="clearfix"></div>
      <img role="img" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/wave.png');?>" class="slider-design" alt="<?php esc_attr_e( 'Border Image','preschool-nursery' );?>">
    </section> 
  <?php }?> 

  <?php do_action( 'preschool_nursery_after_slider' ); ?>

  <?php if( get_theme_mod('preschool_nursery_facility_section_title') != ''|| get_theme_mod('preschool_nursery_facility_section_text') != '' || get_theme_mod('preschool_nursery_facility_section_category') != ''){ ?>
    <section id="our-facility" class="py-5">
      <div class="container">
        <?php if( get_theme_mod('preschool_nursery_facility_section_title') != ''){ ?>
          <h2 class="text-center"><?php echo esc_html(get_theme_mod('preschool_nursery_facility_section_title')); ?></h2>
        <?php }?>
        <?php if( get_theme_mod('preschool_nursery_facility_section_text') != ''){ ?>
          <p class="text-center mx-lg-5 px-md-5"><?php echo esc_html(get_theme_mod('preschool_nursery_facility_section_text')); ?></p>
        <?php }?>
        <div class="row mt-5">
          <?php 
            $preschool_nursery_catData=  get_theme_mod('preschool_nursery_facility_section_category');
            if($preschool_nursery_catData){
            $page_query = new WP_Query(array( 'category_name' => esc_html( $preschool_nursery_catData ,'preschool-nursery')));?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
              <div class="col-lg-4 col-md-4">
                <?php if(has_post_thumbnail()) { ?>
                  <div class="facility-img">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                  </div>
                <?php }?>
              </div>
              <?php endwhile;
            wp_reset_postdata();
          } ?>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'preschool_nursery_after_services' ); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post();?>
      <?php the_content(); ?>
    <?php endwhile; // End of the loop.
    wp_reset_postdata(); ?>
  </div>
</main>

<?php get_footer(); ?>