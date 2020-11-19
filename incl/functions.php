<?php

function displaySet($link, $setID) {
   try {
      $set	=	mysqli_query($link, "SELECT * FROM sets WHERE setId LIKE '10199-1'");
      while	($row	=	mysqli_fetch_array($set))	{
         $setId =	$row['SetID'];	
         $catId =	$row['CatID'];
         $name = $row['Setname'];
         $year = $row['Year'];
         echo "<h2>" . $name . " - " . $setId . "</h2>";
      }
   } catch (\Throwable $th) {
      echo $set . "<br>" . $th->getMessage();
   }
}

?>