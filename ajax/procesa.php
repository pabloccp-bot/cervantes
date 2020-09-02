<?php

	include "../config/conexion.php";
	//$id  = $_POST["contacto_id"];
	$nombre= $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	$mensaje=$_POST['mensaje'];
	$activo = 1;
	$sql ="INSERT INTO contacto (
		
		contacto_nombre,
		contacto_apellido,
		contacto_email,
		contacto_telefono,
		contacto_mensaje,
		contacto_status
	)VALUES(
		
		'$nombre',
		'$apellido',
		'$email',
		'$telefono',
		'$mensaje',
		'$activo'
	)";
	
	$inserta = $conexion->query($sql);

	if($inserta){
		echo '<div id="cajaError" class="col-md-12 alert alert-success text-center">Su Mensaje ah sido enviado Con exito.</div>';
	}else{
		echo '<div id="cajaError" class="col-md-12 alert alert-danger text-center">Ocurrio un error vuelva a enviar</div>';
	}
	//header("location:../index.php");
?>