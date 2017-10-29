<?php 	

 include "../config.inc.php";
$dataId=$_GET['dataId'];
 // $fqrecord= array('fqrecord' => 'x' );
$userdatas=new userDatas();
// $result=$userdatas->where("dataId='{$dataId}'")->update();
// if ($result) {
//   	# code...
//   	$Info='恭喜你,注册成功！';
//   	$url='../app/home/login.html';


 $re=$userdatas->field("fqlength")->where("dataId='{$dataId}'")->find();//
 if ($re) {
 	# code...
 	 echo $re['fqlength'];
 }
 else
 {
 	echo 'haha';
 }
 	
  // }
  // else{
  // 	error('失败',"../app/home/working.php",$delay=3);
  // }


 ?>