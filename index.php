<?php
   $title = "index";
   include 'incl/header.php';

   $set	=	mysqli_query($connection,	"SELECT	*	FROM	inventory");																																	
	while	($row	=	mysqli_fetch_array($set))	{
      $setId	=	$row['SetID'];	
      echo $setId . "<br>";
   }
?>
<div class="content" id="">

   hello?
   
</div>

<?php include 'incl/footer.php'; ?>