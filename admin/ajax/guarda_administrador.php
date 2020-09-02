<?php 
	include "../../config/conexion.php";

			# codigo que guarda libros
			$usuario  = $_POST["usuario"];
			$clave  = md5($_POST["clave"]);
			$status = isset($_POST["admin_status"]) ? 1 : 0;

			$sql = "INSERT INTO admin(
									admin_user,
									admin_clave,   
									admin_estado
							) VALUES(
									'{$usuario}',
									'{$clave}',
									'{$status}'
							)";
			
			$destino = "administrador.php";

	$conexion->query($sql);
	header("location: ../".$destino);

?>