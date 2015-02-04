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

	$.get("/Vitrins/shopping_cart_session_get", function (data, status){
		if(data.length !== 0 && status === "success"){
			var sessionData = $.parseJSON(data);
			if(sessionData.length !== 0){
				$(".fixed-menu").find(".shopping-basket-itemes").html("<b>Show basket\'s itemes (" + sessionData.length + ")</b>");
				$(".fixed-menu").find(".shopping-basket-itemes").show();
			}
			$.each(sessionData, function (key, value) {
				var id = value;
				var ths = $(".product-itemes-shopping-cart").find("#" + id).attr("src", "/theme/Vitrin/images/icons/shopping-star-24.png");
				$(ths).parent('a').data("flag", 1);
				$("#" + id + "_product-that-added-to-shopping-cart").show();
			});
		} else {
			return false;
		}
	});

	var ids = [];
	$(".product-itemes-shopping-cart").click(function (){
		var flag = $(this).data("flag");
		var id = $( $(this).find("img") ).attr("id");
		var thiz = this;
		if(flag === 0){
			$.get("/Vitrins/shopping_cart_session_get", function (data, status){
				if(status === "success"){
					var sessionData = $.parseJSON(data);
					ids = (sessionData !== null && sessionData.length !== 0) ? sessionData : [];
					ids.push(id);
					var params = {
						ids: ids
					}
					$.post("/Vitrins/shopping_cart_session_set", params, function (data, status){
						if(status === "success"){
							$( $(thiz).find("img") ).attr("src", "/theme/Vitrin/images/icons/shopping-star-24.png");
							$("#" + id + "_product-that-added-to-shopping-cart").show();
							$(".fixed-menu").find(".shopping-basket-itemes").html("<b>Show basket\'s itemes (" + ids.length + ")</b>");
							$(".fixed-menu").find(".shopping-basket-itemes").show();
							$(thiz).data("flag", 1);
						} else {
							return false;
						}
					});
				}
			});		
		} else {
			$.get("/Vitrins/shopping_cart_session_get", function (data, status){
				if(status === "success"){
					var sessionData = $.parseJSON(data);
					sessionData.splice( $.inArray(id,sessionData) ,1 );
					ids = sessionData;
					var params = {
						ids: ids
					}
					$.post("/Vitrins/shopping_cart_session_set", params, function (data, status){
						if(status === "success"){
							$( $(thiz).find("img") ).attr("src", "/theme/Vitrin/images/icons/shopping-link-24.png");
							$("#" + id + "_product-that-added-to-shopping-cart").hide();
							$(".fixed-menu").find(".shopping-basket-itemes").html("<b>Show basket\'s itemes (" + ids.length + ")</b>");
							if(ids.length === 0)
								$(".fixed-menu").find(".shopping-basket-itemes").hide();
							$(thiz).data("flag", 0);
						} else {
							return false;
						}
					});
				} else {
					return false;
				}
			});
		}
	});

	$(".shopping-basket-itemes").click(function (){
		$.get("/Vitrins/shopping_cart", function (data, status){
			data = $.parseJSON(data);
			$(".shopping-cart-container").html('');
			$(".shopping-cart-footer").html('');
			var totalCost = 0;
			$.each(data, function (key, value) {
				totalCost += parseInt(value.productCost);
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
							'<select>'+
								'<option selected>1</option>'+
								'<option>2</option>'+
								'<option>3</option>'+
								'<option>4</option>'+
								'<option>5</option>'+
							'</select>'+
						'</td>'+
						'<td>'+
							'<textarea rows="4">' + value.productDescription + '</textarea>'+
						'</td>'+
						'<td>'+
							'<a href="javascript:void();" class="button shopping-cart-popup-delete-btn" onclick="removeShoppingItemes(\'' + value.id + '\');">DELETE</a>'+
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
	$.get("/Vitrins/shopping_cart_session_get", function (data, status){
		if(status === "success"){
			var thiz = $(".product-itemes-shopping-cart").find("#" + id);
			var sessionData = $.parseJSON(data);
			sessionData.splice( $.inArray(id,sessionData) ,1 );
			ids = sessionData;
			var params = {
				ids: ids
			}
			$.post("/Vitrins/shopping_cart_session_set", params, function (data, status){
				if(status === "success"){
					$(thiz).attr("src", "/theme/Vitrin/images/icons/shopping-link-24.png");
					$("#" + id + "_product-that-added-to-shopping-cart").hide();
					$(".fixed-menu").find(".shopping-basket-itemes").html("<b>Show basket\'s itemes (" + ids.length + ")</b>");
					if(ids.length === 0)
						$(".fixed-menu").find(".shopping-basket-itemes").hide();
					$(thiz).parent('a').data("flag", 0);
					$("#" + id).remove();
				} else {
					return false;
				}
			});
		} else {
			return false;
		}
	});
}