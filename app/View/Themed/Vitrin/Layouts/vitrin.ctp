<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
<?php echo $this->Html->charset(); ?>
<title>Dark Store | <?php echo $title_for_layout; ?></title>
<?php 
	echo $this->Html->css(array('foundation.min', 'styles', '/titan/css/jquery.titanlighbox', '/rs-plugin/css/settings', '/fonts/googleapis'));
	echo $this->Html->script(array('foundation.min', 'modernizr.foundation', 'app', 'jquery.1.7.2', 'jquery.min', '/rs-plugin/js/jquery.themepunch.plugins.min' , '/rs-plugin/js/jquery.themepunch.revolution.min'));
	echo $this->Html->css(array('/themes_panel/farbtastic/farbtastic', '/themes_panel/themes_panel', 'colors'));
	echo $this->fetch('css');
	echo $this->fetch('script');
?>
	<!--[if lt IE 9]>
		<?php echo $this->Html->script(array('/html5shiv.googlecode/html5')); ?>
	<![endif]-->
</head>
<body>

<!-- THEMES PANEL -->
<div id="themes_panel">
	<div id="themes_menu">
		<div class="segment">
			<h6>Theme Colour</h6>
			<ul class="theme buttons">
				<?php 
					echo "<li>" . $this->Html->link($this->Html->image('/themes_panel/buttons/theme_purple.jpg'), 'javascript:void(0);', array('escape' => false)) . "</li>";
					echo "<li>" . $this->Html->link($this->Html->image('/themes_panel/buttons/theme_pink.jpg'), 'javascript:void(0);', array('escape' => false)) . "</li>";
					echo "<li>" . $this->Html->link($this->Html->image('/themes_panel/buttons/theme_blue.jpg'), 'javascript:void(0);', array('escape' => false)) . "</li>";
					echo "<li>" . $this->Html->link($this->Html->image('/themes_panel/buttons/theme_green.jpg'), 'javascript:void(0);', array('escape' => false)) . "</li>";
					echo "<li>" . $this->Html->link($this->Html->image('/themes_panel/buttons/theme_orange.jpg'), 'javascript:void(0);', array('escape' => false)) . "</li>";
					echo "<li>" . $this->Html->link($this->Html->image('/themes_panel/buttons/theme_red.jpg'), 'javascript:void(0);', array('escape' => false)) . "</li>";
				?>
			</ul>
		</div>
		<div class="segment"> Background
			<div class="pick_color"> <a class="pick_color_btn">
				<form>
					<input type="text" id="color" name="color" readonly value="#ccc" />
				</form>
				</a> </div>
		</div>
		<div class="segment noborder"> <a class="reset_btn" href="javascript:void(0);">Reset</a> </div>
	</div>
	<div id="toggle_button"><a href="javascript:void(0);"></a></div>
	<div id="colorpicker"></div>
</div>
<!-- END THEMES PANEL --> 

