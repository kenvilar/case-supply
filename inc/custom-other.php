<?php

/* disable the wpautop */
remove_filter( 'the_content', 'wpautop' );

/* Check if the existing file is an image file */
function is_image_file( $image_file ) {
	
	if ( function_exists( 'exif_imagetype' ) ) {
		if ( exif_imagetype( $image_file ) == IMAGETYPE_GIF ) {
			return true;
		} else if ( exif_imagetype( $image_file ) == IMAGETYPE_JPEG ) {
			return true;
		} else if ( exif_imagetype( $image_file ) == IMAGETYPE_PNG ) {
			return true;
		} else if ( exif_imagetype( $image_file ) == IMAGETYPE_ICO ) {
			return true;
		} else if ( pathinfo( $image_file, PATHINFO_EXTENSION ) == 'svg' ) {
			return true;
		} else {
			return false;
		}
	} else {
		return;
	}
	
}

/* Admin Dashboard Widgets */
function casesupply_dashboard_widget_instruction() {
	?>
	<h2 style="text-decoration: underline;">SHORTCODES</h2>
	<br>
	<strong style="text-decoration: underline;">* When using grid columns shortcode</strong><br>
	Use this <br>
	[grid class=""]Hello World[/grid]<br><br>
	Try this example: <br>
	[grid class="col-lg-12 col-md-12 col-sm-12 col-xs-12"] <br>
	Hello World <br>
	[/grid] <br>
	<br><br>
	<strong style="text-decoration: underline;">* When using image shortcode</strong><br>
	Use this <br>
	[image href="" url="" alt="" width="" height=""]<br><br>
	Try this example: <br>
	[image href="https://s.w.org/style/images/wp-header-logo.png" url="https://s.w.org/style/images/wp-header-logo.png" alt="wordpress logo" width="100px" height="200px"]
	<?php
}

function casesupply_add_dashboard_widgets() {
	wp_add_dashboard_widget(
		'casesupply_instructions',
		'Case Supply Instructions',
		'casesupply_dashboard_widget_instruction'
	);
}

add_action( 'wp_dashboard_setup', 'casesupply_add_dashboard_widgets' );

/*
 * Fix for theme template file caching.
 * Flush the theme file cache each time the admin screens are loaded which uses the file list.
 * Only flush the file cache with each request to post list table, edit post screen, or theme editor.
 * */
function wp_42573_fix_template_caching( WP_Screen $current_screen ) {
	if ( ! in_array( $current_screen->base, array( 'post', 'edit', 'theme-editor' ), true ) ) {
		return;
	}
	
	$theme = wp_get_theme();
	if ( ! $theme ) {
		return;
	}
	
	$cache_hash    = md5( $theme->get_theme_root() . '/' . $theme->get_stylesheet() );
	$label         = sanitize_key( 'files_' . $cache_hash . '-' . $theme->get( 'Version' ) );
	$transient_key = substr( $label, 0, 29 ) . md5( $label );
	delete_transient( $transient_key );
}

add_action( 'current_screen', 'wp_42573_fix_template_caching' );
