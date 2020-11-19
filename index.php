<?php
   $title = "index";
   include 'incl/header.php';

   $set	=	mysqli_query($link,	"SELECT	*	FROM	inventory");																																	
	while	($row	=	mysqli_fetch_array($set))	{
      $setId =	$row['SetID'];	
      $itemId =	$row['ItemID'];	
      echo $setId . " ". $itemId .  "<br>";
   }
?>
<div class="content" id="">

   
</div>

<?php include 'incl/footer.php'; ?>