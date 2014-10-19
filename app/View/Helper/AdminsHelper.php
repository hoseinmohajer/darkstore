<?php
	App::uses('AppHelper', 'View/Helper');
	class AdminsHelper extends AppHelper{
		public $helpers = array('Html', 'Form', 'Session');
		public function slideshowform() {
			echo '
				<section class="widget 	small hide-widget main-slideshow-content-form" >
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
									<li id="closeForm"><label>Exit Form</label><input type="checkbox"></li>
									<li><label>Option b</label><input type="checkbox" checked="checked"></li>
									<li><label>Option c</label><input type="checkbox"></li>
								</ul>
							</span>
						</aside>
					</header>
					<div class="content">
						<div class="field-wrap">';
					echo $this->Form->create("Slideshow", array("action" => "mainslideshow", "type" => "post"));
					echo $this->Form->input("Discription", array("label" => false, "style" => "direction:ltr", "placeholder" => "Discription", "type" => "textarea"));
					echo $this->Form->input("Background Image", array("type" => "file"));
					echo '</div>';
					echo $this->Form->button("Login", array("class" => "green", "type" => "submit", "escape" => true));
					echo '</div></section>';
		}
	}
?>