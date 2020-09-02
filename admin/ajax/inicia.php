<?php 
	
	include "../../config/conexion.php";

	$usuario = $_POST["usuario"];
	$clave = md5($_POST["password"]);

	$sql = "SELECT * FROM admin WHERE admin_user = '$usuario' AND admin_clave = '$clave'";
	$lista = $conexion->query($sql);

	if($lista->num_rows == 0){
		echo "no existe el usuario";
		exit;
	}

	$resultado = mysqli_fetch_assoc($lista);

	session_start();
	$_SESSION["usuario"] = $resultado["admin_user"];


?>