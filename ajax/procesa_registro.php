<?php

	include "../config/conexion.php";
	$nombre= $_POST['nombre'];
	$user= $_POST['email'];
	$clave  = md5($_POST["clave"]);
	$telefono=$_POST['telefono'];
	$activo = 1;
	$sql ="INSERT INTO usuario (
		usuario_nombre,
		usuario_email,
		usuario_clave,
		usuario_telefono,
		usuario_estado
	)VALUES(
		
		'$nombre',
		'$user',
		'$clave',
		'$telefono',
		'$activo'
	)";
$inserta = $conexion->query($sql);

	if($inserta){
		echo '<div style="margin-top:20px;" id="cajaError_registro" class="col-md-12 alert alert-success text-center">Has Creado tu cuenta con exito, ve al menu de inicio</div> 
		<a href="usuario.php" class="btn btn-primary" class="fa fa-plus"> Ir a Login</a>';
	}else{
		echo '<div id="cajaError_registro" class="col-md-12 alert alert-danger text-center">Ocurrio un error vuelva a enviar</div>';
	}
?>