<?php echo $this->Vitrins->topmenu(null); ?>
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

<div  class="clickable variable-sizes clearfix product-detail-title-bar">
	<?php echo $this->Vitrins->productDetail($productDetailPageData); ?>
</div>
<div class="twelve columns">
	<hr/>
</div>
<div class="container portfolio-block">
	<div  class="clickable variable-sizes clearfix">
			
		<div  class="clickable variable-sizes clearfix">
			<h1>Recommended</h1>
			<?php echo $this->Vitrins->getProduct($recommendedProductData); ?>
		</div>
	</div>
</div>

<!-- FOOTER -->
<div class="container footer">
	<div  class="clickable variable-sizes clearfix"></div>
</div>
<!-- END FOOTER --> 
<!-- SUBFOOTER -->
<div class="container subfooter">
	<?php echo $this->vitrins->subfooter(); ?>
</div>
<!-- END SUBFOOTER --> 