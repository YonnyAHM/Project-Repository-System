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
				<br>
					<div class="container">
						<form action="#" method="" class="navbar-form navbar-right" role="search">
							<div class="form-group">
								
							</div>
						</form>
									
						<center><img src="public/images/img0.jpg" class="img3"></center>
					</div>
				<br>
			</div>
		</div>
	</div>
</header>
<br>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			
			
			<br>
			
		</div>
<?php  
	
	$user = new UsuarioController();
	
	if(isset($_POST['entrar']))
	{
		$user->login();
	}

?>	
	<div class="bt-4"><a href="index.php" type="button" class="btn btn-lg btn-info bt-3" ria-expanded="false">Regresar</a></div>

		<?php 

	$user = new FacilitadorController();
	if(isset($_POST['reg_user']))
	{
		$r = $user->add($_POST['inputNombre'], $_POST['inputNombre_secun'], $_POST['inputApellido'], $_POST['inputApellido_secun'], $_POST['inputCedula'], $_POST['inputFecha_n'], $_POST['inputDireccion'], $_POST['inputCorreo'], $_POST['inputCorreo_secun'],  $_POST['inputTelefono'], $_POST['inputTelefono_secun'], $_POST['inputAsignatura'], $_POST['inputPass']);
		if($r)
		{
			echo "<script>alert('Registro Excitoso, ya puede iniciar seción'); 
				window.location.href='".'index.php'."';</script>";
		}
	}

?>

	<div class="container">
		<div class="form-group col-md-12"></div>


				<h1><center><img src="public/images/icon1.png" class="img2">
				<br>
				Registro de Facilitador </center></h1>

		<fieldset>
					<div class="container">
					<br>
					<form class="form-horizontal" method="POST">
						<div class="form-group">
							<label class="control-label col-md-4" for="inputNombre">Nombre:</label>
							<div class="col-md-4">
								<input class="form-control" id="inputNombre" name="inputNombre" type="text" placeholder="SU Nombre AQUI..." required></input>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4" for="inputNombre_secun">Segundo Nombre:</label>
							<div class="col-md-4">
								<input class="form-control" id="inputNombre_secun" name="inputNombre_secun" type="text" placeholder="SU Nombre AQUI..." required></input>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-4" for="inputApellido">Apellido:</label>
							<div class="col-md-4">
								<input class="form-control" id="inputApellido" type="text" name="inputApellido" placeholder="SU APELLIDO AQUI..." required></input>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4" for="inputApellido_secun">Segundo Apellido:</label>
							<div class="col-md-4">
								<input class="form-control" id="inputApellido_secun" type="text" name="inputApellido_secun" placeholder="SU APELLIDO AQUI..." required></input>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-4" for="inputCedula">Cedula de Identitidad:</label>
							<div class="col-md-4">
								<input class="form-control" id="inputCedula" type="text" name="inputCedula" placeholder="SU Cedula AQUI..." required></input>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4" for="inputFecha_n">Fecha de Nacimiento:</label>
							<div class="col-md-4">
								<input class="form-control" id="inputFecha_n" type="date" name="inputFecha_n" placeholder="SU  AQUI..." required></input>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4" for="inputDireccion">Dirección:</label>
							<div class="col-md-4">
								<textarea class="form-control" id="inputDireccion" name="inputDireccion" placeholder="INTRODUZCA SU DIRECCION DETALLADA" required></textarea>
							</div>
						</div>
					
						<div class="form-group">
							<label class="control-label col-md-4" for="inputCorreo">Correo Electronico:</label>
							<div class="col-md-4">
								<input class="form-control" id="inputCorreo" name="inputCorreo" type="email" placeholder="ejemplo@ejemplo.com" required></input>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-4" for="inputCorreo_secun">Correo Electronico Secundario:</label>
							<div class="col-md-4">
								<input class="form-control" id="inputCorreo_secun" name="inputCorreo_secun" type="email" placeholder="ejemplo@ejemplo.com" required></input>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-4" for="inputTelefono">N. Telefonico:</label>
							<div class="col-md-4">
								<input class="form-control" id="inputTelefono" type="number" name="inputTelefono" placeholder="SU NUMERO DE TELEFONO AQUI..." required></input>
							</div>
						</div>


						<div class="form-group">
							<label class="control-label col-md-4" for="inputTelefono_secun">N. Telefonico Secundario:</label>
							<div class="col-md-4">
								<input class="form-control" id="inputTelefono_secun" type="number" name="inputTelefono_secun" placeholder="SU NUMERO DE TELEFONO AQUI..." required></input>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-4" for="inputAsignatura">Asignatura:</label>
							<div class="col-md-4">
								<input class="form-control" id="inputAsignatura" type="text" name="inputAsignatura" placeholder="Ingrese el Periodo en el Cual Usted Inicio AQUI..." required></input>
							</div>
						</div>


						<div class="form-group">
							<label class="control-label col-md-4" for="inputPass">Contraseña:</label>
							<div class="col-md-4">
								<input class="form-control" id="inputPass" type="text" name="inputPass" placeholder=" AQUI..." required></input>
							</div>
						</div>
						
						
							<center><a href="#ventana1" type="button" class="btn btn-lg btn-info bt-6" data-toggle="modal">Aviso (leer antes de culminar el registro)</a></center>
							<br>
			       			<center> <input name="reg_user" type="submit" class="btn btn-lg btn-primary bt-6" value="Registrar"></center>
			       			<br>
			       			<br>
			       			<br>
			     		
					</form>
				</div>
			</fieldset>

			<div class="container">
				<div class="modal fade" id="ventana1">
      				<div class="modal-dialog">
        				<div class="modal-content">
        					<div class="modal-header">
        						<center><h1>Aviso</h1></center>
        						<h2>Recuerde que algunos de sus datos tales como "Nombre, Apellido y Correo" padran ser vistos por otros usuarios</h2>
        						<br>
        						<center><button type="button" class="btn btn-danger bt-6" data-dismiss="modal">Entendido</button></center>
        					</div>
        				</div>
      				</div>
      			</div>
      		</div>


	<script src="<?php echo URL; ?>public/js/jquery.js"></script>
	<script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
	<?php
			$enrutador = new Enrutador();
			//$enrutador->validarGET('enlace');
			
 ?>
 
 <!--<footer>
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
 </footer>-->
</body>
</html>

