<?php 
	$archivo = $_FILES["archivo"] ['name'];
	$destino = "C:/xampp/htdocs/SRP/pdf".$archivo;
	copy($_FILES['archivo']['tmp_name'],$destino);
 ?> 