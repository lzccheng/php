<?php 

  include "../config.inc.php";
  $_POST['Date']=time();
  
  $userdatas=new userdatas($_POST);

  $result=$userdatas->insert();
  if ($result) {
  	# code...
  	$Info='恭喜你,添加成功！';
  	$url='../app/home/working.php';
    header("Location:{$url}");
  	//success($Info,$url,$delay=0);
  }
  else{
  	error('失败',"../app/home/register.html",$delay=3);
  }


// print_r($_POST);

 ?>