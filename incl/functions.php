<?php

function displaySet($link, $setId) {
   $set	=	mysqli_query($link, "SELECT * FROM sets WHERE setID LIKE '" . $setId . "'");
   while	($row	=	mysqli_fetch_array($set))	{
      $name = $row['Setname'];
      $year = $row['Year'];

      echo "<h2>" . $name . "</h2>";
      echo "<h3>" . $setId . "</h3>";
      echo "<h3>" . $year . "</h3>";
   }
}

function displaySetInventory($link, $setId) {
   try {
      $imagePathPrefix = "http://www.itn.liu.se/~stegu76/img.bricklink.com/";

      echo "<table>";
      echo "
         <tr>
            <th>Quantity</th>
            <th>Picture</th>
            <th>Color</th>
            <th>Name</th>
         </tr>";

      $inventory	=	mysqli_query($link,	"SELECT	*	FROM	inventory WHERE setId LIKE '" . $setId . "'");
      while	($row	=	mysqli_fetch_array($inventory))	{
         $itemId = $row['ItemID'];
         $itemTypeId = $row['ItemtypeID'];
         $quantity = $row['Quantity'];
         $colorId = $row['ColorID'];
         $quantity = $row['Quantity'];

         $partName = findPart($link, $itemId);
         $colorName = findColor($link, $colorId);
         $imagePath = findImage($link, $itemTypeId, $colorId, $itemId);

         echo "
            <tr>
               <td>" . $quantity . "</td>
               <td><img src='" . $imagePathPrefix . $imagePath . "' alt='" . $partName . "'></td>
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
   $parts	=	mysqli_query($link,	"SELECT	*	FROM	parts WHERE PartID LIKE '" . $partId . "'");
   while	($row	=	mysqli_fetch_array($parts))	{
      return $row['Partname'];
   }
   return "Not Found";
}

function findColor($link, $colorId) {
   $colors	=	mysqli_query($link,	"SELECT	*	FROM	colors WHERE colorID LIKE '" . $colorId . "'");
   while	($row	=	mysqli_fetch_array($colors))	{
      return $row['Colorname'];
   }
   return "Not Found";
}

function findImage($link, $itemTypeId, $colorId, $itemId) {
   $images	=	mysqli_query($link,	"SELECT	*	FROM	images WHERE ItemtypeID LIKE '" . $itemTypeId . "' AND itemID LIKE '" . $itemId . "' AND colorID LIKE '" . $colorId . "'");
   while	($row	=	mysqli_fetch_array($images))	{
      if ($row['has_gif']) {
         return $itemTypeId . "/" . $colorId . "/" . $itemId . ".gif";
      }
      else {
         return $itemTypeId . "/" . $colorId . "/" . $itemId . ".jpg";
      }
      return "Not Found";
      
   }
}

?>