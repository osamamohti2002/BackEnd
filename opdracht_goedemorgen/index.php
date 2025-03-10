<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image: url('<?php echo getGreetingAndGreeting()["background"];?>');">
<div>
    <h1><?php echo getGreetingAndGreeting()["greeting"];?></h1>
    <p>Het Huidige tijdstip is  <?php echo date("H:i:s"); ?> </p>
</div>
</body>
</html>

<?php

function getGreetingAndGreeting(){
    $hour = date("H");
    $data = [];

    switch(true){
        case($hour >= 6 && $hour < 12):
            $data["greeting"] = "Goede Morgen";
            $data["background"] = "media/morning.png";
            break;
        case($hour >= 12 && $hour < 18):
            $data["greeting"] = "Goede Middag";
            $data["background"] = "media/afternoon.png";
            break;
        case($hour >= 18 && $hour < 22):
            $data["greeting"] = "Goede Avond";
            $data["background"] = "media/evening.png";
            break;
        default:
            $data["greeting"] = "Goede Nacht";
            $data["background"] = "media/night.png";


    }

    return $data;


}




?>