<?php
    include("../dll/config.php");
    include("../dll/class_mysqli.php");

    extract($_POST);
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $cedula = $_POST['cedula'];
    $nombreMascota = $_POST['nombreMascota'];

    $conexion = new mysqli("localhost:3307", "root", "", "petsdb");
    if($conexion->connect_errno){
        echo "hay problemas de conexion";
    }
  
    $miconexion= new class_mysqli();
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
	$miconexion->consulta("insert into postulantes values('$cedula','$nombres','$apellidos','$direccion','$correo')");
	$miconexion->consulta("insert into mascotas values('',$nombreMascota,'','','','$cedula')");

    
?>
