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
		$("#ProductAddForm")[0].reset();
		$("#product-images-preview-container").html(' ');
		$('#product-add-form-upload-images').remove();
		$('#save-product-before-upload-images-button').remove();
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

	$("#ProductProductName").change(function (){
		if($("#ProductProductName").val() !== ""){
			if($("#ProductProductName").data('flag') === 0 && $("#save-product-before-upload-images-button").html() === undefined){
				$("#products-add-form-images-input").append('<button type="button" id="save-product-before-upload-images-button" onclick="saveProductBeforeUploadImages();" class="btn btn-danger">Save Then Upload Images</button>');
			} else if($("#ProductProductName").data('flag') === 1 && $("#product-add-form-upload-images").html() === undefined) {
				$("#products-add-form-images-input").append('<button type="button" data-toggle="modal" onclick="updateProductFormData();" id="product-add-form-upload-images" data-target="#products-upload-form-modal" class="btn btn-warning">Upload Images</button>');
			}
			$("#ProductimageDirectoryname").val( $("#ProductProductName").val() );
		} else{
			$('#product-add-form-upload-images').remove();
			$('#save-product-before-upload-images-button').remove();
		}
	});

	$("#product-images-modal-upload-button").click(function (){
		// $("#ProductimageAddForm")[0].reset();
		$("#products-upload-form-modal").modal('hide');
	});
	
	// product add form data save
	$("#ProductAddForm").submit(function (event){
		event.preventDefault();
		var published = ($("#ProductProductPublished").prop('checked') === true) ? 1 : 0;
		var params = {
			category : $("#ProductProductCategory").val(),
			name : $("#ProductProductName").val(),
			cost : $("#ProductProductCost").val(),
			description : $("#ProductProductDescription").val(),
			published : published
		}
		$.post('/admin/products/add', params, function (data, status) {
			if(status === 'success'){
				if($("#ProductProductName").data('close') === 1){
					$("#ProductProductName").data('close', 0);
					$("#ProductProductName").data('flag', 0);
					$("#products-add-form-container").hide();
					return true;	
				}else{
					// alert("'Product Add form data', saved successfully");
					$("#ProductProductName").data('flag', 1);
					$("#ProductProductName").attr('data-id', data);
					$("#ProductimageProductid").val(data);
					$("#save-product-before-upload-images-button").remove();
					if($("#ProductProductName").data('flag') === 1 && $("#product-add-form-upload-images").html() === undefined)
						$("#products-add-form-images-input").append('<button type="button" data-toggle="modal" onclick="updateProductFormData();" id="product-add-form-upload-images" data-target="#products-upload-form-modal" class="btn btn-warning">Upload Images</button>');
					$("#product-add-form-upload-images").click();
				}
			} else{
				alert("'Product Add form data', ERROR! :(");
			}
		});
	});
	$("#add-product-close-button").click(function (event){
		event.preventDefault();
		if($("#ProductProductName").data('flag') === 1){
			updateProductFormData();
			$("#ProductProductName").data('close', 0);
			$("#ProductProductName").data('flag', 0);
			$("#products-add-form-container").hide();
		} else {
			$("#ProductProductName").attr('data-close', 1);
			$("#ProductProductName").data('close', 1);
			saveProductBeforeUploadImages();
		}
	});
	/*** END products add form***/

	/*** START product edit form ***/
		$("#modal-edit-form-upload-image-button").click(function (){
			$("#products-upload-edit-form-modal").modal('hide');
		});

		$("#product-edit-form-upload-images").click(function (){
			$("#ProductimageDirectoryname").val( $("#ProductProductName").val() );
			$("#ProductimageProductid").val( $("#ProductProductName").data('productid') );
		});
	/*** END product edit form ***/

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
function saveProductBeforeUploadImages (){
	$("#add-product-save-button").click();
}
function updateProductFormData(){
	var id = $("#ProductProductName").data('id');
	if(id !== undefined){
		var published = ($("#ProductProductPublished").prop('checked') === true) ? 1 : 0;
		var params = {
			category : $("#ProductProductCategory").val(),
			name : $("#ProductProductName").val(),
			cost : $("#ProductProductCost").val(),
			description : $("#ProductProductDescription").val(),
			published : published
		}
		$.post('/admin/products/update/' + id, params, function (data, status) {
			console.log(data, status);
		});
	}
}