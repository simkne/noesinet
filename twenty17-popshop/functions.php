<?php 
	 add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
	 function my_theme_enqueue_styles() { 
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,700|Rokkitt:400,700|Caveat', false );
 		  } 
/*
add navigation to footer
--------------------------------------------------------*/
register_nav_menus( array(
		'legal' => __( 'legal Links Menu', 'twentyseventeen' ),
	) );
/*
Allow HTML tags in Widget title
---------------------------------------------------------*/

	function html_widget_title( $var) {
		$var = (str_replace( '[', '<', $var ));
		$var = (str_replace( ']', '>', $var ));
		$var = (str_replace( ',,', '"', $var ));
		$var = (str_replace( ',,', '"', $var ));
		return $var ;
		
	}
	add_filter( 'widget_title', 'html_widget_title' ); 

/*
Add search box to primary menu
---------------------------------------------------------
	function wpgood_nav_search($items, $args) {
	    // If this isn't the primary menu, do nothing
	    if( !($args->theme_location == 'top') ) 
	    return $items;
	    // Otherwise, add search form
	    return $items . get_template_part( 'searchform', '' );
	}
	add_filter('wp_nav_menu_items', 'wpgood_nav_search', 10, 2);
*/

 ?>