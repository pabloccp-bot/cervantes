<?php
		
		include "../../config/conexion.php";
			
			$id = $_POST['venta_id'];
			$titulo = $_POST['venta_titulo'];
			$descripcion = $_POST['venta_descripcion'];
			$sql = "SELECT * FROM venta WHERE venta_id = $id";
			$resultado = $conexion->query($sql);
			$dato_actual = mysqli_fetch_assoc($resultado);
			$nombre = $dato_actual['venta_imagen'];
			
		
			
			if(strlen($_FILES['venta_imagen']['name'])>0){
				$nombre = time().'.jpg';
				move_uploaded_file($_FILES['venta_imagen']['tmp_name'], "../../upload/venta/".$nombre);	
			}
			
			if($_POST['venta_status']){
			$estado = 1;	
			}else{
			$estado = 0;
			}
			$sql = "
				UPDATE venta
			SET
				venta_id = '$id',
				venta_titulo = '$titulo',
				venta_descripcion = '$descripcion',
				venta_imagen = '$nombre',
				venta_status = '$estado'
			WHERE
				venta_id = $id";
		
			//ejecutar en la base de datos 
			$conexion->query($sql);
			header("location:../puntos_ventas.php");
			
		
		
?>