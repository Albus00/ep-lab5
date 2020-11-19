<?php
   $title = "index";
   include 'incl/functions.php';
   include 'incl/header.php';

   // $inventory	=	mysqli_query($link,	"SELECT	*	FROM	inventory WHERE setId LIKE '10199-1'");																																	
	// while	($row	=	mysqli_fetch_array($inventory))	{
   //    displaySet($link, $inventory);
      
   // }
   
   try {
      echo "<table>";

      // WHERE setId LIKE '10199-1'
      $set	=	mysqli_query($link, "SELECT * FROM sets");
      while	($row	=	mysqli_fetch_array($set))	{
         $setId =	$row['SetID'];	
         $catId =	$row['CatID'];
         $name = $row['Setname'];
         $year = $row['Year'];
         //echo "<h2>" . $name . " - " . $setId . "</h2>";

         echo 
            "<tr>
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
            </tr>";
      }
   } catch (\Throwable $th) {
      echo $set . "<br>" . $th->getMessage();
   }
   echo "</table>";
?>
<div class="content" id="">

   
</div>

<?php include 'incl/footer.php'; ?>