$(document).ready(function (){
	
	/*** START fixe menu js ****/
	$(window).scroll(function() {
		var fixedMenu = $('.fixed-menu');
		var purchaseFixedMenu = $('.purchase-fixed-menu');
		var goodsFixedMenu = $('.goods-fixed-menu');

		if(fixedMenu.offset() && $(window).scrollTop()){
			_menuHolder(fixedMenu, 610);
		}
		if(purchaseFixedMenu.offset() && $(window).scrollTop()){
			_menuHolder(purchaseFixedMenu, 264);
		}
		if(goodsFixedMenu.offset() && $(window).scrollTop()){
			_menuHolder(goodsFixedMenu, 952);
		}
	});
	function _menuHolder (selector, last_position) {
		if(selector.offset().top <= $(window).scrollTop()){
			selector.addClass('fixed');
		}
		if($(window).scrollTop() <= last_position) {
			selector.removeClass('fixed');
		}
	}
	/**** END fixe menu js ***/

	
	$('.example2').wmuSlider({
		touch: true,
		animation: 'slide'
	});

});