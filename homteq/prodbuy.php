<?php
include("db.php");
$pagename="A smart buy for a smart home"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

$prodid=$_GET['u_prod_id'];
//display the value of the product id, for debugging purposes
echo "<p>Selected product Id: ".$prodid;

$SQL="select prodId, prodName, prodPicNameLarge,prodDescripShort,prodDescripLong ,prodPrice,prodQuantity   from Product where prodId=$prodid";
//run SQL query for connected DB or exit and display error message
$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());

while ($arrayp=mysqli_fetch_array($exeSQL))
{
echo "<tr>";

echo "<td style='border: 0px'>";

echo "<img src=images/".$arrayp['prodPicNameLarge']." float=left height=250 width=400></a>";


echo "<td style='border: 0px'>";
echo "<p><h5>Product Name : ".$arrayp['prodName']."</h5>"; //display product name as contained in the array


echo "<p><h5>Product Description : ".$arrayp['prodDescripLong']."</h5>"; //display product name as contained in the array


echo "<p><h5>Product Price : ".$arrayp['prodPrice']."</h5>"; //display product name as contained in the array

echo "<p><h5>Product Quantity : ".$arrayp['prodQuantity']."</h5>"; //display product name as contained in the array
echo "</td>";
echo "</tr>";
}
//display random text
echo "";
include("footfile.html"); //include head layout
echo "</body>";
?>