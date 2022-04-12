<?php
/**
 * Displays footer site info
 */

?>
<?php if( get_theme_mod( 'preschool_nursery_hide_show_scroll',false) != '' || get_theme_mod( 'preschool_nursery_enable_disable_scrolltop',false) != '') { ?>
    <?php $preschool_nursery_theme_lay = get_theme_mod( 'preschool_nursery_footer_options','Right');
        if($preschool_nursery_theme_lay == 'Left align'){ ?>
            <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('preschool_nursery_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'preschool-nursery' ); ?></span></a>
        <?php }else if($preschool_nursery_theme_lay == 'Center align'){ ?>
            <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('preschool_nursery_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'preschool-nursery' ); ?></span></a>
        <?php }else{ ?>
            <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('preschool_nursery_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'preschool-nursery' ); ?></span></a>
    <?php }?>
<?php }?>
<div class="site-info">
    <div class="container">
    	<span><?php preschool_nursery_credit(); ?><?php echo esc_html(get_theme_mod('preschool_nursery_footer_text',__('By ThemesEye','preschool-nursery'))); ?></span>
    	<span class="footer_text"><?php echo esc_html_e('Powered By WordPress','preschool-nursery') ?></span>
    </div>
</div>