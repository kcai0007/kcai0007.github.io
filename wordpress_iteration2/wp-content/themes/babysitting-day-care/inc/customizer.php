<?php
/**
 * Babysitting Day Care Theme Customizer
 * @package Babysitting Day Care
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function babysitting_day_care_customize_register( $wp_customize ) {	

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-selector.php' );

	class Babysitting_Day_Care_WP_Customize_Range_Control extends WP_Customize_Control{
	    public $type = 'custom_range';
	    public function enqueue(){
	        wp_enqueue_script(
	            'cs-range-control',
	            false,
	            true
	        );
	    }
	    public function render_content(){?>
	        <label>
	            <?php if ( ! empty( $this->label )) : ?>
	                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
	            <?php endif; ?>
	            <div class="cs-range-value"><?php echo esc_html($this->value()); ?></div>
	            <input data-input-type="range" type="range" <?php $this->input_attrs(); ?> value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> />
	            <?php if ( ! empty( $this->description )) : ?>
	                <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
	            <?php endif; ?>
	        </label>
        <?php }
	}

	//add home page setting pannel
	$wp_customize->add_panel( 'babysitting_day_care_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'babysitting-day-care' ),
	    'description' => __( 'Description of what this panel does.', 'babysitting-day-care' ),
	) );

	// font array
	$babysitting_day_care_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );

	//Typography
	$wp_customize->add_section( 'babysitting_day_care_typography', array(
    	'title' => __( 'Typography', 'babysitting-day-care' ),
		'priority'   => 30,
		'panel' => 'babysitting_day_care_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'babysitting_day_care_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'babysitting_day_care_paragraph_color', array(
		'label' => __('Paragraph Color', 'babysitting-day-care'),
		'section' => 'babysitting_day_care_typography',
		'settings' => 'babysitting_day_care_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('babysitting_day_care_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'babysitting_day_care_paragraph_font_family', array(
	    'section'  => 'babysitting_day_care_typography',
	    'label'    => __( 'Paragraph Fonts','babysitting-day-care'),
	    'type'     => 'select',
	    'choices'  => $babysitting_day_care_font_array,
	));

	$wp_customize->add_setting('babysitting_day_care_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('babysitting_day_care_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_typography',
		'setting'	=> 'babysitting_day_care_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'babysitting_day_care_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'babysitting_day_care_atag_color', array(
		'label' => __('"a" Tag Color', 'babysitting-day-care'),
		'section' => 'babysitting_day_care_typography',
		'settings' => 'babysitting_day_care_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('babysitting_day_care_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'babysitting_day_care_atag_font_family', array(
	    'section'  => 'babysitting_day_care_typography',
	    'label'    => __( '"a" Tag Fonts','babysitting-day-care'),
	    'type'     => 'select',
	    'choices'  => $babysitting_day_care_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'babysitting_day_care_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'babysitting_day_care_li_color', array(
		'label' => __('"li" Tag Color', 'babysitting-day-care'),
		'section' => 'babysitting_day_care_typography',
		'settings' => 'babysitting_day_care_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('babysitting_day_care_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'babysitting_day_care_li_font_family', array(
	    'section'  => 'babysitting_day_care_typography',
	    'label'    => __( '"li" Tag Fonts','babysitting-day-care'),
	    'type'     => 'select',
	    'choices'  => $babysitting_day_care_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'babysitting_day_care_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'babysitting_day_care_h1_color', array(
		'label' => __('H1 Color', 'babysitting-day-care'),
		'section' => 'babysitting_day_care_typography',
		'settings' => 'babysitting_day_care_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('babysitting_day_care_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'babysitting_day_care_h1_font_family', array(
	    'section'  => 'babysitting_day_care_typography',
	    'label'    => __( 'H1 Fonts','babysitting-day-care'),
	    'type'     => 'select',
	    'choices'  => $babysitting_day_care_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('babysitting_day_care_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('babysitting_day_care_h1_font_size',array(
		'label'	=> __('H1 Font Size','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_typography',
		'setting'	=> 'babysitting_day_care_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'babysitting_day_care_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'babysitting_day_care_h2_color', array(
		'label' => __('h2 Color', 'babysitting-day-care'),
		'section' => 'babysitting_day_care_typography',
		'settings' => 'babysitting_day_care_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('babysitting_day_care_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'babysitting_day_care_h2_font_family', array(
	    'section'  => 'babysitting_day_care_typography',
	    'label'    => __( 'h2 Fonts','babysitting-day-care'),
	    'type'     => 'select',
	    'choices'  => $babysitting_day_care_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('babysitting_day_care_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('babysitting_day_care_h2_font_size',array(
		'label'	=> __('h2 Font Size','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_typography',
		'setting'	=> 'babysitting_day_care_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'babysitting_day_care_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'babysitting_day_care_h3_color', array(
		'label' => __('h3 Color', 'babysitting-day-care'),
		'section' => 'babysitting_day_care_typography',
		'settings' => 'babysitting_day_care_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('babysitting_day_care_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'babysitting_day_care_h3_font_family', array(
	    'section'  => 'babysitting_day_care_typography',
	    'label'    => __( 'h3 Fonts','babysitting-day-care'),
	    'type'     => 'select',
	    'choices'  => $babysitting_day_care_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('babysitting_day_care_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('babysitting_day_care_h3_font_size',array(
		'label'	=> __('h3 Font Size','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_typography',
		'setting'	=> 'babysitting_day_care_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'babysitting_day_care_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'babysitting_day_care_h4_color', array(
		'label' => __('h4 Color', 'babysitting-day-care'),
		'section' => 'babysitting_day_care_typography',
		'settings' => 'babysitting_day_care_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('babysitting_day_care_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'babysitting_day_care_h4_font_family', array(
	    'section'  => 'babysitting_day_care_typography',
	    'label'    => __( 'h4 Fonts','babysitting-day-care'),
	    'type'     => 'select',
	    'choices'  => $babysitting_day_care_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('babysitting_day_care_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('babysitting_day_care_h4_font_size',array(
		'label'	=> __('h4 Font Size','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_typography',
		'setting'	=> 'babysitting_day_care_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'babysitting_day_care_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'babysitting_day_care_h5_color', array(
		'label' => __('h5 Color', 'babysitting-day-care'),
		'section' => 'babysitting_day_care_typography',
		'settings' => 'babysitting_day_care_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('babysitting_day_care_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'babysitting_day_care_h5_font_family', array(
	    'section'  => 'babysitting_day_care_typography',
	    'label'    => __( 'h5 Fonts','babysitting-day-care'),
	    'type'     => 'select',
	    'choices'  => $babysitting_day_care_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('babysitting_day_care_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('babysitting_day_care_h5_font_size',array(
		'label'	=> __('h5 Font Size','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_typography',
		'setting'	=> 'babysitting_day_care_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'babysitting_day_care_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'babysitting_day_care_h6_color', array(
		'label' => __('h6 Color', 'babysitting-day-care'),
		'section' => 'babysitting_day_care_typography',
		'settings' => 'babysitting_day_care_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('babysitting_day_care_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'babysitting_day_care_h6_font_family', array(
	    'section'  => 'babysitting_day_care_typography',
	    'label'    => __( 'h6 Fonts','babysitting-day-care'),
	    'type'     => 'select',
	    'choices'  => $babysitting_day_care_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('babysitting_day_care_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('babysitting_day_care_h6_font_size',array(
		'label'	=> __('h6 Font Size','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_typography',
		'setting'	=> 'babysitting_day_care_h6_font_size',
		'type'	=> 'text'
	));

	//Topbar section
	$wp_customize->add_section('babysitting_day_care_topbar_icon',array(
		'title'	=> __('Topbar Section','babysitting-day-care'),
		'description'	=> __('Add Header Content here','babysitting-day-care'),
		'priority'	=> null,
		'panel' => 'babysitting_day_care_panel_id',
	));

	$wp_customize->add_setting('babysitting_day_care_top_header',array(
       'default' => false,
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_top_header',array(
       'type' => 'checkbox',
       'label' => __('Enable Top Header','babysitting-day-care'),
       'section' => 'babysitting_day_care_topbar_icon'
    ));

    $wp_customize->add_setting('babysitting_day_care_topbar_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('babysitting_day_care_topbar_padding',array(
		'label'	=> esc_html__('Topbar Padding','babysitting-day-care'),
		'section'=> 'babysitting_day_care_topbar_icon',
	));

    $wp_customize->add_setting('babysitting_day_care_top_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_top_topbar_padding',array(
		'description'	=> __('Top','babysitting-day-care'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'babysitting_day_care_topbar_icon',
		'type'=> 'number',
	));

	$wp_customize->add_setting('babysitting_day_care_bottom_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_bottom_topbar_padding',array(
		'description'	=> __('Bottom','babysitting-day-care'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'babysitting_day_care_topbar_icon',
		'type'=> 'number',
	));

    $wp_customize->add_setting('babysitting_day_care_sticky_header',array(
       'default' => '',
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Stick header on Desktop','babysitting-day-care'),
       'section' => 'babysitting_day_care_topbar_icon'
    ));

    $wp_customize->add_setting('babysitting_day_care_sticky_header_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('babysitting_day_care_sticky_header_padding',array(
		'label'	=> esc_html__('Sticky Header Padding','babysitting-day-care'),
		'section'=> 'babysitting_day_care_topbar_icon',
		'type' => 'hidden',
	));

    $wp_customize->add_setting('babysitting_day_care_top_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_top_sticky_header_padding',array(
		'description'	=> __('Top','babysitting-day-care'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'babysitting_day_care_topbar_icon',
		'type'=> 'number'
	));

	$wp_customize->add_setting('babysitting_day_care_bottom_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_bottom_sticky_header_padding',array(
		'description'	=> __('Bottom','babysitting-day-care'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'babysitting_day_care_topbar_icon',
		'type'=> 'number'
	));

	$wp_customize->add_setting('babysitting_day_care_topbar_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('babysitting_day_care_topbar_text',array(
		'label'	=> __('Add Topbar Text','babysitting-day-care'),
		'section' => 'babysitting_day_care_topbar_icon',
		'setting' => 'babysitting_day_care_topbar_text',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('babysitting_day_care_topbar_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('babysitting_day_care_topbar_button_text',array(
		'label'	=> __('Add Button Text','babysitting-day-care'),
		'section' => 'babysitting_day_care_topbar_icon',
		'setting' => 'babysitting_day_care_topbar_button_text',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('babysitting_day_care_topbar_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('babysitting_day_care_topbar_button_link',array(
		'label'	=> __('Add Button Link','babysitting-day-care'),
		'section' => 'babysitting_day_care_topbar_icon',
		'setting' => 'babysitting_day_care_topbar_button_link',
		'type'	=> 'text'
	));

	// Header
	$wp_customize->add_section('babysitting_day_care_header',array(
		'title'	=> __('Header','babysitting-day-care'),
		'priority'	=> null,
		'panel' => 'babysitting_day_care_panel_id',
	));

	$wp_customize->add_setting('babysitting_day_care_phone_icon',array(
		'default'	=> 'fas fa-phone-volume',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Babysitting_Day_Care_Icon_Selector(
        $wp_customize,'babysitting_day_care_phone_icon',array(
		'label'	=> __('Phone Icon','babysitting-day-care'),
		'section' => 'babysitting_day_care_header',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('babysitting_day_care_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_phone_number'
	));
	$wp_customize->add_control('babysitting_day_care_call',array(
		'label'	=> __('Add Phone No.','babysitting-day-care'),
		'section' => 'babysitting_day_care_header',
		'setting' => 'babysitting_day_care_call',
		'type'	=> 'text'
	));

	$wp_customize->add_setting( 'babysitting_day_care_menu_font_size', array(
		'default'=> '15',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Babysitting_Day_Care_WP_Customize_Range_Control( $wp_customize, 'babysitting_day_care_menu_font_size', array(
        'label'  => __('Menu Font Size','babysitting-day-care'),
        'section'  => 'babysitting_day_care_header',
        'description' => __('Measurement is in pixel.','babysitting-day-care'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('babysitting_day_care_menu_font_weight',array(
        'default' => '',
        'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
	));
	$wp_customize->add_control('babysitting_day_care_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menu Font Weight','babysitting-day-care'),
        'section' => 'babysitting_day_care_header',
        'choices' => array(
            '100' => __('100','babysitting-day-care'),
            '200' => __('200','babysitting-day-care'),
            '300' => __('300','babysitting-day-care'),
            '400' => __('400','babysitting-day-care'),
            '500' => __('500','babysitting-day-care'),
            '600' => __('600','babysitting-day-care'),
            '700' => __('700','babysitting-day-care'),
            '800' => __('800','babysitting-day-care'),
            '900' => __('900','babysitting-day-care'),
        ),
	) );

	// Social Media
	$wp_customize->add_section('babysitting_day_care_social_media',array(
		'title'	=> __('Social Media','babysitting-day-care'),
		'priority'	=> null,
		'panel' => 'babysitting_day_care_panel_id',
	));

	$wp_customize->add_setting('babysitting_day_care_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('babysitting_day_care_facebook_url',array(
		'label'	=> __('Add Facebook link','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_social_media',
		'setting'	=> 'babysitting_day_care_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('babysitting_day_care_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('babysitting_day_care_twitter_url',array(
		'label'	=> __('Add Twitter link','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_social_media',
		'setting'	=> 'babysitting_day_care_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('babysitting_day_care_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('babysitting_day_care_insta_url',array(
		'label'	=> __('Add Instagram link','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_social_media',
		'setting'	=> 'babysitting_day_care_insta_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('babysitting_day_care_pinterest_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('babysitting_day_care_pinterest_url',array(
		'label'	=> __('Add Pinterest link','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_social_media',
		'setting'	=> 'babysitting_day_care_pinterest_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('babysitting_day_care_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('babysitting_day_care_youtube_url',array(
		'label'	=> __('Add Youtube link','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_social_media',
		'setting'	=> 'babysitting_day_care_youtube_url',
		'type'	=> 'url'
	));

	//Slider section
  	$wp_customize->add_section('babysitting_day_care_slider',array(
	    'title' => __('Slider Section','babysitting-day-care'),
	    'description' => '',
	    'priority'  => null,
	    'panel' => 'babysitting_day_care_panel_id',
	)); 

	$wp_customize->add_setting('babysitting_day_care_show_slider',array(
        'default' => false,
        'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
	));
	$wp_customize->add_control('babysitting_day_care_show_slider',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider','babysitting-day-care'),
      	'section' => 'babysitting_day_care_slider'
	));

	$wp_customize->add_setting('babysitting_day_care_slider_title',array(
        'default' => true,
        'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
	));
	$wp_customize->add_control('babysitting_day_care_slider_title',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Title','babysitting-day-care'),
      	'section' => 'babysitting_day_care_slider'
	));

	$wp_customize->add_setting('babysitting_day_care_slider_content',array(
        'default' => true,
        'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
	));
	$wp_customize->add_control('babysitting_day_care_slider_content',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Content','babysitting-day-care'),
      	'section' => 'babysitting_day_care_slider'
	));

	$wp_customize->add_setting('babysitting_day_care_slider_button',array(
        'default' => true,
        'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
	));
	$wp_customize->add_control('babysitting_day_care_slider_button',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Button','babysitting-day-care'),
      	'section' => 'babysitting_day_care_slider'
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'babysitting_day_care_slidersettings_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'babysitting_day_care_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'babysitting_day_care_slidersettings_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'babysitting-day-care' ),
			'section'  => 'babysitting_day_care_slider',
			'type'     => 'dropdown-pages'
		) 	);
	}

	$wp_customize->add_setting( 'babysitting_day_care_slider_short_title', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'babysitting_day_care_slider_short_title', array(
		'label' => esc_html__( 'Slider Short Title','babysitting-day-care' ),
		'section'     => 'babysitting_day_care_slider',
		'type'        => 'text',
		'settings'    => 'babysitting_day_care_slider_short_title'
	) );

	$wp_customize->add_setting('babysitting_day_care_content_position',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('babysitting_day_care_content_position',array(
		'label'	=> esc_html__('Slider Content Position','babysitting-day-care'),
		'section'=> 'babysitting_day_care_slider',
		'type' => 'hidden'
	));

	$wp_customize->add_setting( 'babysitting_day_care_slider_top_position', array(
		'default'  => '',
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_float'
	) );
	
	$wp_customize->add_control( 'babysitting_day_care_slider_top_position', array(
		'label' => esc_html__( 'Top','babysitting-day-care' ),
		'section' => 'babysitting_day_care_slider',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

	$wp_customize->add_setting( 'babysitting_day_care_slider_bottom_position', array(
		'default'  => '',
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_float'
	) );
	$wp_customize->add_control( 'babysitting_day_care_slider_bottom_position', array(
		'label' => esc_html__( 'Bottom','babysitting-day-care' ),
		'section' => 'babysitting_day_care_slider',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

	$wp_customize->add_setting( 'babysitting_day_care_slider_left_position', array(
		'default'  => '',
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_float'
	) );
	$wp_customize->add_control( 'babysitting_day_care_slider_left_position', array(
		'label' => esc_html__( 'Left','babysitting-day-care'),
		'section' => 'babysitting_day_care_slider',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

	$wp_customize->add_setting( 'babysitting_day_care_slider_right_position', array(
		'default'  => '',
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_float'
	) );
	$wp_customize->add_control( 'babysitting_day_care_slider_right_position', array(
		'label' => esc_html__('Right','babysitting-day-care'),
		'section' => 'babysitting_day_care_slider',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

    //Slider excerpt
	$wp_customize->add_setting( 'babysitting_day_care_slider_excerpt', array(
		'default'              => 20,
		'sanitize_callback'    => 'babysitting_day_care_sanitize_float',
	) );
	$wp_customize->add_control( 'babysitting_day_care_slider_excerpt', array(
		'label'       => esc_html__( 'Slider Excerpt length','babysitting-day-care' ),
		'section'     => 'babysitting_day_care_slider',
		'type'        => 'number',
		'settings'    => 'babysitting_day_care_slider_excerpt',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'babysitting_day_care_slider_button_label', array(
		'default' => __('Read More','babysitting-day-care'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'babysitting_day_care_slider_button_label', array(
		'label' => esc_html__( 'Slider Button Label','babysitting-day-care' ),
		'section'     => 'babysitting_day_care_slider',
		'type'        => 'text',
		'settings'    => 'babysitting_day_care_slider_button_label'
	) );

	//Service Section
	$wp_customize->add_section('babysitting_day_care_services',array(
		'title'	=> __('Program Section','babysitting-day-care'),
		'description'	=> __('Add Program sections below.','babysitting-day-care'),
		'panel' => 'babysitting_day_care_panel_id',
	));

	$wp_customize->add_setting('babysitting_day_care_services_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('babysitting_day_care_services_title',array(
		'label'	=> __('Section Title','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_services',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('babysitting_day_care_services_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('babysitting_day_care_services_text',array(
		'label'	=> __('Section Text','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_services',
		'type'		=> 'text'
	));	

	$categories = get_categories();
		$cat_posts = array();
			$i = 0;
			$cat_posts[]='Select';	
		foreach($categories as $category){
			if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('babysitting_day_care_services_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'babysitting_day_care_sanitize_choices',
	));
	$wp_customize->add_control('babysitting_day_care_services_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select Category to display program posts','babysitting-day-care'),
		'section' => 'babysitting_day_care_services',
	));

	//layout setting
	$wp_customize->add_section( 'babysitting_day_care_theme_layout', array(
    	'title' => __( 'Blog Settings', 'babysitting-day-care' ),   
		'priority' => null,
		'panel' => 'babysitting_day_care_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('babysitting_day_care_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
	) );
	$wp_customize->add_control(new babysitting_day_care_Image_Radio_Control($wp_customize, 'babysitting_day_care_layout', array(
        'type' => 'radio',
        'label' => esc_html__('Select Sidebar layout', 'babysitting-day-care'),
        'section' => 'babysitting_day_care_theme_layout',
        'settings' => 'babysitting_day_care_layout',
        'choices' => array(
            'Right Sidebar' => esc_url(get_template_directory_uri()) . '/images/layout3.png',
            'Left Sidebar' => esc_url(get_template_directory_uri()) . '/images/layout2.png',
            'One Column' => esc_url(get_template_directory_uri()) . '/images/layout1.png',
            'Three Columns' => esc_url(get_template_directory_uri()) . '/images/layout4.png',
            'Four Columns' => esc_url(get_template_directory_uri()) . '/images/layout5.png',
            'Grid Layout' => esc_url(get_template_directory_uri()) . '/images/layout6.png'
   	))));

    $wp_customize->add_setting('babysitting_day_care_blog_post_display_type',array(
        'default' => 'blocks',
        'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
    ));
	$wp_customize->add_control('babysitting_day_care_blog_post_display_type', array(
        'type' => 'select',
        'label' => __( 'Blog Page Display Type', 'babysitting-day-care' ),
        'section' => 'babysitting_day_care_theme_layout',
        'choices' => array(
            'blocks' => __('Blocks','babysitting-day-care'),
            'without blocks' => __('Without Blocks','babysitting-day-care'),
        ),
    ));

   	$wp_customize->add_setting('babysitting_day_care_metafields_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_metafields_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Date ','babysitting-day-care'),
       'section' => 'babysitting_day_care_theme_layout'
    ));

    $wp_customize->add_setting('babysitting_day_care_metafields_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Author','babysitting-day-care'),
       'section' => 'babysitting_day_care_theme_layout'
    ));

    $wp_customize->add_setting('babysitting_day_care_metafields_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Comments','babysitting-day-care'),
       'section' => 'babysitting_day_care_theme_layout'
    ));

    $wp_customize->add_setting('babysitting_day_care_metafields_time',array(
       'default' => 'true',
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_metafields_time',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Time','babysitting-day-care'),
       'section' => 'babysitting_day_care_theme_layout'
    ));

    $wp_customize->add_setting('babysitting_day_care_post_navigation',array(
       'default' => 'true',
       'sanitize_callback' => 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_post_navigation',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Post Navigation','babysitting-day-care'),
       'section' => 'babysitting_day_care_theme_layout'
    ));

    $wp_customize->add_setting('babysitting_day_care_metabox_seperator',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('babysitting_day_care_metabox_seperator',array(
       'type' => 'text',
       'label' => __('Metabox Seperator','babysitting-day-care'),
       'description' => __('Ex: "/", "|", "-", ...','babysitting-day-care'),
       'section' => 'babysitting_day_care_theme_layout'
    ));

    $wp_customize->add_setting('babysitting_day_care_blog_post_content',array(
    	'default' => 'Excerpt Content',
        'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
	));
	$wp_customize->add_control('babysitting_day_care_blog_post_content',array(
        'type' => 'radio',
        'label' => __('Blog Post Content Type','babysitting-day-care'),
        'section' => 'babysitting_day_care_theme_layout',
        'choices' => array(
            'No Content' => __('No Content','babysitting-day-care'),
            'Full Content' => __('Full Content','babysitting-day-care'),
            'Excerpt Content' => __('Excerpt Content','babysitting-day-care'),
        ),
	) );

    $wp_customize->add_setting( 'babysitting_day_care_post_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_float'
	) );
	$wp_customize->add_control( 'babysitting_day_care_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Excerpt Number (Max 50)','babysitting-day-care' ),
		'section'     => 'babysitting_day_care_theme_layout',
		'type'        => 'number',
		'settings'    => 'babysitting_day_care_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
		'active_callback' => 'babysitting_day_care_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'babysitting_day_care_button_excerpt_suffix', array(
		'default'   => '...',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'babysitting_day_care_button_excerpt_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','babysitting-day-care' ),
		'section'     => 'babysitting_day_care_theme_layout',
		'type'        => 'text',
		'settings'    => 'babysitting_day_care_button_excerpt_suffix',
		'active_callback' => 'babysitting_day_care_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'babysitting_day_care_feature_image_border_radius', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Babysitting_Day_Care_WP_Customize_Range_Control( $wp_customize, 'babysitting_day_care_feature_image_border_radius', array(
        'label'  => __('Featured Image Border Radius','babysitting-day-care'),
        'section'  => 'babysitting_day_care_theme_layout',
        'description' => __('Measurement is in pixel.','babysitting-day-care'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

    $wp_customize->add_setting( 'babysitting_day_care_feature_image_shadow', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Babysitting_Day_Care_WP_Customize_Range_Control( $wp_customize, 'babysitting_day_care_feature_image_shadow', array(
        'label'  => __('Featured Image Shadow','babysitting-day-care'),
        'section'  => 'babysitting_day_care_theme_layout',
        'description' => __('Measurement is in pixel.','babysitting-day-care'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

    $wp_customize->add_setting( 'babysitting_day_care_pagination_type', array(
        'default'			=> 'page-numbers',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'babysitting_day_care_pagination_type', array(
        'section' => 'babysitting_day_care_theme_layout',
        'type' => 'select',
        'label' => __( 'Blog Pagination Style', 'babysitting-day-care' ),
        'choices' => array(
            'page-numbers' => __('Number', 'babysitting-day-care' ),
            'next-prev' => __('Next/Prev', 'babysitting-day-care' ),
    )));

    $wp_customize->add_setting('babysitting_day_care_blog_nav_position',array(
        'default' => 'bottom',
        'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
    ));
	$wp_customize->add_control('babysitting_day_care_blog_nav_position', array(
        'type' => 'select',
        'label' => __( 'Blog Post Navigation Position', 'babysitting-day-care' ),
        'section' => 'babysitting_day_care_theme_layout',
        'choices' => array(
            'top' => __('Top','babysitting-day-care'),
            'bottom' => __('Bottom','babysitting-day-care'),
            'both' => __('Both','babysitting-day-care')
        ),
    ));

	$wp_customize->add_section( 'babysitting_day_care_single_post_settings', array(
		'title' => __( 'Single Post Options', 'babysitting-day-care' ),
		'panel' => 'babysitting_day_care_panel_id',
	));

	$wp_customize->add_setting('babysitting_day_care_single_post_breadcrumb',array(
       'default' => 'true',
       'sanitize_callback' => 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_single_post_breadcrumb',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Breadcrumb','babysitting-day-care'),
       'section' => 'babysitting_day_care_single_post_settings'
    ));

	$wp_customize->add_setting('babysitting_day_care_single_post_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Date','babysitting-day-care'),
       'section' => 'babysitting_day_care_single_post_settings'
    ));

    $wp_customize->add_setting('babysitting_day_care_single_post_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Author','babysitting-day-care'),
       'section' => 'babysitting_day_care_single_post_settings'
    ));

    $wp_customize->add_setting('babysitting_day_care_single_post_comment_no',array(
       'default' => 'true',
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_single_post_comment_no',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Comment Number','babysitting-day-care'),
       'section' => 'babysitting_day_care_single_post_settings'
    ));

    $wp_customize->add_setting('babysitting_day_care_single_post_time',array(
       'default' => 'true',
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_single_post_time',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Time','babysitting-day-care'),
       'section' => 'babysitting_day_care_single_post_settings'
    ));

	$wp_customize->add_setting('babysitting_day_care_metafields_tags',array(
       'default' => 'true',
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_metafields_tags',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Tags','babysitting-day-care'),
       'section' => 'babysitting_day_care_single_post_settings'
    ));

    $wp_customize->add_setting('babysitting_day_care_single_post_image',array(
       'default' => 'true',
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Featured Image','babysitting-day-care'),
       'section' => 'babysitting_day_care_single_post_settings'
    ));

    $wp_customize->add_setting( 'babysitting_day_care_post_featured_image', array(
        'default' => 'in-content',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'babysitting_day_care_post_featured_image', array(
        'section' => 'babysitting_day_care_single_post_settings',
        'type' => 'radio',
        'label' => __( 'Featured Image Display Type', 'babysitting-day-care' ),
        'choices'		=> array(
            'banner'  => __('as Banner Image', 'babysitting-day-care'),
            'in-content' => __( 'as Featured Image', 'babysitting-day-care' ),
    )));

    $wp_customize->add_setting('babysitting_day_care_single_post_nav',array(
       'default' => 'true',
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_single_post_nav',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Navigation','babysitting-day-care'),
       'section' => 'babysitting_day_care_single_post_settings'
    ));

    $wp_customize->add_setting( 'babysitting_day_care_single_post_prev_nav_text', array(
		'default' => __('Previous','babysitting-day-care' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'babysitting_day_care_single_post_prev_nav_text', array(
		'label' => esc_html__( 'Single Post Previous Nav text','babysitting-day-care' ),
		'section'     => 'babysitting_day_care_single_post_settings',
		'type'        => 'text',
		'settings'    => 'babysitting_day_care_single_post_prev_nav_text'
	) );

	$wp_customize->add_setting( 'babysitting_day_care_single_post_next_nav_text', array(
		'default' => __('Next','babysitting-day-care' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'babysitting_day_care_single_post_next_nav_text', array(
		'label' => esc_html__( 'Single Post Next Nav text','babysitting-day-care' ),
		'section'     => 'babysitting_day_care_single_post_settings',
		'type'        => 'text',
		'settings'    => 'babysitting_day_care_single_post_next_nav_text'
	) );

    $wp_customize->add_setting('babysitting_day_care_single_post_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_single_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post comment','babysitting-day-care'),
       'section' => 'babysitting_day_care_single_post_settings'
    ));

	$wp_customize->add_setting( 'babysitting_day_care_comment_width', array(
		'default'=> '100',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Babysitting_Day_Care_WP_Customize_Range_Control( $wp_customize, 'babysitting_day_care_comment_width', array(
        'label'  => __('Comment textarea width','babysitting-day-care'),
        'section'  => 'babysitting_day_care_single_post_settings',
        'description' => __('Measurement is in %.','babysitting-day-care'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
        ),
    )));

    $wp_customize->add_setting('babysitting_day_care_comment_title',array(
       'default' => __('Leave a Reply','babysitting-day-care' ),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('babysitting_day_care_comment_title',array(
       'type' => 'text',
       'label' => __('Comment form Title','babysitting-day-care'),
       'section' => 'babysitting_day_care_single_post_settings'
    ));

    $wp_customize->add_setting('babysitting_day_care_comment_submit_text',array(
       'default' => __('Post Comment','babysitting-day-care' ),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('babysitting_day_care_comment_submit_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Label','babysitting-day-care'),
       'section' => 'babysitting_day_care_single_post_settings'
    ));

	$wp_customize->add_setting('babysitting_day_care_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Posts','babysitting-day-care'),
       'section' => 'babysitting_day_care_single_post_settings'
    ));

    $wp_customize->add_setting('babysitting_day_care_related_posts_title',array(
       'default' => __('You May Also Like','babysitting-day-care' ),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('babysitting_day_care_related_posts_title',array(
       'type' => 'text',
       'label' => __('Related Posts Title','babysitting-day-care'),
       'section' => 'babysitting_day_care_single_post_settings'
    ));

    $wp_customize->add_setting( 'babysitting_day_care_related_post_count', array(
		'default' => 3,
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_float'
	) );
	$wp_customize->add_control( 'babysitting_day_care_related_post_count', array(
		'label' => esc_html__( 'Related Posts Count','babysitting-day-care' ),
		'section' => 'babysitting_day_care_single_post_settings',
		'type' => 'number',
		'settings' => 'babysitting_day_care_related_post_count',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 6,
		),
	) );

    $wp_customize->add_setting( 'babysitting_day_care_post_shown_by', array(
        'default' => 'categories',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'babysitting_day_care_post_shown_by', array(
        'section' => 'babysitting_day_care_single_post_settings',
        'type' => 'radio',
        'label' => __( 'Related Posts must be shown:', 'babysitting-day-care' ),
        'choices'		=> array(
            'categories'  => __('By Categories', 'babysitting-day-care'),
            'tags' => __( 'By Tags', 'babysitting-day-care' ),
    )));

	// Button option
	$wp_customize->add_section( 'babysitting_day_care_button_options', array(
		'title' =>  __( 'Button Options', 'babysitting-day-care' ),
		'panel' => 'babysitting_day_care_panel_id',
	));

    $wp_customize->add_setting( 'babysitting_day_care_blog_button_text', array(
		'default'   => __('Read Full','babysitting-day-care' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'babysitting_day_care_blog_button_text', array(
		'label'       => esc_html__( 'Blog Post Button Label','babysitting-day-care' ),
		'section'     => 'babysitting_day_care_button_options',
		'type'        => 'text',
		'settings'    => 'babysitting_day_care_blog_button_text'
	) );

	$wp_customize->add_setting('babysitting_day_care_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('babysitting_day_care_button_padding',array(
		'label'	=> esc_html__('Button Padding','babysitting-day-care'),
		'section'=> 'babysitting_day_care_button_options',
		'active_callback' => 'babysitting_day_care_button_enabled'
	));

	$wp_customize->add_setting('babysitting_day_care_top_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_top_button_padding',array(
		'label'	=> __('Top','babysitting-day-care'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'babysitting_day_care_button_options',
		'type'=> 'number',
		'active_callback' => 'babysitting_day_care_button_enabled'
	));

	$wp_customize->add_setting('babysitting_day_care_bottom_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_bottom_button_padding',array(
		'label'	=> __('Bottom','babysitting-day-care'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'babysitting_day_care_button_options',
		'type'=> 'number',
		'active_callback' => 'babysitting_day_care_button_enabled'
	));

	$wp_customize->add_setting('babysitting_day_care_left_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_left_button_padding',array(
		'label'	=> __('Left','babysitting-day-care'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'babysitting_day_care_button_options',
		'type'=> 'number',
		'active_callback' => 'babysitting_day_care_button_enabled'
	));

	$wp_customize->add_setting('babysitting_day_care_right_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_right_button_padding',array(
		'label'	=> __('Right','babysitting-day-care'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'babysitting_day_care_button_options',
		'type'=> 'number',
		'active_callback' => 'babysitting_day_care_button_enabled'
	));

	$wp_customize->add_setting( 'babysitting_day_care_button_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Babysitting_Day_Care_WP_Customize_Range_Control( $wp_customize, 'babysitting_day_care_button_border_radius', array(
            'label'  => __('Border Radius','babysitting-day-care'),
            'section'  => 'babysitting_day_care_button_options',
            'description' => __('Measurement is in pixel.','babysitting-day-care'),
            'input_attrs' => array(
                'min' => 0,
                'max' => 50,
            ),
			'active_callback' => 'babysitting_day_care_button_enabled'
    )));

    //Sidebar setting
	$wp_customize->add_section( 'babysitting_day_care_sidebar_options', array(
    	'title'   => __( 'Sidebar options', 'babysitting-day-care'),
		'priority'   => null,
		'panel' => 'babysitting_day_care_panel_id'
	) );

	$wp_customize->add_setting('babysitting_day_care_single_page_layout',array(
        'default' => 'One Column',
        'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
    ));
	$wp_customize->add_control('babysitting_day_care_single_page_layout', array(
        'type' => 'select',
        'label' => __( 'Single Page Layout', 'babysitting-day-care' ),
        'section' => 'babysitting_day_care_sidebar_options',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','babysitting-day-care'),
            'Right Sidebar' => __('Right Sidebar','babysitting-day-care'),
            'One Column' => __('One Column','babysitting-day-care')
        ),
    ));

    $wp_customize->add_setting('babysitting_day_care_single_post_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
    ));
	$wp_customize->add_control('babysitting_day_care_single_post_layout', array(
        'type' => 'select',
        'label' => __( 'Single Post Layout', 'babysitting-day-care' ),
        'section' => 'babysitting_day_care_sidebar_options',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','babysitting-day-care'),
            'Right Sidebar' => __('Right Sidebar','babysitting-day-care'),
            'One Column' => __('One Column','babysitting-day-care')
        ),
    ));

    //Advance Options
	$wp_customize->add_section( 'babysitting_day_care_advance_options', array(
    	'title' => __( 'Advance Options', 'babysitting-day-care' ),
		'priority'   => null,
		'panel' => 'babysitting_day_care_panel_id'
	) );

	$wp_customize->add_setting('babysitting_day_care_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','babysitting-day-care'),
       'section' => 'babysitting_day_care_advance_options'
    ));

    $wp_customize->add_setting( 'babysitting_day_care_preloader_color', array(
	    'default' => '#333333',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'babysitting_day_care_preloader_color', array(
  		'label' => __('Preloader Color', 'babysitting-day-care'),
	    'section' => 'babysitting_day_care_advance_options',
	    'settings' => 'babysitting_day_care_preloader_color',
  	)));

  	$wp_customize->add_setting( 'babysitting_day_care_preloader_bg_color', array(
	    'default' => '#ffffff',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'babysitting_day_care_preloader_bg_color', array(
  		'label' => __('Preloader Background Color', 'babysitting-day-care'),
	    'section' => 'babysitting_day_care_advance_options',
	    'settings' => 'babysitting_day_care_preloader_bg_color',
  	)));

  	$wp_customize->add_setting('babysitting_day_care_preloader_type',array(
        'default' => 'Square',
        'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
	));
	$wp_customize->add_control('babysitting_day_care_preloader_type',array(
        'type' => 'radio',
        'label' => __('Preloader Type','babysitting-day-care'),
        'section' => 'babysitting_day_care_advance_options',
        'choices' => array(
            'Square' => __('Square','babysitting-day-care'),
            'Circle' => __('Circle','babysitting-day-care'),
        )
	) );

	$wp_customize->add_setting('babysitting_day_care_theme_layout_options',array(
        'default' => 'Default Theme',
        'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
	));
	$wp_customize->add_control('babysitting_day_care_theme_layout_options',array(
        'type' => 'radio',
        'label' => __('Theme Layout','babysitting-day-care'),
        'section' => 'babysitting_day_care_advance_options',
        'choices' => array(
            'Default Theme' => __('Default Theme','babysitting-day-care'),
            'Container Theme' => __('Container Theme','babysitting-day-care'),
            'Box Container Theme' => __('Box Container Theme','babysitting-day-care'),
        ),
	) );

	//404 Page Option
	$wp_customize->add_section('babysitting_day_care_404_settings',array(
		'title'	=> __('404 Page & Search Result Settings','babysitting-day-care'),
		'priority'	=> null,
		'panel' => 'babysitting_day_care_panel_id',
	));

	$wp_customize->add_setting('babysitting_day_care_404_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('babysitting_day_care_404_title',array(
		'label'	=> __('404 Title','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('babysitting_day_care_404_button_label',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('babysitting_day_care_404_button_label',array(
		'label'	=> __('404 button Label','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('babysitting_day_care_search_result_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('babysitting_day_care_search_result_title',array(
		'label'	=> __('No Search Result Title','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('babysitting_day_care_search_result_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('babysitting_day_care_search_result_text',array(
		'label'	=> __('No Search Result Text','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_404_settings',
		'type'		=> 'text'
	));	

	//Responsive Settings
	$wp_customize->add_section('babysitting_day_care_responsive_options',array(
		'title'	=> __('Responsive Options','babysitting-day-care'),
		'panel' => 'babysitting_day_care_panel_id'
	));

	$wp_customize->add_setting('babysitting_day_care_menu_open_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Babysitting_Day_Care_Icon_Selector(
        $wp_customize,'babysitting_day_care_menu_open_icon',array(
		'label'	=> __('Menu Open Icon','babysitting-day-care'),
		'section' => 'babysitting_day_care_responsive_options',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('babysitting_day_care_mobile_menu_label',array(
       'default' => __('Menu','babysitting-day-care'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('babysitting_day_care_mobile_menu_label',array(
       'type' => 'text',
       'label' => __('Mobile Menu Label','babysitting-day-care'),
       'section' => 'babysitting_day_care_responsive_options'
    ));

	$wp_customize->add_setting('babysitting_day_care_menu_close_icon',array(
		'default'	=> 'fas fa-times-circle',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Babysitting_Day_Care_Icon_Selector(
        $wp_customize,'babysitting_day_care_menu_close_icon',array(
		'label'	=> __('Menu Close Icon','babysitting-day-care'),
		'section' => 'babysitting_day_care_responsive_options',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('babysitting_day_care_close_menu_label',array(
       'default' => __('Close Menu','babysitting-day-care'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('babysitting_day_care_close_menu_label',array(
       'type' => 'text',
       'label' => __('Close Menu Label','babysitting-day-care'),
       'section' => 'babysitting_day_care_responsive_options'
    ));

	$wp_customize->add_setting('babysitting_day_care_hide_topbar_responsive',array(
        'default' => true,
        'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
	));
	$wp_customize->add_control('babysitting_day_care_hide_topbar_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Enable Top Header','babysitting-day-care'),
      	'section' => 'babysitting_day_care_responsive_options',
	));

	$wp_customize->add_setting('babysitting_day_care_preloader_responsive',array(
        'default' => false,
        'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
	));
	$wp_customize->add_control('babysitting_day_care_preloader_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Enable Preloader','babysitting-day-care'),
      	'section' => 'babysitting_day_care_responsive_options',
	));

	//Woocommerce Options
	$wp_customize->add_section('babysitting_day_care_woocommerce',array(
		'title'	=> __('WooCommerce Options','babysitting-day-care'),
		'panel' => 'babysitting_day_care_panel_id',
	));

	$wp_customize->add_setting('babysitting_day_care_shop_page_sidebar',array(
       'default' => true,
       'sanitize_callback' => 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_shop_page_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable Shop Page Sidebar','babysitting-day-care'),
       'section' => 'babysitting_day_care_woocommerce'
    ));

    $wp_customize->add_setting('babysitting_day_care_shop_page_navigation',array(
       'default' => true,
       'sanitize_callback' => 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_shop_page_navigation',array(
       'type' => 'checkbox',
       'label' => __('Enable Shop Page Pagination','babysitting-day-care'),
       'section' => 'babysitting_day_care_woocommerce'
    ));

    $wp_customize->add_setting('babysitting_day_care_single_product_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_single_product_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable Single Product Page Sidebar','babysitting-day-care'),
       'section' => 'babysitting_day_care_woocommerce'
    ));

    $wp_customize->add_setting('babysitting_day_care_single_related_products',array(
       'default' => true,
       'sanitize_callback' => 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_single_related_products',array(
       'type' => 'checkbox',
       'label' => __('Enable Related Products','babysitting-day-care'),
       'section' => 'babysitting_day_care_woocommerce'
    ));

    $wp_customize->add_setting('babysitting_day_care_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_products_per_page',array(
		'label'	=> __('Products Per Page','babysitting-day-care'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'babysitting_day_care_woocommerce',
		'type'=> 'number',
	));

	$wp_customize->add_setting('babysitting_day_care_products_per_row',array(
		'default'=> '3',
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_choices'
	));
	$wp_customize->add_control('babysitting_day_care_products_per_row',array(
		'label'	=> __('Products Per Row','babysitting-day-care'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'babysitting_day_care_woocommerce',
		'type'=> 'select',
	));

	$wp_customize->add_setting('babysitting_day_care_product_border',array(
       'default' => true,
       'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('babysitting_day_care_product_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide product border','babysitting-day-care'),
       'section' => 'babysitting_day_care_woocommerce',
    ));

    $wp_customize->add_setting('babysitting_day_care_product_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('babysitting_day_care_product_padding',array(
		'label'	=> esc_html__('Product Padding','babysitting-day-care'),
		'section'=> 'babysitting_day_care_woocommerce',
	));

	$wp_customize->add_setting( 'babysitting_day_care_product_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_product_top_padding', array(
		'label' => esc_html__( 'Top','babysitting-day-care' ),
		'type' => 'number',
		'section' => 'babysitting_day_care_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('babysitting_day_care_product_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_product_bottom_padding', array(
		'label' => esc_html__( 'Bottom','babysitting-day-care' ),
		'type' => 'number',
		'section' => 'babysitting_day_care_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('babysitting_day_care_product_left_padding',array(
		'default' => 10,
		'sanitize_callback' => 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_product_left_padding', array(
		'label' => esc_html__( 'Left','babysitting-day-care' ),
		'type' => 'number',
		'section' => 'babysitting_day_care_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'babysitting_day_care_product_right_padding',array(
		'default' => 10,
		'sanitize_callback' => 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_product_right_padding', array(
		'label' => esc_html__( 'Right','babysitting-day-care' ),
		'type' => 'number',
		'section' => 'babysitting_day_care_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'babysitting_day_care_product_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Babysitting_Day_Care_WP_Customize_Range_Control( $wp_customize, 'babysitting_day_care_product_border_radius', array(
        'label'  => __('Product Border Radius','babysitting-day-care'),
        'section'  => 'babysitting_day_care_woocommerce',
        'description' => __('Measurement is in pixel.','babysitting-day-care'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	$wp_customize->add_setting('babysitting_day_care_product_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('babysitting_day_care_product_button_padding',array(
		'label'	=> esc_html__('Product Button Padding','babysitting-day-care'),
		'section'=> 'babysitting_day_care_woocommerce',
	));

	$wp_customize->add_setting( 'babysitting_day_care_product_button_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_product_button_top_padding', array(
		'label' => esc_html__( 'Top','babysitting-day-care' ),
		'type' => 'number',
		'section' => 'babysitting_day_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('babysitting_day_care_product_button_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_product_button_bottom_padding', array(
		'label' => esc_html__( 'Bottom','babysitting-day-care' ),
		'type' => 'number',
		'section' => 'babysitting_day_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('babysitting_day_care_product_button_left_padding',array(
		'default' => 15,
		'sanitize_callback' => 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_product_button_left_padding', array(
		'label' => esc_html__( 'Left','babysitting-day-care' ),
		'type' => 'number',
		'section' => 'babysitting_day_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'babysitting_day_care_product_button_right_padding',array(
		'default' => 15,
		'sanitize_callback' => 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_product_button_right_padding', array(
		'label' => esc_html__( 'Right','babysitting-day-care' ),
		'type' => 'number',
		'section' => 'babysitting_day_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'babysitting_day_care_product_button_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Babysitting_Day_Care_WP_Customize_Range_Control( $wp_customize, 'babysitting_day_care_product_button_border_radius', array(
        'label'  => __('Product Button Border Radius','babysitting-day-care'),
        'section'  => 'babysitting_day_care_woocommerce',
        'description' => __('Measurement is in pixel.','babysitting-day-care'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('babysitting_day_care_product_sale_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
	));
	$wp_customize->add_control('babysitting_day_care_product_sale_position',array(
        'type' => 'radio',
        'label' => __('Product Sale Position','babysitting-day-care'),
        'section' => 'babysitting_day_care_woocommerce',
        'choices' => array(
            'Left' => __('Left','babysitting-day-care'),
            'Right' => __('Right','babysitting-day-care'),
        ),
	) );

	$wp_customize->add_setting( 'babysitting_day_care_product_sale_font_size',array(
		'default' => '13',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Babysitting_Day_Care_WP_Customize_Range_Control( $wp_customize, 'babysitting_day_care_product_sale_font_size', array(
        'label'  => __('Product Sale Font Size','babysitting-day-care'),
        'section'  => 'babysitting_day_care_woocommerce',
        'description' => __('Measurement is in pixel.','babysitting-day-care'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('babysitting_day_care_product_sale_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('babysitting_day_care_product_sale_padding',array(
		'label'	=> esc_html__('Product Sale Padding','babysitting-day-care'),
		'section'=> 'babysitting_day_care_woocommerce',
	));

	$wp_customize->add_setting( 'babysitting_day_care_product_sale_top_padding',array(
		'default' => 0,
		'sanitize_callback' => 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_product_sale_top_padding', array(
		'label' => esc_html__( 'Top','babysitting-day-care' ),
		'type' => 'number',
		'section' => 'babysitting_day_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('babysitting_day_care_product_sale_bottom_padding',array(
		'default' => 0,
		'sanitize_callback' => 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_product_sale_bottom_padding', array(
		'label' => esc_html__( 'Bottom','babysitting-day-care' ),
		'type' => 'number',
		'section' => 'babysitting_day_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('babysitting_day_care_product_sale_left_padding',array(
		'default' => 0,
		'sanitize_callback' => 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_product_sale_left_padding', array(
		'label' => esc_html__( 'Left','babysitting-day-care' ),
		'type' => 'number',
		'section' => 'babysitting_day_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('babysitting_day_care_product_sale_right_padding',array(
		'default' => 0,
		'sanitize_callback' => 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_product_sale_right_padding', array(
		'label' => esc_html__( 'Right','babysitting-day-care' ),
		'type' => 'number',
		'section' => 'babysitting_day_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'babysitting_day_care_product_sale_border_radius',array(
		'default' => '50',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Babysitting_Day_Care_WP_Customize_Range_Control( $wp_customize, 'babysitting_day_care_product_sale_border_radius', array(
        'label'  => __('Product Sale Border Radius','babysitting-day-care'),
        'section'  => 'babysitting_day_care_woocommerce',
        'description' => __('Measurement is in pixel.','babysitting-day-care'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	//footer text
	$wp_customize->add_section('babysitting_day_care_footer_section',array(
		'title'	=> __('Footer Section','babysitting-day-care'),
		'panel' => 'babysitting_day_care_panel_id'
	));

	$wp_customize->add_setting('babysitting_day_care_hide_scroll',array(
        'default' => 'true',
        'sanitize_callback'	=> 'babysitting_day_care_sanitize_checkbox'
	));
	$wp_customize->add_control('babysitting_day_care_hide_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Back To Top','babysitting-day-care'),
      	'section' => 'babysitting_day_care_footer_section',
	));

	$wp_customize->add_setting('babysitting_day_care_back_to_top',array(
        'default' => 'Right',
        'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
	));
	$wp_customize->add_control('babysitting_day_care_back_to_top',array(
        'type' => 'radio',
        'label' => __('Back to Top Alignment','babysitting-day-care'),
        'section' => 'babysitting_day_care_footer_section',
        'choices' => array(
            'Left' => __('Left','babysitting-day-care'),
            'Right' => __('Right','babysitting-day-care'),
            'Center' => __('Center','babysitting-day-care'),
        ),
	) );

	$wp_customize->add_setting('babysitting_day_care_footer_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'babysitting_day_care_footer_bg_color', array(
		'label'    => __('Footer Background Color', 'babysitting-day-care'),
		'section'  => 'babysitting_day_care_footer_section',
	)));

	$wp_customize->add_setting('babysitting_day_care_footer_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'babysitting_day_care_footer_bg_image',array(
        'label' => __('Footer Background Image','babysitting-day-care'),
        'section' => 'babysitting_day_care_footer_section'
	)));

	$wp_customize->add_setting('babysitting_day_care_footer_widget',array(
        'default'           => '4',
        'sanitize_callback' => 'babysitting_day_care_sanitize_choices',
    ));
    $wp_customize->add_control('babysitting_day_care_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer columns', 'babysitting-day-care'),
        'section'     => 'babysitting_day_care_footer_section',
        'description' => __('Select the number of footer columns and add your widgets in the footer.', 'babysitting-day-care'),
        'choices' => array(
            '1'   => __('One column', 'babysitting-day-care'),
            '2'  => __('Two columns', 'babysitting-day-care'),
            '3' => __('Three columns', 'babysitting-day-care'),
            '4' => __('Four columns', 'babysitting-day-care')
        ),
    )); 

    $wp_customize->add_setting('babysitting_day_care_copyright_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('babysitting_day_care_copyright_padding',array(
		'label'	=> esc_html__('Copyright Padding','babysitting-day-care'),
		'section'=> 'babysitting_day_care_footer_section',
	));

    $wp_customize->add_setting('babysitting_day_care_top_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_top_copyright_padding',array(
		'description'	=> __('Top','babysitting-day-care'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'babysitting_day_care_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('babysitting_day_care_bottom_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'babysitting_day_care_sanitize_float'
	));
	$wp_customize->add_control('babysitting_day_care_bottom_copyright_padding',array(
		'description'	=> __('Bottom','babysitting-day-care'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'babysitting_day_care_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('babysitting_day_care_copyright_alignment',array(
        'default' => 'center',
        'sanitize_callback' => 'babysitting_day_care_sanitize_choices'
	));
	$wp_customize->add_control('babysitting_day_care_copyright_alignment',array(
        'type' => 'radio',
        'label' => __('Copyright Alignment','babysitting-day-care'),
        'section' => 'babysitting_day_care_footer_section',
        'choices' => array(
            'left' => __('Left','babysitting-day-care'),
            'right' => __('Right','babysitting-day-care'),
            'center' => __('Center','babysitting-day-care'),
        ),
	) );

	$wp_customize->add_setting( 'babysitting_day_care_copyright_font_size', array(
		'default'=> '15',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Babysitting_Day_Care_WP_Customize_Range_Control( $wp_customize, 'babysitting_day_care_copyright_font_size', array(
        'label'  => __('Copyright Font Size','babysitting-day-care'),
        'section'  => 'babysitting_day_care_footer_section',
        'description' => __('Measurement is in pixel.','babysitting-day-care'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));
	
	$wp_customize->add_setting('babysitting_day_care_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('babysitting_day_care_text',array(
		'label'	=> __('Copyright Text','babysitting-day-care'),
		'description'	=> __('Add some text for footer like copyright etc.','babysitting-day-care'),
		'section'	=> 'babysitting_day_care_footer_section',
		'type'		=> 'text'
	));	
}
add_action( 'customize_register', 'babysitting_day_care_customize_register' );	

load_template( ABSPATH . 'wp-includes/class-wp-customize-control.php' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

class babysitting_day_care_Image_Radio_Control extends WP_Customize_Control {

    public function render_content() {
 
        if (empty($this->choices))
            return;
 
        $name = '_customize-radio-' . $this->id;
        ?>
        <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
        <ul class="controls" id='babysitting-day-care-img-container'>
            <?php
            foreach ($this->choices as $value => $label) :
                $class = ($this->value() == $value) ? 'babysitting-day-care-radio-img-selected babysitting-day-care-radio-img-img' : 'babysitting-day-care-radio-img-img';
                ?>
                <li style="display: inline;">
                    <label>
                        <input <?php $this->link(); ?>style = 'display:none' type="radio" value="<?php echo esc_attr($value); ?>" name="<?php echo esc_attr($name); ?>" <?php
                          	$this->link();
                          	checked($this->value(), $value);
                          	?> />
                        <img role="img" src='<?php echo esc_url($label); ?>' class='<?php echo esc_attr($class); ?>' />
                    </label>
                </li>
                <?php
            endforeach;
            ?>
        </ul>
        <?php
    } 
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Babysitting_Day_Care_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Babysitting_Day_Care_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Babysitting_Day_Care_Customize_Section_Pro(
			$manager,
			'babysitting_day_care_pro_link',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Babysitting Pro', 'babysitting-day-care' ),
					'pro_text' => esc_html__( 'Go Pro', 'babysitting-day-care' ),
					'pro_url'  => esc_url('https://www.themesglance.com/themes/day-care-wordpress-theme/')
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'babysitting-day-care-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'babysitting-day-care-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Babysitting_Day_Care_Customize::get_instance();