jQuery(document).ready(function () {
	function isPrevOnTheSameLine( el ) {
		// hidden params take no layout space, so the next visible param reflows
		// up next to whatever precedes them — skip hidden siblings to find it.
		var prev = jQuery( el ).prevAll( ':not(.vc_dependent-hidden)' ).get( 0 );

		if ( ! prev ) {
			return false
		}

		if ( ! prev.classList.contains( 'vc_shortcode-param' ) ) {
			return false
		}

		if ( ! jQuery( prev ).data( 'wcp-group-color' ) ) {
			return false;
		}

		if ( jQuery( el ).data( 'wcp-group-color' ) !== jQuery( prev ).data( 'wcp-group-color' ) ) {
			return false
		}

		return Math.round(el.getBoundingClientRect().top) === Math.round(prev.getBoundingClientRect().top);

	}

	function applyGroupColors( context ) {
		jQuery( '[data-wcp-group-color]', context )
			.each( function () {
				if ( isPrevOnTheSameLine( this ) ) {
					jQuery( this ).css( 'border-left', 0 );
				} else {
					jQuery( this ).css( 'border-left', '5px solid ' + jQuery( this ).data( 'wcp-group-color' ) );
				}
			} );
	}

	applyGroupColors( document );

	var resizeTimer;
	jQuery( window ).on( 'resize', function () {
		clearTimeout( resizeTimer );
		resizeTimer = setTimeout( function () {
			applyGroupColors( document );
		}, 100 );
	} );

	var domObserver = new MutationObserver( function ( mutations ) {
		mutations.forEach( function ( mutation ) {
			if ( mutation.type === 'attributes' && mutation.attributeName === 'hidden' ) {
				// param_group row expanded: hidden attribute removed → wait for slideToggle to finish
				if ( ! mutation.target.hasAttribute( 'hidden' ) ) {
					setTimeout( function () {
						applyGroupColors( document );
					}, 420 );
				}
				return;
			}

			jQuery( mutation.addedNodes ).filter( function () {
				return this.nodeType === 1;
			} ).each( function () {
				applyGroupColors( this.parentNode );
			} );
		} );
	} );
	domObserver.observe( document.body, { childList: true, subtree: true, attributes: true, attributeFilter: [ 'hidden' ] } );

	// any param dependency toggled (adds/removes vc_dependent-hidden on .vc_column)
	var dependencyChangeTimer;
	var dependencyObserver = new MutationObserver( function () {
		clearTimeout( dependencyChangeTimer );
		dependencyChangeTimer = setTimeout( function () {
			applyGroupColors( document );
		}, 50 );
	} );

	dependencyObserver.observe( document.body, { subtree: true, attributes: true, attributeFilter: [ 'class' ] } );
});
