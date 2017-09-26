<?php
session_start();
require_once 'init.php';

?>
<!DOCTYPE html>
<html lang="es">
	<head>

		<meta chartset="UTF-8">
		<title>SRP</title>
		<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="public/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="public/css/hhj.css">
		<link rel="icon" href="<?php echo URL;?>public/images/" type="images/x-icon">
		
	</head>
	<body>
	<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<section class="jumbotron">

					<div class="container">
						<form action="#" method="" class="navbar-form navbar-right" role="search">
							<div class="form-group">
								
							</div>
						</form>

						<h1>
						<center>
						
							Bienvenidos</center>
						</h1>

					</div>
				</section>
			</div>
		</div>
	</div>
</header>
<br>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			
			<section class="main row">
			
		         	
		        
				 
		
		        		<div class="btn-group-vertical ">
		        			
		        			<a href="<?php URL ?>indexU.php?" type="button" class="btn btn-lg btn-primary" ria-expanded="false">MENU</a>
		        			<a href="<?php URL ?>indexU.php?" type="button" class="btn btn-lg btn-info">Ver Proyectos</a>
		        			<a href="<?php URL ?>indexU.php?" type="button" class="btn btn-lg btn-info">Filtrar por Letras</a>
		        			<a href="index.php" type="button" class="btn btn-lg btn-primary">Salir</a>
		        			
								          				
								          			</ul>
								        		</li>
		        		</div>
				<article class="col-md-5">
					<div class="col-md-offset-5">
						
						
		        		
		       				

		        
		         

					</div>
				</article>

				

			</section>
			
			<br>
			<br>
			<br>
			
		</div>


	<script src="<?php echo URL; ?>public/js/jquery.js"></script>
	<script src="http://code.j.com/jquery-latest.js"></script>
	<script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
	<?php
			$enrutador = new Enrutador();
			$enrutador->validarGET('enlace');
			
 ?>
 

</body>
</html>
