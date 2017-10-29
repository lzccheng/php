<?php 	

 include "../config.inc.php";
$dataId=$_GET['dataId'];
$fqrecord2= array( );
 $fqrecord1= array('fqrecord'=>'x');
$userdatas=new userDatas();
$num=$userdatas->field("fqrecord")->where("dataId='{$dataId}'")->find();
  $fqrecord2['fqrecord']=$fqrecord1['fqrecord'].$num['fqrecord'];


 // echo $fqrecord1['fqrecord']
 $userdata=new userDatas( $fqrecord2);
$result=$userdata->where("dataId='{$dataId}'")->update();
if ($result) {
  	# code...
  	// $Info='恭喜你,注册成功！';
  	// $url='../app/home/login.html';


  	 $source=$userdatas->field("fqrecord")->where("dataId='{$dataId}'")->find();//
 	 echo $source['fqrecord'];
  }
  else{
  	error('失败',"../app/home/working.php",$delay=3);
  }


 ?>