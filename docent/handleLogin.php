<?php


$gebruikersnaam = $_POST["gebruikersnaam"];
$wachtwoord = $_POST["wachtwoord"];

if($gebruikersnaam == "admin" && $wachtwoord == "admin123"){
    echo "Je bent ingelogd";
}
else{
    echo "De gegevens kloppen niet";
}


?>