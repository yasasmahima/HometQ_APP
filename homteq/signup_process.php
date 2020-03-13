<?php
session_start();
include("db.php");
$pagename="Your Sign Up Results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$address=$_POST['address'];
$postCode=$_POST['postCode'];
$telNo=$_POST['telNo'];
$email=$_POST['email'];
$password1=$_POST['password'];
$password2=$_POST['confPassword'];

function valid_email($str) {
return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}

// function email_availability($str){
// 	// Check Given device is Already avilable in the Database
//   $check_already_available="SELECT * FROM useres WHERE userEmail ='$str' LIMIT 1";
//   $check_result=mysqli_query($connection, $check_already_available);
//   $getResult=mysqli_fetch_assoc($check_result);
  
//   if($getResult){
//   	return true;
//   }else{
//   	return false;
//   }
// }


if(empty($firstName)||empty($lastName)||empty($address)||empty($postCode)||empty($telNo)||empty($email)||empty($password1)||empty($password2)){
		
	echo "<br>All mandatory fields need to be filled in";
}else{

	if($password1!=$password2){
		echo "<br><h5>ERROR - Password Doesn't Match<br>Make Sure You Enter them Correctly</h5>
		<br><h3>Go Back <a href='Signup.php'>Sign Up</a></h3>";
	}else{

			if(valid_email($email)){

				$check_already_available="SELECT * FROM useres WHERE userEmail ='$email' LIMIT 1";
  				$check_result=mysqli_query($conn, $check_already_available);
  				$getResult=mysqli_fetch_assoc($check_result);

				if(!$getResult){

					$insert_user_quary="INSERT INTO useres 
    				(userType,userFName,userSName,userAddress,userPostCode,userTellNo,userEmail,userPassword) 
  					VALUES('C','$firstName','$lastName' ,'$address','$postCode','$telNo','$email','$password1')";
  					
  					if(mysqli_query($conn, $insert_user_quary)){
  							echo "<h3><a href='login.php'>Log in</a></h3>";
  					}else{
  						echo mysql_errno($conn);
  					}
  				}else{
  					echo "Email Already in Use";
  				}

  					
  					
			}else{
		echo "<br><h5>Email not in the right format</h5>
				<br><h3>Go Back <a href='Signup.php'>Sign Up</a></h3>";
			}
	}


}



// echo $address;

// echo $firstName;
include("footfile.html"); //include head layout
echo "</body>";
?>