<!-- HEADER -->
<div id="header">
	<div class="row">
		<div class="three columns"> <a href="index-2.html" title="Proteus" id="logo"></a> </div>
		
		<!-- NAVIGATION -->
		<div class="nine columns">
			<nav class="top-bar">
				<ul>
					<!-- RESPONSIVE NAVIGATION -->
					<li class="name">
						<h1><a href="javascript:void(0);"> Please select your page</a></h1>
					</li>
					<li class="toggle-topbar"><a href="javascript:void(0);"></a></li>
					<!-- END RESPONSIVE NAVIGATION -->
				</ul>
				<section>
					<ul class="right">
						<li> <a class="active" href="index-2.html">Home</a> </li>
						<li class="has-dropdown"> <a href="javascript:void(0);">Pages</a>
							<ul class="dropdown">
								<li><a href="left_sidebar.html">Left Sidebar Page</a></li>
								<li><a href="full_width.html">Full Width Page</a></li>
								<li><a href="team.html">Team</a></li>
								<li><a href="error.html">404 Error Page</a></li>
							</ul>
						</li>
						<li class="has-dropdown"> <a href="javascript:void(0);">Shortcodes</a>
							<ul class="dropdown">
								<li><a href="columns.html">Columns</a></li>
								<li><a href="typography.html">Typography</a></li>
								<li><a href="buttons.html">Buttons</a></li>
								<li><a href="tabs_and_toggles.html">Tabs &amp; Toggles</a></li>
								<li><a href="pricing_tables.html">Pricing Tables</a></li>
							</ul>
						</li>
						<li class="has-dropdown"> <a href="javascript:void(0);">Blog</a>
							<ul class="dropdown">
								<li><a href="blog.html">Blog Index</a></li>
								<li><a href="single_post.html">Single Post</a></li>
							</ul>
						</li>
						<li class="has-dropdown"> <a href="javascript:void(0);">Portfolio</a>
							<ul class="dropdown">
								<li><a href="portfolio_2_col.html" class="">Portfolio 2 Columns</a></li>
								<li><a href="portfolio_3_col.html">Portfolio 3 Columns</a></li>
								<li><a href="portfolio_4_col.html">Portfolio 4 Columns</a></li>
								<li><a href="portfolio_single.html">Single Project</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</section>
			</nav>
		</div>
		<!-- END NAVIGATION -->
		<div class="shadow-down"></div>
	</div>
</div>
<!--END HEADER --> 
<!-- SLIDER -->
<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<ul>
			<!-- THE FIRST SLIDE -->
			<li data-transition="papercut" data-slotamount="15" data-masterspeed="300" data-delay="9400" data-thumb="files/images/thumbs/thumb2.jpg">
				<?php  echo $this->Html->image('/images/slides/slide1.jpg');?>
				<div class="caption very_big_colour lfl stl uppercase"  
											 data-x="18" 
											 data-y="293" 
											 data-speed="300" 
											 data-start="500" 
											 data-easing="easeOutExpo" data-end="8800" data-endspeed="300" data-endeasing="easeInSine" >Vestibulum posuere placerat metus</div>
				<div class="caption very_big_black lfl stl uppercase"  
											 data-x="18" 
											 data-y="333" 
											 data-speed="300" 
											 data-start="800" 
											 data-easing="easeOutExpo" data-end="9100" data-endspeed="300" data-endeasing="easeInSine" >Nec porttitor nisl tempus et</div>
			</li>
			
			<!-- THE SECOND SLIDE -->
			<li data-transition="3dcurtain-vertical" data-slotamount="10" data-masterspeed="300" data-delay="6000" data-thumb="files/images/thumbs/thumb5.jpg">
				<?php  echo $this->Html->image('/images/slides/slide2.jpg', array('alt' => 'slide2')); ?>

				<div class="caption large_text lft ltb"  
										 data-x="0" 
										 data-y="100" 
										 data-speed="800" 
										 data-start="1000" 
										 data-easing="easeOutExpo"  >
											<?php  echo $this->Html->image('/images/slides/man_1.png', array('alt' => 'Image 5'));?>
				</div>
				<div class="caption large_text lft ltb"  
										 data-x="350" 
										 data-y="100" 
										 data-speed="1000" 
										 data-start="1500" 
										 data-easing="easeOutExpo"  >
										 	<?php  echo $this->Html->image('/images/slides/man_2.png', array('alt' => 'Image 5'));?>
				</div>
				<div class="caption large_text lft ltb"  
										 data-x="700" 
										 data-y="100" 
										 data-speed="1200" 
										 data-start="2000" 
										 data-easing="easeOutExpo"  >
											<?php  echo $this->Html->image('/images/slides/man_3.png', array('alt' => 'Image 5'));?>
				</div>
			</li>
			
			<!-- THE THIRD SLIDE -->
			<li data-transition="cube" data-slotamount="10" data-masterspeed="300" data-delay="8000" data-thumb="files/images/thumbs/thumb5.jpg">
				<?php  echo $this->Html->image('/images/slides/slide3.jpg', array('alt' => 'Image 5'));?>
				<div class="caption lfl ltl"  
										 data-x="-60" 
										 data-y="160" 
										 data-speed="1200" 
										 data-start="1500" 
										 data-easing="easeOutExpo" data-end="7300" data-endspeed="300" data-endeasing="easeInSine" >
										<?php  echo $this->Html->image('/images/slides/mbpro.png', array('alt' => 'Image 4'));?>
				</div>	
				<div class="caption lfl ltl"  
										 data-x="320" 
										 data-y="240" 
										 data-speed="1200" 
										 data-start="1800" 
										 data-easing="easeOutExpo" data-end="7400" data-endspeed="300" data-endeasing="easeInSine" >
									 	<?php  echo $this->Html->image('/images/slides/ipad_front_view.png', array('alt' => 'Image 5'));?>
				</div>
				<div class="caption lfl ltl"  
										 data-x="250" 
										 data-y="320" 
										 data-speed="1200" 
										 data-start="2100" 
										 data-easing="easeOutExpo" data-end="7600" data-endspeed="300" data-endeasing="easeInSine" >
									 	<?php  echo $this->Html->image('/images/slides/iphone_front_view.png', array('alt' => 'Image 6'));?>
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
				<?php  echo $this->Html->image('/images/slides/slide4.jpg');?>
				<div class="caption fade lfl stl" data-autoplay="false" data-x="380" data-y="180" data-speed="500" data-start="10" data-easing="easeOutBack">
					<!-- <iframe src="http://player.vimeo.com/video/21419714?title=0&amp;byline=0&amp;portrait=0;api=1" width="550" height="309"></iframe> -->
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
</div>
<!-- END SLIDER -->

