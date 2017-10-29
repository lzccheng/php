<?php 

  include "../config.inc.php";
   session_start();
 if (isset($_POST)) {
 	# code...

		 	if (!isset($_SESSION['userId'])) {
		  	header("Location:../app/home/login.php");
		  	exit;
			}

		



		 if (isset($_POST['summary_id'])) {
		 	$summaryId=$_POST['summary_id'];
			unset($_POST['summary_id']);
			$_POST['update_at']=time();
			$summary=new summary($_POST);
			  $result=$summary->where("summary_id='{$summaryId}'")->update();




		 }
		 else {
		 	# code...
		 
		 	$_POST['userId']=$_SESSION['userId'];
		 	 $_POST['create_at']=time();
		 	 $summary=new summary($_POST);
			  $result=$summary->insert();


		 }

		  
		 
		  if ($result) {
		  	# code...
		  	// $Info='恭喜你,添加成功！';
		  	$url='../app/home/working.php?sumTip=1';
		    header("Location:{$url}");
		  	//success($Info,$url,$delay=0);
		  }
		  else{
		  	error('失败',"../app/home/register.php",$delay=3);
		  }


 }

//print_r($_POST);

 ?>