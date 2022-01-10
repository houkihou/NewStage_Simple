"use strict";

jQuery( function( $ ) {

	// サイドバナー
	var $bnrItems         = $( '#sideBanner' ).find( '.fade60' ),
		$sideSectionItems = $( '.sideSection' ).find( '.fade60' );

	$bnrItems.add( $sideSectionItems ).on( 'mouseenter', function( e ) {
		changeOpacityByHover( $( this ), 0.6, 200, 'swing' );

	}).on( 'mouseleave', function( e ) {
		changeOpacityByHover( $( this ), 1, 200, 'swing' );
	});


	// ホバー時に不透明度を調整する
	function changeOpacityByHover( $doms, opa, dur, ease ) {
		$doms.dequeue().animate({
			opacity: opa
		}, {
			duration: dur,
			easing  : ease
		});
	}


});
