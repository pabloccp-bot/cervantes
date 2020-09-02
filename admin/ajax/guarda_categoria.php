<?php 
	include "../../config/conexion.php";

			# codigo que guarda libros
			$categoria  = $_POST["categoria_id"];
			$titulo  = $_POST["categoria_nombre"];
			$status = isset($_POST["categoria_status"]) ? 1 : 0;

			$n = $_FILES["categoria_imagen"]["name"];
			$extension = substr($n, -3, strlen($n));
			$nombre = time().".".$extension;
			move_uploaded_file($_FILES["categoria_imagen"]["tmp_name"], "../../upload/categoria/".$nombre);

			$sql = "INSERT INTO categoria(
									categoria_id,
									categoria_nombre,
									categoria_imagen,   
									categoria_status
							) VALUES(
									'{$categoria}',
									'{$titulo}',
									'{$nombre}',
									'{$status}'
							)";
			
			$destino = "categorias.php";

	$conexion->query($sql);
	header("location: ../".$destino);

?>