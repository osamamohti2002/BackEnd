<?php

$dsn = "mysql:host=localhost;dbname=eind_opdracht_php";
$username = "root";
$password = "";

try{
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "connection filed " . $e->getMessage();
}