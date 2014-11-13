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
			<span class="button blue"><a href="logout">Logout</a></span>
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
			<a href="javascript:void(0);"><span class="icon">&#127748;</span> Media <span class="pip">7</span></a>
			<ul class="submenu">
				<li><a href="javascript:void(0);">Upload file</a></li>
				<li><a href="javascript:void(0);">View files</a></li>
			</ul>
		</li>
		<li>
			<a href="javascript:void(0);"><span class="icon">&#59160;</span> Blog <span class="pip">12</span></a>
			<ul class="submenu">
				<li><a href="javascript:void(0);">New post</a></li>
				<li><a href="javascript:void(0);">All posts</a></li>
				<li><a href="javascript:void(0);">View comments</a></li>
			</ul>
		</li>
		<li><a href="javascript:void(0);"><span class="icon">&#128202;</span> Statistics</a></li>
		<li><a href="javascript:void(0);"><span class="icon">&#128101;</span> Users <span class="pip">3</span></a></li>
		<li>
			<a href="javascript:void(0);"><span class="icon">&#9881;</span> UI Elements</a>
			<ul class="submenu">
				<li><a href="javascript:void(0);">Icon fonts</a></li>
			</ul>
		</li>
	</ul>
</nav>

	
<section class="content">
	<div class="widget-container">
		<?php echo $this->Admins->slideshowaddform(); ?>
	</div>
	
	<div class="widget-container">
		
	</div>
</section>