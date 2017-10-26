<?php

// Grid Columns
function casesupply_grid_shortcode( $atts, $content = null ) {
	
	$atts = shortcode_atts(
		array(
			'class' => 'col-lg-12 col-md-12 col-sm-12 col-xs-12',
		),
		$atts,
		'grid'
	);
	
	if ( "" == $atts['class'] ) {
		$atts['class'] = 'col--lg-12 col-md-12 col-sm-12 col-xs-12';
	}
	
	$casesupply_grid = '<div';
	
	if ( isset( $atts['class'] ) || "" !== $atts['class'] ) :
		$casesupply_grid .= ' class="' . $atts['class'] . '">';
	else :
		$casesupply_grid .= ' class="' . $atts['class'] . '">';
	endif;
	
	if ( isset( $content ) || "" !== $content ) {
		$casesupply_grid .= do_shortcode( $content );
	}
	
	$casesupply_grid .= '</div>';
	
	return $casesupply_grid;
	
}

add_shortcode( 'grid', 'casesupply_grid_shortcode' );

// Image Shortcode
function casesupply_image_shortcode( $atts, $content = null ) {
	
	$atts = shortcode_atts(
		array(
			'href'   => "",
			'width'  => 'auto',
			'height' => 'auto',
			'alt'    => 'image',
		),
		$atts,
		'image'
	);
	
	if ( "" == $atts['href'] ) {
		$atts['href'] = "";
	}
	
	if ( "" == $atts['width'] ) {
		$atts['width'] = "auto";
	}
	
	if ( "" == $atts['height'] ) {
		$atts['height'] = "auto";
	}
	
	if ( "" == $atts['alt'] ) {
		$atts['alt'] = "image";
	}
	
	$casesupply_image = '<a';
	
	if ( isset( $atts['href'] ) || "" !== $atts['href'] ) :
		$casesupply_image .= ' href="' . $atts['href'] . '">';
	else :
		$casesupply_image .= '>';
	endif;
	
	$casesupply_image .= '<img ';
	
	if ( ( isset( $content ) || "" !== $content ) && is_image_file( $content ) ) {
		$casesupply_image .= 'src="' . do_shortcode( $content ) . '" ';
	} else {
		$casesupply_image .= 'src="http://via.placeholder.com/250x250?text=put+image+url" ';
	}
	
	if ( isset( $atts['alt'] ) || "" !== $atts['alt'] ) :
		$casesupply_image .= 'alt="' . $atts['alt'] . '" ';
	else :
		$casesupply_image .= 'alt="' . $atts['alt'] . '" ';
	endif;
	
	if ( isset( $atts['width'] ) || "" !== $atts['width'] ) :
		$casesupply_image .= 'style="width:' . $atts['width'] . ';';
	else :
		$casesupply_image .= 'style="width:' . $atts['width'] . ';';
	endif;
	
	if ( isset( $atts['height'] ) || "" !== $atts['height'] ) :
		$casesupply_image .= 'height:' . $atts['height'] . ';">';
	else :
		$casesupply_image .= 'height:' . $atts['height'] . ';">';
	endif;
	
	
	$casesupply_image .= '</a>';
	
	return $casesupply_image;
	
}

add_shortcode( 'image', 'casesupply_image_shortcode' );
