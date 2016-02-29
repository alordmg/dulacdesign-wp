/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );

	/*Sticky user note  */
     $('#accordion-panel-general_setting').prepend(
         '<div class="user_sticky_note">'+
         '<span class="sticky_info_row"><a class="button" href="http://demo.accesspressthemes.com/accesspress-store/" target="_blank">Live Demo</a>'+
         '<span class="sticky_info_row"><a class="button" href="http://doc.accesspressthemes.com/accespress-store-doc/" target="_blank">Documentation</a></span>'+
         '<span class="sticky_info_row"><a class="button" href="https://accesspressthemes.com/support/forum/themes/free-themes/theme-accesspress-store/" target="_blnak">Support Forum</a></span>'+
         '<span class="sticky_info_row"><a class="button" href="support@accesspressthemes.com">support@accesspressthemes.com<a/></span>'+         
         '</div>'
         ); 

} )( jQuery );