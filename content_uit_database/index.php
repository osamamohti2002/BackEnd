<?php include ("conection.php")?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>J2F1BELP5L2 - Content uit je database</title>
  <link rel="stylesheet" href="css/style.css">
</head>

	<!-- laad hier via php je header in (vanuit je includes map) -->
	<?php include 'includes/header.php'?>

	<!-- Haal hier uit de URL welke pagina uit het menu is opgevraagd. Gebruik deze om de content uit de database te halen. -->
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
		$query = $conn->prepare("SELECT * FROM onderwerpen WHERE name = :page");
		$query->bindParam(':page', $page, PDO::PARAM_STR);
		$query->execute();

		$result = $query->fetch(PDO::FETCH_ASSOC);
		//	<!-- Laat hier de content die je op hebt gehaald uit de database zien op de pagina. -->

		if ($result){
		?>
		<div class="container">
		<h1 class="title"><?=$result['name'] ?></h1>
		<div class="blok">

		<img src="images/<?= htmlspecialchars($result['image']) ?>" alt="<?= htmlspecialchars($result['name']) ?>" class="img">
		<p class="description">
			<?= $result['description']?>
		</p>
		</div>
		</div>
		<?php
		}else{
			echo "<h1>Deze pagina bestaat niet</h1>";
		}
	}else{
		echo "<h1>Welkom op de startpagina! Kies een pagina in het menu.</h1>";
	}
	?>




	<!-- laad hier via php je footer in (vanuit je includes map)-->
	<?php include 'includes/footer.php'?>

</body>
</html>