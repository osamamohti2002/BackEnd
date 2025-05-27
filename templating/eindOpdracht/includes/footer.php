<!-- jouw HTML voor een Footer komt hier... 
Benoem hier ten minste je naam en de tijd
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <footer class="footer-content">
        <h5>&copy; 2025 Osama</h5>
        <?php 
            $date = date("Y-m-d");
            echo "<h5>Osama Mohti</h5>";
            echo "<p>$date</p>"; 
        ?>
    </footer>
</body>
</html>