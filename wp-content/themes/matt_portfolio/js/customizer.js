/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

// ( function( $ ) {

// 	// Site title and description.
// 	wp.customize( 'blogname', function( value ) {
// 		value.bind( function( to ) {
// 			$( '.site-title a' ).text( to );
// 		} );
// 	} );
// 	wp.customize( 'blogdescription', function( value ) {
// 		value.bind( function( to ) {
// 			$( '.site-description' ).text( to );
// 		} );
// 	} );

// 	// Header text color.
// 	wp.customize( 'header_textcolor', function( value ) {
// 		value.bind( function( to ) {
// 			if ( 'blank' === to ) {
// 				$( '.site-title, .site-description' ).css( {
// 					'clip': 'rect(1px, 1px, 1px, 1px)',
// 					'position': 'absolute'
// 				} );
// 			} else {
// 				$( '.site-title, .site-description' ).css( {
// 					'clip': 'auto',
// 					'position': 'relative'
// 				} );
// 				$( '.site-title a, .site-description' ).css( {
// 					'color': to
// 				} );
// 			}
// 		} );
// 	} );
// } )( jQuery );


( function( $ ) {
	$(".project").each(function(){
		var xVal = Math.floor(Math.random() * 81); // returns a number between 0 and 40
		var yVal = Math.floor(Math.random() * 1); 
		$(this).css({
			"-webkit-transform": "translate(" + xVal + "px, " + yVal + "px)",
			"-moz-transform": "translate(" + xVal + "px, " + yVal + "px)",
			"-o-transform": "translate(" + xVal + "px, " + yVal + "px)",
			"transform": "translate(" + xVal + "px, " + yVal + "px)",
		});
	});
} )( jQuery );