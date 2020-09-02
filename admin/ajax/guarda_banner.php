<?php 
	include "../../config/conexion.php";

			# codigo que guarda libros
			$banner  = $_POST["banner_id"];
			$titulo  = $_POST["banner_titulo"];
			$descripcion	= $_POST["banner_descripcion"];
			$status = isset($_POST["banner_status"]) ? 1 : 0;

			$n = $_FILES["banner_imagen"]["name"];
			$extension = substr($n, -3, strlen($n));
			$nombre = time().".".$extension;
			move_uploaded_file($_FILES["banner_imagen"]["tmp_name"], "../../upload/banner/".$nombre);

			$sql = "INSERT INTO banner(
									banner_id,
									banner_titulo,
									banner_descripcion,
									banner_imagen,   
									banner_status
							) VALUES(
									'{$banner}',
									'{$titulo}',
									'{$descripcion}',
									'{$nombre}',
									'{$status}'
							)";
			
			$destino = "bienvenida2.php";

	$conexion->query($sql);
	header("location: ../".$destino);

?>