<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>Dark Store | <?php echo $title_for_layout; ?></title>
		<?php 
			echo $this->Html->css(array('foundation.min', 'styles', '/titan/css/jquery.titanlighbox', '/rs-plugin/css/settings', '/fonts/googleapis'));
			echo $this->Html->script(array('foundation.min', 'modernizr.foundation', 'app', 'jquery.1.7.2', 'jquery.min', '/rs-plugin/js/jquery.themepunch.plugins.min' , '/rs-plugin/js/jquery.themepunch.revolution.min'));
			echo $this->Html->css(array('/themes_panel/farbtastic/farbtastic', '/themes_panel/themes_panel', 'colors', 'darkstore', 'custom'));
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
		<!--[if lt IE 9]>
			<?php echo $this->Html->script(array('/html5shiv.googlecode/html5')); ?>
		<![endif]-->
	</head>
	<body>
		
		<?php
			echo $this->Session->flash();
			echo $this->fetch('content');

			echo $this->Html->script(array('jquery.1.7.2', 'jquery.min', 'jquery.infieldlabel.min', 'scripts', 'app', '/titan/js/prettify', '/titan/js/jquery.titanlighbox', /*'/themes_panel/farbtastic/farbtastic', '/themes_panel/themes_panel',*/ '/slideshow/slideshow', '/slideshow/slideshowdataloader', 'jquery.wmuSlider', 'custom'));
		?>
	</body>
</html>