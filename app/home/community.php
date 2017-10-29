<?php 
include "../../config.inc.php";
	// 第一步：连接数据库
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// 第二步：判断数据库是否连接正确
	if (!$link) {
		die("数据库连接失败".mysqli_connect_error());
	}

	// 第三步：设置字符集
	mysqli_set_charset($link, DB_CHARSET);

	// 第四步：准备SQL语句
	$sql = "SELECT cate_id,cate_name,created_at,updated_at FROM `category`";

	// 第五步：执行SQL语句
	$result = mysqli_query($link, $sql);

	// 第六步：处理结果集
	$list = array();
	if ($result) {
		while($arr = mysqli_fetch_assoc($result)){
			$list[] = $arr;
		}
	}

	// 第七步：释放结果集
	// mysqli_free_result($result);

	// 第八步：关闭连接
	mysqli_close($link);


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>天天番茄官方网站</title>
	<link rel="stylesheet" href="../../css/layout.css">
	<link rel="icon" href="imgs/title.png" type="image/x-icon" />
	<link rel="shortcut icon" href="../../imgs/title.png">
	<link rel="Bookmark" href="../../imgs/title.png">
	<link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" media="screen">

	<script>	
window.onload=function()
{
	
	pp(6,1);
}

function fp(a)
	{	
		
	var pure=document.getElementById('pure');
	pure.innerHTML=a;
	

		
		
	}						
					
	function pp(cateId,num)
	{
	
	ajax('sentActicles.php?page='+num+'&cate_id='+cateId,fe);	
	}


	function po(num)
	{
	
	ajax('../../action/getOwnArticles.php?page='+num,fp);	
	}

	</script>
	<script src="../../js/ajax.js"></script>
		
	<style>

	#header .ul1 .community a
{
	border-bottom: 3px solid #da2826;
	padding-bottom: 3px;
	color: #e03938;
}
	#header a{
		font-size:16px !important;
	}

#header #logo img{
	margin-top:-9px ;
}
#container 
{
	
	height: 1000px;
}
#container .re_title{
		width: 100%;
		height: 63px;
		background:url("../../imgs/bg.png") repeat scroll 0 0;;
		box-shadow: 0px 1px 3px #ccc;
		font-size: 18px;
	
	}
	#container .re_title h1
	{
		font-weight:normal;
		padding-left: 55px;
		display: inline-block;
		margin-top: 12px;
		text-shadow: 1px 1px 1px #ccc;
	}
	#container .re_title h1 small
	{
		font-size: 65%;
		color: #999;
		margin-left: 10px;
		text-shadow:none

	}





	#container .left{
	width: 18%;
	/*height: 600px;*/
/*	background: pink;*/
	float: left;
	/*box-shadow: 0 6px 12px rgba(0,0,0,0.175);*/
	border: 2px solid #ddd;

	border-radius: 5px;

	margin-left: 80px;
	margin-right: 10px;
	margin-top: 30px;
}
#container .left .left_ul
{
	width: 96%;
	margin-top: 20px;
	padding: 0px auto; 
	margin-bottom: 30px;

}
#container .left .left_li
{
	width: 85%;
	height: 46px; 
	background: #fff;
	margin: 16px  auto;
	text-align: center;
	line-height: 46px;
	border-radius: 5px;
	/*text-shadow: 0 6px 12px rgba(0,0,0,0.175);*/
	box-shadow: 0 6px 12px rgba(0,0,0,0.175);
	font-weight:bold;
	font-size: 20px;

	/*padding: auto;*/
}
#container .left .info
{
	background: #e03738;
	color:#fff;
}

a{
	text-decoration: none !important;

	
}
#header ul li a{
	float: left;
	margin-top:2px !important;
	color: #000 !important;

}
#container .left li:hover
{
/*	background: #e03738;
	color:#fff;*/
	cursor: pointer;
}



#container .right{
	width: 70%;
/*	height: 600px;px;*/
	/*background:yellow;*/
		float: left;
		margin-top: 30px;
		margin-left: 30px;
		border: 2px solid #ddd;

	border-radius: 5px;
}

#container .left .left_cate
{
	padding:10px 20px;
	font-size: 15px;
	color: #666;
}
#container .left .left_cate li
{
	height: 50px;
	
	margin: 15px auto;
	border-bottom: 1px solid #ccc;
	line-height: 50px;
	width: 75%;
}
#container  a:hover
{
	color: #e03738;
}