<div class="container big-icon-block">
	<div class="row"> 
		<!-- BIG ICON BLOCK -->
		<div class="four columns icon-block-content">
			<?php echo $this->Html->link($this->Html->image('/images/icon_box_1.png'), 'full_width.html', array('escape' => false));?>			
			<h3> Lorem ipsum dolor sit </h3>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum.</p>
			<?php echo $this->Html->link('Read more +', 'javascript:void(0);', array('calss' => 'button'));?>
		</div>
		<div class="four columns icon-block-content">
			<?php echo $this->Html->link($this->Html->image('/images/icon_box_2.png'), 'full_width.html', array('escape' => false));?>			
			<h3> Lorem ipsum dolor sit </h3>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum.</p>
			<?php echo $this->Html->link('Read more +', 'javascript:void(0);', array('calss' => 'button'));?>
		</div>
		<div class="four columns icon-block-content">
			<?php echo $this->Html->link($this->Html->image('/images/icon_box_3.png'), 'full_width.html', array('escape' => false));?>			
			<h3> Lorem ipsum dolor sit </h3>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum. </p>
			<?php echo $this->Html->link('Read more +', 'javascript:void(0);', array('calss' => 'button'));?>
	</div>
	<!-- END BIG ICON BLOCK --> 
</div>

<!-- SMALL ICON BLOCK -->
<div class="container small-icon-block">
	<div class="row">
		<div class="three columns">
			<!-- <img src="files/images/small_icon_1.png" alt="" /> -->
			<?php echo $this->Html->image('/images/small_icon_1.png');?>
			<h5>Responsive Design</h5>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
				tellus ac cursus.</p>
		</div>
		<div class="three columns">
			<?php echo $this->Html->image('/images/small_icon_2.png');?>
			<!-- <img src="files/images/small_icon_2.png" alt="" /> -->
			<h5>Unlimited Colours</h5>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
				tellus ac cursus.</p>
		</div>
		<div class="three columns">
			<?php echo $this->Html->image('/images/small_icon_3.png');?>
			<!-- <img src="files/images/small_icon_3.png" alt="" /> -->
			<h5>Awsome Slider</h5>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
				tellus ac cursus.</p>
		</div>
		<div class="three columns">
			<?php echo $this->Html->image('/images/small_icon_4.png');?>
			<!-- <img src="files/images/small_icon_4.png" alt="" /> -->
			<h5>Well Documented</h5>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
				tellus ac cursus.</p>
		</div>
		<div class="clear"></div>
		<div class="three columns">
			<?php echo $this->Html->image('/images/small_icon_5.png');?>
			<!-- <img src="files/images/small_icon_5.png" alt="" /> -->
			<h5>Great Support</h5>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
				tellus ac cursus.</p>
		</div>
		<div class="three columns">
			<?php echo $this->Html->image('/images/small_icon_6.png');?>
			<!-- <img src="files/images/small_icon_6.png" alt="" /> -->
			<h5>Working Contact Form</h5>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
				tellus ac cursus.</p>
		</div>
		<div class="three columns">
			<?php echo $this->Html->image('/images/small_icon_7.png');?>
			<!-- <img src="files/images/small_icon_7.png" alt="" /> -->
			<h5>Custom Shortcodes</h5>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
				tellus ac cursus.</p>
		</div>
		<div class="three columns">
			<?php echo $this->Html->image('/images/small_icon_8.png');?>
			<!-- <img src="files/images/small_icon_8.png" alt="" /> -->
			<h5>PSD Files Included</h5>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
				tellus ac cursus.</p>
		</div>
	</div>
