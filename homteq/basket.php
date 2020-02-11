<?php
include("db.php");
$pagename="Smart Basket"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

$_SESSION['basket']=null;
$newprodid;
$reququantity;

 if(isset($_POST['h_prodid'])){

 	  $newprodid=$_POST['h_prodid'];
 	  $reququantity=$_POST['p_quantity'];

 	   $_SESSION['basket'][$newprodid]=$reququantity;

//echo "<p>The doc id ".$newdocid." has been ".$_SESSION['basket'][$newdocid];
	  echo "<p>1 item added";

 }else{
 	echo "Current basket unchanged";
 }



 echo "<br>";

 if(isset($_SESSION['basket'])){
 	 	 foreach($_SESSION['basket'] as $index => $value)
 	 	 {
 	 	 	$sql="INSERT INTO basket(prodId,qty) VALUES('$index','$value')";
 	 	 	$exeSQL=mysqli_query($conn, $sql) or die (mysqli_error());
 	 	 	// echo "Product Id is : ".$index;
 	 	 	// echo "Qty is : ".$value;
 	 	 }

 	 	 // $getDataSQL="SELECT prodId, sum(Qty) as qty FROM `basket` GROUP BY prodId";

 	 	 $getDataSQL="SELECT product.prodName,product.prodprice as unitPrice,sum(Qty) as qty,sum(basket.qty*product.prodPrice) as total  FROM basket
				INNER JOIN product on product.prodId=basket.prodId
				GROUP BY basket.prodId";

 	 	 $exeSQL=mysqli_query($conn, $getDataSQL) or die (mysqli_error());

 	 	 echo "<br>";

 	 	 $reslutArray=array();

 	 	 echo "<table>
 	 	 		<tr>
 	 	 			<th>Product Id</th>
 	 	 			<th>Unit Price</th>
 	 	 			<th>Quantity</th>
 	 	 			<th>Sub Total</th>
 	 	 		</tr>";

 	 	 		$subTotal=0;

 	 	 while ($arrayp=mysqli_fetch_array($exeSQL)){

 	 	 
 	 	 	$subTotal+=$arrayp['total'];

 	 	 	echo "<tr><td>".$arrayp['prodName']."</td>
 	 	 			<td>".$arrayp['unitPrice']."</td>
 	 	 			<td>".$arrayp['qty']."</td>
 	 	 			<td>".$arrayp['total']."</td>
 	 	 		</tr>";


 	 	 	}

			echo"<tr><td colspan='3'>Total Amount</td>
					  <td>".$subTotal."</td></tr>";

 	 	 	echo "</table>";
 	 	 	
 	 	 }

include("footfile.html"); //include head layout
echo "</body>";
?>