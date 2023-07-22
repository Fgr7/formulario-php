<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $bd = "formulario";

    $connect = mysqli_connect($host, $user, $password);

    if (!$connect) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    mysqli_select_db($connect, $bd);

    return $connect;
}

?>
