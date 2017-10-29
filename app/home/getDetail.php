<?php 
include "../../config.inc.php";
if (!isset($_GET['id'])) {
	echo "baibai";exit;
}




$articles=new articles;




$result=$articles->where("id='{$_GET['id']}'")->find();


$arr=array( );

$arr['view_count']=$result['view_count']+1;

$articles1=new articles($arr);
$articles1->where("id='{$_GET['id']}'")->update();



$user=new user;
// $cate_name=$cate->where("cate_id='{$_GET['cate_id']}'")->find();
$created_time=date('Y-m-d H:m:s',$result['created_at']);
$user_id=$result['user_id'];
$array=$user->where("userId='{$user_id}'")->find();
// $string=mb_substr($array['username'],0,1,'utf-8');;




echo '<div class="right_content">
					<span>'.$result['title'].'</span>
					<hr  style="margin: 10px auto;color: #ddd">
					<div class="panel panel-default">
					  <div class="panel-heading"> '.$array['username'].'&nbsp;&nbsp;发布于&nbsp;&nbsp;'.$created_time.'</div>
					  <div class="panel-body">
					  '.$result['content'].'
					  </div>
					</div>

				</div>	';


 ?>