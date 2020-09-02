<?php
		
		include "../../config/conexion.php";
			
			$id = $_POST['libro_id'];
			$categoria_id  = $_POST["categoria_id"];
			$titulo = $_POST['libro_titulo'];
			$autor = $_POST['libro_autor'];
			$sinopsis	= $_POST["libro_sinopsis"];
			$paginas	= $_POST["libro_pagina"];
			$novedad = $_POST["libro_novedad"];
			$proximamente = $_POST["libro_proximamente"];
			$precio = $_POST["libro_precio"];
			$oferta = $_POST["libro_oferta"];
			$precio_oferta = $_POST["libro_preciooferta"];
			$sql = "SELECT * FROM libro WHERE libro_id = $id";
			$resultado = $conexion->query($sql);
			$dato_actual = mysqli_fetch_assoc($resultado);
			$nombre = $dato_actual['libro_imagen'];
			
		
			
			if(strlen($_FILES['libro_imagen']['name'])>0){
				$nombre = time().'.jpg';
				move_uploaded_file($_FILES['libro_imagen']['tmp_name'], "../../upload/libro/".$nombre);	
			}
			
			if($_POST['libro_status']){
			$estado = 1;	
			}else{
			$estado = 0;
			}
			$sql = "
				UPDATE libro
			SET
				categoria_id = '$categoria_id',
				libro_titulo = '$titulo',
				libro_autor = '$autor',
				libro_sinopsis = '$sinopsis',
				libro_pagina = '$paginas',
				libro_novedad = '$novedad',
				libro_proximamente = '$proximamente',
				libro_precio = '$precio',
				libro_oferta = '$oferta',
				libro_preciooferta = '$precio_oferta',
				libro_imagen = '$nombre',
				libro_status = '$estado'
			WHERE
				libro_id = $id";
		
			//ejecutar en la base de datos 
			$conexion->query($sql);
			header("location:../novedades.php");
			
		
		
?>