$(document).ready(function() {
	$("#closeForm").find("img").click(function (){
		dashboard.closeForm(".main-slideshow-content-form");
	});
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

});
