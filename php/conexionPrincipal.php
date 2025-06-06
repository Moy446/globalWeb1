<?php
    $conexion = mysqli_connect("server-dbtecnology.database.windows.net","dbtecnology","@2025dbtec") or die ("Error en la conexion de la base de datos ");
    mysqli_select_db($conexion,"db-bdtecnology") or die ("Error en la base de datos");
?>