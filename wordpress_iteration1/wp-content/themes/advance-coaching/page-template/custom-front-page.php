<?php
/**
 * Template Name: Custom home
 */
get_header(); ?>

<main role="main" id="maincontent">
  <?php do_action( 'advance_coaching_above_slider' ); ?>
  <?php if( get_theme_mod( 'advance_coaching_slider_hide', false) != '' || get_theme_mod( 'advance_coaching_responsive_slider', false) != '') { ?>
    <section id="slider">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('advance_coaching_slider_speed_option', 3000)); ?>"> 
        <?php $advance_coaching_slider_page = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'advance_coaching_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $advance_coaching_slider_page[] = $mod;
            }
          }
          if( !empty($advance_coaching_slider_page) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $advance_coaching_slider_page,
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
                  <?php if( get_theme_mod('advance_coaching_slider_title_Show_hide',true) != ''){ ?>
                    <h1><?php the_title(); ?></h1>
                  <?php } ?>
                  <?php if( get_theme_mod('advance_coaching_slider_content_Show_hide',true) != ''){ ?>
                    <p><?php $excerpt = get_the_excerpt(); echo esc_html( advance_coaching_string_limit_words( $excerpt, esc_attr(get_theme_mod('advance_coaching_slider_excerpt_length','20')))); ?></p>
                  <?php } ?>
                  <?php if( get_theme_mod('advance_coaching_slider_button','READ MORE') != ''){ ?>
                    <div class="read-btn mt-md-4">
                      <a href="<?php the_permalink(); ?>" class="p-2 ps-3"><?php echo esc_html(get_theme_mod('advance_coaching_slider_button','READ MORE'));?><i class="fas fa-angle-right rounded-circle ms-3"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('advance_coaching_slider_button','READ MORE'));?></span></a>
                    </div>
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
        <div class="slider-nex-pre">
          <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left rounded-circle"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Previous','advance-coaching' );?></span>
          </a>
          <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right rounded-circle"></i></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Next','advance-coaching' );?></span>
          </a>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php } ?>
  <?php do_action( 'advance_coaching_below_slider' ); ?>
  <?php if( get_theme_mod( 'advance_coaching_title') != '' || get_theme_mod( 'advance_coaching_projects_category_category') != '') { ?>
    <section id="coaching" class="my-5">
      <div class="container">
        <?php if( get_theme_mod('advance_coaching_title') != ''){ ?>
          <div class="coaching-title text-center mb-3">
            <h2><?php echo esc_html(get_theme_mod('advance_coaching_title','')); ?></h2>
            <img src="<?php echo esc_url(get_theme_mod('advance_coaching_sec_border',esc_url(get_template_directory_uri()).'/images/border.png')); ?>" alt="<?php esc_attr_e('Border Image','advance-coaching'); ?>" role="img">
          </div>
        <?php } ?>
        <div class="row">
          <?php 
          $advance_coaching_catData =  get_theme_mod('advance_coaching_projects_category_category');
          if($advance_coaching_catData){
            $page_query = new WP_Query(array( 'category_name' => esc_html($advance_coaching_catData,'advance-coaching')));?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
              <div class="col-lg-4 col-md-4">
                <div class="box text-center">
                  <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                  <div class="box-content w-100 h-100 p-4">
                    <h4 class="title text-uppercase mb-2"><?php the_title(); ?></h4>
                    <p class="description">
                      <?php $excerpt = get_the_excerpt(); echo esc_html( advance_coaching_string_limit_words( $excerpt,15 ) ); ?>
                    </p> 
                  </div>
                </div>
                <div class="read-more mt-3 text-center">
                  <?php if( get_theme_mod('advance_coaching_category_button_text', 'READ MORE') != ''){ ?>
                    <a href="<?php the_permalink(); ?>" class="blogbutton-small p-2 ps-3"><?php echo esc_html( get_theme_mod('advance_coaching_category_button_text',__('READ MORE', 'advance-coaching')) ); ?><i class="fas fa-angle-right ms-3 rounded-circle"></i><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('advance_coaching_category_button_text',__('READ MORE', 'advance-coaching')) ); ?></span>
                    </a>
                  <?php } ?>
                </div>
              </div> 
            <?php endwhile;
            wp_reset_postdata();
          }?>
        </div>
      </div>
    </section>
  <?php }?>
  <?php do_action( 'advance_coaching_below_coaching_section' ); ?>
  <div id="content">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>