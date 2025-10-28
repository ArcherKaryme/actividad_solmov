<?php

$servername = "127.0.0.1";
$username = "admin";
$password = "Karyme09";
$dbname = "alumnosdb";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Conexion Fallida".$conn->connect_error);

}
