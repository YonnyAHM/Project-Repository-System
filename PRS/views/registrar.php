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
	<a href="index.php"><div class="container-fluid">
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
						AIS-UNERG
						</center>
						</h1>
						<h2>
							Bienvenidos al SRP
						</h2>
					</div>
				</section>
			</div>
		</div>
	</div></a>
</header>
<br>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			
			
			<br>
			<br>
			<br>
			
		</div>
<?php  
	
	$user = new UsuarioController();
	
	if(isset($_POST['entrar']))
	{
		$user->login();
	}

?>	
<a href="indexV.php" type="button" class="btn btn btn-info" ria-expanded="false">Acceder como Visitante</a>
		<div class="container">
			<div class="form-group col-md-4"></div>
				<nav class="navbar navbar-inverse navbar-static-top col-md-4 bt-1" role="navigation">

					<h1><center>Inicio de Sesión</center></h1>

				</nav>
			</div>
			<fieldset>
			<div class="container">
			<br>
			<form class="form-horizontal" action="" method="POST">
				<div class="form-group">
					<label class="control-label col-md-4" for="inputUser">Usuario:
					</label>
						<div class="col-md-4">
							<input class="form-control" id="inputusuario" name="inputUsuario" type="usuario" placeholder="SU USUARIO AQUI..." required></input>
						</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-4" for="inputCode">Contraseña:</label>
					<div class="col-md-4">
						<input class="form-control" id="inputClave" type="password" name="inputClave" placeholder="SU CONTRASEÑA AQUI..." required></input>
					</div>
				</div>
				
	        			<center><input name="entrar" type="submit" class="btn btn-info" value="Entrar">
	        			<a href="registrar.php" type="button" class="btn btn-lg btn-primary">Registrarse</a></center>
	      		
			</form>
		</div>
		</footer>
	</fieldset>
	<br>


	<script src="<?php echo URL; ?>public/js/jquery.js"></script>
	<script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
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

