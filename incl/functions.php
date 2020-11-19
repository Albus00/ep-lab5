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
      echo "
         <th>
            <td>Quantity</td>
            <td>Picture</td>
            <td>Color</td>
            <td>Name</td>
         </th>";

      $inventory	=	mysqli_query($link,	"SELECT	*	FROM	inventory WHERE setId LIKE '" . $setId . "'");
      while	($row	=	mysqli_fetch_array($inventory))	{
         $itemId = $row['ItemID'];
         $itemTypeId = $row['ItemtypeID'];
         $quantity = $row['Quantity'];
         $colorId = $row['ColorID'];
         $quantity = $row['Quantity'];

         $partName = findPart($link, $itemId);
         $colorName = findColor($link, $colorId);

         echo "
            <tr>
               <td>" . $quantity . "</td>
               <td>" . "image" . "</td>
               <td>" . $colorName . "</td>
               <td>" . $partName . "</td>
            </tr>";
      }
      echo "</table>";
   } catch (\Throwable $th) {
      echo $inventory . "<br>" . $th->getMessage();
   }
}

function findPart($link, $partId) {
   $colors	=	mysqli_query($link,	"SELECT	*	FROM	colors WHERE PartID LIKE '" . $partId . "'");
   while	($row	=	mysqli_fetch_array($colors))	{
      return $row['Partname'];
   }
}

function findColor($link, $colorId) {
   $colors	=	mysqli_query($link,	"SELECT	*	FROM	colors WHERE colorID LIKE '" . $colorId . "'");
   while	($row	=	mysqli_fetch_array($colors))	{
      return $row['Colorname'];
   }
}

?>