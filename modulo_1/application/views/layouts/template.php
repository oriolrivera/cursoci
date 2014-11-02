<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Murky Stairwell
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130405

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="<?php echo $this->layout->getDescripcion()?>" />
<meta name="keywords" content="<?php echo $this->layout->getKeywords()?>" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo $this->layout->getTitle()?></title>
<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,700|Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">CodeIgniter 2.0 </a></h1>
				<h3><?php echo $this->layout->getSlogan()?></h3>
			</div>

			<div id="menu">
				<ul>
					<li class=""><a href="<?php echo base_url(); ?>">Home</a></li>
					<li><a href="<?php echo base_url(); ?>about">¿Quiénes somos?</a></li>
					<li><a href="<?php echo base_url(); ?>services">Servicios</a></li>
					<li><a href="<?php echo base_url(); ?>products">Nuestros Productos</a></li>
					<li><a href="<?php echo base_url(); ?>contact">Contáctenos</a></li>
				</ul>
			</div>

			<p style="float:right"><b>Fecha:</b> <?php echo fecha_cadena(date("Y-m-w")); ?></p>

		</div>
		<div id="banner">
			<div class="content"><img src="<?php echo base_url(); ?>public/images/img02.jpg" width="1000" height="300" alt="" /></div>
		</div>
	</div>

	<div id="page">
	<!-- end #header -->
	<?php echo $content_for_layout?>


			<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>Ultimos Post</h2>
					<ul>
						<li><a href="#">Aliquam libero</a></li>
						<li><a href="#">Consectetuer adipiscing elit</a></li>
						<li><a href="#">Metus aliquam pellentesque</a></li>
						<li><a href="#">Suspendisse iaculis mauris</a></li>
						<li><a href="#">Urnanet non molestie semper</a></li>
						<li><a href="#">Proin gravida orci porttitor</a></li>
					</ul>
				</li>


			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>


	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) 2013 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Photos by <a href="http://fotogrph.com/">Fotogrph</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
