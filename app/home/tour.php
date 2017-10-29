<?php 

session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>天天番茄官方网站</title>
	<link rel="shortcut icon" href="../../imgs/title.png">
	<link rel="Bookmark" href="../../imgs/title.png">
	
	<link rel="stylesheet" href="../../css/layout.css">
	<script src="../../js/ajax.js"></script>
	<style>
	#header .ul2 .subu{
	position:absolute;
	width:100px;
	/*background-color: #f8f8f8;*/
	height: 110px;
/*	display:none;*/
	/*border:1px solid ; */	
	/*border-color:rgb(238,238,238);*/
	z-index:998;
	top: 54px;
	/*display:block;*/
	right: 0px;
	background: #fff;
	box-shadow: 0 6px 12px rgba(0,0,0,0.175);
	border-bottom-left-radius: 5px;
	display: none;
	
}
#header .ul2  li:hover .subu
{
	display: block;
}
#header .ul2 .subu hr
{
	margin-top: 15px;
}


#header .ul2 .subu div{
	float:none;
	text-align:center;
	height: 30px;
	padding: 0px;
	margin: 0px;

}
#header .ul2 .subu .no3
{
	margin-top: -7px;
}

#header .ul2  .subu div a{
	
	padding:0;
	border:none;
	background:none;
	font-size: 14px;
	width: 100%;
}
	#header .ul1 .shangshou a
	{
	border-bottom: 3px solid #da2826;
	color: #e03938;
	}
		#container{
	width:100%;
	
	
	background: #fff;
	padding-top: 53px;
		}

	

	#container .re_title{
		width: 100%;
		height: 67px;
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
	.re_con{
		width:90%;
		height: 900px;
		/*background-color: #ccc;*/
		padding-top: 55px;

		margin:0 auto;
	}
	.re_con .box{
		width: 100%;
		text-align: center;
		border:1px solid  #ccc;
		text-shadow: 0 6px 12px rgba(0,0,0,0.175);
		margin-bottom: 50px;
	}
	.re_con .box .box1
	{
		width: 68%;
		border:1px solid  #ccc;
		/*background: red;*/
		float: left;
		/*background:url(../../imgs/tour1.png) no-repeat;*/
		background-size: 100%;
		box-shadow: 0 6px 12px rgba(0,0,0,0.175);
		margin:25px 10px 25px;


	}
	.re_con .box .box1 img
	{
		width:100%;
	}
		.re_con .box .box2
	
	{
		width: 28%;
		height: 240px;
	/*	background:green;*/
		float: right;
		margin-left: 10px;
		padding-top:60px; 
		
	}
	.re_con .box h2
	{

		
	}
	.re_con .box .box2 h2 em
	{
		color:#da2826;
		font-size: 48px;

	}
	.re_con .box .box2 p{
	/*	padding: 30px 30px;*/
		font-size: 18px;
		margin-top: 16px;
		text-indent: 1em;
		padding-right: 20px;
	}
	#loginicon{
		display: none;
	}
	

	@media (max-width: 1100px)
	{
		.re_con .box .box2{
			margin:0 auto;
			width: 70%;
			float: left;
			height: 160px;
			padding-top: 25px;
			margin-left: 10%;
		}
		.re_con .box .box1 {
			margin-left: 15%;

		}

	}



	</style>
	
	
</head>
<body>
	<header id="header">
		<ul class="ul1">
			<li class="logo" onclick="location.href = '../../index.php'"><img src="../../imgs/19.png" alt=""></li>
			<li class="shouye"> <a href="../../index.php">首页</a> </li>
			<li  class="shangshou"><a href="">快速上手</a></li>
			<li ><a href="club.html">番茄工作法</a></li>
			<li><a href="community.php">社区</a></li>
			<li id="workpl" style="display: none;"><a href="working.php" >工作台</a></li>
		</ul>
		<ul class="ul2" id="loginicon"  >
			<li><a href="login.php" >登录</a></li>
			<li><a href="register.php">注册</a></li>
		</ul>
		<?php 
		if (isset($_SESSION['userId'])) {
			# code...
			echo '<ul class="ul2">
		
			<li class="register" id="set"><a href="">设置</a>
			<div class="subu" id="subu">
						<div><a href="resetPassword.php">账户设置</a></div>
						<div ><a href="resetPassword.php">任务设置</a></div>
						<hr>
						<div class="no3"  id="exit"><a href="../../action/resetAction.php">退出</a></div>
			</div>
	
			</li>
			
		</ul>';
		}
		 ?>
	</header>
	<div class="clearfix"></div>
	<div id="container">
		
		<div class="re_title" >
			<h1 style=" ">快速上手<small style="">天天番茄带你飞</small></h1>
		</div>
		<div class="re_con">
			<div class="box">
				<div class='box1'>
					<img src="../../imgs/tour1.png" alt="">
				</div>
				<div class='box2'>
					<h2><em>1 </em> 添加一个待办事件</h2>
					<p>你今天有许多繁杂的工作？<br>现在都把它们添加到待办事项中吧。</p>
				</div>
				<div class="clearfix"></div>
			</div>
			
			<div class="box">
				<div class='box1'>
					<img src="../../imgs/fq2.png" alt="">
				</div>
				<div class='box2'>
					<h2><em>2 </em> 选择一个事件开始</h2>
					<p>单击选择事件 ， 按下开始按钮 ， 番茄钟倒计时开始跑 。直到为零 ， 一个番茄钟完成。</p>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="box">
				<div class='box1'>
					<img src="../../imgs/fq3.png" alt="">
				</div>
				<div class='box2'>
					<h2><em>3 </em> 记录一个番茄</h2>
					<p>跑完一个番茄钟之后，自动记录一个番茄标识</p>
				</div>
				<div class="clearfix"></div>
			</div>


			<div class="box">
				<div class='box1'>
					<img src="../../imgs/fq4.png" alt="">
				</div>
				<div class='box2'>
					<h2><em>4 </em>完成标记 </h2>
					<p>如果你完成了你的事件就在末尾选择已经完，第二天便不会出现。</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		

	</div>
	


	<footer style="clear:both;">
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
		<div id="tail"><span>Copyright © </span></div>
	</footer>
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


	</script>
</body>
</html>