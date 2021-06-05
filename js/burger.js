'use strict';

let burgerLink = document.querySelector('.menu__burger');
let burgerClose = document.querySelector('.burger__close');
let burger = document.getElementById('burger');
let burgerFeedback = document.querySelector('.burger__feedback');

burgerLink.addEventListener('click', function (e) {
	burger.classList.add('open');
	body.style.overflowY = "hidden";
})
burgerClose.addEventListener('click', function (e) {
	burger.classList.remove('open');
	body.style.overflowY = "auto";
})
burgerFeedback.addEventListener('click', function (e) {
	burger.classList.remove('open');
})