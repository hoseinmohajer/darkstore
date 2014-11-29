<div class="testing">
	<header class="main">
		<h1><strong>Dark</strong> Store</h1>
	</header>
	<section class="user">
		<div class="profile-img">
			<p><?php  echo $this->Html->image('/imgs/uiface2.png', array('width' => '40px', "height" => '40px','alt'=>'AdministratorImg'));
	?> Administrator</p>
		</div>
		<div class="buttons">
			<span><a class="btn btn-primary" href="/admin/users/logout" style="color:#fff;">Logout</a></span>
		</div>
	</section>
</div>
<nav>
	<ul>
		<li class="section"><a href="admin"><span class="icon">&#128711;</span> Dashboard</a></li>
		<li>
			<a href="javascript:void(0);"><span class="icon">&#128196;</span> Pages</a>
			<ul class="submenu">
				<li><a href="javascript:void(0);">Create page</a></li>
				<li>
					<a href="javascript:void(0);" id="mainSlideshowForm">Add Main Slideshow<span style="float:right;">v</span></a>
					<?php echo $this->Admins->slideshoweditform($slideshowEditFormData); ?>
				</li>
				<li><a href="javascript:void(0);">View pages</a></li>
			</ul>	
		</li>
		<li>
			<a href="javascript:void(0);"><span class="icon">&#127748;</span> Goods </a>
			<ul class="submenu">
				<li><a href="javascript:void(0);" id="goods-add-form-button">Add goods</a></li>
				<li><a href="javascript:void(0);" id="goods-list">View files</a></li>
			</ul>
		</li>
	</ul>
</nav>

	
<section class="content">
	<div class="widget-container">
		<?php echo $this->Admins->slideshowaddform(); ?>
		<?php echo $this->Admins->goodsaddform(); ?>
		<?php echo $this->Admins->productlist($productsData); ?>
	</div>
</section>