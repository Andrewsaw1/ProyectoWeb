<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supersito</title>
    <link rel="stylesheet" href="Vista/css/estilosI.css">
</head>
<body>
<div id="bar-nav">
        <div id="logo">
            <img src="../img/logo.jpg" alt="Mi logo" id="imagenLogo">
        </div>
        <form id="busqueda">
            <input type="text" name="palabra" id="txtBusqueda" placeholder="Buscar...">
            <button type="submit" value="Buscar" id="btnBuscar"><span class="icon-search"></span></button>
        </form>
        <a class="btnMenu icon-align-justify"></a>
        <div id="der" class="derOcultar">
            <a class="bar-der animacion textMenu" href="Vista/html/Ingresar.html">Iniciar sesión</a>
            <a class="bar-der animacion textMenu" href="">Pedidos</a>
            <a class="bar-der animacion carrito" href=""><span class="icon-shopping-cart"></a>
        </div>
    </div>

    <div class="contenido">
        <div class="pedidos">
            <h2>Pedidos</h2>
            <p>Precio:
                Descripcion:
            </p>
        </div>
    </div>
    

</body>
</html>