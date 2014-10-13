<?php
	App::uses('AppHelper', 'View/Helper');

	class VitrinsHelper extends AppHelper {
		public $helpers = array('Html', 'Form', 'Session');
		public function topmenu($activeStyleClass){
			switch ($activeStyleClass) {
				case 'home':
					$activeStyleClass = 'active';
					break;
				
				default:
					$activeStyleClass = '';
					break;
			}
			echo "<div id='header'>
						<div class='row'>
							" . $this->_logo() . "
							<!-- NAVIGATION -->
							<div class='nine columns'>
								<nav class='top-bar'>
									<section>
										<ul class='right'>
											<li>" . $this->Html->Link('Home', array('action' => 'index'), array('class' => $activeStyleClass)) . "</li>
											<li class='has-dropdown'><a href='javascript:void(0);'>Goods</a>
												<ul class='dropdown'>
													<li><a href='javascript:void(0);'>Goods1</a></li>
													<li><a href='javascript:void(0);'>Goods2</a></li>
													<li><a href='javascript:void(0);'>Goods3</a></li>
													<li><a href='javascript:void(0);'>Goods4</a></li>
												</ul>
											</li>
											<li><a href='javascript:void(0);'>Contact</a></li>
										</ul>
									</section>
								</nav>
							</div>
							<!-- END NAVIGATION -->
							<div class='shadow-down'></div>
						</div>
					</div>";
		}
		public function _logo(){
			return "<div class='three columns'>
						" . $this->Html->Link('DarkStore', array('action' => 'index'), array('id' => 'logo', 'title' => 'DarkStore')) . "
					</div>";
		}
		public function slideshow() {
			echo '<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<ul>
							<li data-transition="papercut" data-slotamount="15" data-masterspeed="300" data-delay="9400">
								' . $this->Html->image('/images/slides/slide1.jpg', array('alt' => 'DarkStore')) . '
								<div class="caption very_big_colour lfl stl uppercase"  
																	data-x="18" 
																	data-y="293" 
																	data-speed="300" 
																	data-start="500" 
																	data-easing="easeOutExpo"
																	data-end="8800"
																	data-endspeed="300"
																	data-endeasing="easeInSine" >Vestibulum posuere placerat metus</div>
								<div class="caption very_big_black lfl stl uppercase"  
																	data-x="18" 
																	data-y="333" 
																	data-speed="300" 
																	data-start="800" 
																	data-easing="easeOutExpo"
																	data-end="9100"
																	data-endspeed="300"
																	data-endeasing="easeInSine" >Nec porttitor nisl tempus et</div>
							</li>
							<!-- THE SECOND SLIDE -->
							<li data-transition="3dcurtain-vertical" data-slotamount="10" data-masterspeed="300" data-delay="6000" data-thumb="files/images/thumbs/thumb5.jpg">
							' . $this->Html->image('/images/slides/slide2.jpg', array('alt' => 'DarkStore')) . '
								<div class="caption large_text lft ltb"  
																 data-x="0" 
																 data-y="100" 
																 data-speed="800" 
																 data-start="1000" 
																 data-easing="easeOutExpo"  >
																' . $this->Html->image('/images/slides/man_1.png', array('alt' => 'DarkStore')) . '
																</div> 	
								<div class="caption large_text lft ltb"  
																 data-x="350" 
																 data-y="100" 
																 data-speed="1000" 
																 data-start="1500" 
																 data-easing="easeOutExpo"  >
																 ' . $this->Html->image('/images/slides/man_2.png', array('alt' => 'DarkStore')) . '
																 </div>
								<div class="caption large_text lft ltb"  
																 data-x="700" 
																 data-y="100" 
																 data-speed="1200" 
																 data-start="2000" 
																 data-easing="easeOutExpo"  >
																 ' . $this->Html->image('/images/slides/man_3.png', array('alt' => 'DarkStore')) . '
																 </div>
							</li>
							  
							<!-- THE THIRD SLIDE -->
							<li data-transition="cube" data-slotamount="10" data-masterspeed="300" data-delay="8000" data-thumb="files/images/thumbs/thumb5.jpg">
							' . $this->Html->image('/images/slides/slide3.jpg', array('alt' => 'DarkStore')) . '
								<div class="caption lfl ltl"  
																 data-x="-60" 
																 data-y="160" 
																 data-speed="1200" 
																 data-start="1500" 
																 data-easing="easeOutExpo" data-end="7300" data-endspeed="300" data-endeasing="easeInSine" >
																 ' . $this->Html->image('/images/slides/mbpro.png', array('alt' => 'DarkStore')) . '
																 </div>
								<div class="caption lfl ltl"  
																 data-x="320" 
																 data-y="240" 
																 data-speed="1200" 
																 data-start="1800" 
																 data-easing="easeOutExpo" data-end="7400" data-endspeed="300" data-endeasing="easeInSine" >
																 ' . $this->Html->image('/images/slides/ipad_front_view.png', array('alt' => 'DarkStore')) . '
																 </div>
								<div class="caption lfl ltl"  
																 data-x="250" 
																 data-y="320" 
																 data-speed="1200" 
																 data-start="2100" 
																 data-easing="easeOutExpo" data-end="7600" data-endspeed="300" data-endeasing="easeInSine" >
																 ' . $this->Html->image('/images/slides/ipad_front_view.png', array('alt' => 'DarkStore')) . '
																</div>        
								<div class="caption very_big_colour sft str uppercase"  
																	 data-x="600" 
																	 data-y="293" 
																	 data-speed="300" 
																	 data-start="3000" 
																	 data-easing="easeOutExpo" data-end="7600" data-endspeed="300" data-endeasing="easeInSine" >Responsive Design</div>
								<div class="caption very_big_black sfb str uppercase"  
																	 data-x="600" 
																	 data-y="333" 
																	 data-speed="300" 
																	 data-start="3000" 
																	 data-easing="easeOutExpo" data-end="7600" data-endspeed="300" data-endeasing="easeInSine" >Nec porttitor nisl tempus et</div>
							  </li>
							  
							  <!-- THE FOURTH SLIDE -->
							  <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="300" data-delay="9000" data-thumb="images/thumbs/thumb4.jpg">
							  ' . $this->Html->image('/images/slides/slide4.jpg', array('alt' => 'DarkStore')) . '
								<div class="caption fade lfl stl" data-autoplay="false" data-x="380" data-y="180" data-speed="500" data-start="10" data-easing="easeOutBack">
									<iframe src="" width="550" height="309"></iframe>
								</div>
								<div class="caption very_big_colour lfl uppercase"  
																	 data-x="18" 
																	 data-y="293" 
																	 data-speed="300" 
																	 data-start="500" 
																	 data-easing="easeOutExpo" data-endspeed="300" data-endeasing="easeInSine" >Video Support</div>
								<div class="caption very_big_black lfl uppercase"  
																	 data-x="18" 
																	 data-y="333" 
																	 data-speed="300" 
																	 data-start="800" 
																	 data-easing="easeOutExpo" data-endspeed="300" data-endeasing="easeInSine" >Play Vimeo Or</div>
																	 <div class="caption very_big_black lfl uppercase"  
																	 data-x="18" 
																	 data-y="387" 
																	 data-speed="300" 
																	 data-start="1000" 
																	 data-easing="easeOutExpo" data-endspeed="300" data-endeasing="easeInSine" >Youtube Videos</div>
							  </li>
						</ul>
					<div class="tp-bannertimer"></div>

					</div>
				</div>';
		}
	}
?>
