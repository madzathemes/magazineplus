<?php
function magazineplus_header_script() {

		wp_enqueue_style('magazineplus', get_stylesheet_uri());

		$option = get_option("magazineplus_theme_options");
		if  (!empty($option['menu_top_ad'])) {
			 if  ($option['menu_top_ad']!="ad") {
				 wp_enqueue_script('magazineplus-timeweather', get_template_directory_uri() . '/inc/js/timeweather.js', array('jquery'), '1.0', true);
			 }
		} else {
			wp_enqueue_script('magazineplus-timeweather', get_template_directory_uri() . '/inc/js/timeweather.js', array('jquery'), '1.0', true);
		}

		wp_enqueue_script('magazineplus_html5shiv', get_template_directory_uri() . '/inc/js/html5shiv.js', array('jquery'), '1.0', true);
		wp_script_add_data( 'magazineplus_html5shiv', 'conditional', 'lt IE 9' );
		wp_enqueue_script('magazineplus_respondmin', get_template_directory_uri() . '/inc/js/respond.js', array('jquery'), '1.0', true);
		wp_script_add_data( 'magazineplus_respondmin', 'conditional', 'lt IE 9' );
    function magazineplus_fonts_url() {

      $theme_font = "Lato:400,700,900|Volkhov:400i";

        /*
        Translators: If there are characters in your language that are not supported
        by chosen font(s), translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Google font: on or off', 'magazineplus' ) ) {
            $font_url = add_query_arg( 'family', urlencode( ''. esc_attr($theme_font) .'' ), "//fonts.googleapis.com/css" );
        }
        return $font_url;
    }
    wp_enqueue_style( 'magazineplus-fonts', magazineplus_fonts_url(), array(), '1.0.0' );
}
add_action('wp_enqueue_scripts', 'magazineplus_header_script');

function magazineplus_admin_script() {
	wp_enqueue_style('magazineplus-admin', get_template_directory_uri().'/inc/css/admin.css');
}
add_action('admin_enqueue_scripts', 'magazineplus_admin_script');


function magazineplus_header_hooks() {

	get_template_part('style');

}

add_action('wp_head', 'magazineplus_header_hooks');


add_filter('body_class','magazineplus_class');
function magazineplus_class($classes) {

	$body_class = "";

	$options = get_option("magazineplus_theme_options");

	if(!empty( $options['mt_menu_fix'])){
		if( $options['mt_menu_fix']=="1") {
			$body_class .= 'mt-fixed ';
		}  else {
			$body_class .= ' mt-fixed-no ';
		}
	} else {
		$body_class .= ' mt-fixed-no ';
	}

	$style = get_post_meta(get_the_ID(), "magazin_post_style", true);
	if(!empty($style)){
		$body_class .= ' post-style-'.$style;
		if($style=="8" and is_single()) {
			$body_class .= ' boxed-layout-on';
		}
	} else if (!empty($options['post_style'])) {
		$body_class .= ' post-style-'.$options['post_style'];
		if($options['post_style']=="8" and is_single()) {
			$body_class .= ' boxed-layout-on';
		}
	}

	$layout = get_post_meta(get_the_ID(), "magazin_layout", true);
	if(!empty($layout)){
		$body_class .= ' boxed-layout-on';
	} else if (!empty($options['boxed'])) {
		if ($options['boxed']=="1") {
			$body_class .= ' boxed-layout-on';
		}
	}

	if(!empty($options['menu_random'])) {
		if($options['menu_random']!="1") {
			$body_class .= ' random-off';
		}
	} else {
		$body_class .= ' random-off';
	}

	if(!empty($options['menu_top_ad'])) {
		if($options['menu_top_ad']=="ad") {
			$body_class .= ' menu-ad-on';
		}
	} else {
		$body_class .= ' menu-ad-off';
	}


	$page_space = get_post_meta(get_the_ID(), "magazin_page_padding", true);
	if(!empty($page_space)){
		$body_class .= ' remove-page-padding ';
	}

	$classes[] =  $body_class;
	return $classes;
}

?>
