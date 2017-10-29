<?php 
include "../../config.inc.php";
session_start();

 unset($_SESSION["adminId"]);
 unset($_SESSION["adminName"]);                  



if (isset($_COOKIE['auth1'])) {
	# code...
	list($identifier,$token)=explode(':', $_COOKIE['auth1']);


	setcookie('auth1','{$identifier}:{$token}',time()-3600,"/");
}



success("注销成功！","../../admin.html");








 ?>