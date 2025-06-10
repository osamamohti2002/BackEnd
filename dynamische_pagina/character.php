<?php include "connection.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - Bowser</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>

<?php
    if(isset($_GET['id'])){
        $character_id = $_GET['id'];
        $get_character = $conn->prepare("SELECT * FROM characters WHERE id = :character_id");
        $get_character->bindParam(':character_id', $character_id, PDO::PARAM_STR);
        $get_character->execute();

        $character = $get_character->fetch(PDO::FETCH_ASSOC);
    }
    if (!isset($_GET['id']) || !$character) {
    echo "<p>Character niet gevonden.</p>";
    }else{ 

?>

<header>
    <h1><?= $character['name'] ?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div class="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="resources/images/<?= $character['avatar']?>" alt="<?= $character['name']?>">
            <div class="stats" style="background-color: <?= $character['color'] ?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?= $character['health']?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?= $character['attack']?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?= $character['defense']?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?= $character['weapon']?></li>
                    <?php if($character['armor'] != null ){ ?>
                    <li><b>Armor</b>: <?= $character['armor']?></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <?= $character['bio']?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<?php }?>
<footer>&copy; Osama Mohti 2025</footer>
</body>
</html>