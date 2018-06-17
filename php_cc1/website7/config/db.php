<?php
    #crear conexion
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    #chequear la conexion
    if (mysqli_connect_errno()) {
        #conexion fallida
        echo "Fallo la conexion a la DB ". mysqli_connect_errno();
    }
?>