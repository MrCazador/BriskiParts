<?php
	function conectar(){
		$user = "root";
		$pass = "";
		$server = "localhost";
		$database = "DDTECH";
		$conexion = mysqli_connect($server, $user, $pass) or die("Error en conectar a la base de datos".mysql_error());
		mysqli_select_db($conexion, $database);
		return $conexion;
	}
?>