<?php
/**
 * The template for displaying search forms in Babysitting Day Care
 * @package Babysitting Day Care
 */
?>
<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'babysitting-day-care' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr( get_theme_mod('babysitting_day_care_search_placeholder', __('Search', 'babysitting-day-care')) ); ?>" value="<?php the_search_query(); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'babysitting-day-care' ); ?>">
</form>