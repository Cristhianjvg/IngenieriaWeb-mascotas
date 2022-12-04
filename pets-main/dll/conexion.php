<?php

	$conexion= new mysqli("localhost:3307","root","","petsdb");
	if ($conexion->connect_errno) {
		echo "Hay problemas de conexion";
	}
?>
