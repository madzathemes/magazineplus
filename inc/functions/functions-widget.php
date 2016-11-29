<?php

function magazineplus_sidebar_widget_init() {

$mt_columns = get_option("magazineplus_theme_options");

/* --------------------------------------------------------------------------------------- Page Widget Area 1 */

	register_sidebar( array(
		'name' => esc_html__( 'Default Sidebar', 'magazineplus'),
		'id' => 'sidebar-widget-area-1',
		'description' => esc_html__( 'The page sidebar widget area 1', 'magazineplus' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );


/* --------------------------------------------------------------------------------------- Blog Widget Area */

	register_sidebar( array(
		'name' => esc_html__( 'Blog/Category Sidebar', 'magazineplus'),
		'id' => 'sidebar-blog-widget-area',
		'description' => esc_html__( 'The blog sidebar widget area' , 'magazineplus'),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );



/* --------------------------------------------------------------------------------------- Woocomerce sidebar area */

if(function_exists( 'is_woocommerce' ) ) {
	register_sidebar( array(
		'name' => esc_html__( 'WooCommerce Sidebar', 'magazineplus'),
		'id' => 'sidebar-woocommerce-widget-area',
		'description' => esc_html__( 'WooCommerce sidebar area', 'magazineplus' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );
}

/* --------------------------------------------------------------------------------------- Woocomerce sidebar area */

if(function_exists( 'is_woocommerce' ) ) {
	register_sidebar( array(
		'name' => esc_html__( 'WooCommerce Single Sidebar', 'magazineplus'),
		'id' => 'sidebar-woocommerce-single-widget-area',
		'description' => esc_html__( 'WooCommerce Single sidebar area', 'magazineplus' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );
}

/* --------------------------------------------------------------------------------------- Single Widget Area */

	register_sidebar( array(
		'name' => esc_html__( 'Post Sidebar', 'magazineplus'),
		'id' => 'sidebar-single-widget-area',
		'description' => esc_html__( 'The single page sidebar widget area' , 'magazineplus'),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );
	/* --------------------------------------------------------------------------------------- Single Buttom Widget Area */

		register_sidebar( array(
			'name' => esc_html__( 'Post Bottom (Before Comments)', 'magazineplus'),
			'id' => 'sidebar-single-bottom-widget-area-before',
			'description' => esc_html__( 'The post bottom widget area' , 'magazineplus'),
			'before_widget' => '<div class="widget">',
			'after_widget' => '<div class="clear"></div></div>',
					'before_title' => '<h2 class="heading"><span>',
					'after_title' => '</span></h4>',
		) );

	/* --------------------------------------------------------------------------------------- Single Buttom Widget Area */

			register_sidebar( array(
				'name' => esc_html__( 'Post Bottom (After Comments)', 'magazineplus'),
				'id' => 'sidebar-single-bottom-widget-area-after',
				'description' => esc_html__( 'The post bottom widget area' , 'magazineplus'),
				'before_widget' => '<div class="widget">',
				'after_widget' => '<div class="clear"></div></div>',
						'before_title' => '<h2 class="heading"><span>',
						'after_title' => '</span></h4>',
			) );


/* --------------------------------------------------------------------------------------- Search Widget Area */


	register_sidebar( array(
		'name' => esc_html__( 'Search Page Sidebar', 'magazineplus'),
		'id' => 'sidebar-search-widget-area',
		'description' => esc_html__( 'The search page sidebar widget area' , 'magazineplus'),
		'before_widget' => '<div class="widget">',
		'after_widget' => '<div class="clear"></div></div>',
				'before_title' => '<h2 class="heading"><span>',
				'after_title' => '</span></h4>',
	) );

	/* --------------------------------------------------------------------------------------- Menu widgets */


		register_sidebar( array(
			'name' => esc_html__( 'Menu Column 1', 'magazineplus'),
			'id' => 'menu-column-1',
			'description' => esc_html__( 'Add menu widgets inside small menu columns' , 'magazineplus'),
			'before_widget' => '<div class="hover-menu-widget">',
			'after_widget' => '<div class="clear"></div></div>',
					'before_title' => '<span class="hover-menu-head">',
					'after_title' => '</span>',
		) );

		register_sidebar( array(
			'name' => esc_html__( 'Menu Column 2', 'magazineplus'),
			'id' => 'menu-column-2',
			'description' => esc_html__( 'Add menu widgets inside small menu columns' , 'magazineplus'),
			'before_widget' => '<div class="hover-menu-widget">',
			'after_widget' => '<div class="clear"></div></div>',
					'before_title' => '<span class="hover-menu-head">',
					'after_title' => '</span>',
		) );

		register_sidebar( array(
			'name' => esc_html__( 'Menu Column 3', 'magazineplus'),
			'id' => 'menu-column-3',
			'description' => esc_html__( 'Add menu widgets inside small menu columns' , 'magazineplus'),
			'before_widget' => '<div class="hover-menu-widget">',
			'after_widget' => '<div class="clear"></div></div>',
					'before_title' => '<span class="hover-menu-head">',
					'after_title' => '</span>',
		) );


}

add_action( 'widgets_init', 'magazineplus_sidebar_widget_init' );
?>
