(function( $ ) {
	'use strict';

	$( 'document' ).ready( function() {

		//Equal Columns height
		$( '.equal-height' ).matchHeight();

		// Navigation Menu Toggle
		$( '.navbar-toggle-open' ).on( 'click', function() {
			$( '.navbar-toggle-open' ).hide();
			$( '.navbar-toggle-close' ).show();
		} );
		$( '.navbar-toggle-close' ).on( 'click', function() {
			$( '.navbar-toggle-close' ).hide();
			$( '.navbar-toggle-open' ).show();
		} );

		// Products toggle
		$( this ).find( '.single-product-toggle' ).on( 'click', singleProductContentOpen );
		$( '.single-product-close' ).on( 'click', singleProductContentClose );

		function singleProductContentOpen( e ) {
			e.preventDefault();
			$( this ).next( '.single-product-content' ).slideToggle();
			$( this ).toggleClass( 'single-product-close' );
		}

		function singleProductContentClose( e ) {
			e.preventDefault();
			$( '.single-product-content' ).fadeOut();
		}

		// On Load
		$( window ).on( 'load', function() {
			// Preloader
			$( '.preloader' ).fadeOut( 1500 );
		} );

	} );

})( jQuery );
