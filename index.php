<?php
   include 'incl/dbconnect.php';
   include 'incl/functions.php';

   $setId = "10179-1";
   
?>

<!DOCTYPE html>
<html lang="sv">
<head>
   <title>Albin Kjellberg - Labb 3</title>
   <link rel="icon" href="images/favicon.svg" type="image/svg+xml">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="style/stylesheet.css">
</head>
<body>

<div id='container'>

<?php 
   displaySet($link, $setId);
   echo "<br><br>";
   displaySetInventory($link, $setId);
?>

</div>
</body>
</html>