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
						<center><img src="public/images/img0.jpg" class="img5"></center>
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
		<div class="col-md-12">
			
			
			
		</div>
<?php  
	
	$user = new FacilitadorController();
		
	if(isset($_POST['entrar']))
	{
		$user->login();
	}

?>	

<div class="bt-4"><a href="index.php" type="button" class="btn btn-lg btn-info bt-3" ria-expanded="false">Regresar</a></div>

	<div class="container">
		<div class="form-group col-md-12"></div>
				<h2><center><img src="public/images/icon1.png" class="img4">
					<br>
					Iniciar Seción</center></h2>
		</div>
		<fieldset>
			<div class="container">
				<br>
				<form class="form-horizontal" action="" method="POST">
					<div class="form-group">
						<label class="control-label col-md-4" for="inputUser">Usuario:
						</label>
						<div class="col-md-4">
							<input class="form-control" id="inputcorreo" name="inputCorreo" type="usuario" placeholder="SU USUARIO AQUI..." required>
							</input>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4" for="inputCode">Contraseña:
						</label>
						<div class="col-md-4">
							<input class="form-control" id="inputPass" type="password" name="inputPass" placeholder="SU CONTRASEÑA AQUI..." required>
							</input>
						</div>
					</div>
	        		<center><input name="entrar" type="submit" class="btn btn-info bt-6" value="Entrar">
	        			<a href="registrar.php" type="button" class="btn btn-lg btn-primary bt-6" data-toggle="modal">Registrarse
	        			</a>
	        		</center>
	        		<br>	
				</form>
			</div>
	</fieldset>
	
		<div class="container">
			<div class="modal fade" id="ventana1">
      			<div class="modal-dialog">
        			<div class="modal-content">
        				<div class="modal-header">
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
 

</body>
</html>

