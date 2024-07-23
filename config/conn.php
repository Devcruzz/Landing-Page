<?php 

    $user = "root";
    $password = "";
    $db = "login";
    $host = "localhost";
    
    $mysqli = new mysqli($host, $user, $password, $db);

    if ($mysqli->connect_error) {

        die("FALHA AO CONECTAR AO BANCO :(" . $mysqli->connect_error);
    }

?>