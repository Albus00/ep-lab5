<?php
   include 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="sv">
<head>
   <title>Albin Kjellberg - Labb 3</title>
   <link rel="icon" href="images/favicon.svg" type="image/svg+xml">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="style/stylesheet.css">
   <script src="js/functions.js"></script>
</head>
<body>

<div id='container'>

<div id="nav">
   <div id="clock_div">
      <p id="h">0</p>h <p id="min">0</p>m <p id="sec">0</p>s
   </div>
   <div id="nav_links">
      <?php 
         if ($title == "blog" || $title == "blog-create") {
            echo "
               <a href='index.php'>TILLBAKA</a>
               <a href='blog.php?order=desc&limit=10'>INLÄGG</a>
               <a href='blog-create.php'>SKAPA</a>
            ";
         }
         else {
            echo "
               <a href='index.php'>HEM</a>
               <a href='game.php'>PRESENTATION</a>
               <a href='blog.php?order=desc&limit=10'>BLOGG</a>
            ";
         }
      ?>
      
   </div>
   <div id="switch_modes_div">
      <button id="change_mode_btn" onclick="switchMode('light')"><img src="images/sun.svg" alt="sun"></button>
   </div>
</div>

<div id='content_container'>