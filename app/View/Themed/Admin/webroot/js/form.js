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
		$("#products-edit-form-container").remove();
		$("#products-add-form-container").show();
		$(".main-slideshow-content-form").hide();
		$("#products-list-form-container").hide();
		$("#slideshow-list-items-container").hide();
	});
	$("#products-list").click(function (){
		$("#products-edit-form-container").remove();
		$("#products-list-form-container").show();
		$(".main-slideshow-content-form").hide();
		$("#products-add-form-container").hide();
		$("#slideshow-list-items-container").hide();
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
		$("#slideshow-list-items-container").hide();
	});

	$("#slideshow-add-form-close-btn").click(function (){
		$(".main-slideshow-content-form").hide();
	});
	/*** END slideshow add form***/


	/*** START slideshow edit form***/
		$("#slideshow-list-container-close-btn").click(function (){
			$("#slideshow-list-items-container").hide();
		});
		$("#mainSlideshowList").click(function (){
			$("#flash_custom").hide();
			$(".main-slideshow-content-form").hide();
			$("#products-list-form-container").hide();
			$("#products-add-form-container").hide();
			$("#slideshow-list-items-container").show();
		});
		$("#slideshow-edit-modal-save-button-id").click(function () {
			$("#slideshow-modal-edit-form-save-button").click();
			$("#slideshow-edit").modal('hide');
		});
	/*** END slideshow edit form***/
});
function showImages(data, selector){
	$("#" + selector).html(' ');
	if(data.length !== 0){
		$.each($.parseJSON(data), function (key, value){
			var srcValue = value.Productimage.productimages_imagesDirectoryAddress + '/' + value.Productimage.productimages_name;
			if(value.Productimage.productimages_isMain === '1'){
				$("#" + selector).append('<div id="imgbox_' + value.Productimage.id + '" class="col-xs-6 col-md-3"><a href="javascript:void(0);" class="thumbnail"><span onclick="deleteImage(\'' + value.Productimage.id + '\');"><i class="glyphicon glyphicon-remove"></i></span><span class="pull-right label label-danger">Main</span><img src="' + srcValue+ '" alt="DarkStore Product"></a></div>');
			} else{
				$("#" + selector).append('<div id="imgbox_' + value.Productimage.id + '" class="col-xs-6 col-md-3"><a href="javascript:void(0);" class="thumbnail"><span onclick="deleteImage(\'' + value.Productimage.id + '\');"><i class="glyphicon glyphicon-remove"></i></span><img src="' + srcValue+ '" alt="DarkStore Product"></a></div>');
			}
		});
	}
}
function deleteImage(id){
	if (confirm("Are you sure?") == true) {
		$.post('/admin/productimages/deleteimage/' + id, id, function (data, status){
			if(status === 'success'){
				$("#imgbox_" + id).remove();
			}
		});
	}	
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
			// ...
		});
	}
}
function productEdit(id){
	$.get('/admin/products/edit/' + id, function (data, status){
		if(status === 'success'){
			$("#products-list-form-container").hide();
			var data = $.parseJSON(data);
			formData = $.parseJSON(data.editData);
			$.each(formData, function (key, value){
				$(".widget-container").append('<script id="edit-products-remove-script">$("#products-edit-form-close-btn").click( function () { $("#products-edit-form-container").remove();$("#edit-products-remove-script").remove(); });</script>' +
					
					'<div class="row" id="products-edit-form-container">' +
					'<div class="col-md-12">' +
						'<div class="panel panel-default">' +
							'<div class="panel-heading">' +
								'<h3>' +
									'<span>EDIT Product</span>' +
									'<span class="pull-right">' +
										'<a id="products-edit-form-close-btn">' +
											'<i class="glyphicon glyphicon-remove"></i>' +
										'</a>' +
									'</span>' +
								'</h3>' +
							'</div>' +
							'<div class="clear-fixed"></div>' +
							'<div class="panel-body">' +
								'<iframe name="product-edit-form-iframe" id="product-edit-form-iframe" style="display: none"></iframe>' + 
								'<form action="/admin/products/edit/' + id + '" method="post" role="form" class="validate" id="ProductEditForm" enctype="multipart/form-data" accept-charset="utf-8" target="product-edit-form-iframe">' +
									'<div class="form-group">' +
										'<br>' +
										'<label for="product-edit-form-category">Category</label>'+
										'<select  class="validate[required] form-control placeholder" id="product-edit-form-category">' +
											'<option value="1">category 1</option>' +
											'<option value="2">category 2</option>' +
											'<option value="3">category 3</option>' +
											'<option value="4">category 4</option>' +
											'<option value="5">category 5</option>' +
											'<option value="6">category 6</option>' +
											'<option value="7">category 7</option>' +
											'<option value="8">category 8</option>' +
											'<option value="9">category 9</option>' +
											'<option value="10">category 10</option>' +
										'</select>' + 
										'<input name="data[Product][product_category]" id="product-edit-form-category-hidden-input" type="hidden" value="">' +
										'<br>' +
										'<label for="ProductProductName">Name</label>'+
										'<input name="data[Product][product_name]" class="validate[required] form-control placeholder" placeholder="Name" type="text" id="ProductProductName" value='+value.product_name+'>' +
										'<label for="ProductProductCost">Csot</label>'+
										'<input name="data[Product][product_cost]" class="validate[required] form-control placeholder" placeholder="$10000" type="text" id="ProductProductCost" value='+value.product_cost+'>' +
										'<label for="ProductProductDescription">Description</label>'+
										'<textarea name="data[Product][product_description]" class="validate[required] form-control placeholder" placeholder="Description" id="ProductProductDescription" cols="30" rows="6">' + value.product_description + '</textarea>' +
										'<input type="checkbox" id="product-edit-form-published-checkbox" style="width:20px;">' +
										'<label for="product-edit-form-published-checkbox">Published</label>'+
										'<input name="data[Product][product_published]" id="product-edit-form-published" type="hidden" value="">' +
										'<input type="submit" id="product-edit-form-submit-btn"  value="save" style="display:none;">' +
									'</div>' +
								'</form>' +
								'<div id="product-edit-form-images-preview-container"></div>' +


								'<!-- Button trigger modal -->' +
								'<div class="col-md-12"><button type="button" id="test" class="btn btn-warning" data-toggle="modal" data-target="#product-edit-form-modal" onclick="setProdutEditFormDataForPopUp(\''+id+'\', \''+value.product_name+'\');">' +
								  'Upload Images' +
								'</button></div>' +
								'<!-- Modal -->' +
								'<div class="modal fade" id="product-edit-form-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">' +
								  '<div class="modal-dialog">' +
								    '<div class="modal-content">' +
								      '<div class="modal-header">' +
								        '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
								        '<h4 class="modal-title" id="myModalLabel">Upload Images (Product Edit Form)</h4>' +
								      '</div>' +
								      '<div class="modal-body">' +
								      	'<iframe name="product-images-edit-form-iframe" id="product-images-edit-form-iframe" style="display: none"></iframe>' +
								        '<form class="validate" id="product-edit-form-pop-up-modal-form-id" target="product-images-edit-form-iframe" method="POST" action="/admin/products/edit/"' + id + ' enctype="multipart/form-data">' +
								        	'<input name="data[Productimage][image]" type="file" class="validate" >' +
								        	'<input name="data[Productimage][directoryname]" type="hidden" value="" id="edit-form-modal-directory-name-hidden-input">' +
								        	'<input name="data[Productimage][productid]" type="hidden" value="" id="edit-form-modal-product-id-hidden-input">' +
								        	
								        	'<input type="checkbox" id="product-edit-form-modal-is-main-checkbox" style="width:20px;">' +
											'<label for="product-edit-form-modal-is-main-checkbox">isMain</label>'+
								        	'<input name="data[Productimage][isMain]" id="product-edit-form-modal-is-main-checkbox-hidden-id" type="hidden" value="">' +

								        	'<input type="submit" id="edit-form-modal-submit" class="btn btn-success" style="display:none;">' +
								        '</form>' +
								      '</div>' +
								      '<div class="modal-footer">' +
								      	'<span class="pull-right">' + 
								        	'<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>' +
								      	'</span>' + 
								      	'<span class="pull-left">' + 
											'<button type="button" class="btn btn-success" onclick="fireProductModalSubmit();">Upload</button>' +
								      	'</span>' + 
								      '</div>' +
								    '</div>' +
								  '</div>' +
								'</div>' +

							'</div>	' +
							'<div class="panel-footer">' +
								'<button type="button" class="btn btn-success green" onclick="fireProductEditFormSubmit();" type="submit">Save</button>' +
							'</div>	' +
						'</div>	' +
					'</div>' +
				'</div>');
				if(value.product_published === '1'){
					$("#product-edit-form-published-checkbox").prop('checked', true);
				}else{
					$("#product-edit-form-published-checkbox").prop('checked', false);
				}
			});
			showImages(data.imageInfo, "product-edit-form-images-preview-container");
		}
	});
}
function fireProductEditFormSubmit () {
	var checkBoxValue = ($("#product-edit-form-published-checkbox").prop('checked') === true) ? 1 : 0;
	$("#product-edit-form-published").val(checkBoxValue);
	$("#product-edit-form-category-hidden-input").val( $("#product-edit-form-category").val() );
	$("#product-edit-form-submit-btn").click();
	$("#products-edit-form-container").hide();
}
function fireProductModalSubmit () {
	var checkBoxValue = ($("#product-edit-form-modal-is-main-checkbox").prop('checked') === true) ? 1 : 0;
	$("#product-edit-form-modal-is-main-checkbox-hidden-id").val(checkBoxValue);
	$("#product-edit-form-modal").hide();
	$("#edit-form-modal-submit").click();
}
function setProdutEditFormDataForPopUp (id, productName) {
	$("#product-edit-form-pop-up-modal-form-id").attr("action", "/admin/productimages/add");
	$("#edit-form-modal-directory-name-hidden-input").val(productName);
	$("#edit-form-modal-product-id-hidden-input").val(id);
}
function slideshowDelete(id) {
	if (confirm("Are you sure?") == true) {
		$.post('/admin/slideshows/delete/' + id, function (data, status) {
			if(status === 'success')
				$("#slideshowItem" + id).remove();
		});
    }
}
function slideshowEdit (id) {
	var id = id;
	$("#slideshow-edit-modal-body").empty();
	$("#slideshow-edit-modal-label").empty();
	$.get('/admin/slideshows/update/' + id, function (data, status) {
		if(status === 'success'){
			var slidehsowData = $.parseJSON(data);
			var formInputs = '';
			$.each(slidehsowData, function (key, value) {
				var data = value["Slideshow"];
				switch(data.type){
					case '1':
						$("#slideshow-edit-modal-label").text("Edit Slideshow Type: 1");
						formInputs = '<div class="col-xs-3 col-md-3" style="padding:2px;">' + 
										'<span class="thumbnail"><span class="pull-right label label-info" style="margin-bottom:3px;">Background</span>' + 
											'<img src="/files/mainslideshow/background/' + data.backgroundimage + '">' + 
											'<input type="file" name="data[slideshows][backgroundimage]" style="margin-bottom:2px;" id="slideshowsBackgroundimage" required="required">' + 
										'</span>' + 
									'</div>' + 
									'<input name="data[slideshows][title]" style="direction:ltr" value="' + data.title + '" maxlength="33" id="slideshow-edit-form-modal-title" type="text" required="required">' + 
									'<input name="data[slideshows][subtitle]" style="direction:ltr" value="' + data.subtitle + '" maxlength="28" id="slideshow-edit-form-modal-subtitle" type="text" required="required">';
					break;
					case '2':
						$("#slideshow-edit-modal-label").text("Edit Slideshow Type: 2");
						formInputs ='<div class="col-xs-3 col-md-3" style="padding:2px;">' +
										'<span class="thumbnail"><span class="pull-right label label-info" style="margin-bottom:3px;">Background</span>' +
											'<img src="/files/mainslideshow/background/' + data.backgroundimage + '">' +
											'<input type="file" name="data[slideshows][backgroundimage]" style="margin-bottom:2px;" id="slideshowsBackgroundimage" required="required">' +
										'</span>' +
									'</div>' +
									'<div class="col-xs-3 col-md-3" style="padding:2px;" id="slideshow-edit-form-modal-inside-image-1">' +
											'<span class="thumbnail"><span  class="pull-right label label-info" style="margin-bottom:3px;">Inside Image1</span>' +
												'<img src="/files/mainslideshow/insideimage/' + data.insideimage1 + '">' +
											'<input type="file" name="data[slideshows][insideimage1]" style="margin-bottom:2px;" id="slideshowsInsideimage1" required="required">' +
										'</span>' +
									'</div>' +
									'<div class="col-xs-3 col-md-3" style="padding:2px;" id="slideshow-edit-form-modal-inside-image-2">' +
										'<span class="thumbnail"><span  class="pull-right label label-info" style="margin-bottom:3px;">Inside Image2</span>' +
											'<img src="/files/mainslideshow/insideimage/' + data.insideimage2 + '">' +
											'<input type="file" name="data[slideshows][insideimage2]" style="margin-bottom:2px;" id="slideshowsInsideimage2" required="required">' +
										'</span>' +
									'</div>' +
									'<div class="col-xs-3 col-md-3" style="padding:2px;" id="slideshow-edit-form-modal-inside-image-3">' +
										'<span class="thumbnail"><span  class="pull-right label label-info" style="margin-bottom:3px;">Inside Image3</span>' +
											'<img src="/files/mainslideshow/insideimage/' + data.insideimage3 + '">' +
											'<input type="file" name="data[slideshows][insideimage3]" style="margin-bottom:2px;" id="slideshowsInsideimage3" required="required">' +
										'</span>' +
									'</div>';
					break;
					case '3':
						$("#slideshow-edit-modal-label").text("Edit Slideshow Type: 3");
						formInputs = '<div class="col-xs-3 col-md-3" style="padding:2px;">' +
											'<span class="thumbnail"><span class="pull-right label label-info" style="margin-bottom:3px;">Background</span>' +
												'<img src="/files/mainslideshow/background/' + data.backgroundimage + '">' +
												'<input type="file" name="data[slideshows][backgroundimage]" style="margin-bottom:2px;" id="slideshowsBackgroundimage" required="required">' +
											'</span>' +
										'</div>' +
										'<div class="col-xs-3 col-md-3" style="padding:2px;" id="slideshow-edit-form-modal-inside-image-1">' +
											'<span class="thumbnail"><span  class="pull-right label label-info" style="margin-bottom:3px;">Inside Image1</span>' +
												'<img src="/files/mainslideshow/insideimage/' + data.insideimage1 + '">' +
												'<input type="file" name="data[slideshows][insideimage1]" style="margin-bottom:2px;" id="slideshowsInsideimage1" required="required">' +
											'</span>' +
										'</div>' +
										'<div class="col-xs-3 col-md-3" style="padding:2px;" id="slideshow-edit-form-modal-inside-image-2">' +
											'<span class="thumbnail"><span  class="pull-right label label-info" style="margin-bottom:3px;">Inside Image2</span>' +
												'<img src="/files/mainslideshow/insideimage/' + data.insideimage2 + '">' +
												'<input type="file" name="data[slideshows][insideimage2]" style="margin-bottom:2px;" id="slideshowsInsideimage2" required="required">' +
											'</span>' +
										'</div>' +
										'<div class="col-xs-3 col-md-3" style="padding:2px;" id="slideshow-edit-form-modal-inside-image-3">' +
											'<span class="thumbnail"><span  class="pull-right label label-info" style="margin-bottom:3px;">Inside Image3</span>' +
												'<img src="/files/mainslideshow/insideimage/' + data.insideimage3 + '">' +
												'<input type="file" name="data[slideshows][insideimage3]" style="margin-bottom:2px;" id="slideshowsInsideimage3" required="required">' +
											'</span>' +
										'</div>' +
										'<input name="data[slideshows][title]" style="direction:ltr" value="' + data.title + '" maxlength="33" id="slideshow-edit-form-modal-title" type="text" required="required">' +
										'<input name="data[slideshows][subtitle]" style="direction:ltr" value="' + data.subtitle + '" maxlength="28" id="slideshow-edit-form-modal-subtitle" type="text" required="required">';
					break;
					case '4':
						$("#slideshow-edit-modal-label").text("Edit Slideshow Type: 4");
						formInputs ='<div class="col-xs-3 col-md-3" style="padding:2px;">' +
										'<span class="thumbnail"><span class="pull-right label label-info" style="margin-bottom:3px;">Background</span>' +
											'<img src="/files/mainslideshow/background/' + data.backgroundimage + '">' +
											'<input type="file" name="data[slideshows][backgroundimage]" style="margin-bottom:2px;" id="slideshowsBackgroundimage" required="required">' +
										'</span>' +
									'</div>' +
									'<div class="col-xs-3 col-md-3" style="padding:2px;" id="slideshow-edit-form-modal-inside-image-1">' +
										'<span class="thumbnail"><span  class="pull-right label label-info" style="margin-bottom:3px;">Inside Image1</span>' +
											'<img src="/files/mainslideshow/insideimage/' + data.insideimage1 + '">' +
											'<input type="file" name="data[slideshows][insideimage1]" style="margin-bottom:2px;" id="slideshowsInsideimage1" required="required">' +
										'</span>' +
									'</div>' +
									'<input name="data[slideshows][title]" style="direction:ltr" value="' + data.title + '" maxlength="33" id="slideshow-edit-form-modal-title" type="text" required="required">' +
									'<input name="data[slideshows][subtitle]" style="direction:ltr" value="' + data.subtitle + '" maxlength="28" id="slideshow-edit-form-modal-subtitle" type="text" required="required">';
					break;
				}
			});

			$("#slideshow-edit-modal-body").append('<iframe name="slideshow-edit-modal-iframe" id="slideshow-edit-modal-iframe" style="display: none"></iframe>' +
				'<form action="/admin/slideshows/update/' + id + '" method="post" role="form" class="validate form-horizontal" target="slideshow-edit-modal-iframe" id="SlideshowUpdateForm" enctype="multipart/form-data" accept-charset="utf-8">'
				+ formInputs +
				'<input type="submit" id="slideshow-modal-edit-form-save-button" style="display:none;">' +
				'</form>');
		}	
	});	
};

