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

	/*** START products add form***/
	$("#products-add-form-close-btn").click(function (){
		$("#products-add-form-container").hide();
	});
	$("#products-add-form-button").click(function (){
		$("#products-add-form-container").show();
		$(".main-slideshow-content-form").hide();
		$("#products-list-form-container").hide();
	});
	$("#products-list").click(function (){
		$("#products-list-form-container").show();
		$(".main-slideshow-content-form").hide();
		$("#products-add-form-container").hide();
	});
	$("#products-list-form-close-btn").click(function (){
		$("#products-list-form-container").hide();
	});

	$("#ProductName").change(function (){
		if($("#ProductName").val() !== ""){	
			if($("#product-add-form-upload-images").html() === undefined)
				$("#products-add-form-images-input").append('<button type="button" data-toggle="modal" id="product-add-form-upload-images" data-target="#products-upload-form-modal" class="btn btn-warning">Upload Images</button>');
			$("#ProductimagesDirectoryname").val( $("#ProductName").val() );
		} else{
			$('#product-add-form-upload-images').remove();
		}
	});


	//console.log($("#products-upload-image-form"))
	// $("#products-upload-image-form").submit(function(e){
		//e.preventDefault();
		//console.log("hello");
	// });
	$("#product-images-upload-button").click(function (){
		console.log($("#product-images-upload-button"));
		$("#products-upload-form-modal").modal('hide');
		// $.post('/admin/productimages/getimage', , function (data){
		// 	$.each(data, function (key, value){
		// 		console.log(key, value);
		// 		$("#products-add-form-images-input").append("<div>hello</div>");
		// 	});

		// }, 'json');
	});
	
	/*** END products add form***/

	/*** START slideshow add form***/
	$("#mainSlideshowForm").click(function (){
		$("#flash_custom").hide();
		$(".main-slideshow-content-form").show();
		$("#products-list-form-container").hide();
		$("#products-add-form-container").hide();
	});
	$("#slideshow-add-form-close-btn").click(function (){
		$(".main-slideshow-content-form").hide();
	});
	/*** END slideshow add form***/
});
function danial(data){console.log($.parseJSON(data));}