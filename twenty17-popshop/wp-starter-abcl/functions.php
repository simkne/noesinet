<?php
/**
 * WP-Starter functions and definitions
 *
 * When using a child theme you can override certain functions (those wrapped in a function_exists() call) by defining  
 * them first in your child theme's functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @since WP-Starter 4.0
 * @version 4.1 
 */

/**
 * Enqueue child-theme style sheet
 */
function wpstarter_child_style() {
    wp_dequeue_style('wpforge');
    wp_dequeue_style('customizer');
    wp_dequeue_style('wpforge_fonts');
    
    wp_enqueue_style('parent-styles', get_template_directory_uri() . '/style.css', '', '6.2.1');
    wp_enqueue_style('child-styles', get_stylesheet_uri(), array( 'parent-styles' ), '4.1');
     wp_enqueue_style('wpforge-Raleway', '//fonts.googleapis.com/css?family=Raleway:300,700','', '6.4');
	

}
add_action( 'wp_enqueue_scripts', 'wpstarter_child_style');

/* removing the customizer settings*/
function remove_parent_customizer() {
    remove_action( 'customize_register', 'wpforge_customize_register' );
}
add_action( 'after_setup_theme', 'remove_parent_customizer', 9 );
function remove_customizer_css() {
    remove_action('wp_head', 'wpforge_customize_css', 100);
}
add_action( 'after_setup_theme', 'remove_customizer_css', 9 );
/* adding SVG 
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');
*/
function widget($atts) {
    
    global $wp_widget_factory;
    
    extract(shortcode_atts(array(
        'widget_name' => FALSE
    ), $atts));
    
    $widget_name = wp_specialchars($widget_name);
    
    if (!is_a($wp_widget_factory->widgets[$widget_name], 'WP_Widget')):
        $wp_class = 'WP_Widget_'.ucwords(strtolower($class));
        
        if (!is_a($wp_widget_factory->widgets[$wp_class], 'WP_Widget')):
            return '<p>'.sprintf(__("%s: Widget class not found. Make sure this widget exists and the class name is correct"),'<strong>'.$class.'</strong>').'</p>';
        else:
            $class = $wp_class;
        endif;
    endif;
    
    ob_start();
    the_widget($widget_name, $instance, array('widget_id'=>'arbitrary-instance-'.$id,
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
    
}
add_shortcode('widget','widget'); 

// Enable PHP in widgets
add_filter('widget_text','execute_php',100);
function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}
?>