<?php 

include "../../config.inc.php";
$userId=$_GET['userId'];
$user=new User;
$userdatas=new userdatas;

$result=$user->where("userId='{$userId}'")->del();
$result1=$userdatas->where("userId='{$userId}'")->del();

if ($result&&$result1) {
	echo '1';

}
else{
	echo 0;
}

 ?>