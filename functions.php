<?php

function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .
	                               '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css'
	);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() .
	                                '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
}
add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

add_theme_support( 'post-thumbnails' );


function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );