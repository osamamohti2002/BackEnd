<?php

$errors = [];
$saved_data = [];

if (isset($_GET['errors'])) {
    $errors = json_decode($_GET['errors'], true);
}

if (isset($_GET['saved_data'])) {
    $saved_data = json_decode($_GET['saved_data'], true);
}

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css"/>
    <style>
        span{ 
            color: red;
            font-size: 0.9em; 
            }
    </style>
    <title>Mad Libs</title>
</head>
<body>
    <h1>Mad Libs</h1>
    <div class="container">
        <nav>
            <ul>
                <li class="link"><a href="index.php">Er heerst paniek</a></li>
                <li class="link"><a href="onkeunde1.php">Onkunde</a></li>
            </ul>
        </nav>
        <h3>Er heerst Paniek</h3>
        <form action="onkeunde2.php" method="post">
            <label>Wat zou je graag willen kunnen?</label>
            <input type="text" name="wens" value="<?= htmlspecialchars($saved_data['wens'] ?? '') ?>">
            <span class="error"><?= $errors['wens'] ?? '' ?></span>

            <label>Met welke persoon kun je goed opschieten?</label>
            <input type="text" name="favoPersoon" value="<?= htmlspecialchars($saved_data['favoPersoon'] ?? '') ?>">
            <span class="error"><?= $errors['favoPersoon'] ?? '' ?></span>

            <label>Wat is je favoriete getal?</label>
            <input type="text" name="favoGetal" value="<?= htmlspecialchars($saved_data['favoGetal'] ?? '') ?>">
            <span class="error"><?= $errors['favoGetal'] ?? '' ?></span>

            <label>Wat heb je altijd bij je als je op vakantie gaat?</label>
            <input type="text" name="vakantie" value="<?= htmlspecialchars($saved_data['vakantie'] ?? '') ?>">
            <span class="error"><?= $errors['vakantie'] ?? '' ?></span>

            <label>Wat is je beste eigenschap?</label>
            <input type="text" name="besteEigenschap" value="<?= htmlspecialchars($saved_data['besteEigenschap'] ?? '') ?>">
            <span class="error"><?= $errors['besteEigenschap'] ?? '' ?></span>

            <label>Wat is je slechtste eigenschap?</label>
            <input type="text" name="slechteEigenschap" value="<?= htmlspecialchars($saved_data['slechteEigenschap'] ?? '') ?>">
            <span class="error"><?= $errors['slechteEigenschap'] ?? '' ?></span>

            <label>Wat is het ergste dat je kan overkomen?</label>
            <input type="text" name="ergste" value="<?= htmlspecialchars($saved_data['ergste'] ?? '') ?>">
            <span class="error"><?= $errors['ergste'] ?? '' ?></span>

            <button type="submit">Verstuurd</button>
        </form>

        <footer>
            <p>&copy; 2025 Osama Mohti</p>
        </footer>
    </div>
</body>
</html>
