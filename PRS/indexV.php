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
		<link rel="stylesheet" type="text/css" href="public/css/h.css">
		<link rel="icon" href="<?php echo URL;?>public/images/logo0.png" type="images/x-icon">
		
	</head>
	<body>
	<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">

					<div class="container">
						<form action="#" method="" class="navbar-form navbar-right" role="search">
							<div class="form-group">
								
							</div>
						</form>
						<br>
						<center><img src="public/images/img0.jpg" class="img3"></center>
						<br>
					</div>
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
		        			
		        			<a href="<?php URL ?>indexV.php?" type="button" class="btn btn-lg btn-primary bt-6" ria-expanded="false">MENU</a>
		        			<a href="<?php URL ?>indexV.php?" type="button" class="btn btn-lg btn-info bt-6">Ver Proyectos</a>
		        			<a href="<?php URL ?>indexV.php?" type="button" class="btn btn-lg btn-info bt-6">Bucar</a>
		        			<a href="index.php" type="button" class="btn btn-lg btn-primary bt-6">Salir</a>
		        			
								          				
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
