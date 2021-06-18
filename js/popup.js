'use strict';

let popupLink = document.querySelector('.navbar__feedback');
let popupInfo = document.querySelector('.popup__info');
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

	modal.addEventListener("click", function (e) {

		// if (!e.target.closest('.popup__info')) {
		if (e.target.className != 'popup__info') {
			modal.classList.remove('open');
			body.style.overflowY = "auto";
			zeroPadding(body);
		}
	})
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
var url = SearchInCoockies("url");

if (url == "/diplom_&_sitePromin/" || url == "/diplom_&_sitePromin/index.php") {
	popupLinkParallax.addEventListener('click', function (e) {
		bodyLock();
		modal.classList.add('open');
		body.style.overflowY = "hidden";
	});
}
else {
	console.log(1);
}

function SearchInCoockies(name) {
	var cookie = " " + document.cookie;
	var search = " " + name + "=";
	var setStr = null;
	var offset = 0;
	var end = 0;
	if (cookie.length > 0) {
		offset = cookie.indexOf(search);
		if (offset != -1) {
			offset += search.length;
			end = cookie.indexOf(";", offset)
			if (end == -1) {
				end = cookie.length;
			}
			setStr = unescape(cookie.substring(offset, end));
		}
	}
	return (setStr);
}




