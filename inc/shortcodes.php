<?php

// Grid Columns
function casesupply_grid_shortcode( $atts, $content = null ) {
	
	// Attributes
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
