<?php
$pagename="Log in"; //Create and populate a variable called $pagename

session_start();
include("db.php");
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text

echo "<form action=login_process.php method=post>
			<label>* Email : </label>
				<input type='text' name='email'>
			 <br><br>
			 <label>* Password : </label>
			 	<input type='password' name='password'>
			 <br><br>

			 <input type=submit value='Log in' name='Log_in'>

			  <input type=button value='Clear' name='Clear'>
			 </form>";

include("footfile.html"); //include head layout
echo "</body>";
?>