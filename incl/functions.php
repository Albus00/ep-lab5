<?php

function displaySet($link, $setId) {
   $set	=	mysqli_query($link, "SELECT * FROM sets WHERE setID LIKE '" . $setId . "'");
   while	($row	=	mysqli_fetch_array($set))	{
      $name = $row['Setname'];
      $year = $row['Year'];

      echo "<h2>" . $name . " - " . $setId . "</h2>";
      echo "<h3>" . $year . "</h3>";
   }
}

function displaySetInventory($link, $setId) {
   try {
      echo "<table>";

      $inventory	=	mysqli_query($link,	"SELECT	*	FROM	inventory WHERE setId LIKE '" . $setId . "'");
      while	($row	=	mysqli_fetch_array($inventory))	{
         
      }
      echo "</table>";
   } catch (\Throwable $th) {
      echo $inventory . "<br>" . $th->getMessage();
   }
}

?>