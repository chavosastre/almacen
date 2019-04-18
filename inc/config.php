<?php
    $server = "localhost";
    $bd = "almacen";
    $user = "root";
    $pass = "";

    $conexion = new mysqli($server, $user, $pass, $bd);

    error_reporting(0);//No muestra errores

    if($conexion -> connect_errno)
    {
        echo "Estamos experimentando problemas en nuestro servidor, por favor intenta mas tarde";
        exit();
    }
?>