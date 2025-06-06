<?php
    $conexion = mysqli_connect("server-dbtecnology.mysql.database.azure.com","olqrmykmdb","4wT2BL$kVAPmiH96") or die ("Error en la conexion de la base de datos ");
    mysqli_select_db($conexion,"bdtecnology") or die ("Error en la base de datos");
?>