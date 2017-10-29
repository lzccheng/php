<?php 

 include "../config.inc.php";


$array= array();

$password='root';
  $array1['password']=md5($password);
  $array1['create_at']=time();
$array1['adminName']='root';


 $admin=new admin($array1);

  $result=$admin->insert();
  if ($result) {
  	# code...
  	//$Info='恭喜你,注册成功！';
  	header("Location:../admin.html");
  // header("Location:../app/admin/admin.php");
    
  	// success($Info,$url,$delay=3);
  }
  else{
  	error('失败',"../app/home/register.php",$delay=3);
  }


 ?>