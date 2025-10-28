<?php

$servername = "localhost";
$username = "zdhwwgju_user1";
$password = "EvmgRFZkqtbjdFmNzTYh";
$dbname = "zdhwwgju_aplicacion";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Conexion Fallida".$conn->connect_error);

}

