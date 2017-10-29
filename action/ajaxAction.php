<?php 
include "../config.inc.php";
if (!empty($_GET['userEmail'])) {
	# code...
	$user1=$_GET['userEmail'];
	$usertable=new User;
	$result=$usertable->where("userEmail='{$user1}'")->getSelectRow();
	if ($result!=0) {
		echo "<div style='color:red;' id='yonghu'>该用户已被注册</div>";
	}
	else{
		echo "<div style='color:green;id='yonghu'>输入正确</div>";
	}

}






 ?>