'use strict';

let popupLink = document.querySelector('.navbar__feedback');
let popupLinkParallax = document.querySelector('.parallax__content_feedback');
let burgerPopupLink = document.querySelector('.burger__feedback');
let body = document.querySelector('body');
let parallax = document.querySelector('parallax');
let modal = document.getElementById('popup');
let closeModal = document.querySelector('.popup__close');
let lockPadding = document.querySelector('.lock-padding')

burgerPopupLink.addEventListener('click', function (e) {
	modal.classList.add('open');
	body.style.overflowY = "hidden";
})

popupLink.addEventListener('click', function (e) {
	bodyLock();
	modal.classList.add('open');
	body.style.overflowY = "hidden";

});

closeModal.addEventListener('click', function (e) {
	modal.classList.remove('open');
	body.style.overflowY = "auto";
	zeroPadding(body);
});

document.addEventListener('keydown', function (e) {
	if (modal.classList.contains('open') && e.which === 27) {
		modal.classList.remove('open');
		body.style.overflowY = "auto";
		zeroPadding(body);
	}
});


function bodyLock() {
	if (window.screen.availWidth > 327) {
		const lockPaddingValue = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
		body.style.paddingRight = lockPaddingValue;
	}
}

function zeroPadding(el) {
	el.style.paddingRight = '0';
}

//Работает только на главной странице
popupLinkParallax.addEventListener('click', function (e) {
	bodyLock();
	modal.classList.add('open');
	body.style.overflowY = "hidden";
});

