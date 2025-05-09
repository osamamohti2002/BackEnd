<?php
// Initialiseer de variabelen
$naam = "";
$email = "";
$naamErorr = "";
$emailErorr = "";

// Verwerk de formuliergegevens
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valideer de naam
    if (empty($_POST["naam"])) {
        $naamErorr = "Dit veld is verplicht.";
    } else {
        $naam = htmlspecialchars($_POST["naam"], ENT_QUOTES, 'UTF-8');
    }

    // Valideer de e-mail
    if (empty($_POST["email"])) {
        $emailErorr = "Dit veld is verplicht.";
    } else {
        $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
        // Controleer of het e-mailadres geldig is
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErorr = "Ongeldig e-mailadres.";
            $email = ""; // Maak de e-mail leeg als deze ongeldig is
        }
    }

    // Als er fouten zijn, stuur de gebruiker terug naar index.php met de foutmeldingen
    if (!empty($naamErorr) || !empty($emailErorr)) {
        header("Location: index.php?naamErorr=$naamErorr&emailErorr=$emailErorr");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultaten</title>
</head>
<body>
    <div class="container">
        <h1>De gevulde gegevens zijn:</h1>
        <p><strong>Naam:</strong> <?php echo $naam; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
    </div>
</body>
</html>
