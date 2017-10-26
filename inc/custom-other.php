<?php

/* disable the wpautop */
remove_filter( 'the_content', 'wpautop' );

/* Check if the existing file is an image file */
function is_image_file( $image_file ) {
	
	if ( ! function_exists( 'exif_imagetype' ) ) {
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
