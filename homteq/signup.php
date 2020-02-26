<?php
session_start();
$pagename="Sign Up"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href='mystylesheet.css'>"; //Call in stylesheet
echo "<style>
	label{
		margin-left:30px;


		
	}

	input,textarea{
		margin-left:30px;
		float:right;


		
	}

	form{
		width:400px;
		margin-left:200px;
	}



</style>";
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text

echo "<form action=signup_process.php method=post>
			<label>* First Name : </label>
				<input type='text' name='firstName'>
			 <br><br>
			 <label>* Last Name : </label>
			 	<input type='text' name='lastName'>
			 <br><br>
			 <label>* Address : </label>
			 	<textarea rows=4 name='address'> </textarea>
			 <br><br><br><br>
			 <label>* PostCode : </label>
			 	<input type='text' name='postCode'>
			 <br><br>
			 <label>* Tel No : </label>
			 	<input type='text' name='telNo'>
			 <br><br>
			 <label>* Email Address : </label>
			 	<input type='text' name='email'>
			 <br><br>
			 <label>* Password : </label>
			 	<input type='password' name='password'>
			 <br><br><label>* Confirm Password : </label>
			 	<input type='password' name='confPassword'>
			 <br><br>

			 	<input type=submit value='Sign Up' name='sign_up'>
		</form>";

include("footfile.html"); //include head layout
echo "</body>";
?>