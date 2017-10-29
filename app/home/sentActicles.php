<?php 

include "../../config.inc.php";
if (!isset($_GET['cate_id'])) {
	echo "baibai";exit;
}



// $userId=$_SESSION["userId"];
$articles=new articles;
// $result=$user->select();
// var_dump($acticles);exit;
$count=$articles->where("cate_id='{$_GET['cate_id']}'")->getSelectRow();

// echo $count;exit;
 $page=new Page6 ($count, 5, '', true,$_GET['cate_id']); //id=5&cid=6&user=admin


$result1=$articles->where("cate_id='{$_GET['cate_id']}'")->order("created_at DESC")->limit("{$page->limit}")->select();

$user=new user;



if ($result1) {
  # code...
	$cate=new category;
	$cate_name=$cate->where("cate_id='{$_GET['cate_id']}'")->find();
	echo '<div class="right_content">
					<span>'.$cate_name['cate_name'].'</span>
					<hr  style="margin: 10px auto;color: #ddd">
					<ul>';
 foreach ($result1 as $key => $value) {
    # code...
                        $created_time=date('Y-m-d H:m:s',$value['created_at']);
     					$user_id=$value['user_id'];
                        $array=$user->where("userId='{$user_id}'")->find();
                    	$string=mb_substr($array['username'],0,1,'utf-8');;
						echo '<li class="right_li">
							<div class="right_img">
								'.$string.'
							</div>
							<div class="right_info">
								<div class="right_info_one"><a href="javascript:details('.$value['id'].')">'.$value['title'].'</a> <span class="view_count">'.$value['view_count'].'</span></div>
								<div class="right_info_two">'.$array['username'].'&nbsp;&nbsp;发布于&nbsp;&nbsp;'.$created_time.'</div>
							</div>
						</li>';
					
					

  }


echo '</ul></div><nav aria-label="Page navigation">
  <ul class="pagination">'.$page->fpage(3,4,5,6,7,0).' </ul></nav>';


}
   

 
	


// echo '<div class="right_content">
// 					<span>新手入门</span>
// 					<hr  style="margin: 10px auto;color: #ddd">
// 					<ul>
// 						<li class="right_li">
// 							<div class="right_img">
// 								第
// 							</div>
// 							<div class="right_info">
// 								<div class="right_info_one"><a href="">第一条信息</a> <span class="view_count">0</span></div>
// 								<div class="right_info_two">this is one info</div>
// 							</div>
// 						</li>
					
// 					</ul>

// 				</div>	';



 ?>