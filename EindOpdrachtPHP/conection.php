<?php
$dsn = 'mysql:host=localhost;dbname=databank_php';
$username = 'root';
$password = '';

try{
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

}catch(PDOException $e){
    echo 'Field connection' . $e->getMessage();
}