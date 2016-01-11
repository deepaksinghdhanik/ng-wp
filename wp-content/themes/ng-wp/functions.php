<?php
function my_scripts() {
	
	wp_enqueue_style( 'roboto', 'http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800', array(), '' );
	wp_enqueue_style( 'fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), '' );
	
	//add bootstrap css
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', array(), '0.0.1' );
	wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/bootstrap/css/bootstrap-theme.css', array(), '0.0.1' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '0.0.1' );
	wp_enqueue_style( 'default', get_template_directory_uri() . '/css/style.default.css', array(), '0.0.1' );
	wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), '0.0.1' );
	wp_enqueue_style( 'owl.theme', get_template_directory_uri() . '/css/owl.theme.css', array(), '0.0.1' );
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css', array(), '0.0.1' );
	

	//scripts
	wp_enqueue_script('jquery',get_stylesheet_directory_uri() . '/js/vendor/jquery-1.11.0.min.js',array(), '1.0.0', true ); 
	wp_enqueue_script('angular',get_stylesheet_directory_uri() . '/js/vendor/angular.min.js',array(), '1.0.0', true ); 
	wp_enqueue_script('sanitize',get_stylesheet_directory_uri() . '/js/vendor/angular-sanitize.min.js',array(), '1.0.0', true ); 
	wp_enqueue_script('angular-filter',get_stylesheet_directory_uri() . '/js/vendor/angular-filter.min.js',array(), '1.0.0', true ); 
	wp_enqueue_script('angular-resource',get_stylesheet_directory_uri() . '/js/vendor/angular-resource.min.js',array(), '1.0.0', true ); 
	wp_enqueue_script('angular-ui-router',get_stylesheet_directory_uri() . '/js/vendor/angular-ui-router.js',array(), '1.0.0', true ); 
	wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() .'/js/vendor/bootstrap.min.js',array(), '1.0.0', true ); 
 	wp_enqueue_script('carousel',get_stylesheet_directory_uri() . '/js/vendor/owl.carousel.min.js',array(), '1.0.0', true );
	wp_enqueue_script('cookie',get_stylesheet_directory_uri() . '/js/vendor/jquery.cookie.js',array(), '1.0.0', true );
	wp_enqueue_script('waypoints',get_stylesheet_directory_uri() . '/js/vendor/waypoints.min.js',array(), '1.0.0', true );
	wp_enqueue_script('counterup',get_stylesheet_directory_uri() . '/js/vendor/jquery.counterup.min.js',array(), '1.0.0', true );
	wp_enqueue_script('parallax',get_stylesheet_directory_uri() . '/js/vendor/jquery.parallax-1.1.3.js',array(), '1.0.0', true );
	wp_enqueue_script('front',get_stylesheet_directory_uri() . '/js/front.js',array(), '1.0.0', true );
	wp_enqueue_script('app',get_stylesheet_directory_uri() . '/app/app.js',array(), '1.0.0', true );
	wp_enqueue_script('commonCtrl',get_stylesheet_directory_uri() . '/app/common/commonCtrl.js',array(), '1.0.0', true );
	wp_enqueue_script('serviceCtrl',get_stylesheet_directory_uri() . '/app/service/serviceCtrl.js' ,array(), '1.0.0', true );
	wp_enqueue_script('sliderCtrl',get_stylesheet_directory_uri() . '/app/slider/sliderCtrl.js' ,array(), '1.0.0', true );
	wp_enqueue_script('serviceFactory',get_stylesheet_directory_uri() . '/app/service/serviceFactory.js' ,array(), '1.0.0', true );
	
	// Variables for app script
	wp_localize_script( 'app', 'app',
		array(
			'filePath' =>trailingslashit(get_bloginfo('template_directory')) . 'app',
			'apiurl' =>trailingslashit(get_bloginfo('url')) . 'wp-json/wp/v2',
			'path' =>trailingslashit(get_bloginfo('url'))
		)
	);
	
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );



	
	
/**
  * Add REST API support to an already registered post type.
  */
  add_action( 'init', 'my_custom_post_type_rest_support', 25 );
  function my_custom_post_type_rest_support() {
    global $wp_post_types;

    //be sure to set this to the name of your post type!
    $post_type_name = 'service';
    if( isset( $wp_post_types[ $post_type_name ] ) ) {
        $wp_post_types[$post_type_name]->show_in_rest = true;
        $wp_post_types[$post_type_name]->rest_base = $post_type_name;
        $wp_post_types[$post_type_name]->rest_controller_class = 'WP_REST_Posts_Controller';
    }

  }
  
  
add_filter( 'json_query_vars', 'filterJsonQueryVars' );

function filterJsonQueryVars( $vars ) {
    $vars[] = 'meta_key';
    return $vars;
}