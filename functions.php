<?php
/**----------
	STYLES
----------**/
function wpyuki_styles() {
	wp_enqueue_style ('googlefonts', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic|Playfair+Display:900,900italic');
}
add_action( 'wp_enqueue_scripts' , 'wpyuki_styles' );

/**----------
	SCRIPTS
----------**/
function wpyuki_js() {
	wp_enqueue_script( 'theme.js', get_template_directory_uri() . '/js/theme.js', array(), '' , true );
	wp_enqueue_script( 'gridalicious' , get_template_directory_uri() . '/js/jquery.grid-a-licious.min.js', array(jquery), '', true);
	wp_enqueue_script( 'fitvids' , get_template_directory_uri() . '/js/fluidvid.js', array(), '', true);
	if ( is_singular() ){
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts' , 'wpyuki_js' );

/**----------
	FOOTER WIDGETS
----------**/
if (function_exists('register_sidebar')) {
	register_sidebar( array (
		'name'			=> __( 'Footer Col 1'),
		'id'			=> 'footer-one',
		'description'	=> __( 'Widgets in this area will appear in the first footer column'),
		'before_widget'	=> '<div class="%2$s widget clearfix">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h5>',
		'after_title'	=> '</h5>',
	));
	register_sidebar( array (
		'name'			=> __( 'Footer Col 2'),
		'id'			=> 'footer-two',
		'description'	=> __( 'Widgets in this area will appear in the second footer column' ),
		'before_widget'	=> '<div class="%2$s widget clearfix">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h5>',
		'after_title'	=> '</h5>',
	) );
	register_sidebar( array (
		'name'			=> __( 'Footer Col 3'),
		'id'			=> 'footer-three',
		'description'	=> __( 'Widgets in this area will appear in the third footer column' ),
		'before_widget'	=> '<div class="%2$s widget clearfix">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h5>',
		'after_title'	=> '</h5>',
	) );
	register_sidebar( array (
		'name'			=> __( 'Footer Col 4'),
		'id'			=> 'footer-four',
		'description'	=> __( 'Widgets in this area will appear in the fourth footer column' ),
		'before_widget'	=> '<div class="%2$s widget clearfix">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h5>',
		'after_title'	=> '</h5>',
	) );
	register_sidebar( array (
		'name'			=> __( 'Footer Col 5'),
		'id'			=> 'footer-five',
		'description'	=> __( 'Widgets in this area will appear in the fifth footer column' ),
		'before_widget'	=> '<div class="%2$s widget clearfix">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h5>',
		'after_title'	=> '</h5>',
	) );
}

/**----------
	Post thumbnails & featured images 
----------**/
add_theme_support( 'post-thumbnails');
	
	if ( function_exists('add_image_size')) {
		add_image_size( 'full-size', 9999, 9999, false );
		add_image_size( 'grid-thumb', 340, 280, false );
		add_image_size( 'blog-image', 700, 9999 );
	}
/**----------
	Excerpt Lengths
----------**/
function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**----------
	Header Menus
----------**/
function register_wpyuki_menus() {
  register_nav_menus(
    array(
      'header-menu-A' => __( 'Header Menu A' ),
      'header-menu-B' => __( 'Header Menu B' )
    )
  );
}
add_action( 'init', 'register_wpyuki_menus' );

/**
* Dequeue the Emoji script.
*/
function disable_emoji_dequeue_script() {
wp_dequeue_script( 'emoji' );
}
add_action( 'wp_print_scripts', 'disable_emoji_dequeue_script', 100 );

/**
* Remove the emoji styles.
*/
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts','print_emoji_detection_script');

?>
