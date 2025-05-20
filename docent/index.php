<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    var_dump($_POST);
    echo "Dit is een een POST request";

    foreach($_POST as $key => $value){
        if(empty($_POST[$key])){
            echo "Vul het veld $key in";
        }
    }


}
else{
    echo "Dis ie een get request";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Vul je gegevens in om in te loggen</h1>


    <form action="index.php" method="post">
        <label for="gebruikersnaam">Vul hier je gebruikersnaam in: </label>
        <input type="text" id="gebruikersnaam" name="gebruikersnaam">

        <label for="wachtwoord">Vul hier je wachtwoord in: </label>
        <input type="password" id="wachtwoord" name="wachtwoord">

        <input type="submit" value="Log In">
    </form>

</body>
</html>