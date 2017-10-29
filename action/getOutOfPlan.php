<?php 
  include "../config.inc.php";
  // if (!isset($_POST['userId'])) {
  // 	header("Location:../app/home/working.php?error_id=6");
  // }
  $_POST['create_at']=time();
 $plan=new outofplan($_POST);

 $result=$plan->insert();

if ($result) {
	# code...
		header("Location:../app/home/working.php");
}



//print_r($_POST);


 ?>