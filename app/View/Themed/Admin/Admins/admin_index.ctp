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
		<li><a href="javascript:void(0);" id="mainSlideshowForm">Add Main Slideshow</a></li>
		<li><a href="javascript:void(0);">Main Slideshow List</a></li>
		<li><a href="javascript:void(0);" id="products-add-form-button">Add products</a></li>
		<li><a href="javascript:void(0);" id="products-list">products List</a></li>
	</ul>
</nav>

	
<section class="content">
	<div class="widget-container">
		<?php echo $this->Admins->slideshowaddform(); ?>
		<?php echo $this->Admins->productsaddform(); ?>
		<?php echo $this->Admins->productlist($productsData); ?>
	</div>
</section>