#container .right  .right_content
{
	margin:10px 20px;
}
#container .right  .right_content span 
{
	font-size: 21px;
	color: #333;
}

 #container .right .right_li
 {
 	height: 66px;
/* 	background: #ccc;*/
 	position: relative;
 	border-bottom: 1px solid #ccc;
 	margin-top: 20px;
 }
  #container .right .right_li:hover
  {
  	background: #eee;
  }
 #container .right .right_img
 {
	float: left;
	width: 42px;
	height: 42px;
	margin: 12px;
	background: #e03738 ;
	font-size: 20px;
	line-height: 42px;
	text-align: center;
	border-radius: 50%;
	color: #fff;

 }
 #container .right .right_info
 {
 	margin-left: 15px;
 	float: left;

 }
  #container .right .right_info div
  {
  		height: 50%;

  }
  #container .right .right_info_one
  {

		margin-top: 10px;
		color: #333;
		font-size: 18px;

		
  }
    #container .right .right_info_two
    {
    	font-size: 14px;
    	color: #888;
    	margin-top: 4px;
    }
  #container .right .view_count
  {
  	width: 25px;
  	height: 25px;
	display: inline-block;
	background: #e03738 ;
	font-size: 13px !important;
	line-height: 25px;
	text-align: center;
	position: absolute;
	right: 20px;
	top: 20px;
	border-radius: 2px; 
	color: #fff !important;
  }



	</style>
<script>
	function fc(a)
	{	
		var ul2=document.getElementById('loginicon');
		var work=document.getElementById('workpl');
		
		if (a=='1') {
			ul2.style.display='none';
			work.style.display='block';
		}
		else{
			ul2.style.display='block';
			work.style.display='none';
		}
		
		
	}
	function tt()
	{
	// var username=document.getElementById('loginicon').value;
	ajax("../../action/indexAction.php",fc);	
	}
	// setInterval(tt(),30);
	tt();


	// function ss()
	// {
	// // var username=document.getElementById('loginicon').value;
	// ajax("app/home/indexsession.php",ok);	
	// }
	
	// function ok(a)
	// {
	// 	if (a=='1') {
	// 		 self.location.reload();
	// 	}
	// 	// self.location.reload();
	// 	// break;
	// }
	// ss();







	function fe(a)
	{	
		
	var pure=document.getElementById('pure');
	pure.innerHTML=a;

		
		
	}


	function details(id)
	{
		ajax('getDetail.php?id='+id,fDetail);	


	}
	function fDetail(va)
	{
		var pure=document.getElementById('pure');
		pure.innerHTML=va;
	}	




</script>

</head>
<body>
	<header id="header">
		<ul class="ul1">
			<li class="logo" id="logo" onclick="location.href = '../../index.php'"><img src="../../imgs/19.png" alt=""></li>
			<li class="shouye"> <a href="../../index.php">首页</a> </li>
			<li ><a href="tour.php">快速上手</a></li>
			<li class="community"><a href="community.php">社区</a></li>
			<li id="workpl" style="display: none;"><a href="working.php" >工作台</a></li>
		</ul>
		<ul class="ul2" id="loginicon" style="display: none;">
			<li><a href="login.php" >登录</a></li>
			<li><a href="register.php">注册</a></li>
		</ul>
	
	</header>
	<div class="clearfix"></div>

	<div id="container">
		<div class="re_title" >
			<h1 style=" ">用户社区 <small > — 起聊聊</small></h1>
		</div>
		<div class="communityContent" >
			<div class="left">
				<ul class="left_ul">
					
						<li class="left_li info" onclick="ajax('addActicles.php',fp)">我要发帖</li>
						
				</ul>
				<ul class="left_cate">
					<span style="font-size: 18px; color: #000;"> 版块分类 </span>
					<hr style="margin: 10px auto;">
					<?php  foreach ($list as $value) { ?>
					<li><a href="javascript:ajax('sentActicles.php?cate_id=<?php echo $value['cate_id']; ?>',fp)"><?php echo $value['cate_name']; ?></a></li>
				
					<?php  } ?>
				</ul>
				<ul class="left_cate">
					<span style="font-size: 18px; color: #000;"> 我的社区 </span>
					<hr style="margin: 10px auto;">
					<li><a href="javascript:po(1)">我的帖子</a></li>
					<li><a href="javascript:alert('此功能敬请期待！')">我的回复</a></li>
				
				</ul>
			</div>
			<div class="right" id="pure">
				


			</div>
			<!-- <textarea  class="form-control" id="articles_editor" name="content" rows="15"></textarea> -->
<script>

    // KindEditor.ready(function(K) {
    //         window.editor = K.show('#articles_editor');
    // });

</script>
		</div>




	</div>

	<footer>
		<div id="bottom">
			<div class="div1">
				<div class="content_tail">
					<h4>服务政策</h4>
					<br>
					<ul>
						<li><a href="">隐私政策</a></li>
						<li><a href="">服务条款</a></li>
						<li><a href="">更新日志</a></li>
					</ul>
				</div>
				<div class="content_tail">
					<h4>产品相关</h4>
					<br>
					<ul>
						<li><a href="">快速上手</a></li>
						<li><a href="">意见反馈</a></li>
						<li><a href="">番茄工作法</a></li>
					</ul>
				</div>
				<div class="content_tail">
					<h4>关注我们</h4>
					<br>
					<ul>
						<li><a href="">关注我们</a></li>
						<li><a href="">微信:18926363429</a></li>
						<li><a href="">新浪微博</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="tail"><span>Copyright © 2017 daydaytomato.cn 学号02041501010 计算机网络技术一班 陈业涛</span></div>
	</footer>



</body>
</html>