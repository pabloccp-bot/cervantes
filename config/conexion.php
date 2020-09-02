<?php 
	
	$conexion = mysqli_connect('localhost:3307','root','','editorial');

	if(!$conexion){
		echo "Ocurrio un error";
		exit;
	}

?>