</div>
<!-- END SMALL ICON BLOCK -->
<div class="row">
	<div class="twelve columns">
		<hr/>
	</div>
</div>

<div class="row">
	<div class="twelve columns">
		<hr/>
	</div>
</div>
<!-- BOTTOM BLOCK -->
<div class="container bottom-block">
	<div class="row">
		<div class="four columns">
			<h1>About Us</h1>
			<?php echo $this->Html->image('/images/about_us.jpg', array('alt' => '')); ?>
			<!-- <img src="files/images/about_us.jpg" alt="" /> -->
			<p class="entry-text">Consectetur adipiscing elit aeneane lorem lipsum, condimentum 
				ultrices consequat eu, vehicula mauris lipsum adipiscing lipsum.<br>
			</p>
			<a class="link-btn" href="single_post.html">Continue Reading &rarr;</a> </div>
		<div class="four columns">
			<h1> Latest Posts </h1>
			<div class="blog-post">
				<div class="postdate">
					<h3>20</h3>
					<h6>Jan 2013</h6>
				</div>
				<div class="entry-title">
					<h4 class="uppercase"><a href="single-project.html">Nullam dictum felis eu</a></h4>
					<p class="entry-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. </p>
				</div>
			</div>
			<div class="divider3"></div>
			<div class="blog-post">
				<div class="postdate">
					<h3>20</h3>
					<h6>Jan 2013</h6>
				</div>
				<div class="entry-title">
					<h4 class="uppercase"><a href="single-project.html">Nullam dictum felis eu</a></h4>
					<p class="entry-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. </p>
				</div>
			</div>
			<div class="divider3"></div>
			<div class="blog-post">
				<div class="postdate">
					<h3>20</h3>
					<h6>Jan 2013</h6>
				</div>
				<div class="entry-title">
					<h4 class="uppercase"><a href="single-project.html">Nullam dictum felis eu</a></h4>
					<p class="entry-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod. </p>
				</div>
			</div>
		</div>
		<div class="four columns">
			<h1>Services</h1>
			<!-- ACCORDION -->
			<div id="accordion-style-1">
				<div class="acc-item first"> <a href="javascript:void(0);" class="acc_trigger">Proin tempor neque mi</a>
					<div class="acc_container">
						<p>Mauris laoreet arcu tortor. Fusce neque felis, bibendum vel lacinia et, eleifend ut tortor. Sed imperdiet, purus porttitor vestibulum lobortis, lorem nunc adipiscing ipsum, at ullamcorper sem odio a tellus. Mauris a luctus nunc.</p>
						<p>Maecenas at nisl leo. Sed sed nisl a ligula eleifend posuere ut nec sapien. Proin tempor neque mi. Duis pretium dignissim elit nec feugiat. Morbi non orci felis. Nam vitae metus a orci iaculis facilisis.</p>
					</div>
				</div>
				<div class="acc-item"> <a href="javascript:void(0);" class="acc_trigger">Donec id elit non mi porta</a>
					<div class="acc_container">
						<p>Mauris laoreet arcu tortor. Fusce neque felis, bibendum vel lacinia et, eleifend ut tortor. Sed imperdiet, purus porttitor vestibulum lobortis, lorem nunc adipiscing ipsum, at ullamcorper sem odio a tellus. Mauris a luctus nunc.</p>
						<p>Maecenas at nisl leo. Sed sed nisl a ligula eleifend posuere ut nec sapien. Proin tempor neque mi. Duis pretium dignissim elit nec feugiat. Morbi non orci felis. Nam vitae metus a orci iaculis facilisis.</p>
					</div>
				</div>
				<div class="acc-item"> <a href="javascript:void(0);" class="acc_trigger">Fusce dapibus, tellus ac cursus</a>
					<div class="acc_container">
						<p>Mauris laoreet arcu tortor. Fusce neque felis, bibendum vel lacinia et, eleifend ut tortor. Sed imperdiet, purus porttitor vestibulum lobortis, lorem nunc adipiscing ipsum, at ullamcorper sem odio a tellus. Mauris a luctus nunc.</p>
						<p>Maecenas at nisl leo. Sed sed nisl a ligula eleifend posuere ut nec sapien. Proin tempor neque mi. Duis pretium dignissim elit nec feugiat. Morbi non orci felis. Nam vitae metus a orci iaculis facilisis.</p>
					</div>
				</div>
				<div class="acc-item"> <a href="javascript:void(0);" class="acc_trigger">Ligula eleifend posuere</a>
					<div class="acc_container">
						<p>Mauris laoreet arcu tortor. Fusce neque felis, bibendum vel lacinia et, eleifend ut tortor. Sed imperdiet, purus porttitor vestibulum lobortis, lorem nunc adipiscing ipsum, at ullamcorper sem odio a tellus. Mauris a luctus nunc.</p>
						<p>Maecenas at nisl leo. Sed sed nisl a ligula eleifend posuere ut nec sapien. Proin tempor neque mi. Duis pretium dignissim elit nec feugiat. Morbi non orci felis. Nam vitae metus a orci iaculis facilisis.</p>
					</div>
				</div>
				<div class="acc-item"> <a href="javascript:void(0);" class="acc_trigger">Pretium dignissim elit nec feugiat</a>
					<div class="acc_container">
						<p>Mauris laoreet arcu tortor. Fusce neque felis, bibendum vel lacinia et, eleifend ut tortor. Sed imperdiet, purus porttitor vestibulum lobortis, lorem nunc adipiscing ipsum, at ullamcorper sem odio a tellus. Mauris a luctus nunc.</p>
						<p>Maecenas at nisl leo. Sed sed nisl a ligula eleifend posuere ut nec sapien. Proin tempor neque mi. Duis pretium dignissim elit nec feugiat. Morbi non orci felis. Nam vitae metus a orci iaculis facilisis.</p>
					</div>
				</div>
			</div>
			<!-- END ACCORDION --> 
		</div>
	</div>
