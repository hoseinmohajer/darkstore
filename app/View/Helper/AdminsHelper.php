<?php
	App::uses('AppHelper', 'View/Helper');
	class AdminsHelper extends AppHelper{
		public $helpers = array('Html', 'Form', 'Session');
		public function slideshowaddform() {
			echo '
				<div class="row slideshowform main-slideshow-content-form" style="display:none;">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>
									<span>Main Slideshow (Add)</span>
									<span class="label label-info">Set image and title for show in main page slideshow</span>
									<span class="pull-right">
										<a id="slideshow-add-form-close-btn">
											<i class="glyphicon glyphicon-remove"></i>
										</a>
									</span>
								</h3>
							</div>
							<div class="clear-fixed"></div>
							<div class="panel-body">
								<div class="field-wrap">
								<div class="slideshow-form-button-box">
									<legend>Choose & Upload slide info</legend>' . 
									$this->Form->button("Slide1", array("class" => "blue", "id" => "slide1")).
									$this->Form->button("Slide2", array("class" => "blue", "id" => "slide2")).
									$this->Form->button("Slide3", array("class" => "blue", "id" => "slide3")).
									$this->Form->button("Slide4", array("class" => "blue", "id" => "slide4")).
								'</div>
								<fieldset id="slideshow1-submit-form">
								<legend>Slideshow (Type 1)</legend>'.
									$this->Form->create("Slideshow", array("action" => "add", "type" => "file")).
									$this->Form->input("slideshows.type", array("label" => false, "type" => "hidden", "value" => "1")).
									$this->Form->input("slideshows.backgroundimage", array("label" => "Background", "type" => "file")).
									$this->Form->input("slideshows.title", array("label" => false, "style" => "direction:ltr", "placeholder" => "Title", "maxLength"=>"33")).
									$this->Form->input("slideshows.subtitle", array("label" => false, "style" => "direction:ltr", "placeholder" => "SubTitle", "maxLength"=>"28")).
									$this->Form->end("Save", array("class" => "green", "type" => "submit", "escape" => true, 'formnovalidate' => false)).
								'</fieldset>
								<fieldset id="slideshow2-submit-form">
								<legend>Slideshow (Type 2)</legend>'.
									$this->Form->create("Slideshow", array("action" => "add", "type" => "file")).
									$this->Form->input("slideshows.type", array("label" => false, "type" => "hidden", "value" => "2")).
									$this->Form->input("slideshows.backgroundimage", array("label" => "Background", "type" => "file")).
									$this->Form->input("slideshows.insideimage1", array("label" => "Inside Image1", "type" => "file")).
									$this->Form->input("slideshows.insideimage2", array("label" => "Inside Image2", "type" => "file")).
									$this->Form->input("slideshows.insideimage3", array("label" => "Inside Image3", "type" => "file")).
									$this->Form->end("Save", array("class" => "green", "type" => "submit", "escape" => true)).
								'</fieldset>
								<fieldset id="slideshow3-submit-form">
								<legend>Slideshow (Type 3)</legend>'.
									$this->Form->create("Slideshow", array("action" => "add", "type" => "file")).
									$this->Form->input("slideshows.type", array("label" => false, "type" => "hidden", "value" => "3")).
									$this->Form->input("slideshows.backgroundimage", array("label" => "Background", "type" => "file")).
									$this->Form->input("slideshows.insideimage1", array("label" => "Inside Image1", "type" => "file")).
									$this->Form->input("slideshows.insideimage2", array("label" => "Inside Image2", "type" => "file")).
									$this->Form->input("slideshows.insideimage3", array("label" => "Inside Image3", "type" => "file")).
									$this->Form->input("slideshows.title", array("label" => false, "style" => "direction:ltr", "placeholder" => "Title", "maxLength"=>"33")).
									$this->Form->input("slideshows.subtitle", array("label" => false, "style" => "direction:ltr", "placeholder" => "SubTitle", "maxLength"=>"28")).
									$this->Form->end("Save", array("class" => "green", "type" => "submit", "escape" => true)).
								'</fieldset>
								<fieldset id="slideshow4-submit-form">
								<legend>Slideshow (Type 4)</legend>'.
									$this->Form->create("Slideshow", array("action" => "add", "type" => "file")).
									$this->Form->input("slideshows.type", array("label" => false, "type" => "hidden", "value" => "4")).
									$this->Form->input("slideshows.backgroundimage", array("label" => "Background", "type" => "file")).
									$this->Form->input("slideshows.insideimage1", array("label" => "Inside Image1", "type" => "file")).
									$this->Form->input("slideshows.title", array("label" => false, "style" => "direction:ltr", "placeholder" => "Title", "maxLength"=>"33")).
									$this->Form->input("slideshows.subtitle", array("label" => false, "style" => "direction:ltr", "placeholder" => "SubTitle", "maxLength"=>"28")).
									$this->Form->end("Save", array("type" => "submit", "escape" => true)).
								'</fieldset>
								</div>
							</div>
						</div>
					</div>
				</div>';
		}
		public function slideshoweditform($slideshowEditFormData) {
			$listType1 = ''; $i = 0;
			$listType2 = ''; $j = 0;
			$listType3 = ''; $k = 0;
			$listType4 = ''; $c = 0;

			foreach ($slideshowEditFormData as $key => $value) {
				foreach ($value as $key => $value) {
					switch ($value['type']) {
						case '1':
							$i++;
							$listType1 .= '<li><a href="javascript:void(0);">' . $value['backgroundimage'] . '</a></li>';
							break;
						case '2':
							$j++;
							$listType2 .= '<li><a href="javascript:void(0);">' . $value['backgroundimage'] . '</a></li>';
							break;
						case '3':
							$k++;
							$listType3 .= '<li><a href="javascript:void(0);">' . $value['backgroundimage'] . '</a></li>';
							break;
						case '4':
							$c++;
							$listType4 .= '<li><a href="javascript:void(0);">' . $value['backgroundimage'] . '</a></li>';
							break;
					}
				}
			}
			return '<ul>
						<li>
							<a href="javascript:void(0);" id="slideshow-list-type1">Type 1<span style="float:right;">('.$i.') ></span></a>
							<ul class="slideshow-list">'. $listType1 .'</ul>
						</li>
						<li>
							<a href="javascript:void(0);" id="slideshow-list-type2">Type 2<span style="float:right;">('.$j.') ></span></a>
							<ul class="slideshow-list">'. $listType2 .'</ul>
						</li>
						<li>
							<a href="javascript:void(0);" id="slideshow-list-type3">Type 3<span style="float:right;">('.$k.') ></span></a>
							<ul class="slideshow-list">'. $listType3 .'</ul>
						</li>
						<li>
							<a href="javascript:void(0);" id="slideshow-list-type4">Type 4<span style="float:right;">('.$c.') ></span></a>
							<ul class="slideshow-list">'. $listType4 .'</ul>
						</li>
					</ul>';
		}
		public function productsaddform() {
			$options = array(
				'1' => 'category 1',
				'2' => 'category 2',
				'3' => 'category 3',
				'4' => 'category 4',
				'5' => 'category 5',
				'6' => 'category 6',
				'7' => 'category 7',
				'8' => 'category 8',
				'9' => 'category 9',
				'10' => 'category 10'
			);
			echo '
			<div class="row" id="products-add-form-container" style="display:none;">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>
									<span>Add Product</span>
									<span class="pull-right">
										<a id="products-add-form-close-btn">
											<i class="glyphicon glyphicon-remove"></i>
										</a>
									</span>
								</h3>
							</div>
							<div class="clear-fixed"></div>
							<div class="panel-body">'.
								$this->Form->create("Product", array("action" => "add", "method" => "post", "type" => "file", "role" => "form", "class" => "validate")).
								'<div class="form-group" id="products-add-form-images-input">'.
									$this->Form->input('Product.category', array("label" => false, "type" => "select", "options" => $options, "class" => "validate[required] form-control placeholder")).
									'<br>'.
									$this->Form->input("Product.name", array("label" => false, "type" => "text", "class" => "validate[required] form-control placeholder", "placeholder" => "Name")).
									$this->Form->input("Product.cost", array("label" => false, "type" => "text", "class" => "validate[required] form-control placeholder", "placeholder" => "$1000")).
									$this->Form->input("Product.description", array("label" => false, "type" => "textarea", "class" => "validate[required] form-control placeholder", "placeholder" => "Description")).
								
									'<div class="row" id="product-images-preview-container"></div>
								</div>
							</div>	
							<div class="panel-footer">'.
									$this->Form->end("Save", array("class" => "btn btn-success green", "type" => "submit", "escape" => true, 'formnovalidate' => false)).
							'</div>	
						</div>	
					</div>	
				</div>
					<div class="modal fade" id="products-upload-form-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
									<h4 class="modal-title" id="myModalLabel">Upload Product Image</h4>
								</div>
								<iframe name="product-images-upload-iframe" id="product-images-upload-iframe" style="display: none"></iframe>
								<div class="modal-body">' .
									$this->Form->create("Productimage", array("action" => "add", "method" => "POST", "type" => "file", "role" => "form", "class" => "validate form-horizontal", "target" => "product-images-upload-iframe")) . 
									$this->Form->input('image', array("label" => false, "type" => "file", "class" => "validate[required] form-control placeholder")) .
									'<div class="form-group">
										<div class="col-sm-10">
											<div class="checkbox">
												<label>' .
													$this->Form->input('isMain', array("Is Main" => "false", "type" => "checkbox", "style" => "margin-top:0px;")) .
												'</label>
											</div>
										</div>
									</div>' .

									$this->Form->input("directoryname", array("label" => false, "type" => "hidden")) .
								'</div>
								<div class="modal-footer">
									<span class="pull-right">' .
										$this->Form->button("Close", array("class" => "btn btn-default", "type" => "button", "data-dismiss" => "modal")) .
									'</span>
									<span class="pull-left">' .
										$this->Form->button("Upload", array("class" => "btn btn-success", "id" => "product-images-upload-button", "type" => "submit", "escape" => true, "formnovalidate" => false)) .
										$this->Form->end().
									'</span>
								</div>
							</div>
						</div>
					</div>
				</div>';	
		}
		public function productlist($productsData) {
			echo '<div class="row" id="products-list-form-container" style="display:none;">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3>
									<span>Products List</span>
									<span class="pull-right">
										<a id="products-list-form-close-btn">
											<i class="glyphicon glyphicon-remove"></i>
										</a>
									</span>
								</h3>
							</div>
							<div class="clear-fixed"></div>
							<div class="panel-body">
								<div class="table-responsive">
										<table class="table table-hover table-bordered table-condensed">
											<thead>
												<tr class="info">
													<th>#</th>
													<th>Name</th>
													<th>Cost</th>
													<th>Description</th>
													<th>Category</th>
													<th>Main Image</th>
													<th>Controls</th>
												</tr>';
									if(isset($productsData)){
										foreach ($productsData as $data):
											// $image_name = '';
											// foreach(unserialize($data['Product']['images_name']) as $images):
											// 	if(isset($images['main']) && $images['main'] === '1'){
											// 		$image_name = $images['name'];
											// 	}
											// endforeach;
											$imgurl = (isset($image_name) && $image_name != null) ? '<img width="100px" height="80px" src="../files/Productimages/' . preg_replace('/\s+/', '', $data['Product']['name']) . '/' . $image_name . '">' : "No main image";	
											echo '<tr>'.
													'<td>' . $data['Product']['id'] . '</td>'.
													'<td>' . $data['Product']['product_name'] . '</td>'.
													'<td>' . $data['Product']['product_cost'] . '</td>'.
													'<td class="description-td-width">' . $data['Product']['product_description'] . '</td>'.
													'<td>' . $data['Product']['product_category'] . '</td>'.
													'<td class="image-td-width">' . $imgurl . '</td>'.
													'<td>
														<div class="btn-group" role="group">'
														. $this->Html->Link("Edit", array("controller" => "Products", "action" => "update", $data['Product']['id']), array("class" => "btn btn-success", "style" => "color:white;")) .
														  $this->Html->Link("Delete", array("controller" => "Products", "action" => "update"), array("class" => "btn btn-danger", "style" => "color:white;")) .
														'</div>
													</td>'.
												'</tr>';
										endforeach;
									}
									echo '</thead>
										</table>
									</div>
								</div>
						</div>
					</div>';
		}
	}
?>
