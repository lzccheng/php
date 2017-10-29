<?php 

include "../config.inc.php";
  session_start();
if (isset($_SESSION["userEmail"])) {
	# code...
	// $a=$_SESSION["userEmail"];
	echo '1';
}
else
{

	echo '0';
}


 ?>