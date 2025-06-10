<?php


$errors = [];
$fields = ['huisdier', 'naam', 'land', 'vervelen', 'speelgoed', 'docent', 'kopen', 'hobby'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = [];

    foreach ($fields as $field) {
        $value = $_POST[$field] ?? '';
        if (empty(trim($value))) {
            $errors[$field] = "{$field} is verplicht in te vullen";
        } else {
            $data[$field] = htmlspecialchars($value);
        }
    }

    if (!empty($errors)) {
        header("Location: index.php?errors=" . urlencode(json_encode($errors)) . "&saved_data=" . urlencode(json_encode($_POST)));
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
        
        <h3>Er heerst Paniek</h3>
        <p>Er heerst paniek in het koninkrijk <?= $land ?>, Koning <?= $docent ?> is ten einde en als koning <?= $docent ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?= $naam ?>.</p>
        <p><?= $naam ?>! Het us een ramp! Het is een schandel </p>
        <p>Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand</p>
        <p>Mijn <?= $huisdier ?> is verdwenen! Zo maar, zonder Waarschuwing. En ik had net <?= $speelgoed ?> voor hem gekocht</p>
        <p>Majesteit, uw <?= $huisdier ?> komt vast vanzelf weer terug</p>
        <p>Ja, da's leuk een aardig, maar hoe moet ik in de tussentijd <?= $hobby ?> leren? </p>
        <p>Maar Sire, daar kunt u toch uw <?= $kopen ?> voor gebruiken</p>
        <p><?= $naam ?>, je hebt helemaal gelijk! Wat zou ik doen ik jou niet had.</p>
        <p><?= $vervelen ?>, Sire</p>

        <footer>
    <p>&copy; 2025 Osama Mohti</p>
</footer>
    </div>
</body>
</html> 