</div>
<!-- END PORTFOLIO BLOCK --> 

<!-- FOOTER -->
<div class="container footer">
	<div class="row">
		<div class="three columns">
			<h5>Navigation</h5>
			<div class="list-type-footer">
				<ul>
					<li> <a href="index-2.html">Home</a> </li>
					<li> <a href="team.html">Pages</a> </li>
					<li> <a href="typography.html">Shortcodes</a> </li>
					<li> <a href="blog.html">Blog</a> </li>
					<li> <a href="portfolio_4_col.html">Portfolio</a> </li>
					<li> <a href="contact.html">Contact</a> </li>
				</ul>
			</div>
		</div>
		<div class="three columns">
			<h5>Monthly Archives</h5>
			<div class="list-type-footer">
				<ul>
					<li> <a href="index-2.html">February 2013</a> </li>
					<li> <a href="portfolio_4_col.html">January 2013</a> </li>
					<li> <a href="blog.html">December 2012</a> </li>
					<li> <a href="features.html">November 2012</a> </li>
					<li> <a href="contact.html">October 2012</a> </li>
				</ul>
			</div>
		</div>
		<div class="three columns">
			<h5>Latest Posts</h5>
			<p>
				<?php echo $this->Html->link($this->Html->image('/images/thumb_1.jpg', array('class' => 'img_float_left', 'width' => '40px', 'height' => '40px', 'alt' => '')),  'single_post.html', array('escape' => false));?>
				<strong>Nullam dictum felis eu</strong>
				<br />
				Lorem ipsum dolor sit amet.
			</p>
			<p>
				<?php echo $this->Html->link($this->Html->image('/images/thumb_2.jpg', array('class' => 'img_float_left', 'width' => '40px', 'height' => '40px', 'alt' => '')),  'single_post.html', array('escape' => false));?>
				<strong>Nullam dictum felis eut</strong>
				<br />
				Lorem ipsum dolor sit amet.
			</p>
			<p>
				<?php echo $this->Html->link($this->Html->image('/images/thumb_3.jpg', array('class' => 'img_float_left', 'width' => '40px', 'height' => '40px', 'alt' => '')),  'single_post.html', array('escape' => false));?>
				<strong>Nullam dictum felis eu</strong>
				<br />
				Lorem ipsum dolor sit amet.
			</p>
		</div>
		<div class="three columns">
			<h5>Contact Us</h5>
			<?php  echo $this->Html->image('/images/footer_icon_1.png', array('class' => 'img_float_left'));?>
			<p> (+44) 773 339 9999 </p>
			<?php  echo $this->Html->image('/images/footer_icon_2.png', array('class' => 'img_float_left'));?>
			<p>
				<?php echo $this->Html->link('info@yourwebsite.com', 'mailto:youremailaddress');?>
			</p>
			<?php  echo $this->Html->image('/images/footer_icon_3.png', array('class' => 'img_float_left'));?>
			<p class="tab"> <strong>Your Company LDT</strong><br />
				Street nr 100
				<br />
				London, NW1 2RG
				<br />
				UK </p>
		</div>
	</div>
