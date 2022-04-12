<?php
/**
 * The template part for displaying a message that posts cannot be found.
 * @package Babysitting Day Care
 */
?>

<header role="banner">
	<h2 class="entry-title"><?php echo esc_html( get_theme_mod('babysitting_day_care_search_result_title',__('Nothing Found', 'babysitting-day-care' )) ); ?></h2>
</header>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>	
	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.', 'babysitting-day-care' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
<?php elseif ( is_search() ) : ?>
	<p><?php echo esc_html( get_theme_mod('babysitting_day_care_search_result_text',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'babysitting-day-care' )) ); ?></p><br />
		<?php get_search_form(); ?>
<?php else : ?>
	<p><?php esc_html_e( 'Dont worry it happens to the best of us.', 'babysitting-day-care' ); ?></p><br />
	<div class="read-moresec mt-3">
		<a href="<?php echo esc_url( home_url() ); ?>" class="button py-2 px-4"><?php esc_html_e( 'Return to the home page', 'babysitting-day-care' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Return to the home page', 'babysitting-day-care' ); ?></span></a>
	</div>
<?php endif; ?>