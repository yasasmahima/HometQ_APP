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

$sql="SELECT orders.orderNo,orders.orderDateTime,orders.orderStatus,orders.orderTotal,orders.userId,useres.userFName,useres.userSName
FROM orders INNER JOIN useres ON orders.userId=useres.userId";

$exeSQL=mysqli_query($conn, $sql) or die (mysqli_error());

while ($arrayp=mysqli_fetch_array($exeSQL))
{

$orderID=$arrayp['orderNo'];
	$sqlProduct="SELECT orderline.prodId,orderline.quantityOrdered,product.prodName 
FROM orders INNER JOIN orderline ON orders.orderNo=orderline.orderNo
INNER JOIN product ON product.prodId=orderline.prodId
where orders.orderNo = $orderID";

	$exeSQL2=mysqli_query($conn,$sqlProduct) or die (mysqli_error());


	echo "<table> 
	<tr>
			<th>Order</th>
			<th>Order Date Time</th>
			<th>User Id</th>
			<th>Name</th>
			<th>Surname</th>
			<th>Status</th>
			<th>Product</th>
			<th>Quantity</th>
	</tr>

	<tr>
		<td>".
		$arrayp['orderNo']."</td>
		<td>".$arrayp['orderDateTime']."</td>
		<td>".$arrayp['userId']."</td>
		<td>".$arrayp['userFName']."</td>
		<td>".$arrayp['userSName']."</td>
		<td>";

			echo " <select name='option'>";
		if($arrayp['orderStatus']=="Placed"){

				echo "<option>".$arrayp['orderStatus']."</option>

				<option>Ready To Collect</option>
			</select>";
		}else if($arrayp['orderStatus']=="Ready To Collect"){
			echo "<option>".$arrayp['orderStatus']."</option>

				 <option>Collected</option>
			</select>";
		}


		echo "<input type=submit value=Update></input></td>";

		$count=1;

		while ($arrayItem=mysqli_fetch_array($exeSQL2)){

			GLOBAL $count;

			if($count==1){
			echo "<td>".$arrayItem['prodName']."</td>
			<td>".$arrayItem['quantityOrdered']."</td></tr>";		
			}
			
			
			if($count>1){
			echo "<tr><td colspan=6></td><td>".$arrayItem['prodName']."</td>
			<td>".$arrayItem['quantityOrdered']."</td></tr>";		
			}

			$count+=1;	

		
		}

		
		



echo "</table>";
// echo $arrayp['userFName'];
}

include("footfile.html"); //include head layout
echo "</body>";
?>