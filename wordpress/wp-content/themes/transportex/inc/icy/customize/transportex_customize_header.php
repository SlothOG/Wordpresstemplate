<?php
function transportex_header_setting( $wp_customize ) {
/* Header Section */
	$wp_customize->add_panel( 'header_options', array(
		'priority' => 400,
		'capability' => 'edit_theme_options',
		'title' => __('Header Settings', 'transportex'),
	) );
	
	// add Header widget one Setting

    $wp_customize->add_setting(
		'transportex_head_info_one', array(
        'default' => '<a><i class="fa fa-clock-o "></i>Open-Hours:10 am to 7pm</a>',
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'transportex_sanitize_text',
    ) );
    $wp_customize->add_control( 'transportex_head_info_one', array(
        'label' => __('Info one', 'transportex'),
        'section' => 'header_contact',
        'type' => 'textarea',
    ) );
	
	
	$wp_customize->add_setting(
		'transportex_head_info_two', array(
        'default' => '<a href="mailto:info@themeansar.com" title="Mail Me"><i class="fa fa-envelope"></i> info@themeansar.com</a>',
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'transportex_sanitize_text',
    ) );
    $wp_customize->add_control( 'transportex_head_info_two', array(
        'label' => __('Info two', 'transportex'),
        'section' => 'header_contact',
        'type' => 'textarea',
    ) );

    $wp_customize->add_section( 'header_widget_one' , array(
		'title' => __('Header Widget One Setting', 'transportex'),
		'panel' => 'header_options',
		'priority'    => 600,
   	) );

   	$wp_customize->add_setting(
    	'transportex_header_widget_one_icon', array(
        'default' => 'fa-phone',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'transportex_header_widget_one_icon', array(
        'label' => __('Icon','transportex'),
        'section' => 'header_widget_one',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'transportex_header_widget_one_title', array(
        'default' => __('Call Us:','transportex'),
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'transportex_header_widget_one_title',array(
        'label'   => __('Title','transportex'),
        'section' => 'header_widget_one',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'transportex_header_widget_one_description', array(
        'default' => '1800-6666-8888',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'transportex_header_widget_one_description', array(
        'label' => __('Description','transportex'),
        'section' => 'header_widget_one',
        'type' => 'textarea',
    ) );

    // add Header widget Two Setting
    
    $wp_customize->add_section( 'header_widget_two' , array(
		'title' => __('Header Widget Two Setting', 'transportex'),
		'panel' => 'header_options',
		'priority'    => 620,
   	) );

   	$wp_customize->add_setting(
    	'transportex_header_widget_two_icon', array(
        'default' => 'fa-map-marker',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'transportex_header_widget_two_icon', array(
        'label' => __('Icon','transportex'),
        'section' => 'header_widget_two',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'transportex_header_widget_two_title', array(
        'default' => __('Email Us:','transportex'),
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'transportex_header_widget_two_title',array(
        'label'   => __('Title','transportex'),
        'section' => 'header_widget_two',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'transportex_header_widget_two_description', array(
        'default' => 'info@company.com',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'transportex_header_widget_two_description', array(
        'label' => __('Description','transportex'),
        'section' => 'header_widget_two',
        'type' => 'textarea',
    ) );

    // add Header widget Three Setting
    
    $wp_customize->add_section( 'header_widget_three' , array(
		'title' => __('Header Widget Three Setting', 'transportex'),
		'panel' => 'header_options',
		'priority'    => 620,
   	) );

   	$wp_customize->add_setting(
    	'transportex_header_widget_three_icon', array(
        'default' => 'fa-clock-o',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'transportex_header_widget_three_icon', array(
        'label' => __('Icon','transportex'),
        'section' => 'header_widget_three',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'transportex_header_widget_three_title', array(
        'default' => '7:30 AM - 7:30 PM',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'transportex_header_widget_three_title',array(
        'label'   => __('Title','transportex'),
        'section' => 'header_widget_three',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'transportex_header_widget_three_description', array(
        'default' => 'Monday to Saturday',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'transportex_header_widget_three_description', array(
        'label' => __('Description','transportex'),
        'section' => 'header_widget_three',
        'type' => 'textarea',
    ) );

    // add Header widget Three Setting
    
    $wp_customize->add_section( 'header_widget_four' , array(
        'title' => __('Header Widget Four Setting', 'transportex'),
        'panel' => 'header_options',
        'priority'    => 620,
    ) );

    $wp_customize->add_setting(
        'transportex_header_widget_four_label', array(
        'default' => __('Get Quote','transportex'),
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'transportex_header_widget_four_label', array(
        'label' => __('Button Text','transportex'),
        'section' => 'header_widget_four',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'transportex_header_widget_four_link', array(
        'default' => '#',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'transportex_header_widget_four_link',array(
        'label'   => __('Button Link','transportex'),
        'section' => 'header_widget_four',
        'type' => 'text',
    ) );

    $wp_customize->add_setting(
        'transportex_header_widget_four_target', array(
        'default' => 'true',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ) );  
    $wp_customize->add_control( 
        'transportex_header_widget_four_target', array(
        'label' => __('Open link in a new tab','transportex'),
        'section' => 'header_widget_four',
        'type' => 'checkbox',
    ) );
	
	
	function transportex_header_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
	}
	
	function transportex_sanitize_text( $input ) {
      return wp_kses_post( force_balance_tags( $input ) );
  }


  	if (isset($wp_customize->selective_refresh)) {

  	$wp_customize->selective_refresh->add_partial('blogname', array(
				'selector'        => '.navbar-header a',
				'render_callback' => 'transportex_customize_partial_blogname',
			));
		
		$wp_customize->selective_refresh->add_partial('blogdescription', array(
				'selector'        => '.site-description',
				'render_callback' => 'transportex_customize_partial_blogdescription',
			));		


    $wp_customize->selective_refresh->add_partial('transportex_header_widget_one_icon', array(
                'selector'        => '.header-info-one',
                'render_callback' => 'transportex_customize_partial_widget_one_icon',
        ));

    $wp_customize->selective_refresh->add_partial('transportex_header_widget_two_icon', array(
                'selector'        => '.header-info-two',
                'render_callback' => 'transportex_customize_partial_widget_two_icon',
        ));

    $wp_customize->selective_refresh->add_partial('transportex_header_widget_three_icon', array(
                'selector'        => '.header-info-three',
                'render_callback' => 'transportex_customize_partial_widget_three_icon',
        ));

    $wp_customize->selective_refresh->add_partial('transportex_header_widget_four_label', array(
                'selector'        => '.header-info-four',
                'render_callback' => 'transportex_customize_partial_header_widget_four_label',
        ));


    

    }
	
	
	}
	add_action( 'customize_register', 'transportex_header_setting' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function transportex_customize_partial_blogname() {
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function transportex_customize_partial_blogdescription() {
	bloginfo('description');
}

function transportex_customize_partial_widget_one_icon() {
    return get_theme_mod( 'transportex_header_widget_one_icon' );
}

function transportex_customize_partial_widget_two_icon() {
    return get_theme_mod( 'transportex_header_widget_two_icon' );
}

function transportex_customize_partial_widget_three_icon() {
    return get_theme_mod( 'transportex_header_widget_three_icon' );
}

function transportex_customize_partial_header_widget_four_label() {
    return get_theme_mod( 'transportex_header_widget_four_label' );
}
	?>