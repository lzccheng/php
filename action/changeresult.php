<?php 
 include "../config.inc.php";
$dataId=$_GET['dataId'];
$select1=$_GET['result'];

$arr=array('result' => $select1 );

$userdatas=new userDatas($arr);

 // echo $fqrecord1['fqrecord']

$result=$userdatas->where("dataId='{$dataId}'")->update();
if ($result) {
  	# code...
  	// $Info='恭喜你,注册成功！';
  	// $url='../app/home/login.html';


  	// $source=$userdatas->field("result")->where("dataId='{$dataId}'")->find();//
 	 // echo $source['result'];
	echo 1;
  }
  else{
  	// error('失败',"../app/home/working.php",$delay=3);
  	echo 0;
  }



 ?>