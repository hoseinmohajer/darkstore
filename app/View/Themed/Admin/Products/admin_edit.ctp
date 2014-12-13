<?php
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
	'10' => 'category 10');
?>
<div class="container">
<div class="row" id="products-add-form-container">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>
					<span>Add Product</span>
					<span class="pull-right">
						<a class="close-form">
							<i class="glyphicon glyphicon-remove"></i>
						</a>
					</span>
				</h3>
			</div>
			<div class="clear-fixed"></div>
			<div class="panel-body">
				<?php echo $this->Form->create("Product", array("method" => "post", "type" => "file", "role" => "form", "class" => "validate")); ?>
				<div class="form-group">
					<?php 
						echo $this->Form->input('product_category', array("label" => false, "type" => "select", "options" => $options, "class" => "validate[required] form-control placeholder"));
					?>
					<br>
					<?php
						echo $this->Form->input("product_name", array("label" => false, "type" => "text", "class" => "validate[required] form-control placeholder", "placeholder" => "Name", "data-productid" => $this->request->data['Product']['id']));
						echo $this->Form->input("product_cost", array("label" => false, "type" => "text", "class" => "validate[required] form-control placeholder", "placeholder" => "Name", "placeholder" => "$1000"));
						echo $this->Form->input("product_description", array("label" => false, "type" => "textarea", "class" => "validate[required] form-control placeholder", "placeholder" => "Description"));
						?>
						<div class="checkbox">
							<label style="margin-left:15px;">
								<?php echo $this->Form->input('product_published', array("label" => "Published", "type" => "checkbox", "style" => "margin-top:0px;")); ?>
							</label>
						</div>
						<button type="button" data-toggle="modal" id="product-edit-form-upload-images" data-target="#products-upload-edit-form-modal" class="btn btn-warning">Upload Images</button>
					<div id="product-images-preview-container"></div>
					<!-- <div class="panel panel-primary">
						<div class="panel-heading">
							<h4>Images Editor</h4>
						</div>
						<div class="panel-body">
							<?php	
								
							?>
						</div>
						<div class="panel-footer"></div>
					</div> -->
					
				</div>
			</div>	
			<div class="panel-footer">
					<?php
						echo $this->Form->button("Save", array("class" => "btn btn-success green", "type" => "submit", "escape" => true, 'formnovalidate' => false));
						echo $this->Form->end();
					?>
			</div>	
		</div>	
	</div>
	<div class="modal fade" id="products-upload-edit-form-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel">Upload Product Image</h4>
				</div>
				<iframe name="product-images-upload-iframe-edit-form" id="product-images-upload-iframe-edit-form" style="display: none"></iframe>
				<div class="modal-body">
					<?php
						echo $this->Form->create("Productimage", array("action" => "add", "method" => "POST", "type" => "file", "role" => "form", "class" => "validate form-horizontal", "target" => "product-images-upload-iframe-edit-form"));
						echo $this->Form->input('image', array("label" => false, "type" => "file", "class" => "validate[required] form-control placeholder"));
					?>	
					<div class="form-group">
						<div class="col-sm-10">
							<div class="checkbox">
								<label>
									<?php echo $this->Form->input('isMain', array("label" => "Is Main", "type" => "checkbox", "style" => "margin-top:0px;")); ?>
								</label>
							</div>
						</div>
					</div>
					<?php
						echo $this->Form->input("directoryname", array("label" => false, "type" => "hidden"));
						echo $this->Form->input("productid", array("label" => false, "type" => "hidden"));
					?>
				</div>
				<div class="modal-footer">
					<span class="pull-right">
						<?php echo $this->Form->button("Close", array("class" => "btn btn-default", "type" => "button", "data-dismiss" => "modal")); ?>
					</span>
					<span class="pull-left">
						<?php
							echo $this->Form->button("Upload", array("class" => "btn btn-success", "id" => "modal-edit-form-upload-image-button", "type" => "submit", "escape" => true, "formnovalidate" => false));
							echo $this->Form->end();
						?>
					</span>
				</div>
			</div>
		</div>	
	</div>	
</div>
</div>