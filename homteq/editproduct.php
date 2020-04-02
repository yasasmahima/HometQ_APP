<?php
session_start();
include ("db.php"); //include db.php file to connect to DB
$pagename="View and Edit Product"; 
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php");
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//create a $SQL variable and populate it with a SQL statement that retrieves product details



if(isset($_POST['u_prodid'])){
	
	    $prodId=$_POST['u_prodid'];

		$GEtSQL="select prodQuantity  from Product where prodId='$prodId'";

		$exeSQL=mysqli_query($conn, $GEtSQL) or die (mysqli_error());


		$qty;
		while ($arrayp=mysqli_fetch_array($exeSQL))
		{

					$qty=$arrayp['prodQuantity'];

		}

		$newPrice=$_POST['newPrice'];
		$newQTY=$_POST['new_qty'];

		$qty+=$newQTY;
		if(!empty($newPrice)){

			
			$SQL="Update product SET prodPrice='$newPrice',prodQuantity='$qty' Where prodId='$prodId'";
			$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());
		}
		else{
			$SQL="Update product SET prodQuantity='$qty' Where prodId='$prodId'";
			$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());
		}
		

		// echo $qty;
		
		// $newPrice=$_POST['newPrice'];
		// $newQTY=$_POST['new_qty'];


		// $SQL="Update product SET prodPrice='$newPrice',prodQuantity='$newQTY' Where prodId='$prodId'";
		// $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());


}
// else if(empty($_POST['newPrice'])&&!empty($_POST['new_qty'])){
// 	$prodId=$_POST['u_prodid'];
// 	$newQty=$_POST['new_qty'];

// 	$SQL="Update product SET prodQuantity='$newQty' Where prodId='$prodId'";
// 	$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());
// }


$SQL="select prodId, prodName, prodPicNameSmall,prodDescripShort,prodPrice,prodQuantity  from Product";
//run SQL query for connected DB or exit and display error message
$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());
echo "<table style='border: 0px'>";
//create an array of records (2 dimensional variable) called $arrayp.
//populate it with the records retrieved by the SQL query previously executed.
//Iterate through the array i.e while the end of the array has not been reached, run through it
while ($arrayp=mysqli_fetch_array($exeSQL))
{

echo "<form action=editproduct.php method=POST>";
echo "<tr>";
echo "<td style='border: 0px'>";
//display the small image whose name is contained in the array

// echo "<a href=prodbuy.php?u_prod_id=".$arrayp['prodId'].">";


echo "<img src=images/".$arrayp['prodPicNameSmall']." height=200 width=200></a>";
echo "</td>";

echo "<td style='border: 0px'>";
echo "<p><h5>".$arrayp['prodName']."</h5>"; //display product name as contained in the array

echo "<p><h5>".$arrayp['prodDescripShort']."</h5>"; //display product name as contained in the array

echo "<p><h5>Price : ".$arrayp['prodPrice']."</h5>New Price : <input type='text' name='newPrice'/>";

echo "<p><h5>Quantity : ".$arrayp['prodQuantity']."</h5>New Quantity : "; //display product name as contained in the array

echo "<select name='new_qty'>";

for( $i=0;$i<=20;$i++){
	echo "<option>$i</option>";
}

echo "</select>";

echo "<br><br><input type=submit value='Update' name='update'>";
echo "</td>";
echo "</tr>";
echo "<input type=hidden name=u_prodid value=".$arrayp['prodId'].">";


echo "</form>";
}
echo "</table>";

include("footfile.html"); //include head layout
echo "</body>";
?>