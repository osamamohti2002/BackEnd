<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  

	<!-- laad hier via php je header in (vanuit je includes map) -->
  <?php include("includes/header.php") ?>
	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  <?php

    if(isset($_GET['page'])){
      $page = $_GET['page'];
      $file = "pages/".$page.".php";

      if(file_exists($file)){
        include($file);
      }else{
        echo "<h3>Dit file bestaat niet</h3>";
      }

    }else{
      include("pages/onderwerp1.php");
    }


  ?>
	
	<!-- laad hier via php je footer in (vanuit je includes map)-->
  <?php include("includes/footer.php"); ?>

</body>
</html>