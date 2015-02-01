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


	/*** START Filter scripts***/
	$(".myfilter").click(function (){
		var filtervalue = $(this).data("filtervalue");
		for (var i = 1; i <= 10; i++) {
			if(filtervalue === i || filtervalue === '*'){
				$('.' + i).show('slow');
				$(".myfilter").removeClass("selected");
				$(this).addClass("selected");
			}else {
				$('.' + i).hide('slow');
			}
		};
	});
	/*** END Filter scripts***/

	/*** START Shopping cart script***/
	var ids = [];
	$(".product-itemes-shopping-cart").click(function (){
		var flag = $(this).data("flag");
		var id = $( $(this).find("img") ).attr("id");

		if(flag === 0){
			$( $(this).find("img") ).attr("src", "/theme/Vitrin/images/icons/shopping-star-24.png");
			$("#" + id + "_product-that-added-to-shopping-cart").show();
			ids.push(id);
			$(".fixed-menu").find(".shopping-basket-itemes").html("<b>Show basket\'s itemes (" + ids.length + ")</b>");
			$(".fixed-menu").find(".shopping-basket-itemes").show();
			$(this).data("flag", 1);
		} else {
			$( $(this).find("img") ).attr("src", "/theme/Vitrin/images/icons/shopping-link-24.png");
			$("#" + id + "_product-that-added-to-shopping-cart").hide();
			ids.splice( $.inArray(id,ids) ,1 );
			$(".fixed-menu").find(".shopping-basket-itemes").html("<b>Show basket\'s itemes (" + ids.length + ")</b>");
			if(ids.length === 0)
				$(".fixed-menu").find(".shopping-basket-itemes").hide();
			$(this).data("flag", 0);
		}


		console.log(ids);
	});

	$(".shopping-basket-itemes").click(function (){
		
		var params = {
			itemes: ids
		}
		$.post("/Vitrins/shopping_cart", params, function (data, status){
			data = $.parseJSON(data);
			$(".shopping-cart-container").html('');
			$(".shopping-cart-footer").html('');
			var totalCost = 0;
			$.each(data, function (key, value) {
				totalCost += parseInt(value.productCost);
				console.log(value);
				$(".shopping-cart-container").append('<table border="1px" width="100%">'+
					'<tr id="' + value.id + '">'+
						'<td>'+
							'<img width="100px" height="100px" src="' + value.imgAddress + '">'+
						'</td>'+
						'<td>'+
							'<span>' + value.productName + '</span>'+
						'</td>'+
						'<td>'+
							'<span>' + value.productCost + '</span>'+
						'</td>'+
						'<td>'+
							'<textarea rows="4">' + value.productDescription + '</textarea>'+
						'</td>'+
					'</tr>	'+
				'</table>'
				);
			});
			$(".shopping-cart-footer").append(
				'<br><span style="float:left;">' +
					'<a href="/Vitrins/shopping_cart" style="padding:10px;" class="button">Purchase</a>' +
				'</span>' +
				'<span style="float:right;">' +
					'<b>Total Cost: </b> ' + totalCost +
				'</span>');
		});
	});

	/*** END Shopping cart script***/


	/*** START My pop up box ***/
	function deselect(e) {
		$('.message-backdrop').hide();
		$('body').removeClass('message-backdrop-body');
		$('.pop').slideFadeToggle(function() {
			e.removeClass('selected');
		});    
	}

	$(function() {
		$('#show-shopping-cart-content').on('click', function() {
			if($(this).hasClass('selected')) {
				deselect($(this));               
			} else {
				$('.message-backdrop').show();
				$('body').addClass('message-backdrop-body');
				$(this).addClass('selected');
				$('.pop').slideFadeToggle();
			}
			return false;
		});

		$('.close').on('click', function() {
			deselect($('#show-shopping-cart-content'));
			return false;
		});
	});

	$.fn.slideFadeToggle = function(easing, callback) {
		return this.animate({ opacity: 'toggle', height: 'toggle' }, 'fast', easing, callback);
	};
	/*** END My pop up box ***/

});


function removeShoppingItemes(id) {
	$("#" + id).remove();
	// '<td>'+
	// 	'<a href="javascript:void(0);" class="button" style="padding:8px;" onclick="removeShoppingItemes(\'' + value.id + '\');">Delete</a>'+
	// '</td>'+
}