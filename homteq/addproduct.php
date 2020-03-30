

<?php
session_start();
	$pagename="Add Products"; //Create and populate a variable called $pagename
	echo "<link rel=stylesheet type=text/css href=myStyleSheet.css>"; //Call in stylesheet
	echo "<title>".$pagename."</title>"; //display name of the page as window title
	echo "<body>";
	include ("headfile.html"); //include header layout file
	echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
	
	echo"<form action=  addproduct_conf.php method='POST'>";

	echo "
	<table class ='t2' >
	
	<tr><td>Product Name :</td> <td><input type=text name='prodName'  autofocus></td></tr>
	<tr><td>Small Picture Name : </td><td><input type=text name='smallPicName' ></td></tr>
	<tr><td>Large Picture Name : </td><td><input type=text name='largePicName' ></td></tr>
	<tr><td>Short Description : </td><td><input type=text name='shortDes' ></td></tr>
	<tr><td>Long Description : </td><td><input type=text name='longDes' ></td></tr>
	<tr><td>Price : </td><td><input type=text name='price' ></td></tr>
	<tr><td>Initial Quantity : </td><td><input type=text name='qty' ></td></tr>
	

	<td><input type=submit value='Add Product'></td>
	<td><input type=reset value='Clear Form'></td>
	
	
	</table>";

	echo "</form>";
	
	
	include("footfile.html"); //include head layout
	echo "</body>";
?>
