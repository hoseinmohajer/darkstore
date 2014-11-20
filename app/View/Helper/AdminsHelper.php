<?php
	App::uses('AppHelper', 'View/Helper');
	class AdminsHelper extends AppHelper{
		public $helpers = array('Html', 'Form', 'Session');
		public function slideshowaddform() {
			echo '
				<section class="widget slideshowform 	small hide-widget main-slideshow-content-form" >
					<header>
						<span class="icon">🔿</span>
						<hgroup>
							<h1>Main Slideshow (Add)</h1>
							<h2>Set image and title for show in main page slideshow</h2>
						</hgroup>
						<aside>
							<span>
								<a href="javascript:void(0);">⚙</a>
								<ul class="settings-dd">
									<li id="closeForm"><label>Exit Form</label><input type="checkbox" checked="checked"></li>
									<li><label>Option b</label><input type="checkbox" checked="checked"></li>
									<li><label>Option c</label><input type="checkbox"></li>
								</ul>
							</span>
						</aside>
					</header>
					<div class="content">
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
							$this->Form->create("Slideshow", array("action" => "addmainslideshow", "type" => "file")).
							$this->Form->input("slideshows.type", array("label" => false, "type" => "hidden", "value" => "1")).
							$this->Form->input("slideshows.backgroundimage", array("label" => "Background", "type" => "file")).
							$this->Form->input("slideshows.title", array("label" => false, "style" => "direction:ltr", "placeholder" => "Title", "maxLength"=>"33")).
							$this->Form->input("slideshows.subtitle", array("label" => false, "style" => "direction:ltr", "placeholder" => "SubTitle", "maxLength"=>"28")).
							$this->Form->end("Save", array("class" => "green", "type" => "submit", "escape" => true, 'formnovalidate' => false)).
						'</fieldset>
						<fieldset id="slideshow2-submit-form">
						<legend>Slideshow (Type 2)</legend>'.
							$this->Form->create("Slideshow", array("action" => "addmainslideshow", "type" => "file")).
							$this->Form->input("slideshows.type", array("label" => false, "type" => "hidden", "value" => "2")).
							$this->Form->input("slideshows.backgroundimage", array("label" => "Background", "type" => "file")).
							$this->Form->input("slideshows.insideimage1", array("label" => "Inside Image1", "type" => "file")).
							$this->Form->input("slideshows.insideimage2", array("label" => "Inside Image2", "type" => "file")).
							$this->Form->input("slideshows.insideimage3", array("label" => "Inside Image3", "type" => "file")).
							$this->Form->end("Save", array("class" => "green", "type" => "submit", "escape" => true)).
						'</fieldset>
						<fieldset id="slideshow3-submit-form">
						<legend>Slideshow (Type 3)</legend>'.
							$this->Form->create("Slideshow", array("action" => "addmainslideshow", "type" => "file")).
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
							$this->Form->create("Slideshow", array("action" => "addmainslideshow", "type" => "file")).
							$this->Form->input("slideshows.type", array("label" => false, "type" => "hidden", "value" => "4")).
							$this->Form->input("slideshows.backgroundimage", array("label" => "Background", "type" => "file")).
							$this->Form->input("slideshows.insideimage1", array("label" => "Inside Image1", "type" => "file")).
							$this->Form->input("slideshows.title", array("label" => false, "style" => "direction:ltr", "placeholder" => "Title", "maxLength"=>"33")).
							$this->Form->input("slideshows.subtitle", array("label" => false, "style" => "direction:ltr", "placeholder" => "SubTitle", "maxLength"=>"28")).
							$this->Form->end("Save", array("type" => "submit", "escape" => true)).
						'</fieldset>
						</div>
					</div>
				</section>';
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
		public function goodsaddform() {
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
				<section class="widget small hide-widget goods-add-form" >
					<header>
						<span class="icon">🔿</span>
						<hgroup>
							<h1>Add Goods</h1>
							<h2>Insert goods iamges and details</h2>
						</hgroup>
						<aside>
							<span>
								<a href="javascript:void(0);">⚙</a>
								<ul class="settings-dd">
									<li id="closeForm"><label>Exit Form</label><input type="checkbox" checked="checked"></li>
									<li><label>Option b</label><input type="checkbox" checked="checked"></li>
									<li><label>Option c</label><input type="checkbox"></li>
								</ul>
							</span>
						</aside>
					</header>
					<div class="content">
						<div class="field-wrap">
							<fieldset id="">
	        					<legend>Goods add form</legend>'.
								$this->Form->create("Good", array("controller" => "admins", "action" => "goods", "type" => "file")).
								$this->Form->input('Good.category', array("type" => "select", "options" => $options)).
								$this->Form->input("Good.name", array("label" => "Name", "type" => "text")).
								$this->Form->input("Good.cost", array("label" => "Cost", "style" => "direction:ltr", "placeholder" => "Title", "maxLength"=>"33")).
								$this->Form->input("Good.description", array("label" => "false", "type" => "textarea", "style" => "direction:ltr", "placeholder" => "SubTitle", "maxLength"=>"28")).
								$this->Form->end("Save", array("class" => "green", "type" => "submit", "escape" => true, 'formnovalidate' => false)).
							'</fieldset>
						</div>
					</div>
				</section>';
		}
	}
?>