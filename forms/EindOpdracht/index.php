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
    <link rel="stylesheet" href="style.css">
    <title>Mad Libs</title>

</head>
<body>
    <h1 class="title">Mad Libs</h1>
    <div class="container">
        <nav>
            <ul>
                <li class="link"><a href="index.php">Er heerst paniek</a></li>
                <li class="link"><a href="onkunde1.php">Onkunde</a></li>
            </ul>
        </nav>
        <h3>Er heerst Paniek</h3>
        <form action="paniek.php" method="post">
            <div class="form-row">
            <label>Welke dier zou je nooit als huisdier willen hebben?</label>
            <input type="text" name="huisdier" value="<?= htmlspecialchars($saved_data['huisdier'] ?? '') ?>">
            <span class="error" style="color: red;"><?= $errors['huisdier'] ?? '' ?></span>
            </div>



            <div class="form-row">
            <label>Wie is de belangrijkste persoon in je leven?</label>
            <input type="text" name="naam" value="<?= htmlspecialchars($saved_data['naam'] ?? '') ?>">
            <span class="error"><?= $errors['naam'] ?? '' ?></span>
            </div>



            <div class="form-row">
            <label>In welk land zou je graag willen wonen?</label>
            <input type="text" name="land" value="<?= htmlspecialchars($saved_data['land'] ?? '') ?>">
            <span class="error"><?= $errors['land'] ?? '' ?></span>
            </div>



            <div class="form-row">
            <label>Wat doe je als je je verveelt?</label>
            <input type="text" name="vervelen" value="<?= htmlspecialchars($saved_data['vervelen'] ?? '') ?>">
            <span class="error"><?= $errors['vervelen'] ?? '' ?></span>
            </div>

            
            <div class="form-row">
            <label>Met welk speelgoed speelde je als kind het meest?</label>
            <input type="text" name="speelgoed" value="<?= htmlspecialchars($saved_data['speelgoed'] ?? '') ?>">
            <span class="error"><?= $errors['speelgoed'] ?? '' ?></span>
            </div>



            <div class="form-row">
            <label>Bij welke docent spijbel je het liefst?</label>
            <input type="text" name="docent" value="<?= htmlspecialchars($saved_data['docent'] ?? '') ?>">
            <span class="error"><?= $errors['docent'] ?? '' ?></span>
            </div>



            <div class="form-row">
            <label>Als je €100.000 had, wat zou je dan kopen?</label>
            <input type="text" name="kopen" value="<?= htmlspecialchars($saved_data['kopen'] ?? '') ?>">
            <span class="error"><?= $errors['kopen'] ?? '' ?></span>
            </div>



            <div class="form-row">
            <label>Wat is je favoriete bezigheid?</label>
            <input type="text" name="hobby" value="<?= htmlspecialchars($saved_data['hobby'] ?? '') ?>">
            <span class="error"><?= $errors['hobby'] ?? '' ?></span>
            </div>

            <input class="btn" type="submit" value="Verstuur">
        </form>

        <footer>
            <p>&copy; 2025 Osama Mohti</p>
        </footer>
    </div>
</body>
</html>
