<?php
// $naam = "";
// $email = "";
// $naamErorr = "";
// $emailErorr = "";
// $formulierIngevuld = false;

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     if (empty($_POST["naam"])) {
//         $naamErorr = "Dit veld is verplicht.";
//     } else {
//         $naam = htmlspecialchars($_POST["naam"], ENT_QUOTES, 'UTF-8');
//     }

//     if (empty($_POST["email"])) {
//         $emailErorr = "Dit veld is verplicht.";
//     } else {
//         $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');

//         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             $emailErorr = "Ongeldig e-mailadres.";
//         }
//     }

//     if (empty($naamErorr) && empty($emailErorr)) {
//         $formulierIngevuld = true;
//     }
// }


?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Contactformulier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php if ($formulierIngevuld): ?>
            <h2>De ingevulde gegevens zijn:</h2>
            <p><strong>Naam:</strong> <?php echo $naam; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
        <?php else: ?>
            <h2>Contactformulier</h2>
            <form action="" method="post">
                <label for="naam">Naam *</label>
                <input type="text" name="naam" id="naam" value="<?php echo htmlspecialchars($naam); ?>">
                <span class="error"><?php echo $naamErorr; ?></span>

                <label for="email">E-mail *</label>
                <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>">
                <span class="error"><?php echo $emailErorr; ?></span>

                <br><br>
                <button type="submit">Verzend</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
