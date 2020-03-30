
<?php
session_start();
include("db.php");

	$pagename="Add Product Confirmation"; //Create and populate a variable called $pagename
	echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
	echo "<title>".$pagename."</title>"; //display name of the page as window title
	echo "<body>";
	include ("headfile.html"); //include header layout file
	echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
	
	$prodName=$_POST['prodName'];
	$smallPicName=$_POST['smallPicName'];
	$largePicName=$_POST['largePicName'];
	$shortDes=$_POST['shortDes'];
	$longDes=$_POST['longDes'];
	$price=$_POST['price'];
	$qty=$_POST['qty'];

	if(!empty($prodName)&&!empty($smallPicName)&&!empty($largePicName)&&!empty($shortDes)&&!empty($longDes)&&!empty($price)&&!empty($qty)){

		$SQL="insert into 
						product (prodName,prodPicNameSmall,prodPicNameLarge,prodDescripShort,prodDescripLong,prodPrice,	prodQuantity)
						values ('$prodName','$smallPicName','$largePicName','$shortDes','$longDes','$price','$qty')";
					
					$exeSQL = mysqli_query($conn, $SQL) or die (mysqli_error($conn));

					if (mysqli_errno($conn)==0)
					{
						echo "<b>Added sucessfully! </b><br><br>";
						echo "You have Added the product successfully. <br><br>";
						echo "To continue, <a href='index.php'>Home</a> ";
					}else if(mysqli_errno($conn)==1062){
						echo "<b>Adding Product Failed </b><br><br>";
						echo "<br>Product is Already exsist";
						echo "Go back to <a href='addproduct.php'>Add Item</a>";
					}else if(mysqli_errno($conn)==1064){
						echo "<b>Adding Product Failed</b><br><br>";
							echo "<br>Invalid characters entered in the form.";
							echo "Make sure you avoid the following characters : apostrophes like ['] and backslahes like [\] <br><br>";
							echo "Go back to <a href='addproduct.php'>Add Item</a>";		
					}



	}else{
		echo "<b>Adding Product Failed</b><br><br>";
			echo"<p>Your Add Product form is incompleted and all fields are mandatory<p>";
			echo"Make sure you provide all the required details<br><br>";
			echo"Go back <a href='addproduct.php'>Add Product</a> ";
	}

	
			
	
	
	
	include("footfile.html"); //include head layout
	echo "</body>";
?>
