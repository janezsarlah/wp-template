<?php 

// Load the theme css
function theme_styles() {

	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'glyphicon_bootstrap', get_template_directory_uri() . '/css/glyphicon_bootstrap.min.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
	// Slider will load only on home page
	wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css' );
	if( is_page( 'home' ) ) {
		wp_enqueue_style( 'flexslider' );
	}
}

// Load the theme js
function theme_js() {

	wp_register_script( 'flexslider', get_template_directory_uri() . '/js/flexslider.min.js', array('jquery'), '', true  ); // Last parameter loads the js in footer, and tehe one before tels the jquery version (empti gives us the latest)
	if( is_page( 'home' ) ) {
		wp_enqueue_script( 'flexslider' );
	}
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true  );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true  );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );

add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Enable custom menus
add_theme_support( 'menus' );


function create_widget( $name, $id, $description ) {
	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => $description,
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>' 
		);

	register_sidebar( $args );
}

create_widget( 'Left footer', 'footer-left', 'This is the widget on the left.' );

create_widget( 'Right footer', 'footer-right', 'This is the widget on the right.' );

?>