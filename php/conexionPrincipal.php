<?php
    $conexion = mysqli_connect("server-dbtecnolgoy.mysql.database.azure.com","dbtecnology","@2025drako") or die ("Error en la conexion de la base de datos ");
    mysqli_select_db($conexion,"bdtecnology") or die ("Error en la base de datos");
?>