<?php
    include 'Persistencia/conexion.php';
    $con = new Coneccion();
    $mysql=$con->conectar();

    $sql = "SELECT * FROM productos";
    $stmt = $mysql->query($sql);
?>