<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "inventory";

$conn =  mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    echo "Connection failed please check your source code";
}

?>
