<?php
session_start();
$pagename="Log Out"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php");
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

echo "<br><br><h4>Make Your Home Smart</h4>";
echo "Thank You ".$_SESSION['userFName'];
echo "<br>You are now loged out";
unset($_SESSION['userId']);
session_destroy();


include("footfile.html"); //include head layout
echo "</body>";
?>