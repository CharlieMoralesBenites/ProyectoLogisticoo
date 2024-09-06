<?php

function conexion_bd()
{
    $servername = "localhost";
    $username = "root";
    $password = "sisope";
    $dbname = "proyectologisticoo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    return $conn;
}
