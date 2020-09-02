<?php 
	
	include "../config/conexion.php";

	$usuario = $_POST["email"];
	$clave = md5($_POST["clave"]);

	$sql = "SELECT * FROM usuario WHERE usuario_email = '$usuario' AND usuario_clave = '$clave'";
	$lista = $conexion->query($sql);

	if($lista->num_rows == 0){
		echo "no existe el usuario";
		exit;
	}

	$resultado = mysqli_fetch_assoc($lista);

	session_start();
	$_SESSION["email"] = $resultado["usuario_email"];


?>