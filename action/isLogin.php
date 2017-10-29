<?php 
   include "../../config.inc.php";

   session_start();

   if ($_COOKIE['auth']) {
   	# code...

   		list($identifier,$token)=explode(':', $_COOKIE['auth']);
   		
   		$user=new User;
   		$result=$user->where("identifier='{$identifier}'")->find();

   		if ($result) {
   			# code...
   					if ($result['token']!=$token) {
   						# code...
   						 header("Location:login.php?error_id=4");
   						 exit;
   					}

   					if (time()>$result['timeout']) {
   						# code...
   						 header("Location:login.php?error_id=5");
   						  exit;

   					}
   			  		 
                    $_SESSION["userEmail"]=$result['userEmail'];
                    $_SESSION["userId"]=$result['userId'];
                    $_SESSION["username"]=$result['username'];
                  //  success("登陆成功！","../app/home/working.php");
   		}


   }



   if (!isset($_SESSION['userEmail'])) {
   	# code...
   	 header("Location:login.php?error_id=5");
   	 exit;
   }







 ?>