<?php
    extract($_POST);
    $nombre = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    echo "<strong>".$nombres."</strong> ".$apellidos;
    echo "<hr>";
    echo $telefono;
    $conexion = new mysqli("localhost:3307", "root", "", "petsdb");

    include("abre_conexion.php");   

    $sql = "INSERT INTO $tabla_db1 (nombre,email,fecha) VALUES ('$nombre','$email','$fecha')";   
    mysql_query($sql);  

    // Cerramos la conexion a la base de datos   
    include("cierra_conexion.php"); 

    if($conexion->connect_errno){
        echo "hay problemas de conexion";
    }
?>