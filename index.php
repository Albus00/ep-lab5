<?php
   $title = "index";
   include 'incl/functions.php';
   include 'incl/header.php';

   $set	=	mysqli_query($link,	"SELECT	*	FROM	inventory WHERE setId LIKE '10199-1'");																																	
	while	($row	=	mysqli_fetch_array($set))	{
      findSet($link, $setID);
      $setId =	$row['SetID'];	
      $itemId =	$row['ItemID'];	
      echo $setId . " ". $itemId .  "<br>";
   }
?>
<div class="content" id="">

   
</div>

<?php include 'incl/footer.php'; ?>