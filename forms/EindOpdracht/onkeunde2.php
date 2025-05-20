<?php

$errors = [];
$fields = ["wens", "favoPersoon", "favoGetal", "vakantie", "besteEigenschap", "slechteEigenschap", "ergste"];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $data = [];
    foreach($fields as $field){
        $value = $_POST[$field] ?? "";
        if(empty(trim($value))){
            $errors[$field] = "{$field} is verplicht in te vullen";
        }else{
            $data[$field] = htmlspecialchars($value);
        }
    }


    if (!empty($errors)) {
        header("Location: onkeunde1.php?errors=" . urlencode(json_encode($errors)) . "&saved_data=" . urlencode(json_encode($_POST)));
        exit();
    }

}

extract($data);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Mad Libs</h1>
    <div class="container">
        <nav>
            <ul>
                <li class="link"><a href="index.php">Er heerst paniek</a></li>
                <li class="link"><a href="onkeunde1.php">Onkeunde</a></li>
            </ul>
        </nav>

        <p>Er zijn veel mensen die niet kunnen <?= $wens ?>. Neem nou <?= $favoPersoon ?>. Zelfs met de hulp van een <?= $vakantie ?> of zelfs <?= $favoGetal ?> kan <?= $favoPersoon ?> niet <?= $wens ?>. Dat heeft niet te maken met een gebrek aan <?= $besteEigenschap ?>, maar met een te veel <?= $slechteEigenschap ?> leidt tot <?= $ergste ?> en dat is niet goed als je wilt <?= $wens ?>. Helaas voor <?= $favoPersoon ?></p>

        <footer>
    <p>&copy; 2025 Osama Mohti</p>
</footer>
    </div>
</body>
</html> 

