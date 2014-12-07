<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Administrator | <?php echo $title_for_layout; ?></title>
	<?php 
		echo $this->Html->css(array('/bootstrap3/css/bootstrap', 'style', 'custom'));
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>

<?php
	echo $this->Html->script(array('jquery-1.11.1', 'jquery.wysiwyg', '/bootstrap3/js/bootstrap', 'custom', 'cycle', 'jquery.checkbox.min', 'flot', 'flot.resize', 'flot-time', 'dashboard', 'sidemenu', 'form', 'main'));
	echo $this->Html->script(array('cycle', 'jquery.tablesorter.min'));
?>
	<div style="color:#ff0000;direction:ltr;backgrount-color:#fff !important;float:left;">
		<?php echo $this->element('sql_dump'); ?>
	</div>
</body>
</html>
