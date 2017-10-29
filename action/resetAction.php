<?php 
include "../config.inc.php";
session_start();

$_SESSION=array();

session_destroy();
if (isset($_COOKIE['auth'])) {
	# code...
	list($identifier,$token)=explode(':', $_COOKIE['auth']);


	setcookie('auth','{$identifier}:{$token}',time()-3600,"/");
}



success("注销成功！","../app/home/login.php");








 ?>