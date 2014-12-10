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
			$("#ProductimageDirectoryname").val( $("#ProductName").val() );
		} else{
			$('#product-add-form-upload-images').remove();
		}
	});
	$("#product-images-upload-button").click(function (){
		$("#products-upload-form-modal").modal('hide');
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
function showImages(data){
	$("#product-images-preview-container").html(' ');
	$.each($.parseJSON(data), function (key, value){
		var srcValue = value.Productimage.productimages_imagesDirectoryAddress + '/' + value.Productimage.productimages_name;
		if(value.Productimage.productimages_isMain === '1'){
			$("#product-images-preview-container").append('<div id="imgbox_' + value.Productimage.id + '" class="col-xs-6 col-md-3"><a href="javascript:void(0);" class="thumbnail"><span onclick="deleteImage(\'' + value.Productimage.id + '\');"><i class="glyphicon glyphicon-remove"></i></span><span class="pull-right label label-danger">Main</span><img src="' + srcValue+ '" alt="DarkStore Product"></a></div>');
		} else{
			$("#product-images-preview-container").append('<div id="imgbox_' + value.Productimage.id + '" class="col-xs-6 col-md-3"><a href="javascript:void(0);" class="thumbnail"><span onclick="deleteImage(\'' + value.Productimage.id + '\');"><i class="glyphicon glyphicon-remove"></i></span><img src="' + srcValue+ '" alt="DarkStore Product"></a></div>');
		}
	});
}
function deleteImage(id){
	$.post('/admin/productimages/deleteimage/' + id, id, function (data, status){
		if(status === 'success'){
			$("#imgbox_" + id).remove();
		}
	});
	
}