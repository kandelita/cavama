<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    
    $database = "iniciarsesionbd2";

    $conexion = mysqli_connect($host, $user, $pass, $database);

    if (!$conexion) {
        echo "Conexión fallida";
    }
?>