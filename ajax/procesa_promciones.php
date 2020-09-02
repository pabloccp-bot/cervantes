<?php

	include "../config/conexion.php";
	//$id  = $_POST["contacto_id"];
	$email= $_POST['email'];
	$activo = 1;
	$sql ="INSERT INTO promocion (
		
		promocion_email,
		promocion_status
	)VALUES(
		
		'$email',
		'$activo'
	)";
	
	$promocion = $conexion->query($sql);

	if($promocion){
		echo '<div id="cajaError" class="col-md-12 alert alert-success text-center">Su correo ah sido enviado Con exito.</div>';
	}else{
		echo '<div id="cajaError" class="col-md-12 alert alert-danger text-center">Ocurrio un error vuelva a enviar</div>';
	}
	//header("location:../index.php");
?>