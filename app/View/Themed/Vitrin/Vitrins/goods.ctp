<?php echo $this->Vitrins->topmenu('home');?>
<div class="page-header ph-bg1">
<div  class="clickable variable-sizes clearfix">
  <div class="twelve columns">
	<p class="page-title">All Goods</p>
	<ul class="breadcrumbs">
		<li><a href="/vitrins">Home</a></li>
		<li><a href="javascript:void(0);">All Of Goods</a></li>
	</ul>
  </div>
</div>
</div>
	<div class="twelve columns purchase-fixed-menu"> 
	  <!-- Portfolio Navigation -->
		<section id="options">
			<ul id="filters" class="option-set left button-group" data-option-key="filter">
				<li><a href="#filter" data-option-value="*" class="button small selected">Cat1</a></li>
				<li><a href="#filter" data-option-value=".html" class="button small">Cat2</a></li>
				<li><a href="#filter" data-option-value=".wp" class="button small">Cat3</a></li>
				<li><a href="#filter" data-option-value=".ill" class="button small">Cat4</a></li>
				<li><a href="#filter" data-option-value=".video" class="button small">Cat5</a></li>
				<li><a href="#filter" data-option-value=".video" class="button small">Cat6</a></li>
				<li><a href="#filter" data-option-value=".video" class="button small">Cat7</a></li>
				<li><a href="#filter" data-option-value=".video" class="button small">Cat8</a></li>
				<li><a href="#filter" data-option-value=".video" class="button small">Cat9</a></li>
				<li><a href="#filter" data-option-value=".video" class="button small">Cat10</a></li>
			</ul>
			<ul id="filters" class="option-set right button-group" data-option-key="filter">
				<li><a href="#filter" data-option-value="*" class="button small">Menu B</a></li>
				<li><a href="#filter" data-option-value=".html" class="button small">Menu A</a></li>
				<li><a href="#filter" data-option-value=".wp" class="button small">About Us</a></li>
				<li><a href="#filter" data-option-value=".ill" class="button small">Cuntact Us</a></li>
				<li><a href="#filter" data-option-value=".video" class="button small selected">HOME</a></li>
			</ul>
		</section>
	  <!-- End Portfolio Navigation --> 
	</div>


		<!-- <hr/> -->
		<br/><br/><br/>
	
	  
	  <div id="container" class="clickable variable-sizes clearfix"> 
		
		<!-- Portfolio Item -->
		<div class="three columns element ill">
		  <div class="portfolio-item">
			<div class="portfolio-item-image image-overlay"> <a class="titan-lb" data-titan-group="gallery" href="/theme/vitrin/images/portfolio/large_1.jpg" title="Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus."><img src="/theme/vitrin/images/portfolio/1.jpg" alt="" /> <span class="overlay-icon item-zoom"></span> </a> </div>
			<div class="portfolio-item-content">
			  <h5 class="title"><a href="portfolio_single.html">Lorem ipsum dolor sit</a></h5>
			  <p>Class aptent taciti</p>
			</div>
		  </div>
		</div>
		<!-- End Portfolio Item --> 
		
		<!-- Portfolio Item -->
		<div class="three columns element wp">
			<div class="portfolio-item">
				<div class="portfolio-item-image image-overlay">
					<a class="titan-lb" data-titan-group="gallery" href="/theme/vitrin/images/portfolio/large_2.jpg" title="Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus.">
						<img src="/theme/vitrin/images/portfolio/2.jpg" alt="" />
						<span class="overlay-icon item-zoom"></span>
					</a>
				</div>
				<div class="portfolio-item-content">
					<?php 
						echo $this->Html->link(
						    'BUY',
						    '/vitrins/good_ditails',
						    array('class' => 'success button test', 'id' => 'test', 'style' => 'display:none;')
						);
					?>
					<!-- <a id="test" style="display:none;" href="javascript:void(0);" class="success button test">BUY</a> -->
					<h5 class="title test2">
						<a href="portfolio_single.html">Lorem ipsum dolor sit</a>
					</h5>
				  	<p class="test2">$1500</p>
				</div>
			</div>
		</div>
		<!-- End Portfolio Item --> 
		
		<!-- Portfolio Item -->
		<div class="three columns element video">
		  <div class="portfolio-item">
			<div class="portfolio-item-image image-overlay"> <a class="titan-lb" data-titan-group="gallery-video" href="http://www.youtube.com/embed/a6cNdhOKwi0" title="Etiam ultrices mi vel libero hendrerit ultricies."><img src="/theme/vitrin/images/portfolio/3.jpg" alt=""/> <span class="overlay-icon item-movie"></span> </a> </div>
			<div class="portfolio-item-content">
			  <h5 class="title"><a href="portfolio_single.html">Lorem ipsum dolor sit</a></h5>
			  <p>Class aptent taciti</p>
			</div>
		  </div>
		</div>
		<!-- End Portfolio Item --> 
		
		<!-- Portfolio Item -->
		<div class="three columns element html wp">
		  <div class="portfolio-item">
			<div class="portfolio-item-image image-overlay"> <a class="titan-lb" data-titan-group="gallery" href="/theme/vitrin/images/portfolio/large_4.jpg" title="Etiam ultrices mi vel libero hendrerit ultricies."><img src="/theme/vitrin/images/portfolio/4.jpg" alt=""/> <span class="overlay-icon item-zoom"></span> </a> </div>
			<div class="portfolio-item-content">
			  <h5 class="title"><a href="portfolio_single.html">Lorem ipsum dolor sit</a></h5>
			  <p>Class aptent taciti</p>
			</div>
		  </div>
		</div>
		<!-- End Portfolio Item --> 
		
		<!-- Portfolio Item -->
		<div class="three columns element ill">
		  <div class="portfolio-item">
			<div class="portfolio-item-image image-overlay"> <a class="titan-lb" data-titan-group="gallery" href="/theme/vitrin/images/portfolio/large_5.jpg" title="Skyde - Travel far away to a old pirate space station."><img src="/theme/vitrin/images/portfolio/5.jpg" alt="" /> <span class="overlay-icon item-zoom"></span> </a> </div>
			<div class="portfolio-item-content">
			  <h5 class="title"><a href="portfolio_single.html">Lorem ipsum dolor sit</a></h5>
			  <p>Class aptent taciti</p>
			</div>
		  </div>
		</div>
		<!-- End Portfolio Item --> 
		
		<!-- Portfolio Item -->
		<div class="three columns element video">
		  <div class="portfolio-item">
			<div class="portfolio-item-image image-overlay"> <a class="titan-lb" data-titan-group="gallery-video" href="http://www.youtube.com/embed/a6cNdhOKwi0" title="Etiam ultrices mi vel libero hendrerit ultricies."><img src="/theme/vitrin/images/portfolio/6.jpg" alt=""/> <span class="overlay-icon item-movie"></span> </a> </div>
			<div class="portfolio-item-content">
			  <h5 class="title"><a href="portfolio_single.html">Lorem ipsum dolor sit</a></h5>
			  <p>Class aptent taciti</p>
			</div>
		  </div>
		</div>
		<!-- End Portfolio Item --> 
		
		<!-- Portfolio Item -->
		<div class="three columns element html ill">
		  <div class="portfolio-item">
			<div class="portfolio-item-image image-overlay"> <a class="titan-lb" data-titan-group="gallery" href="/theme/vitrin/images/portfolio/large_7.jpg" title="Skyde - Travel far away to a old pirate space station."><img src="/theme/vitrin/images/portfolio/7.jpg" alt="" /> <span class="overlay-icon item-zoom"></span> </a> </div>
			<div class="portfolio-item-content">
			  <h5 class="title"><a href="portfolio_single.html">Lorem ipsum dolor sit</a></h5>
			  <p>Class aptent taciti</p>
			</div>
		  </div>
		</div>
		<!-- End Portfolio Item --> 
		
		<!-- Portfolio Item -->
		<div class="three columns element ill html">
		  <div class="portfolio-item">
			<div class="portfolio-item-image image-overlay"> <a class="titan-lb" data-titan-group="gallery" href="/theme/vitrin/images/portfolio/large_8.jpg" title="Skyde - Travel far away to a old pirate space station."><img src="/theme/vitrin/images/portfolio/8.jpg" alt="" /> <span class="overlay-icon item-zoom"></span> </a> </div>
			<div class="portfolio-item-content">
			  <h5 class="title"><a href="portfolio_single.html">Lorem ipsum dolor sit</a></h5>
			  <p>Class aptent taciti</p>
			</div>
		  </div>
		</div>
		<!-- End Portfolio Item --> 
		
		<!-- Portfolio Item -->
		<div class="three columns element video">
		  <div class="portfolio-item">
			<div class="portfolio-item-image image-overlay"> <a class="titan-lb" data-titan-group="gallery-video" href="http://www.youtube.com/embed/a6cNdhOKwi0" title="Etiam ultrices mi vel libero hendrerit ultricies."><img src="/theme/vitrin/images/portfolio/9.jpg" alt=""/> <span class="overlay-icon item-movie"></span> </a> </div>
			<div class="portfolio-item-content">
			  <h5 class="title"><a href="portfolio_single.html">Lorem ipsum dolor sit</a></h5>
			  <p>Class aptent taciti</p>
			</div>
		  </div>
		</div>
		<!-- End Portfolio Item --> 
		
		<!-- Portfolio Item -->
		<div class="three columns element html wp">
		  <div class="portfolio-item">
			<div class="portfolio-item-image image-overlay"> <a class="titan-lb" data-titan-group="gallery" href="/theme/vitrin/images/portfolio/large_10.jpg" title="Etiam ultrices mi vel libero hendrerit ultricies."><img src="/theme/vitrin/images/portfolio/10.jpg" alt="" /> <span class="overlay-icon item-zoom"></span> </a> </div>
			<div class="portfolio-item-content">
			  <h5 class="title"><a href="portfolio_single.html">Lorem ipsum dolor sit</a></h5>
			  <p>Class aptent taciti</p>
			</div>
		  </div>
		</div>
		<!-- End Portfolio Item --> 
		
		<!-- Portfolio Item -->
		<div class="three columns element video">
		  <div class="portfolio-item">
			<div class="portfolio-item-image image-overlay"> <a class="titan-lb" data-titan-group="gallery-video" href="http://www.youtube.com/embed/a6cNdhOKwi0" title="Etiam ultrices mi vel libero hendrerit ultricies."><img src="/theme/vitrin/images/portfolio/11.jpg" alt=""/> <span class="overlay-icon item-movie"></span> </a> </div>
			<div class="portfolio-item-content">
			  <h5 class="title"><a href="portfolio_single.html">Lorem ipsum dolor sit</a></h5>
			  <p>Class aptent taciti</p>
			</div>
		  </div>
		</div>
		<!-- End Portfolio Item --> 
		
		<!-- Portfolio Item -->
		<div class="three columns element html wp">
		  <div class="portfolio-item">
			<div class="portfolio-item-image image-overlay"> <a class="titan-lb" data-titan-group="gallery" href="/theme/vitrin/images/portfolio/large_12.jpg" title="Etiam ultrices mi vel libero hendrerit ultricies."><img src="/theme/vitrin/images/portfolio/12.jpg" alt="" /> <span class="overlay-icon item-zoom"></span> </a> </div>
			<div class="portfolio-item-content">
			  <h5 class="title"><a href="portfolio_single.html">Lorem ipsum dolor sit</a></h5>
			  <p>Class aptent taciti</p>
			</div>
		  </div>
		</div>
		<!-- End Portfolio Item --> 
	  </div>




<!-- FOOTER -->
<div class="container footer">
	<div id="container" class="clickable variable-sizes clearfix">
		
	</div>
</div>
<!-- END FOOTER --> 
<!-- SUBFOOTER -->
<div class="container subfooter">
	<div id="container" class="clickable variable-sizes clearfix">
		<div class="six columns">
			<p> &#169; Copyright - Proteus - HTML /theme by creativusmouse.com </p>
		</div>
		<div class="six columns">
			<div class="large-social-block"> <a href="javascript:void(0);"><span class="social dribbble"></span></a> <a href="javascript:void(0);"><span class="social flickr"></span></a> <a href="javascript:void(0);"><span class="social linkedin"></span></a> <a href="javascript:void(0);"><span class="social google"></span></a> <a href="javascript:void(0);"><span class="social twitter"></span></a> <a href="javascript:void(0);"><span class="social facebook"></span></a>
			</div>
		</div>
	</div>
</div>
<!-- END SUBFOOTER --> 
