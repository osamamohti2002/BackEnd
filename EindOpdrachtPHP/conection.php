<?php
$dsn = 'mysql:host=localhost;dbname=databank_php';
$username = 'root';
$password = '';

try{
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $selected_data = $conn->prepare("SELECT * FROM onderwerpen;");
    $selected_data->execute();

    echo 'data beas conected';

}catch(PDOException $e){
    echo 'Field connection' . $e->getMessage();
}