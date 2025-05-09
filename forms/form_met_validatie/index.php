<?php
// Initialiseer de variabelen
$naam = "";
$email = "";
$naamErorr = "";
$emailErorr = "";

// Als er al foutmeldingen zijn doorgegeven (na het verzenden van het formulier), geef die dan weer.
if (isset($_GET['naamErorr'])) {
    $naamErorr = $_GET['naamErorr'];
}
if (isset($_GET['emailErorr'])) {
    $emailErorr = $_GET['emailErorr'];
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contactformulier</title>
</head>
<body>
    <div class="container">
        <form action="welcome.php" method="post">
            <h2>Contactformulier</h2>

            <!-- Naam veld -->
            <label for="naam">Naam <span>*</span></label>
            <input type="text" name="naam" id="naam" placeholder="Naam" value="<?php echo htmlspecialchars($naam); ?>">
            <span class="error"><?php echo $naamErorr; ?></span><br/><br/>

            <!-- E-mail veld -->
            <label for="email">E-mail <span>*</span></label>
            <input type="text" name="email" id="email" placeholder="Email" value="<?php echo htmlspecialchars($email); ?>">
            <span class="error"><?php echo $emailErorr; ?></span><br/><br/>

            <!-- Verzend knop -->
            <button type="submit">Verzend</button>
        </form>
    </div>
</body>
</html>
