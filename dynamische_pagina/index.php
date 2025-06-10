<?php 

include 'connection.php';


$get_aantal_characters = $conn->prepare("SELECT COUNT(*) AS totaal FROM characters;");
$get_aantal_characters->execute();
$result_aantal_characters = $get_aantal_characters->fetch();


$get_all_characters = $conn->prepare("SELECT * FROM `characters` ORDER BY name ASC;
");
$get_all_characters->execute();

$result_all_characters = $get_all_characters->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1>Alle <?= $result_aantal_characters['totaal']; ?> characters uit de database</h1>

</header>
<div class="container">
<?php foreach($result_all_characters as $character){ ?>

    <a class="item" href="character.php?id=<?=$character['id']?>">
        <div class="left">
            <img class="avatar" src="resources/images/<?= $character['avatar']?>" alt="<?=$character['name'] ?>">
        </div>
        <div class="right">
            <h2><?= $character['name']?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?= $character['health']?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?= $character['attack']?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?= $character['defense']?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
    <?php }?>
</div>

<footer>&copy; Osama Mohti 2025</footer>
</body>
</html>