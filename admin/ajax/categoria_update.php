<?php
		
		include "../../config/conexion.php";
			
			$id = $_POST['categoria_id'];
			$categoria = $_POST['categoria_nombre'];
			$sql = "SELECT * FROM categoria WHERE categoria_id = $id";
			$resultado = $conexion->query($sql);
			$dato_actual = mysqli_fetch_assoc($resultado);
			$nombre = $dato_actual['categoria_imagen'];
			
		
			
			if(strlen($_FILES['categoria_imagen']['name'])>0){
				$nombre = time().'.jpg';
				move_uploaded_file($_FILES['categoria_imagen']['tmp_name'], "../../upload/categoria/".$nombre);	
			}
			
			if($_POST['categoria_status']){
			$estado = 1;	
			}else{
			$estado = 0;
			}
			$sql = "
				UPDATE categoria
			SET
				categoria_id = '$id',
				categoria_nombre = '$categoria',
				categoria_imagen = '$nombre',
				categoria_status = '$estado'
			WHERE
				categoria_id = $id";
		
			//ejecutar en la base de datos 
			$conexion->query($sql);
			header("location:../categorias.php");
			
		
		
?>