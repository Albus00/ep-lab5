<?php
   $title = "index";
   include 'incl/functions.php';
   include 'incl/header.php';

   $inventory	=	mysqli_query($link,	"SELECT	*	FROM	inventory WHERE setId LIKE '10199-1'");																																	
	while	($row	=	mysqli_fetch_array($inventory))	{
      displaySet($link, $inventory);
      
   }
?>
<div class="content" id="">

   
</div>

<?php include 'incl/footer.php'; ?>