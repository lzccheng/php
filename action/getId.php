<?php 
include "../config.inc.php";
  session_start();
if (isset($_SESSION["userId"])) {
	# code...
	 $a=$_SESSION["userId"];
	echo $a;
}




 ?>