<?php include ("conection.php")?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>J2F1BELP5L2 - Content uit je database</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!-- laad hier via php je header in (vanuit je includes map) -->
	<?php include 'includes/header.php'?>

	<!-- Haal hier uit de URL welke pagina uit het menu is opgevraagd. Gebruik deze om de content uit de database te halen. -->
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];	
		$onderwerp = 'Select * From onderwerpen where name ='. $page;
		echo $onderwerp;
	}
	?>

	<!-- Laat hier de content die je op hebt gehaald uit de database zien op de pagina. -->


	<!-- laad hier via php je footer in (vanuit je includes map)-->
	<?php include 'includes/footer.php'?>

</body>
</html>