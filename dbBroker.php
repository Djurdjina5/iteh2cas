<?php
$host = "localhost";
$db = "kolokvijumi";
$user = "root";
$password = "";
$port = 8111;

$conn = new mysqli($host,$user,$password,$db, $port);

if($conn->connect_errno){
    echo("Nesupesna konekcija: greska> " .$conn->connect_error.", err kod>" .$conn->connect_errno);
}

?>