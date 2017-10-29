<?php 

include "../config.inc.php";
session_start();
if (!isset($_SESSION['userId'])) {
	echo "<script>alert('请先登录');location.href='../app/home/login.php';</script>";
}



// $userId=$_SESSION["userId"];
$articles=new articles;
// $result=$user->select();
// var_dump($acticles);exit;
$count=$articles->where("user_id='{$_SESSION['userId']}'")->getSelectRow();

// echo $count;exit;
 $page=new Page7 ($count, 5, '', true); //id=5&cid=6&user=admin


$result1=$articles->where("user_id='{$_SESSION['userId']}'")->order("created_at DESC")->limit("{$page->limit}")->select();
 $user=new user;



if ($result1) {
  # code...
	 $cate=new category;
	
	
 foreach ($result1 as $key => $value) {
    # code...
    $cate_name=$cate->where("cate_id='{$value['cate_id']}'")->find();


echo '<div class="right_content">
					<span>'.$cate_name['cate_name'].'</span>
					<hr  style="margin: 10px auto;color: #ddd">
					<ul>';


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
						</li></ul></div>';
					
					

  }


echo '<nav aria-label="Page navigation">
  <ul class="pagination">'.$page->fpage(3,4,5,6,7,0).' </ul></nav>';


}
else
{
	echo " <div class='right_content' style='text-align:center'>你还没有发帖哦！</div>";
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