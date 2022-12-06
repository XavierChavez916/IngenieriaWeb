<?php

	$conexion= new mysqli("localhost","root","","petsbd");
	if ($conexion->connect_errno) {
		echo "Hay problemas de conexion";
	}
?>
