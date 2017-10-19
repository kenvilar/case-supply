<?php

/**
 * Enqueue styles.
 */
function casesupply_styles() {
	wp_enqueue_style( 'casesupply-bootstrap',
		get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css',
		'',
		'2017' );
	
	wp_enqueue_style( 'casesupply-style',
		get_stylesheet_directory_uri() . '/assets/css/style.css',
		'',
		'2017' );
}
add_action( 'wp_enqueue_scripts', 'casesupply_styles' );

/**
 * Enqueue scripts.
 */
function casesupply_scripts() {
	wp_enqueue_script( 'casesupply-navigation',
		get_template_directory_uri() . '/assets/js/navigation.js',
		array(),
		'2017', true );
	
	wp_enqueue_script( 'casesupply-skip-link-focus-fix',
		get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js',
		array(),
		'2017', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'casesupply_scripts' );
