<?php	
	
	add_action( 'after_setup_theme', 'setup' );
	add_action( 'init', 'register_my_menus' );
	add_filter( 'use_default_gallery_style', '__return_false' );
	add_shortcode('gallery', 'gallery_shortcode');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );

	function setup() {
		add_image_size( 'gallery', 175, 175, true); //(cropped)

		add_filter( 'image_size_names_choose', 'custom_image_sizes_choose' );

		function custom_image_sizes_choose( $sizes ) {
		    $custom_sizes = array(
		        'gallery' => 'Gallery'
		    );
		    return array_merge( $sizes, $custom_sizes );
		}
	}

	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );	

 	function register_my_menus() {
	  register_nav_menus(
		    array(
		    	'header-menu' => __( 'Header Menu' ),
		      	'footer-menu' => __( 'Footer Menu' )
		    )
	  );
	}
   
    //widgets
	function footer_left() {

		register_sidebar( array(
			'name'          => 'Footer Left',
			'id'            => 'footer-left',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>',
		) );

	}
	add_action( 'widgets_init', 'footer_left' );

	function footer_right() {
	add_action( 'widgets_init', 'arphabet_widgets_init' );
	register_sidebar( array(
			'name'          => 'Footer Right',
			'id'            => 'footer-right',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="rounded">',
			'after_title'   => '</h2>',
		) );

	}
	add_action( 'widgets_init', 'footer_right' );

	function top_navigation() {
	add_action( 'widgets_init', 'arphabet_widgets_init' );
	register_sidebar( array(
			'name'          => 'Top Bar Navigation',
			'id'            => 'top-bar-nav',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
		) );

	}

	add_action( 'widgets_init', 'sidebar_page' );
	function sidebar_page() {
	add_action( 'widgets_init', 'arphabet_widgets_init' );
	register_sidebar( array(
			'name'          => 'Page Sidebar',
			'id'            => 'sidebar-page',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
		) );

	}
	add_action( 'widgets_init', 'sidebar_page' );
?>