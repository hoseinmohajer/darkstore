<?php echo $this->Vitrins->topmenu('products');?>
<div class="page-header ph-bg1">
	<div  class="clickable variable-sizes clearfix">
	  <div class="twelve columns">
		<p class="page-title">Products</p>
		<ul class="breadcrumbs">
			<li><a href="/">Home</a></li>
			<li><a href="javascript:void(0);">Products</a></li>
		</ul>
	  </div>
	</div>
</div>
<div  class="product-detail-title-bar"></div>
<div class="twelve columns purchase-fixed-menu"> 
  <!-- Portfolio Navigation -->
	<section id="options">
		<ul id="filters" class="option-set left button-group">
			<li><a href="javascript:void(0);" data-filtervalue="*" class="myfilter button small selected">All</a></li>
			<li><a href="javascript:void(0);" data-filtervalue="1" class="myfilter button small">Cat1</a></li>
			<li><a href="javascript:void(0);" data-filtervalue="2" class="myfilter button small">Cat2</a></li>
			<li><a href="javascript:void(0);" data-filtervalue="3" class="myfilter button small">Cat3</a></li>
			<li><a href="javascript:void(0);" data-filtervalue="4" class="myfilter button small">Cat4</a></li>
			<li><a href="javascript:void(0);" data-filtervalue="5" class="myfilter button small">Cat5</a></li>
			<li><a href="javascript:void(0);" data-filtervalue="6" class="myfilter button small">Cat6</a></li>
			<li><a href="javascript:void(0);" data-filtervalue="7" class="myfilter button small">Cat7</a></li>
			<li><a href="javascript:void(0);" data-filtervalue="8" class="myfilter button small">Cat8</a></li>
			<li><a href="javascript:void(0);" data-filtervalue="9" class="myfilter button small">Cat9</a></li>
			<li><a href="javascript:void(0);" data-filtervalue="10" class="myfilter button small">Cat10</a></li>
		</ul>
		<ul id="filters" class="option-set right button-group">
			<li><a href="javascript:void(0);" class="button small">Menu B</a></li>
			<li><a href="javascript:void(0);" class="button small">Menu A</a></li>
			<!-- <li><a href="javascript:void(0);" class="button small">About Us</a></li> -->
			<!-- <li><a href="javascript:void(0);" class="button small">Cuntact Us</a></li> -->
			<li><a href="/" class="button small">HOME</a></li>
		</ul>
	</section>
  <!-- End Portfolio Navigation --> 
</div>


		<!-- <hr/> -->
		<br/><br/><br/>
<div id="container" class="clickable variable-sizes clearfix"> 
		<!-- product list-->
		<?php echo @$this->Vitrins->getProduct($productData);?>
	  </div>




<!-- FOOTER -->
<div class="container footer">
	<div id="container" class="clickable variable-sizes clearfix">
		
	</div>
</div>
<!-- END FOOTER --> 
<!-- SUBFOOTER -->
<div class="container subfooter">
	<?php echo $this->vitrins->subfooter(); ?>
</div>
<!-- END SUBFOOTER --> 