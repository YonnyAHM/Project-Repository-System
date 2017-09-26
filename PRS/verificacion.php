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
				<section class="jumbotron">
					<div class="container">
						<form action="#" method="" class="navbar-form navbar-right" role="search">
							<div class="form-group">
								
							</div>
						</form>
									
						<center><img src="public/images/img0.jpg" class="img3"></center>
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
			
			
			
			
		</div>
<?php  
	
	$user = new CodeController();
	
	if(isset($_POST['entrar']))
	{
		$user->login();
	}

?>	


	
	
	<div class="bt-4"><a href="index.php" type="button" class="btn btn-lg btn-info bt-3" ria-expanded="false">Regresar</a>
</div>
		<div class="container">
			<div class="form-group col-md-12"></div>
			<h3><center><img src="public/images/icon3.png" class="img2">
					<br>
					Inserte Codigo de Verificación</center></h3>
			</div>
			<fieldset>
				<div class="container">
					<br>
					<form class="form-horizontal" action="" method="POST">
						<div class="form-group">
							<label class="control-label col-md-4" for="inputCode"></label>
							<div class="col-md-4">
								<input class="form-control" id="inputCode" type="password" name="inputCode" placeholder="SU CODIGO AQUI..." required></input>
							</div>
						</div>
				
	        			<center><input name="entrar" type="submit" class="btn btn-info btn-lg bt-6" value="Confirmar">
	      		
					</form>
				</div>
			</fieldset>  
		</div>

		<br>
		<br>
		<br>
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

