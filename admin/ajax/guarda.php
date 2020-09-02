<?php 
	include "../../config/conexion.php";
	$dato = $_POST["option"];


//	echo "<pre>";
//	print_r($_FILES);
//	echo "<pre>";
//	exit;

	switch ($dato) {
		case 'libros':
			# codigo que guarda libros
			$categoria_id  = $_POST["categoria_id"];
			$titulo  = $_POST["libro_titulo"];
			$autor	= $_POST["libro_autor"];
			$sinopsis	= $_POST["libro_sinopsis"];
			//$imagen	= $_POST["libro_imagen"];
			$paginas	= $_POST["libro_pagina"];
			$novedad = $_POST["libro_novedad"];
			$proximamente = $_POST["libro_proximamente"];
			$precio = $_POST["libro_precio"];
			$oferta = $_POST["libro_oferta"];
			$precio_oferta = $_POST["libro_preciooferta"];
			$status = isset($_POST["libro_status"]) ? 1 : 0;


			$n = $_FILES["libro_imagen"]["name"];
			$extension = substr($n, -3, strlen($n));

			$nombre = time().".".$extension;
			move_uploaded_file($_FILES["libro_imagen"]["tmp_name"], "../../upload/libro/".$nombre);

			$sql = "INSERT INTO libro(
									categoria_id,
									libro_titulo,
									libro_autor,
									libro_sinopsis, 
									libro_imagen,
									libro_pagina,  
									libro_novedad,
									libro_proximamente,
									libro_precio,
									libro_oferta,
									libro_preciooferta,   
									libro_status
							) VALUES(
									'{$categoria_id}',
									'{$titulo}',
									'{$autor}',
									'{$sinopsis}',
									'{$nombre}',
									'{$paginas}',
									'{$novedad}',
									'{$proximamente}',
									'{$precio}',
									'{$oferta}',
									'{$precio_oferta}',
									'{$status}'
							)";
			
			$destino = "novedades.php";
			break;
		case 'banner':
			# codigo que guarda banner
			break;
		
		default:
			# code...
			break;
	}

	$conexion->query($sql);
	header("location: ../".$destino);

?>