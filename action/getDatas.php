<?php 

 include "../config.inc.php";
session_start();
 $userId='';
 if (isset($_SESSION["userId"])) {
   	   $userId=$_SESSION["userId"];
   }
   $getDatas=new userDatas;
  
   $result=$getDatas->where("userId='{$userId}'")->select();

   $str='';
   if (is_array($result)) {
   	# code...
   	foreach ($result as $key => $value) {

   		
   		// 	$time=date("Y-m-d",$value['Date']);
   		// 	$nowtime=date("Y-m-d",time());
   		// 	if ($time==$nowtime) {
   		// 		$str.= "<tr >
					// 	<td>{$value['event']}</td>
					// 	<td>{$value['tofqnum']}</td>
					// 	<td></td>
					// 	<td></td>
					// </tr>";
   		// 	}

   				$str.= "<tr id='tr'>
					<td width='600' >{$result[$key]['event']}</td>
					<td width='120'>{$result[$key]['tofqnum']}</td>
					<td width='300'></td>
					<td></td>
					 </tr>";

   		}

   		echo $str;
   }
   else if ($result=='') {
   	# code...
   		echo false;
   }
 
   
  

   





   





 ?>
 