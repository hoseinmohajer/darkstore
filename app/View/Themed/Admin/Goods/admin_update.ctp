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
<div class="row" id="goods-add-form-container">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>
					<span>Add Good</span>
					<span class="pull-right">
						<a class="close-form">
							<i class="glyphicon glyphicon-remove"></i>
						</a>
					</span>
				</h3>
			</div>
			<div class="clear-fixed"></div>
			<div class="panel-body">
				<?php echo $this->Form->create("Good", array("method" => "post", "type" => "file", "role" => "form", "class" => "validate")); ?>
				<div class="form-group">
					<?php 
						echo $this->Form->input('category', array("label" => false, "type" => "select", "options" => $options, "class" => "validate[required] form-control placeholder"));
					?>
					<br>
					<?php
						echo $this->Form->input("name", array("label" => false, "type" => "text", "class" => "validate[required] form-control placeholder", "placeholder" => "Name"));
						echo $this->Form->input("cost", array("label" => false, "type" => "text", "class" => "validate[required] form-control placeholder", "placeholder" => "Name", "placeholder" => "$1000"));
						echo $this->Form->input("description", array("label" => false, "type" => "textarea", "class" => "validate[required] form-control placeholder", "placeholder" => "Description")); 
						$imgurl = '/../../files/goodimages/' . preg_replace('/\s+/', '', $this->request->data['Good']['name']) . '/';	
						foreach($this->request->data['Good']['images_name'] as $images):
							if(isset($images['main']) && $images['main'] == '1' && $images['name'] != null){
								echo "<a href='#'><img class='col-md-3 img-responsive img-thumbnail bg-primary' style='height:200px;' src=" . $imgurl . $images['name'] . "></a>";
							} elseif(isset($images['name']) && $images['name'] != null){
								echo "<a href='#'><img class='col-md-3 img-responsive img-thumbnail bg-info' style='height:200px;' src=" . $imgurl . $images['name'] . "></a>";
							}
						endforeach;
					?>
					
					
				</div>
			</div>	
			<div class="panel-footer">
					<?php echo $this->Form->end("Save", array("class" => "btn btn-success green", "type" => "submit", "escape" => true, 'formnovalidate' => false)); ?>
			</div>	
		</div>	
	</div>	
</div>
</div>