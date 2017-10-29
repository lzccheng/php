<?php 
include "../config.inc.php";
 $date=$_GET['date'];
session_start();
$userId=$_SESSION["userId"];

$datas=new userDatas;
$result=$datas->where("userId='{$userId}'")->select();
//$resultend=array();
$str='';
if ($result) {
	# code...
	foreach ($result as $key => $value) {
	# code..

	$num=date('Y-m-d',$result[$key]['Date']);

	if ($date==$num) {
	// 	# code...

		
  		$str.="<tr style='color:#666;height: 40px;'>
  			<td width='300'>{$value['event']}</td>
  			<td width='100'>{$value['tofqnum']}</td>
  			<td width='200'>{$value['fqrecord']}</td>
  			<td width='120'>{$value['fqlength']}</td>
  			<td width='80'>{$value['result']}</td>
  		</tr>";
  
 	}

	}
}


// $str='<table border=1>';

  // foreach ($resultend as $key1 => $value1) {
  // 		$str.="<tr>
  // 			<td>{$resultend[$key]['event']}</td>
  // 			<td>{$resultend[$key]['tofqnum']}</td>
  // 			<td>{$resultend[$key]['fqrecord']}</td>
  // 			<td>{$resultend[$key]['fqlength']}</td>
  // 			<td>{$resultend[$key]['result']}</td>
  // 		</tr>";
  // }

// $str.="</table>";
if ($str=='') {
	# code...
	$str="<tr style='color:#666;height: 40px;font-size:28px;' ><td width='800' colspan='4'>未找到数据！</td></tr>";
}

echo $str;
  //echo $str;

 ?>