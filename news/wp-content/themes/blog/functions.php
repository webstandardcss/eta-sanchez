<?php
add_theme_support('post-thumbnails');

//adding custom image size for post thumbnail
add_image_size( 'img-size', 400, 400, false);

// adding read more link using except filter
function nm_new_excerpt_more($more) {
	global $post;
	return '  ....  <a class="more" href="'. get_permalink($post->ID) . '">Read More</a>';
}
add_filter('excerpt_more', 'nm_new_excerpt_more');

// Woocommerce Support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function new_excerpt_more($length) {
	global $length;
	return 40;
}
add_filter('excerpt_length', 'new_excerpt_more');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Footer Widget One',
    		'id'   => 'footer-widget-one',
    		'description'   => 'These is the widget for Footer.',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
		
    	register_sidebar(array(
    		'name' => 'Footer Widget Two',
    		'id'   => 'footer-widget-two',
    		'description'   => 'These is the widget for Footer.',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
		
    	register_sidebar(array(
    		'name' => 'Footer Widget Three',
    		'id'   => 'footer-widget-three',
    		'description'   => 'These is the widget for Footer.',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
		
    	register_sidebar(array(
    		'name' => 'Footer Widget Four',
    		'id'   => 'footer-widget-four',
    		'description'   => 'These is the widget for Footer.',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
		
    	register_sidebar(array(
    		'name' => 'Homepage Mailchimp',
    		'id'   => 'mailchimp',
    		'description'   => 'These is the widget for Homepage Mailchimp.',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
		
    	register_sidebar(array(
    		'name' => 'Blog Sidebar',
    		'id'   => 'blogsidebar',
    		'description'   => 'These is the widget for Blog Sidebar.',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
    }
    
	// Declare Footer widget zone
    if (function_exists('register_sidebar')) {
				
    }
	
    if (function_exists('primary_menu')) {	
		register_nav_menu (
			array ( 'main-nav' => 'Main Navigation Menu' )
		);
	}
	
	if (function_exists('secondary_menu')) {	
		register_nav_menu (
			array ( 'footer-menu' => 'Footer Menu' )
		);
	}
?>