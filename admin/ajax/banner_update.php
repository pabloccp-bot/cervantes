<?php
		
		include "../../config/conexion.php";
			
			$id = $_POST['banner_id'];
			$titulo = $_POST['banner_titulo'];
			$descripcion = $_POST['banner_descripcion'];
			$sql = "SELECT * FROM banner WHERE banner_id = $id";
			$resultado = $conexion->query($sql);
			$dato_actual = mysqli_fetch_assoc($resultado);
			$nombre = $dato_actual['banner_imagen'];
			
		
			
			if(strlen($_FILES['banner_imagen']['name'])>0){
				$nombre = time().'.jpg';
				move_uploaded_file($_FILES['banner_imagen']['tmp_name'], "../../upload/banner/".$nombre);	
			}
			
			if($_POST['banner_status']){
			$estado = 1;	
			}else{
			$estado = 0;
			}
			$sql = "
				UPDATE banner
			SET
				banner_id = '$id',
				banner_titulo = '$titulo',
				banner_descripcion = '$descripcion',
				banner_imagen = '$nombre',
				banner_status = '$estado'
			WHERE
				banner_id = $id";
		
			//ejecutar en la base de datos 
			$conexion->query($sql);
			header("location:../bienvenida2.php");
			
		
		
?>