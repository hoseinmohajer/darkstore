$(document).ready(function() {
	
	/*** START main slide show add form ***/
	$("#slide1").click(function(){
		$("#slideshow1-submit-form").toggle(function(){
			// ...
		});
		$("#slideshow2-submit-form").hide();
		$("#slideshow3-submit-form").hide();
		$("#slideshow4-submit-form").hide();
	});
	$("#slide2").click(function(){
		$("#slideshow2-submit-form").toggle(function(){
			// ...
		});
		$("#slideshow1-submit-form").hide();
		$("#slideshow3-submit-form").hide();
		$("#slideshow4-submit-form").hide();
	});
	$("#slide3").click(function(){
		$("#slideshow3-submit-form").toggle(function(){
			// ...
		});
		$("#slideshow2-submit-form").hide();
		$("#slideshow1-submit-form").hide();
		$("#slideshow4-submit-form").hide();
	});
	$("#slide4").click(function(){
		$("#slideshow4-submit-form").toggle(function(){
			// ...
		});
		$("#slideshow3-submit-form").hide();
		$("#slideshow2-submit-form").hide();
		$("#slideshow1-submit-form").hide();
	});
	/*** END main slide show add form ***/

	/*** START main slideshow list ***/
	$("#slideshow-list-type1").click(function (){
		$("#slideshow-list-type1").next("ul").toggle(function (){
			// ...
		});
	});
	$("#slideshow-list-type2").click(function (){
		$("#slideshow-list-type2").next("ul").toggle(function (){
			// ...
		});
	});
	$("#slideshow-list-type3").click(function (){
		$("#slideshow-list-type3").next("ul").toggle(function (){
			// ...
		});
	});
	/*** END main slideshow list ***/

	/*** START goods add form***/
		$(".close-form").click(function (){
			dashboard.closeForm("#goods-add-form-container");
		});
		$("#goods-add-form-button").click(function (){
			dashboard.openForm("#goods-add-form-container");
		});
		$("#goods-list").click(function (){
			dashboard.openForm("#goods-list-form-container");
		});
		$(".close-form").click(function (){
			dashboard.closeForm("#goods-list-form-container");
		});
	/*** END goods add form***/
});
