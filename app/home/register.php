<?php 
include "../../config.inc.php";
  session_start();
if (isset($_SESSION["userEmail"])) {
	# code...
	// $a=$_SESSION["userEmail"];
	header ( "location:working.php" );
}

 ?>


 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>天天番茄官方网站</title>
	<link rel="icon" href="../../img/title.png" type="image/x-icon" />
	<link rel="shortcut icon" href="../../img/title.png">
	<link rel="Bookmark" href="../../img/title.png">
	<link rel="stylesheet" href="../../css/layout.css">
	<script src="../../js/ajax.js"></script>
	<script src="../../js/regiterCheck.js"></script>
	<script src="../../js/ajax.js"></script>
	<script>
	function fc(a)
	{	
		
		var work=document.getElementById('workp');
		
		if (a=='1') {
			
			work.style.display='block';
		}
		else{
			
			work.style.display='none';
		}
		
		
	}
	function tt()
	{
	// var username=document.getElementById('loginicon').value;
	ajax("../../action/indexAction.php",fc);	
	}
	tt();

</script>
	
	<style>
	#container{
	width:100%;
	height: 476px;
	background: #fff;
		}

	#header .ul2 .register a
	{
	border-bottom: 3px solid #da2826;
	color: #e03938;
	}
	#container{
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
	#container .re_con{
		width: 100%;
		height: 332px;
		/*background: #ccc;*/
		margin-top: 28px;

	}
	#container .re_con .form-horizontal
	{
		margin-top: 72px;
		text-align: center;
		margin-left: -200px;
		

	}
	#container .re_con .form-horizontal .form-group{
		
		
		display: inline-block;
		margin:6px;

	}
	#container .re_con .form-horizontal .form-group .col-sm-1
	{
		padding:6px 16px;
		line-height: 1.8;

	}
	#container .re_con .form-horizontal .form-group .control-label
	{
		/*	float: left;*/
		display: inline-block;
		/*position: relative;*/
		float: left;


	}
	#container .re_con .form-horizontal .form-group .col-sm-4
	{
		float: left;
		position: relative;
	}
#container .re_con .form-horizontal .form-group .input-lg
{
	 border-radius: 6px;
    font-size: 18px;
    height: 30px;
    line-height: 1.33;
    padding: 5px 16px;

}
#container .re_con .form-horizontal .form-group .form-control{
	 background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;

    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #555;
    display: block;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    vertical-align: middle;
    width: 100%;

}
#container .re_con  .btn-block  {
    width: 257px;
    margin-left: 95px;
    height: 40px;
    border-radius: 6px;
    font-size: 18px;
    background-image: none;
    border: 1px solid #ccc;
    background: #fff;

}
#container .re_con  .btn-block:hover{
	background: #eee;
}

 
#container .re_con .form-horizontal .form-group .linkbox a
{
	color: #7a7a7a;
    font-size: 0.87em;
    padding-right: 30px;
    background: transparent none repeat scroll;
}




#container .re_con .form-horizontal .form-group .tip
{
	width: 200px;
	display:block;
	 position: absolute;
	 z-index: 997;
	  top:12px;
	  left:280px;
	  font-size: 12px;
	  color: red;
	  text-align: left;

}

@media (min-width:1300px)
	{
		footer{
			position: fixed;
			bottom: 0px;
			
		}

	}



	</style>


</head>
<body>
	<header id="header">
		<ul class="ul1">
			<li class="logo" onclick="location.href = '../../index.php'"><img src="../../imgs/19.png" alt=""></li>
			<li class="shouye"> <a href="../../index.php">首页</a> </li>
			<li ><a href="tour.php">快速入手</a></li>
			<li><a href="community.php">社区</a></li>
			<li id="workp" style="display: none;"><a href="work
			ing.php">工作台</a></li>
		</ul>
		<ul class="ul2">
			<li class="login"><a href="login.php">登录</a></li>
			<li class="register"><a href="register.php">注册</a></li>
		</ul>
	</header>

	<div id="container" >
		<div class="re_title" >
			<h1 style=" ">注册<small style="">似水流年不可辜负</small></h1>
		</div>
		<div class="re_con">
	
			<form role="form" class="form-horizontal" 	action="../../action/registerAction.php" method="post" onsubmit="return  onsubmit1()" id="regform">
			  <div class="form-group">
				<label for="nickname" class="col-sm-1 control-label">姓名</label>
				<div class="col-sm-4">
					<input id="nickname" onblur="checkName()" name="username" class="form-control input-lg" type="text">
					<span id="nameResult" class="tip" ></span>
				</div>
			  </div>
			  <br>
			  <div class="form-group" >
				<label for="email" class="col-sm-1 control-label">邮箱</label>
				<div class="col-sm-4"  >
					<input id="email" onblur="checkEmail()"  name="userEmail" class="form-control input-lg" type="text">
					<span id="emailResult" class="tip" ></span>
				</div>

			  </div>
			  <br>
			  <div class="form-group">
				<label for="password" class="col-sm-1 control-label">密码</label>
				<div class="col-sm-4">
					<input class="form-control input-lg" onblur="checkpasswd()" id="password" name="password" type="password">
					<span id="passResult"  class="tip" ></span>
				</div>
			  </div>
				<br>
			  <div class="form-group">
				<div class="col-sm-offset-1 col-sm-4">
				  <button type="submit" data-loading-text="正在处理..." class="btn btn-default btn-lg btn-block" id="regBtn">注 册</button>
				</div>
				<label class="col-sm-4 error_msg" id="serviceReturn"></label>
			  </div>
			  <br>
			  <div class="form-group">
				<div class="col-sm-offset-1 col-sm-2 linkbox">
				  <a href="login.html">已经有账号? 登录» </a>
				</div>
			  </div>
			  
			</form>

		</div>


	</div>


	<footer >
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
		<div id="tail"><span>Copyright © 2017 tomatowork.com All Rights Reserved 苏ICP备11024527号-4</span></div>
	</footer>

</body>
</html>