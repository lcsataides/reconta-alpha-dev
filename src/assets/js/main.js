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

document.addEventListener( 'DOMContentLoaded', () => {
	const $closeOutside = Array.prototype.slice.call( document.querySelectorAll( '#navbarNavDropdown.is-active' ), 0 );

	if ( $closeOutside.length > 0 ) {
		$closeOutside.forEach( el => {
			el.addEventListener( 'click', () => {
				const target = el.dataset.target;
				const $target = document.getElementById( target );
				el.classList.toggle( 'is-active' );
				$target.classList.toggle( 'is-active' );
			} );
		} );
	}
} );

// Search button.
document.addEventListener( 'DOMContentLoaded', () => {
	const $navbarSearch = Array.prototype.slice.call( document.querySelectorAll( '.navbar-search' ), 0 );

	if ( $navbarSearch.length > 0 ) {
		$navbarSearch.forEach( el => {
			el.addEventListener( 'click', () => {
				const target = el.dataset.target;
				const $target = document.getElementById( target );
				el.classList.toggle( 'is-open' );
				$target.classList.toggle( 'is-open' );
			} );
		} );
	}
} );

function copiarLink(element) {
  let inputToggle = document.querySelector(element);
  inputToggle.classList.toggle( 'is-open' );
  inputToggle.select();
  document.execCommand('copy');
}

function copiarLinkIn(element) {
  let inputToggle = document.querySelector(element);
  let tooltipToggle = inputToggle.nextElementSibling;
  inputToggle.classList.toggle( 'is-open-in' );
  inputToggle.select();
  document.execCommand('copy');
  tooltipToggle.classList.toggle( 'link-is-open' );
}