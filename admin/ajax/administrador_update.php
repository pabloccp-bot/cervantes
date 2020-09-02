<?php
		
		include "../../config/conexion.php";
			
			$id = $_POST['admin_id'];


			$actual = "SELECT * FROM admin WHERE admin_id = '$id'";
			$dato_actual = $conexion->query($actual);
			$r = mysqli_fetch_assoc($dato_actual);


			$usuario = $_POST['usuario'];
			
			if(strlen($_POST['clave']) > 0){
				$clave = md5($_POST['clave']);
			}else{
				$clave = $r["admin_clave"];
			}
			
			
			if($_POST['admin_status']){
			$estado = 1;	
			}else{
			$estado = 0;
			}
			$sql = "
				UPDATE admin
			SET
				admin_id = '$id',
				admin_user = '$usuario',
				admin_clave = '$clave',
				admin_estado = '$estado'
			WHERE
				admin_id = $id";
		
			//ejecutar en la base de datos 
			$conexion->query($sql);
			header("location:../administrador.php");
			
		
		
?>