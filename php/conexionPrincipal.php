<?php
    $con = mysqli_init();
    mysqli_ssl_set($con,NULL,NULL, "../BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);
    mysqli_real_connect($con, "server-dbtecnolgoy.mysql.database.azure.com", "dbtecnology", "@2025drako", "bdtecnology", 3306, MYSQLI_CLIENT_SSL);