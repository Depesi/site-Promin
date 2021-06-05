//Инициализация Swiper
let myImageSlider = new Swiper('.image-slider', {
	//Стрелки
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev'
	},

	//Навигация
	pagination: {
		el: '.swiper-pagination',
		//Буллеты
		clickable: true,
		//Динамические буллеты
		dynamicBullets: true,
	},

	//Управление клавиатурой 
	keyboard: {
		enabled: true,
		//Только в области видимости
		onlyinViewport: true,
	},
	//Рука перетягивания grabCursor: true,
	autoHeight: true,

	//Бесконечный слайд loop: true,
	//Стартовый слайд initialSlide: 2,
	//Сводобный режим freeMode: true,
	//Добавление руки grabCursor: true,


	//Автопрокрутка 
	/*autoplay: {
		delay: 2500,
		// Отключить после ручного переключения
		disableOnInteraction: false
	},*/

	//Скорость переключения
	speed: 600,

	//Брейк поинты
	/*
	breakpoints: {
		320: (сработает когда больше чем 320) {
			изменение,
		},
	}
	*/


});
//Остановка автопрокрутки

/*let sliderBlock = document.querySelector('.image-slider');

sliderBlock.addEventListener("mouseenter", function (e) {
	myImageSlider.params.autoplay.disableOnInteraction = false;
	myImageSlider.autoplay.stop();
});
sliderBlock.addEventListener("mouseleave", function (e) {
	myImageSlider.autoplay.start();
});*/
