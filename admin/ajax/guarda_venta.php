<?php 
	include "../../config/conexion.php";

			# codigo que guarda libros
			$venta  = $_POST["venta_id"];
			$titulo  = $_POST["venta_titulo"];
			$descripcion  = $_POST["venta_descripcion"];
			$status = isset($_POST["venta_status"]) ? 1 : 0;

			$n = $_FILES["venta_imagen"]["name"];
			$extension = substr($n, -3, strlen($n));
			$nombre = time().".".$extension;
			move_uploaded_file($_FILES["venta_imagen"]["tmp_name"], "../../upload/venta/".$nombre);

			$sql = "INSERT INTO venta(
									venta_id,
									venta_titulo,
									venta_descripcion,
									venta_imagen,   
									venta_status
							) VALUES(
									'{$venta}',
									'{$titulo}',
									'{$descripcion}',
									'{$nombre}',
									'{$status}'
							)";
			
			$destino = "puntos_ventas.php";

	$conexion->query($sql);
	header("location: ../".$destino);

?>