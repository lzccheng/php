<?php 
  include "../config.inc.php";
  $_POST['password']=md5($_POST['password']);
  $_POST['create_at']=time();
  $user=new user($_POST);
  $result=$user->insert();
  if ($result) {
  	# code...
  	$Info='恭喜你,注册成功！';
  	$url='../app/home/login.php';
    if (isset($_GET['ttip'])) {
   
      header("Location:../app/admin/addAdmin.php");
    }
  	success($Info,$url,$delay=3);
  }
  else{
  	error('失败',"../app/home/register.php",$delay=3);
  }

 ?>