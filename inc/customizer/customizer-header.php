<?php

function magazineplus_customize_header($wp_customize){



  $wp_customize->add_section('layout_settings', array(
    'title'    	=> esc_html__('Layouts', 'magazineplus'),
    'panel'  => 'magazin_general'
  ));

	Kirki::add_field( 'magazineplus_theme_options[boxed]', array(
		'type'        => 'radio-image',
		'settings'    => 'magazineplus_theme_options[boxed]',
		'label'       => esc_html__( 'Page Layouts', 'magazineplus' ),
		'section'     => 'layout_settings',
		'default'     => '2',
		'option_type' => 'option',
		'priority'    => 10,
		'choices'     => array(
				'1'   => get_template_directory_uri() . '/inc/img/boxed.png',
				'2' => get_template_directory_uri() . '/inc/img/full.png',
			 ),
	));

	$wp_customize->add_section('magazineplus_header', array(
        'title'    	=> esc_html__('Header', 'magazineplus'),
        'priority' => 124,
    ));


	//	==================================================
    //  =============================
    //  = ==== Logo Options
    //  =============================
      $wp_customize->add_panel( 'panel_header', array(
    'priority'       => 300,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'    	=> esc_html__('Header', 'magazineplus'),
    'description'    => '',
	) );


    $wp_customize->add_section('magazineplus_logo', array(
        'title'    	=> esc_html__('Logo Image', 'magazineplus'),
        'priority' => 122,

    'panel'  => 'panel_header',
    ));

    $wp_customize->add_section('magazineplus_logo_settings', array(
        'title'    	=> esc_html__('Logo Settings', 'magazineplus'),
        'priority' => 123,

    'panel'  => 'panel_header',
    ));



    //  =============================
    //  = Logo             =
    //  =============================
    $wp_customize->add_setting('magazineplus_theme_options[header_logo]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
        'label'    => esc_html__('Logo', 'magazineplus'),
        'section'  => 'magazineplus_logo',
        'settings' => 'magazineplus_theme_options[header_logo]',
    )));

    //  = Logo Responsive            =
    $wp_customize->add_setting('magazineplus_theme_options[header_logox2]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'header_logox2', array(
        'label'    => esc_html__('Responsive Logo', 'magazineplus'),
        'section'  => 'magazineplus_logo',
        'settings' => 'magazineplus_theme_options[header_logox2]',
    )));

    Kirki::add_field( 'magazineplus_theme_options[mobile_logo]', array(
      'type'        => 'image',
      'settings'    => 'magazineplus_theme_options[mobile_logo]',
      'label'       => esc_html__( 'Mobile Logo', 'magazineplus' ),
      'section'     => 'magazineplus_logo',
      'default'     => '',
      'option_type' => 'option',
      'priority'    => 10,
    ) );

    //  =============================
    //  = Logo Widht
    //  =============================

    Kirki::add_field( 'magazineplus_theme_options[logo_width]', array(
    'type'        => 'number',
    'settings'    => 'magazineplus_theme_options[logo_width]',
    'label'       => esc_attr__( 'Width', 'magazineplus' ),
    'section'     => 'magazineplus_logo_settings',
    'option_type' => 'option',
    'choices'     => array(
      'min'  => 20,
      'max'  => 500,
      'step' => 1,
    ),
  ) );

    //  =============================
    //  = Logo Height
    //  =============================

    Kirki::add_field( 'magazineplus_theme_options[logo_height]', array(
    'type'        => 'number',
    'settings'    => 'magazineplus_theme_options[logo_height]',
    'label'       => esc_attr__( 'Height', 'magazineplus' ),
    'section'     => 'magazineplus_logo_settings',
    'option_type' => 'option',
    'choices'     => array(
      'min'  => 20,
      'max'  => 200,
      'step' => 1,
    ),
  ) );

	//  =============================
    //  = Logo margin Top
    //  =============================


    Kirki::add_field( 'magazineplus_theme_options[logo_top]', array(
  	'type'        => 'number',
  	'settings'    => 'magazineplus_theme_options[logo_top]',
  	'label'       => esc_attr__( 'Top Space', 'magazineplus' ),
  	'section'     => 'magazineplus_logo_settings',
  	'default'     => 18,
    'option_type' => 'option',
  	'choices'     => array(
  		'min'  => 0,
  		'max'  => 120,
  		'step' => 1,
  	),
  ) );

    //  =============================
    //  = Logo margin Bottom
    //  =============================
    Kirki::add_field( 'magazineplus_theme_options[logo_bottom]', array(
  	'type'        => 'number',
  	'settings'    => 'magazineplus_theme_options[logo_bottom]',
  	'label'       => esc_attr__( 'Top Space', 'magazineplus' ),
  	'section'     => 'magazineplus_logo_settings',
  	'default'     => 18,
    'option_type' => 'option',
  	'choices'     => array(
  		'min'  => 0,
  		'max'  => 120,
  		'step' => 1,
  	),
  ) );

    //  =============================
    //  = Logo Height fixed
    //  =============================
    $wp_customize->add_setting('magazineplus_theme_options[mt_logo_h_f]', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',
	));

    $wp_customize->add_control('mt_logo_h_f', array(
        'label'    	=> esc_html__('Logo height (px)', 'magazineplus'),
        'section'    => 'magazineplus_menu_fixed',
        'description'    => esc_html__('Default: 40', 'magazineplus'),
        'settings'   => 'magazineplus_theme_options[mt_logo_h_f]',
    ));

    //	==================================================
    //  =============================
    //  = ==== Header Options
    //  =============================




    $wp_customize->add_section('magazineplus_menu_mobile_', array(
        'title'    	=> esc_html__('Mobile Menu', 'magazineplus'),
        'priority' => 126,
        'panel'  => 'panel_header',
    ));

      $wp_customize->add_section('magazineplus_header_parallax', array(
        'title'    	=> esc_html__('Parallax', 'magazineplus'),
        'priority' => 127,
        'panel'  => 'panel_header',
    ));





    //  =============================
    //  = Menu fixed
    //  =============================
    $wp_customize->add_setting('magazineplus_theme_options[mt_menu_fix]', array(
    	'default'        => "",
        'capability' => 'edit_theme_options',
        'type'       => 'option',
        'sanitize_callback' => 'esc_attr',
    ));

    $wp_customize->add_control('mt_menu_fix', array(
        'settings' => 'magazineplus_theme_options[mt_menu_fix]',
        'label'    	=> esc_html__('On/Off', 'magazineplus'),
        'priority'   => 2,
        'section'  => 'magazineplus_menu_fixed',
        'type'     => 'checkbox',
    ));




    //  =============================
    //  = Menu Small on/off  	    =
    //  =============================
     $wp_customize->add_setting('magazineplus_theme_options[mt_menu_small]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_menu_small', array(
        'settings' => 'magazineplus_theme_options[mt_menu_small]',
        'label'    	=> esc_html__('Menu Icon', 'magazineplus'),
        'section' => 'magazineplus_menu_mobile',
        'type'    => 'select',
		'priority'   => 1,
        'choices'    => array(
        	'1' => 'Default',
            '2' => 'On',
			'3' => 'Off'

        ),
    ));





   //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_bg', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_bg', array(
        'label'    => esc_html__('Mobile Menu Background', 'magazineplus'),
        'section'  => 'magazineplus_menu_mobile',
        'settings' => 'mt_color_mobile_bg',
    )));

     //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_link', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_link', array(
        'label'    => esc_html__('Mobile Menu Link', 'magazineplus'),
        'section'  => 'magazineplus_menu_mobile',
        'settings' => 'mt_color_mobile_link',
    )));

      //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_link_hover', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_link_hover', array(
        'label'    => esc_html__('Mobile Menu Link Hover', 'magazineplus'),
        'section'  => 'magazineplus_menu_mobile',
        'settings' => 'mt_color_mobile_link_hover',
    )));

      //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_title', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_title', array(
        'label'    => esc_html__('Mobile Menu Title', 'magazineplus'),
        'section'  => 'magazineplus_menu_mobile',
        'settings' => 'mt_color_mobile_title',
    )));

       //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_text', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_text', array(
        'label'    => esc_html__('Mobile Menu Text', 'magazineplus'),
        'section'  => 'magazineplus_menu_mobile',
        'settings' => 'mt_color_mobile_text',
    )));

       //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_icon', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_icon', array(
        'label'    => esc_html__('Mobile Menu Social Icon', 'magazineplus'),
        'section'  => 'magazineplus_menu_mobile',
        'settings' => 'mt_color_mobile_icon',
    )));

       //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_mobile_icon_hover', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_mobile_icon_hover', array(
        'label'    => esc_html__('Mobile Menu Social Icon Hover', 'magazineplus'),
        'section'  => 'magazineplus_menu_mobile',
        'settings' => 'mt_color_mobile_icon_hover',
    )));

     //  =============================
    //  = Header BG image          =
    //  =============================
    $wp_customize->add_setting('magazineplus_theme_options[mt_mobile_menu_bg_img]', array(
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'default' => '',
        'sanitize_callback' => 'esc_url',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'mt_mobile_menu_bg_img', array(
        'label'    => esc_html__('Mobile Menu BG Image', 'magazineplus'),
        'section'  => 'magazineplus_menu_mobile',
        'settings' => 'magazineplus_theme_options[mt_mobile_menu_bg_img]',
    )));

    //  =============================
    //  = Shop on/off  	    =
    //  =============================
     $wp_customize->add_setting('magazineplus_theme_options[mt_mobile_menu_bg_img_style]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_mobile_menu_bg_img_style', array(
        'settings' => 'magazineplus_theme_options[mt_mobile_menu_bg_img_style]',
        'label'    	=> esc_html__('Mobile Menu BG Image Style', 'magazineplus'),
        'section' => 'magazineplus_menu_mobile',
        'type'    => 'select',
		'priority'   => 16,
        'choices'    => array(
        	'1' => 'Default',
            '2' => 'Cover',
			'3' => 'Repeat',
			'4' => 'No-Repeat'

        ),
    ));
    //  =============================
    //  = Shop on/off  	    =
    //  =============================
     $wp_customize->add_setting('magazineplus_theme_options[mt_mobile_menu_bg_img_position]', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_attr',

    ));
    $wp_customize->add_control( 'mt_mobile_menu_bg_img_position', array(
        'settings' => 'magazineplus_theme_options[mt_mobile_menu_bg_img_position]',
        'label'    	=> esc_html__('Mobile Menu BG Image Position', 'magazineplus'),
        'section' => 'magazineplus_menu_mobile',
        'type'    => 'select',
		'priority'   => 16,
        'choices'    => array(
	        '0' => 'Default',
        	'1' => 'Center',
            '2' => 'Top Center',
			'3' => 'Bottom Center',
			'4' => 'Left Center',
			'5' => 'Left Top',
			'6' => 'Left Bottom',
			'7' => 'Right Center',
			'8' => 'Right Top',
			'9' => 'Right Bottom'

        ),
    ));


    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('mt_color_fixed_menu_bg', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'mt_color_fixed_menu_bg', array(
        'label'    => esc_html__('Background color', 'magazineplus'),
        'section'  => 'magazineplus_menu_fixed',
        'settings' => 'mt_color_fixed_menu_bg',
    )));




		//  =============================
		//  = Header Top                =
		//  =============================
		$wp_customize->add_section('magazineplus_header_top', array(
        'title'    	=> esc_html__('Header Top', 'magazineplus'),
        'priority' => 124,
				'panel'  => 'panel_header',
    ));

    // MENU TOP AD //

    Kirki::add_field( 'magazineplus_theme_options[menu_top_ad]', array(
      'type'        => 'radio-buttonset',
      'settings'    => 'magazineplus_theme_options[menu_top_ad]',
      'label'       => esc_attr__( 'Header Top Content', 'magazineplus' ),
      'section'     => 'magazineplus_header_top',
      'default'     => 'ad',
      'priority'    => 1,
      'option_type'           => 'option',
      'choices'     => array(
        'ad'   => esc_attr__( 'Logo, Ad', 'magazineplus' ),
        'content' => esc_attr__( 'Logo, Buttons, Time, Weather', 'magazineplus' ),
      ),
   ));

   Kirki::add_field( 'magazineplus_theme_options[mobile_header_type]', array(
     'type'        => 'radio-buttonset',
     'settings'    => 'magazineplus_theme_options[mobile_header_type]',
     'label'       => esc_attr__( 'Mobile Header', 'magazineplus' ),
     'section'     => 'magazineplus_header_top',
     'default'     => '1',
     'priority'    => 1,
     'option_type'           => 'option',
     'choices'     => array(
       '1'   => esc_attr__( 'Style 1', 'magazineplus' ),
       '2' => esc_attr__( 'Style 2', 'magazineplus' ),
     ),
  ));

   Kirki::add_field( 'magazineplus_theme_options[header_link_blank]', array(
      'type'        => 'switch',
      'settings'    => 'magazineplus_theme_options[header_link_blank]',
      'label'       => esc_html__( 'Header Button Open In New Tap', 'magazineplus' ),
      'section'     => 'magazineplus_header_top',
      'default'     => '2',
       'option_type' => 'option',
      'priority'    => 10,
      'choices'     => array(
        '1'  => esc_attr__( 'Enable', 'magazineplus' ),
        '2' => esc_attr__( 'Disable', 'magazineplus' ),
      ),
   ) );

   Kirki::add_field( 'magazineplus_theme_options[menu_small_on]', array(
     	'type'        => 'switch',
     	'settings'    => 'magazineplus_theme_options[menu_small_on]',
     	'label'       => esc_attr__( 'Small Menu For Desktop', 'magazineplus' ),
     	'section'     => 'magazineplus_header_top',
     	'default'     => '0',
      'option_type' => 'option',
     	'priority'    => 10,
     	'choices'     => array(
     		'1'  => esc_attr__( 'Enable', 'magazineplus' ),
     		'2' => esc_attr__( 'Disable', 'magazineplus' ),
     	),
   ) );

   Kirki::add_field( 'magazineplus_theme_options[menu_random]', array(
     	'type'        => 'switch',
     	'settings'    => 'magazineplus_theme_options[menu_random]',
     	'label'       => esc_attr__( 'Random Button', 'magazineplus' ),
     	'section'     => 'magazineplus_header_top',
     	'default'     => '0',
       'option_type' => 'option',
     	'priority'    => 10,
     	'choices'     => array(
     		'1'  => esc_attr__( 'Enable', 'magazineplus' ),
     		'2' => esc_attr__( 'Disable', 'magazineplus' ),
     	),
   ) );

   Kirki::add_field( 'magazineplus_theme_options[menu_search]', array(
       'type'        => 'switch',
       'settings'    => 'magazineplus_theme_options[menu_search]',
       'label'       => esc_attr__( 'Search Button', 'magazineplus' ),
       'section'     => 'magazineplus_header_top',
       'default'     => '0',
       'option_type' => 'option',
       'priority'    => 10,
       'choices'     => array(
         '1'  => esc_attr__( 'Enable', 'magazineplus' ),
         '2' => esc_attr__( 'Disable', 'magazineplus' ),
       ),
   ) );

		// Latest Posts
		$wp_customize->add_setting('magazineplus_theme_options[url_latest]', array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'sanitize_callback' => 'esc_attr'
		));
		$wp_customize->add_control('magazineplus_theme_options[url_latest]', array(
			'label' => esc_html__('Button: Latest Posts', 'magazineplus'),
			'section' => 'magazineplus_header_top',
			'type' => 'dropdown-pages',
			'settings' => 'magazineplus_theme_options[url_latest]',
			'priority'   => 2,
		));

		// Popular Posts
		$wp_customize->add_setting('magazineplus_theme_options[url_popular]', array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'sanitize_callback' => 'esc_attr'
		));
		$wp_customize->add_control('magazineplus_theme_options[url_popular]', array(
			'label' => esc_html__('Button: Popular Posts', 'magazineplus'),
			'section' => 'magazineplus_header_top',
			'type' => 'dropdown-pages',
			'settings' => 'magazineplus_theme_options[url_popular]',
			'priority'   => 3,
		));

		// Hot Posts
		$wp_customize->add_setting('magazineplus_theme_options[url_hot]', array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'sanitize_callback' => 'esc_attr'
		));
		$wp_customize->add_control('magazineplus_theme_options[url_hot]', array(
			'label' => esc_html__('Button: Hot Posts', 'magazineplus'),
			'section' => 'magazineplus_header_top',
			'type' => 'dropdown-pages',
			'settings' => 'magazineplus_theme_options[url_hot]',
			'priority'   => 4,
		));

		// Trending Posts
		$wp_customize->add_setting('magazineplus_theme_options[url_trending]', array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'sanitize_callback' => 'esc_attr'
		));
		$wp_customize->add_control('magazineplus_theme_options[url_trending]', array(
			'label' => esc_html__('Button: Trending Posts', 'magazineplus'),
			'section' => 'magazineplus_header_top',
			'type' => 'dropdown-pages',
			'settings' => 'magazineplus_theme_options[url_trending]',
			'priority'   => 5,
		));

		// Time widget
		$wp_customize->add_setting('magazineplus_theme_options[header_time]', array(
				'capability'     => 'edit_theme_options',
				'type'           => 'option',
				'sanitize_callback' => 'esc_attr',
			));
		$wp_customize->add_control( 'magazineplus_theme_options[header_time]', array(
				'settings' => 'magazineplus_theme_options[header_time]',
				'label'    	=> esc_html__('Time and Date', 'magazineplus'),
				'section' => 'magazineplus_header_top',
				'type'    => 'select',
				'choices'    => array(
					'off' => 'off',
					'on' => 'on',
				),
		));

		// Weather widget
		$wp_customize->add_setting('magazineplus_theme_options[header_weather]', array(
				'capability'     => 'edit_theme_options',
				'type'           => 'option',
				'sanitize_callback' => 'esc_attr',
			));
		$wp_customize->add_control( 'magazineplus_theme_options[header_weather]', array(
				'settings' => 'magazineplus_theme_options[header_weather]',
				'label'    	=> esc_html__('Weather', 'magazineplus'),
				'section' => 'magazineplus_header_top',
				'type'    => 'select',
				'choices'    => array(
					'off' => 'off',
					'on' => 'on',
				),
		));

		$wp_customize->add_setting('magazineplus_theme_options[header_link_url]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
        'sanitize_callback' => 'esc_url',
		));
		$wp_customize->add_control('magazineplus_theme_options[header_link_url]', array(
        'label'    	=> esc_html__('Header Button URL', 'magazineplus'),
				'description'        => 'Sample: http://www.yoururl.com',
        'section'    => 'magazineplus_header_top',
        'settings'   => 'magazineplus_theme_options[header_link_url]',
    ));

		$wp_customize->add_setting('magazineplus_header_link_name', array(
        'capability'     => 'edit_theme_options',
				'default'        => 'Buy Now',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'esc_attr',
		));
		$wp_customize->add_control('magazineplus_header_link_name', array(
        'label'    	=> esc_html__('Header Button Name', 'magazineplus'),
        'section'    => 'magazineplus_header_top',
				'description'        => 'Default: Buy Now',
        'settings'   => 'magazineplus_header_link_name',
    ));



}

add_action('customize_register', 'magazineplus_customize_header');

?>
