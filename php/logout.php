<?php
session_start();
session_destroy();
echo "<script> alert ('Saliendo'); window.location='../index.php'</script> ";
?>