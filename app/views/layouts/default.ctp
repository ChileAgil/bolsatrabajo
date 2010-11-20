<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('Bolsa de Trabajo 2.0'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		
		

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('default');
		echo $this->Html->css('ui-darkness/jquery-ui-1.8.5.custom');
		echo $this->Html->script('jquery-1.4.2.min');
		echo $this->Html->script('jquery-ui-1.8.5.custom.min');
		
		echo $scripts_for_layout;
	?>
	

	<style type="text/css">
	@import "gallery.css";
	</style>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	    _gaq.push(['_setAccount', 'UA-19663371-1']);
	      _gaq.push(['_trackPageview']);

	        (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			      })();

			      </script>
</head>
<body>
	<div id="wrapper">
	
		<div id="header">
			<div id="logo">
				<h1><?php echo $this->Html->link(__('Bolsa de Trabajo 2.0', true), ''); ?></h1>
			</div>
			<!-- end div#logo -->
			<div id="menu">
				<ul>
					<li class="active"><?php echo $this->Html->link(__('Inicio', true), array('controller'=>'bienvenida','action' => 'index'));?></li>
					<li><?php echo $this->Html->link(__('Acerca...', true), array('controller'=>'bienvenida','action' => 'acerca'));?></li>
				</ul>
			</div>
			<!-- end div#menu -->
		</div>
	<div>
		<div id="page">
			<div id="page-bgtop">
				<div id="content">


					<div class="post">
						<div class="post-bgtop">
							<div class="post-bgbtm">
									<?php echo $this->Session->flash(); ?>

									<?php echo $content_for_layout; ?>
							<div style="clear: both; height: 20px"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- end div#content -->

				<div style="clear: both; height: 20px"></div>
			</div>
		</div>
		<!-- end div#page -->
	
		<div id="footer-wrapper">
			<div id="footer">
				<p id="legal">Copyright &copy; 2010 Bolsa de Trabajo 2.0 . Todos los derechos reservados.</p>

			</div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	</div>
</body>
</html>
