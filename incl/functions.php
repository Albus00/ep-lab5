<?php

function displaySet($link, $setID) {
   try {
      // WHERE setId LIKE '10199-1'
      $set	=	mysqli_query($link, "SELECT * FROM sets");
      while	($row	=	mysqli_fetch_array($set))	{
         $setId =	$row['SetID'];	
         $catId =	$row['CatID'];
         $name = $row['Setname'];
         $year = $row['Year'];
         //echo "<h2>" . $name . " - " . $setId . "</h2>";

         echo 
            "<table>
               <tr>
                  <td>"
                     . $setId .
                  "</td>
                  <td>"
                     . $name .
                  "</td>
                  <td>"
                     . $catId .
                  "</td>
                  <td>"
                     . $year .
                  "</td>
               </tr>
            </table>";
      }
   } catch (\Throwable $th) {
      echo $set . "<br>" . $th->getMessage();
   }
}

?>