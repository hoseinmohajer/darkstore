<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Administrator | <?php echo $title_for_layout; ?></title>
	<?php 
		echo $this->Html->css(array('style', 'custom'));
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>

<?php
	echo $this->Html->script(array('jquery.1.6.1'));
	echo $this->Html->script(array('jquery.wysiwyg'));
	echo $this->Html->script(array('custom'));
	echo $this->Html->script(array('cycle'));
	echo $this->Html->script(array('jquery.checkbox.min'));
	echo $this->Html->script(array('flot'));
	echo $this->Html->script(array('flot.resize'));
	echo $this->Html->script(array('flot-time'));
	// echo $this->Html->script(array('flot-pie'));
	// echo $this->Html->script(array('flot-graphs'));
	echo $this->Html->script(array('cycle'));
	echo $this->Html->script(array('jquery.tablesorter.min'));
?>
</body>
</html>
