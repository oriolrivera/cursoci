<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $this->layout->getTitle()?></title>

		<link href="<?php echo base_url(); ?>public/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo base_url(); ?>public/css/main.css" rel="stylesheet" type="text/css" media="screen" />

		<script src="<?php echo base_url(); ?>public/js/jquery-1.10.2.min.js"></script>
		<script src="<?php echo base_url(); ?>public/js/bootstrap.js"></script>
	</head>
	<body>

		<div class="container">

			<div class="col-md-12 .col-xs-12 .col-sm-5">

				<nav class="navbar navbar-default" role="navigation">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <a class="navbar-brand" href="#">
				        Panel
				      </a>
				    </div>


				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li><a href="<?php echo base_url(); ?>">Gestor medicamentos</a></li>
				        <li><a href="<?php echo base_url(); ?>home/gestortypemedicamet">Gestor tipos de medicamentos</a></li>
				      </ul>
				    </div>





				  </div>
				</nav>
				
				

				<?php echo $content_for_layout?>
			</div>
		</div>
		
	</body>
</html>