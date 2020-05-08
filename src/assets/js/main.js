$( window ).on( 'load', () => {
	console.log( 'Loaded!' );
} );

document.addEventListener( 'DOMContentLoaded', () => {
	const $navbarNoticias = Array.prototype.slice.call( document.querySelectorAll( '.navbar-noticias' ), 0 );

	if ( $navbarNoticias.length > 0 ) {
		$navbarNoticias.forEach( el => {
			el.addEventListener( 'click', () => {
				const target = el.dataset.target;
				const $target = document.getElementById( target );
				el.classList.toggle( 'is-active' );
				$target.classList.toggle( 'is-active' );
			} );
		} );
	}

} );

document.addEventListener( 'DOMContentLoaded', () => {
	const $closeMenu = Array.prototype.slice.call( document.querySelectorAll( '.close-menu' ), 0 );

	if ( $closeMenu.length > 0 ) {
		$closeMenu.forEach( el => {
			el.addEventListener( 'click', () => {
				const target = el.dataset.target;
				const $target = document.getElementById( target );
				el.classList.toggle( 'is-active' );
				$target.classList.toggle( 'is-active' );
			} );
		} );
	}

} );