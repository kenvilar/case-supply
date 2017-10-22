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

	} );

})( jQuery );
