<?php

if(isset($_SESSION['userId'])){
	echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

	echo "<h4 style='float:right'>".$_SESSION['userFName']." | Customer No : ".$_SESSION['userId']."</h4>";

}

?>