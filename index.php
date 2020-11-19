<?php
   $title = "index";
   include 'incl/functions.php';
   include 'incl/header.php';

   $setId = "10179-1";
   
?>
<div class="content">

<?php 
   displaySet($link, $setId);
   echo "<br><br>";
   //displaySetInventory($link, $setId);
?>
   
</div>

<?php include 'incl/footer.php'; ?>