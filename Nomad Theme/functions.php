<?php

function enqueue_function() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'font1', 'https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,400i,600,600i,700,800,900' );
	wp_enqueue_style( 'nomad', get_template_directory_uri().'/scss/nomad.css' );
    wp_enqueue_style( 'my-style', get_stylesheet_uri() );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/mob-menu.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'enqueue_function' );


function admin_enqueue_function( ) {

	wp_enqueue_style( 'font1', 'https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,400i,600,600i,700,800,900' );

   
}
add_action( 'admin_enqueue_scripts', 'admin_enqueue_function' );



function register_resources() {
    // menu
    register_nav_menu('main-menu', 'Main Menu');

    // sections
    $args = array('public' => true, 'label' => 'Sections');
    register_post_type('section', $args);

    // section taxonomy
    $arg = array(
        'label' => 'Type',
        'rewrite' => array('slug' => 'type'),
        'hierarchical' => true,
    );
    register_taxonomy('type', 'section', $arg);

}

add_action('init','register_resources');

function add_class_to_li( $classes, $item, $args, $depth ) { 
	$classes[] = 'nav-item';
	return $classes;
}
add_filter( 'nav_menu_css_class', 'add_class_to_li', 10, 4 ); 


function add_class_to_anchors( $atts ) {
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_anchors', 10 );


function section_func( $atts ){
    ob_start();
	// The Query
	$args = array(
		'name'        => $atts['slug'],
	  	'post_type'   => 'section',
	);
	$the_query = new WP_Query( $args );
	 
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $extra = 'default';
        $types = get_the_terms(get_the_ID(),'type');


        if($types != false){
        	$type = $types[0];
        	$slug = $type->slug;
        	
        	if(locate_template(array('partials/section/content-'.$slug.'.php'))){
        		$extra = $slug;
        	}
        	
        }

        $section_slug = get_post_field('post_name');
        if(locate_template(array('partials/section/content-'.$section_slug.'.php'))){
        	$extra = $section_slug;
        }

        get_template_part('partials/section/content',$extra);
    }
	
	/* Restore original Post Data */
	wp_reset_postdata();



	return ob_get_clean();
}
add_shortcode( 'section', 'section_func' );

?>