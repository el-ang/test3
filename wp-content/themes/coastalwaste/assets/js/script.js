(function($){
	/* Sliders */
	var swiper = new Swiper('.coastal_slider .swiper-container', {
		lazy: true,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		autoplay: {
			delay: 7000,
			disableOnInteraction: false,
		},
		autoHeight: true,
	});
	
	/* Parrallaxes */
	var timer;
		$(window).bind('resize', function() {
		clearTimeout(timer);
		timer = setTimeout(function(){ $(window).resize(); }, 250);
	});
	
	/* Bootstrap Nav **/
	$('.navbar .dropdown').hover(function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(150).slideDown();
		}, function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(50).slideUp();
		});
		
		
	if($(window).width()<=980){
		$('.navbar .dropdown > a').toggle(function(e) {
			e.preventDefault();
			e.stopPropagation();
			return false;
		}, function(){
			location.href = this.href;
		});
	} else {
		$('.navbar .dropdown > a').click(function(){
		location.href = this.href;
		});
	}
	
	
})(jQuery)