jQuery(document).ready(function () {
	function isPrevOnTheSameLine( el ) {
		var prev = el.previousElementSibling;
		if ( ! prev ) {
			return false
		}

		if ( ! prev.classList.contains( 'vc_shortcode-param' ) ) {
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

	var observer = new MutationObserver( function ( mutations ) {
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

	observer.observe( document.body, { childList: true, subtree: true, attributes: true, attributeFilter: [ 'hidden' ] } );
});
