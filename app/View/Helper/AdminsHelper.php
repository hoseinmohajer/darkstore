<?php
	App::uses('AppHelper', 'View/Helper');
	class AdminsHelper extends AppHelper{
		public $helpers = array('Html', 'Form', 'Session');
		public function slideshowform() {
			echo '
				<section class="widget slideshowform 	small hide-widget main-slideshow-content-form" >
					<header>
						<span class="icon">🔿</span>
						<hgroup>
							<h1>Main Slideshow</h1>
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
        				<legend>Slideshow Form (1)</legend>'.
							$this->Form->create("slideshows", array("action" => "mainslideshow", "type" => "file")).
							$this->Form->input("slideshows.backgroundimage", array("label" => "Background1", "type" => "file")).
							$this->Form->input("slideshows.title11", array("label" => false, "style" => "direction:ltr", "placeholder" => "Title")).
							$this->Form->input("slideshows.subtitle12", array("label" => false, "style" => "direction:ltr", "placeholder" => "SubTitle")).
							$this->Form->submit("Save", array("class" => "green", "type" => "submit", "escape" => true)).
						'</fieldset>
						<fieldset id="slideshow2-submit-form">
						<legend>Slideshow Form (2)</legend>'.
							$this->Form->create("slideshows", array("action" => "mainslideshow", "type" => "file")).
							$this->Form->input("slideshows.backgroundimage", array("label" => "Background2", "type" => "file")).
							$this->Form->input("slideshows.insideimage21", array("label" => "Inside Image1", "type" => "file")).
							$this->Form->input("slideshows.insideimage22", array("label" => "Inside Image2", "type" => "file")).
							$this->Form->input("slideshows.insideimage23", array("label" => "Inside Image3", "type" => "file")).
							$this->Form->end("Save", array("class" => "green", "type" => "submit", "escape" => true)).
						'</fieldset>
						<fieldset id="slideshow3-submit-form">
						<legend>Slideshow Form (3)</legend>'.
							$this->Form->create("slideshows", array("action" => "mainslideshow", "type" => "file")).
							$this->Form->input("slideshows.backgroundimage", array("label" => "Background3", "type" => "file")).
							$this->Form->input("slideshows.insideimage31", array("label" => "Inside Image1", "type" => "file")).
							$this->Form->input("slideshows.insideimage32", array("label" => "Inside Image2", "type" => "file")).
							$this->Form->input("slideshows.insideimage33", array("label" => "Inside Image3", "type" => "file")).
							$this->Form->input("slideshows.title31", array("label" => false, "style" => "direction:ltr", "placeholder" => "Title")).
							$this->Form->input("slideshows.subtitle32", array("label" => false, "style" => "direction:ltr", "placeholder" => "SubTitle")).
							$this->Form->end("Save", array("class" => "green", "type" => "submit", "escape" => true)).
						'</fieldset>
						<fieldset id="slideshow4-submit-form">
						<legend>Slideshow Form (4)</legend>'.
							$this->Form->create("slideshows", array("action" => "mainslideshow", "type" => "file")).
							$this->Form->input("slideshows.backgroundimage", array("label" => "Background4", "type" => "file")).
							$this->Form->input("slideshows.insideimage41", array("label" => "Inside Image1", "type" => "file")).
							$this->Form->input("slideshows.title41", array("label" => false, "style" => "direction:ltr", "placeholder" => "Title")).
							$this->Form->input("slideshows.subtitle42", array("label" => false, "style" => "direction:ltr", "placeholder" => "SubTitle")).
							$this->Form->end("Save", array("type" => "submit", "escape" => true)).
						'</fieldset>
						</div>
					</div>
				</section>';
		}
	}
?>