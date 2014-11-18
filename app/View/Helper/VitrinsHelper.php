<?php
	App::uses('AppHelper', 'View/Helper');

	class VitrinsHelper extends AppHelper {
		public $helpers = array('Html', 'Form', 'Session');
		public function topmenu($activeStyleClass){
			$homeActiveClass = '';
			$goodsActiveClass = '';
			switch ($activeStyleClass) {
				case 'home':
					$homeActiveClass = 'active';
					break;
				case 'goods':
					$goodsActiveClass = 'active';
					break;
				
				default:
					$activeStyleClass = '';
					break;
			}
			echo "<div id='header'>
						" . $this->_logo() . "
						<!-- NAVIGATION -->
						<div class='nine columns'>
							<nav class='top-bar'>
								<ul>
						        	<li class='name'>
						        		<h1>
						        			<a href='#'> Please select your page</a>
						        		</h1>
						        	</li>
						        	<li class='toggle-topbar'><a href='#'></a></li>
						        </ul>
								<section>
									<ul class='right'>
										<li class='has-dropdown'>" . $this->Html->Link('Goods', array('action' => 'goods'), array('class' => $goodsActiveClass)) . "
											<ul class='dropdown'>
												<li><a href='javascript:void(0);'>Goods1</a></li>
												<li><a href='javascript:void(0);'>Goods2</a></li>
												<li><a href='javascript:void(0);'>Goods3</a></li>
												<li><a href='javascript:void(0);'>Goods4</a></li>
											</ul>
										</li>
										<li><a href='javascript:void(0);'>Contact</a></li>
										<li>" . $this->Html->Link('Home', array('controller' => 'Vitrins', 'action' => 'index'), array('class' => $homeActiveClass)) . "</li>
									</ul>
								</section>
							</nav>
						</div>
						<!-- END NAVIGATION -->
						<div class='shadow-down'></div>
					</div>";
		}
		public function _logo(){
			return "<div class='three columns'>
						" . $this->Html->Link('DarkStore', array('action' => 'index'), array('id' => 'logo', 'title' => 'DarkStore')) . "
					</div>";
		}
		public function slideshow($slideshowData) {
			$slideshowContentType1 = '';
			$slideshowContentType2 = '';
			$slideshowContentType3 = '';
			$slideshowContentType4 = '';
				if(isset($slideshowData)){
					foreach ($slideshowData as $key => $value) {
									foreach ($slideshowData[$key] as $key => $value) {
										switch ($value['type']) {
											case '1':
												foreach ($value as $key => $value) {
													switch ($key) {
														case 'backgroundimage':
															$backgroundimageAddress = "/files/mainslideshow/background/".$value ;
															break;
														case 'title':
															$title = $value;
															break;
														case 'subtitle':
															$subtitle = $value;
															break;
													}
												}
												$slideshowContentType1 .= '<li data-transition="papercut" data-slotamount="15" data-masterspeed="300" data-delay="9400">
													' . $this->Html->image($backgroundimageAddress, array('alt' => 'DarkStore')) . '
													<div class="caption very_big_colour lfl stl uppercase"  
																						data-x="18" 
																						data-y="293" 
																						data-speed="300" 
																						data-start="500" 
																						data-easing="easeOutExpo"
																						data-end="8800"
																						data-endspeed="300"
																						data-endeasing="easeInSine" >' . $title . '</div>
													<div class="caption very_big_black lfl stl uppercase"  
																						data-x="18" 
																						data-y="333" 
																						data-speed="300" 
																						data-start="800" 
																						data-easing="easeOutExpo"
																						data-end="9100"
																						data-endspeed="300"
																						data-endeasing="easeInSine" >' . $subtitle . '</div>
												</li>';
												break;
											case '2':
												foreach ($value as $key => $value) {
													switch ($key) {
														case 'backgroundimage':
															$backgroundimageAddress = "/files/mainslideshow/background/".$value ;
															break;
														case 'insideimage1':
															$insideimage1 = "/files/mainslideshow/insideimage/".$value ;
															break;
														case 'insideimage2':
															$insideimage2 = "/files/mainslideshow/insideimage/".$value ;
															break;
														case 'insideimage3':
															$insideimage3 = "/files/mainslideshow/insideimage/".$value ;
															break;
													}
												}
												$slideshowContentType2 .= '<li data-transition="3dcurtain-vertical" data-slotamount="10" data-masterspeed="300" data-delay="6000" data-thumb="files/images/thumbs/thumb5.jpg">
												' . $this->Html->image($backgroundimageAddress, array('alt' => 'DarkStore')) . '
													<div class="caption large_text lft ltb"  
																					 data-x="0" 
																					 data-y="100" 
																					 data-speed="800" 
																					 data-start="1000" 
																					 data-easing="easeOutExpo"  >
																					' . $this->Html->image($insideimage1, array('alt' => 'DarkStore', 'width' => '244px', 'height' => '478px')) . '
																					</div> 	
													<div class="caption large_text lft ltb"  
																					 data-x="350" 
																					 data-y="100" 
																					 data-speed="1000" 
																					 data-start="1500" 
																					 data-easing="easeOutExpo"  >
																					 ' . $this->Html->image($insideimage2, array('alt' => 'DarkStore', 'width' => '305px', 'height' => '460px')) . '
																					 </div>
													<div class="caption large_text lft ltb"  
																					 data-x="700" 
																					 data-y="100" 
																					 data-speed="1200" 
																					 data-start="2000" 
																					 data-easing="easeOutExpo"  >
																					 ' . $this->Html->image($insideimage3, array('alt' => 'DarkStore', 'width' => '244px', 'height' => '478px')) . '
																					 </div>
												</li>';
												break;
											case '3':
												foreach ($value as $key => $value) {
													switch ($key) {
														case 'backgroundimage':
															$backgroundimageAddress = "/files/mainslideshow/background/".$value ;
															break;
														case 'insideimage1':
															$insideimage1 = "/files/mainslideshow/insideimage/".$value ;
															break;
														case 'insideimage2':
															$insideimage2 = "/files/mainslideshow/insideimage/".$value ;
															break;
														case 'insideimage3':
															$insideimage3 = "/files/mainslideshow/insideimage/".$value ;
															break;
														case 'title':
															$title = $value;
															break;
														case 'subtitle':
															$subtitle = $value;
															break;
													}
												}
												$slideshowContentType3 .= '<li data-transition="cube" data-slotamount="10" data-masterspeed="300" data-delay="8000" data-thumb="files/images/thumbs/thumb5.jpg">
												' . $this->Html->image($backgroundimageAddress, array('alt' => 'DarkStore')) . '
													<div class="caption lfl ltl"  
																					 data-x="-60" 
																					 data-y="160" 
																					 data-speed="1200" 
																					 data-start="1500" 
																					 data-easing="easeOutExpo" data-end="7300" data-endspeed="300" data-endeasing="easeInSine" >
																					 ' . $this->Html->image($insideimage1, array('alt' => 'DarkStore', 'width' => '570px', 'height' => '337px')) . '
																					 </div>
													<div class="caption lfl ltl"  
																					 data-x="320" 
																					 data-y="240" 
																					 data-speed="1200" 
																					 data-start="1800" 
																					 data-easing="easeOutExpo" data-end="7400" data-endspeed="300" data-endeasing="easeInSine" >
																					 ' . $this->Html->image($insideimage2, array('alt' => 'DarkStore', 'width' => '260px', 'height' => '317px')) . '
																					 </div>
													<div class="caption lfl ltl"  
																					 data-x="250" 
																					 data-y="320" 
																					 data-speed="1200" 
																					 data-start="2100" 
																					 data-easing="easeOutExpo" data-end="7600" data-endspeed="300" data-endeasing="easeInSine" >
																					 ' . $this->Html->image($insideimage3, array('alt' => 'DarkStore', 'width' => '135px', 'height' => '241px')) . '
																					</div>        
													<div class="caption very_big_colour sft str uppercase"  
																						 data-x="600" 
																						 data-y="293" 
																						 data-speed="300" 
																						 data-start="3000" 
																						 data-easing="easeOutExpo" data-end="7600" data-endspeed="300" data-endeasing="easeInSine" >' . $title . '</div>
													<div class="caption very_big_black sfb str uppercase"  
																						 data-x="600" 
																						 data-y="333" 
																						 data-speed="300" 
																						 data-start="3000" 
																						 data-easing="easeOutExpo" data-end="7600" data-endspeed="300" data-endeasing="easeInSine" >' . $subtitle . '</div>
												  </li>';
												break;
											case '4':
												foreach ($value as $key => $value) {
													switch ($key) {
														case 'backgroundimage':
															$backgroundimageAddress = "/files/mainslideshow/background/".$value ;
															break;
														case 'insideimage1':
															$insideimage1 = "/files/mainslideshow/insideimage/".$value ;
															break;
														case 'title':
															$title = $value;
															break;
														case 'subtitle':
															$subtitle = $value;
															break;
													}
												}
												 $slideshowContentType4 = '<li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="300" data-delay="9000" data-thumb="images/thumbs/thumb4.jpg">
												  ' . $this->Html->image($backgroundimageAddress, array('alt' => 'DarkStore')) . '
													<div class="caption fade lfl stl" data-autoplay="false" data-x="380" data-y="180" data-speed="500" data-start="10" data-easing="easeOutBack">
														' . $this->Html->image($insideimage1, array('alt' => 'DarkStore', 'width' => '570px', 'height' => '337px')) . '
													</div>
													<div class="caption very_big_colour lfl uppercase"  
																						 data-x="18" 
																						 data-y="293" 
																						 data-speed="300" 
																						 data-start="500" 
																						 data-easing="easeOutExpo" data-endspeed="300" data-endeasing="easeInSine" >' . $title . '</div>
													<div class="caption very_big_black lfl uppercase"  
																						 data-x="18" 
																						 data-y="333" 
																						 data-speed="300" 
																						 data-start="800" 
																						 data-easing="easeOutExpo" data-endspeed="300" data-endeasing="easeInSine" >' . $subtitle . '</div>
																						 <!-- <div class="caption very_big_black lfl uppercase"  
																						 data-x="18" 
																						 data-y="387" 
																						 data-speed="300" 
																						 data-start="1000" 
																						 data-easing="easeOutExpo" data-endspeed="300" data-endeasing="easeInSine" >' . $title . ' : ' . $subtitle . '</div> -->
												  </li>';
												break;
										}
									}
					}
				}
			echo '<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<ul>
							' . $slideshowContentType1 . '
							<!-- THE SECOND SLIDE -->
							' . $slideshowContentType2 . '
							<!-- THE THIRD SLIDE -->
							' . $slideshowContentType3 . '
							  <!-- THE FOURTH SLIDE -->
							' . $slideshowContentType4 . '
						</ul>
					<div class="tp-bannertimer"></div>
					</div>
				</div>';
		}
	}
?>
