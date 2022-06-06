<?php
/**
 * @package Babysitting Day Care
 * @subpackage babysitting-day-care
 * Setup the WordPress core custom header feature.
 *
 * @uses babysitting_day_care_header_style()
*/

function babysitting_day_care_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'babysitting_day_care_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1284,
		'height'                 => 162,
		'wp-head-callback'       => 'babysitting_day_care_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'babysitting_day_care_custom_header_setup' );

if ( ! function_exists( 'babysitting_day_care_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see babysitting_day_care_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'babysitting_day_care_header_style' );
function babysitting_day_care_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$babysitting_day_care_custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'babysitting-day-care-basic-style', $babysitting_day_care_custom_css );
	endif;
}
endif; //babysitting_day_care_header_style