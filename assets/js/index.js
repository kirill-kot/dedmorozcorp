jQuery(document).ready(function ($) {
	//	слайдеры
	var first = new Swiper('.first_banners', {
		speed: 400,
		loop: true,
		autoplay: 4000,
		spaceBetween: 0,
		pagination: '.swiper-pagination',
		paginationClickable: true
	});
	var gallery = new Swiper('.gallery', {
		speed: 400,
		spaceBetween: 0,
		nextButton: '.swiper-next-1',
		prevButton: '.swiper-prev-1'
	});
	var gallery_2 = new Swiper('.gallery_2', {
		speed: 400,
		spaceBetween: 0,
		observer: true,
		autoplay: 10000,
		spaceBetween: 0,
		nextButton: '.swiper-next-2',
		prevButton: '.swiper-prev-2'
	});

	var feedback = new Swiper('.feedback', {
		speed: 400,
		spaceBetween: 0,
		autoHeight: true,
		nextButton: '.swiper-next-3',
		prevButton: '.swiper-prev-3'
	});

	//прочие плагины
	//	выбор даты в форму
	$('.date').datepicker({
		format: "dd.mm.yyyy",
		language: "ru",
		keyboardNavigation: false,
		autoclose: true,
		todayHighlight: true
	});
	//	маска для телефона
	$("#phone").mask("+7 (999) 999-99-99");

	//	скролл без якорей
	$('a').not('.external_service').on('click', function (e) {
		e.preventDefault();
		var targetSection = $(this).attr("href");
		$(targetSection).velocity('scroll', {
			queue: false,
			duration: '1500',
			offset: -100
		});
	});
	//	анимация картинок при наведении
//	$('.program-pic').on('mouseenter', function () {
//		$(this).find('img').velocity({
//			duration: '200',
//			width: '+=10px',
//			height: '+=10px',
//			queue: false
//		}).clearQueue();
//	});
//	$('.program-pic').on('mouseleave', function () {
//		$(this).find('img').velocity({
//			duration: '200',
//			width: '-=10px',
//			height: '-=10px',
//			queue: false
//		}).clearQueue();
//	});

	//	дополнительные блоки описания программ
	$('.more').on('click', function () {
		$('.program-1-descr').velocity({
			easing: 'easeInBack',
			duration: 600,
			top: '0',
			opacity: '1'
		}, {
			display: "block"
		}).clearQueue();
		setTimeout(function () {
			$('.program-1-descr').css({
				'position': 'relative'
			});
		}, 200);
		$('.program-2-descr').velocity({
			easing: 'easeInBack',
			duration: 800,
			top: '0',
			opacity: '1'
		}, {
			display: "block"
		}).clearQueue();
		setTimeout(function () {
			$('.program-2-descr').css({
				'position': 'relative'
			});
		}, 200);
		$('.more').velocity({
			duration: 600,
			margin: '0',
			height: '0'
		}, {
			display: "none"
		}).clearQueue();
		$('.program-link').remove();

	});
	//	модальное окно спасибок
	$('.modal-close').on('mouseenter', function () {
		$(this).velocity({
			duration: '200',
			'background-color': '#ff077f',
			queue: false
		}).clearQueue();
		$(this).find('span').velocity({
			duration: '200',
			'background-color': '#ffffff',
			queue: false
		}).clearQueue();
	});
	$('.modal-close').on('mouseleave', function () {
		$(this).velocity({
			duration: '200',
			'background-color': '#ffffff',
			queue: false
		}).clearQueue();
		$(this).find('span').velocity({
			duration: '200',
			'background-color': '#ff077f',
			queue: false
		}).clearQueue();
	});
	$('.modal-close').on('click', function () {
		$('#thanks').modal('hide');
	});
	$('#law .modal-close').on('click', function () {
		$('#law').modal('hide');
	});

	//	отправка формы через аякс
	var form = $('#mailing');
	// Get the messages div.
	var formMessages = $('#formMessages');
	$(form).submit(function (e) {
		// Stop the browser from submitting the form.
		e.preventDefault();
		// Serialize the form data.
		var formData = $(form).serialize(),
			result = $.ajax({
				type: 'POST',
				url: form.attr('action'),
				data: $(form).serialize(),
				success: function (response, textStatus, jqXHR) {
					console.log(response);
					if (response === "success") {
						formMessages.html('');
						form.velocity({
							duration: '3000',
							height: '0',
							opacity: '0'
						});
						setTimeout(function () {
							form.addClass('hide');
							$('#thanks').modal('show');
						}, 3000);
					} else {
						result = response;
						setTimeout(function () {
							$('#sended').text('Еще раз?');
							formMessages.html('<p class="robotoBold center pink-text">' + result + '</p>');
						}, 1000);
					}
				}
			});

	});

});
