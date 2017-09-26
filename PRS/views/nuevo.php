<!DOCTYPE html>

<?php
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "C:/xampp/htdocs/PRS/pdf/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
        }
    }
}
?>



<div class="container">
	<div class="form-group col-md-4"></div>


				<h1><center>Nuevo Proyecto</center></h1>

	<fieldset>
		<div class="container" style="width: 500px; margin: auto; border: 1px solid blue; padding: 30px">
				<br>
			<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">

				<div class="form-group">
							
					<div class="col-md-4">
							<input class="form-control" id="" type="text" name="titulo" placeholder="..." ></input>
							<textarea class="form-control" id="" name="descripcion" placeholder="..."></textarea>
					</div>
				</div>
				
				
			       		<input type="file" name="archivo" class="btn btn-info">
			       		<input type="submit" value="subir" name="subir" class="btn btn-info">
			</form>
		</div>
	</fieldset>
</div>