</div>
<!-- END FOOTER --> 
<!-- SUBFOOTER -->
<div class="container subfooter">
	<div class="row">
		<div class="six columns">
			<p> &#169; Copyright - Proteus - HTML Theme by creativusmouse.com </p>
		</div>
		<div class="six columns">
			<div class="large-social-block"> <a href="javascript:void(0);"><span class="social dribbble"></span></a> <a href="javascript:void(0);"><span class="social flickr"></span></a> <a href="javascript:void(0);"><span class="social linkedin"></span></a> <a href="javascript:void(0);"><span class="social google"></span></a> <a href="javascript:void(0);"><span class="social twitter"></span></a> <a href="javascript:void(0);"><span class="social facebook"></span></a>
 </div>
		</div>
	</div>
</div>
<!-- END SUBFOOTER --> 

<!-- JAVASCRIPT --> 
<script type="text/javascript">// Slider JS
				var tpj=jQuery;
				tpj(document).ready(function() {
				if (tpj.fn.cssOriginal!=undefined)
					tpj.fn.css = tpj.fn.cssOriginal;
					tpj('.fullwidthbanner').revolution(
						{
							delay:9000,
							startwidth:960,
							startheight:500,

							onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

							thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
							thumbHeight:50,
							thumbAmount:3,

							hideThumbs:200,
							navigationType:"none",					//bullet, thumb, none, both	 (No Shadow in Fullwidth Version !)
							navigationArrows:"verticalcentered",		//nexttobullets, verticalcentered, none
							navigationStyle:"round",				//round,square,navbar

							touchenabled:"on",						// Enable Swipe Function : on/off
							navOffsetHorizontal:0,
							navOffsetVertical:20,
							stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
							stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

							hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
							hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
							hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value
							fullWidth:"on",
							shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
						});
			});
			</script> 
<?php
	echo $this->Html->script(array('jquery.1.7.2', 'jquery.min', 'jquery.infieldlabel.min', 'scripts', 'app', '/titan/js/prettify', '/titan/js/jquery.titanlighbox', '/themes_panel/farbtastic/farbtastic', '/themes_panel/themes_panel'));
?>
</body>
</html>