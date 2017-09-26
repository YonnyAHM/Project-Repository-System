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



	<div class="container">
		<div class="form-group col-md-12"></div>
				<h2><center><img src="public/images/icon4.png" class="img4">
					<br>
					Iniciar Seción</h2></center>
					<center>
						<a href="#ventana1" type="button" class="btn btn-lg btn-primary bt-6" data-toggle="modal">Entrar
	        			</a>
						<a href="#ventana2" type="button" class="btn btn-lg btn-primary bt-6" data-toggle="modal">Registrarse
	        			</a>
	        			<br>
	        			<br>
	        			<a href="indexV.php" type="button" class="btn btn-lg btn-info bt-6" ria-expanded="false">Acceder como Visitante</a>
	        		</center>

		</div>

		<div class="container">
			<div class="modal fade" id="ventana1">
      			<div class="modal-dialog">
        			<div class="modal-content">
        				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        					<center>
        						<h1>Identificate
        						</h1>
        					</center>
        					<center>
        						<!-- <a href="loginA.php" class="btn btn-dark bt-6"><img src="public/images/icon5.png" class="img2"><br>Admin
        						</a> -->
        						<a href="loginF.php" class="btn btn-info bt-6"><img src="public/images/icon1.png" class="img2"><br>Facilitador
        						</a>
        						<a href="loginE.php" class="btn btn-primary bt-6"><img src="public/images/icon0.png" class="img2"><br>Estudiante
        						</a>
        					</center>
        					<br>
        					<center>
        						<a href="#ventana2" type="button" class="btn btn-danger bt-6" data-toggle="modal">Aun no esta registrado, Registrece
	        					</a>
        						<center>
        				</div>
        			</div>
      			</div>
      		</div>
      	</div>
	
		<div class="container">
			<div class="modal fade" id="ventana2">
      			<div class="modal-dialog">
        			<div class="modal-content">
        				<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        					<center>
        						<h1>Identificate
        						</h1>
        					</center>
        					<center>
        						<a href="registrar.php" class="btn btn-primary bt-6"><img src="public/images/icon0.png" class="img2"><br>Estudiante
        						</a>
        						<a href="verificacion.php" class="btn btn-info bt-6"><img src="public/images/icon1.png" class="img2"><br>Facilitador
        						</a>
        					</center>
        					<br>
        					<center>
        						<button type="button" class="btn btn-danger bt-6" data-dismiss="modal">Ya esta Regitrado, Inicie Sesión
        						</button>
        						
        					</center>
        				</div>
        			</div>
      			</div>
      		</div>
      	</div>

      	


	<br>
	<br>
	<br>
	<br>

	<script src="<?php echo URL; ?>public/js/jquery.js">
	</script>
	<script src="<?php echo URL; ?>public/js/bootstrap.min.js">
	</script>
<?php
	$enrutador = new Enrutador();
	//$enrutador->validarGET('enlace');
?>
 
<footer>
 	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<div class="container">
						<form action="#" method="" class="navbar-form navbar-right" role="search">
							<div class="form-group">
								<h3></h3>
								<p>
								<h5>Ing: Yonny Hernandez</h5>
							</div>
						</form>
						
					</div>
			</div>
		</div>
	</div>
</footer>
</body>
</html>

