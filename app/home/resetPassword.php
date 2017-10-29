<?php 
// session_start();
// if(!isset($_SESSION["userEmail"]))
// {
// 	header("Location:login.php");
// }
include "../../action/isLogin.php";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>天天番茄官方网站</title>
	<link rel="icon" href="../../imgs/title.png" type="image/x-icon" />
	<link rel="shortcut icon" href="../../imgs/title.png">
	<link rel="Bookmark" href="../imgs/../title.png">
	<link rel="stylesheet" href="../../css/layout.css">
<!-- 	<link rel="stylesheet" href="../../css/working.css"> -->
<!-- 	<link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" media="screen"> -->
<!-- 	<script type="text/javascript" src="../../js/jquery.js"></script> -->
<!-- 	<script type="text/javascript" src="../../js/tendina.js"></script> -->
<!-- 	<script type="text/javascript" src="../../js/common.js"></script> -->
	<script src="../../js/ajax.js"></script>
<!-- 	<script src="../../js/sport.js"></script> -->
	<script>
	

 

	</script>

	<style>
#setA
{
			border-bottom: 3px solid #da2826;
			/*color: #e03938;*/
			color: #e03938;
}

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




#container  #resultcontent tr:hover
{
	background: #eee;
	cursor: pointer;

}
#container  #resultcontent .tr{
	position: relative;
}
#container  #resultcontent .tr .img{

	/*background: #ccc;*/
	width:25px;
	height: 25px;
	display: block;
	position: absolute;
	background-color: none
	background: url("../../imgs/right.png");


}
#container  #resultcontent .tr .img img{
	width: 100%;

}

#resultcontent .record1{width: 50%;float: left; /*display: none*/}
#resultcontent .time{width: 50%;float: right;  }
#select1{width:100%;height: 100%;border: none;font-size: 16px;padding-left: 20px;font-family: "Microsoft YaHei";background: none;}


#container .jstime{
	width:100%;
	height: 70px;
	/*background: #ccc;*/
	text-align: center;
	line-height: 70px;
	font-size: 19px
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
		margin-top: 8px;
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
		/*width:90%;*/
		height: 900px;
		/*background-color: #ccc;*/
		padding-top: 8px;*/

		margin:0 auto;
	}



#container .left{
	width: 20%;
	height: 980px;
/*	background: pink;*/
	float: left;
	box-shadow: 0 6px 12px rgba(0,0,0,0.175);
	margin-left: 10px;
	margin-right: 10px;
}
#container .left .left_ul
{
	widows: 96%;
	margin-top: 20px;

}
#container .left .left_li
{
	width: 85%;
	height: 40px; 
	background: #fff;
	margin: 16px  auto;
	text-align: center;
	line-height: 35px;
	border-radius: 5px;
	/*text-shadow: 0 6px 12px rgba(0,0,0,0.175);*/
	box-shadow: 0 6px 12px rgba(0,0,0,0.175);
	font-weight:bold;

	/*padding: auto;*/
}
#container .left .info
{
	background: #e03738;
	color:#fff;
}


#container .left li:hover
{
/*	background: #e03738;
	color:#fff;*/
	cursor: pointer;
}



#container .right{
	width: 78%;
	height: 980px;
	/*background:yellow;*/
		float: left;
}

@media (min-width: 1500px)
	{
		#container .left  .left_li
		{
			height: 48px; 
			font-size: 18px;
			
			line-height: 48px;

		}


		#container .left {
			width: 18%;
		}
	}

#right .table1{
	font-size: 18px;
	margin-top: 42px;
	margin-left: 5px;
}
#right .table1 tr
{
	line-height: 50px;
}





		
	#container .right .form-horizontal
	{
		margin-top:39px;
		text-align: center;
		width: 500px;
		

	}
	#container .right .form-horizontal .form-group{
		
		
		display: inline-block;
		margin:6px;

	}
	#container .right .form-horizontal .form-group .col-sm-1
	{
		padding:6px 16px;
		line-height: 1.8;

	}
	#container .right .form-horizontal .form-group .control-label
	{
		/*	float: left;*/
		display: inline-block;
		/*position: relative;*/
		float: left;


	}
	#container .right .form-horizontal .form-group .col-sm-4
	{
		float: left;
		position: relative;
	}
#container .right .form-horizontal .form-group .input-lg
{	 border-radius: 6px;
    font-size: 18px;
    height: 30px;
    line-height: 1.33;
    padding: 5px 16px;

}
#container .right .form-horizontal .form-group .form-control{
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
#container .right  .btn-block  {
    width: 280px;
    margin-left: 130px;
    height: 40px;
    border-radius: 6px;
    font-size: 18px;
    background-image: none;
    border: 1px solid #ccc;
    background: #fff;

}
#container .right  .btn-block:hover{
	background: #eee;
}

 
#container .right .form-horizontal .form-group .linkbox a
{
	color: #7a7a7a;
    font-size: 0.87em;
    padding-right: 30px;
    background: transparent none repeat scroll;
}




#container .right .form-horizontal .form-group .tip
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
	</style>


	
</head>
<body onload="startTime()">
	<header id="header">
		<ul class="ul1">
			<li class="logo" onclick="location.href = '../../index.php'"><img src="../../imgs/19.png" alt=""></li>
			<li class="working"> <a href="working.php" >工作台</a> </li>
			<li class="count"><a href="count.php">记录</a></li>
			<li class="record"><a href="javascript:alert('尚未开通')">统计</a></li>
			
		</ul>
		<ul class="ul2">
			<li class="login"><a href="community.php">社区</a></li>
			<li class="register" id="set" ><a  id="setA"href="">设置</a>
			<div class="subu" id="subu">
						<div><a href="resetPassword.php">账户设置</a></div>
						<div ><a href="">任务设置</a></div>
						<hr>
						<div class="no3"  id="exit"><a href="../../action/resetAction.php">退出</a></div>
			</div>
	
			</li>
			
		</ul>
	</header>

	<div id="container" >
		<div class="re_title" >
			<h1 style=" ">账户设置 <small style=""> — 个人信息</small></h1>
		</div>
		<div class="re_con" id="re_con">
			 <div class="left">
				<ul class="left_ul">
					
						<li class="left_li info" >个人信息</li>
					
					
						<li class="left_li">修改密码</li>
					
				
						<li class="left_li">修改邮箱</li>
					
				</ul>
		
			</div>
			 <div class="right" id="right">
			 
			</div>
		</div>
	</div>
<!-- 	<footer>
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
	<div id="black"></div>
	<script src="../../js/dialog.js"></script>
	<script  src="../../js/listclick.js"></script>
	<script src="../../js/runtime.js"></script>
	<script src="../../js/outofplay.js"></script> -->



	<?php 
		// if (isset($_GET['sumTip'])) {
		// 	echo "	<script  >
		// alert('保存成功！');</script>";
		// }


	
		// if (isset($_GET['delTip'])) {
		// 	echo "	<script  >
		// alert('清空成功');</script>";
		// }


	 ?>


	 <script>
	var re_con=document.getElementById('re_con');
	var left_a=re_con.getElementsByClassName('left_a');
	var left_li=re_con.getElementsByClassName('left_li');

	

	for(var i=0;i<left_li.length;i++)
	{
		left_li[i].index=i;
		left_li[i].onclick=function ()
		{	

			for(var j=0;j<left_li.length;j++)
			{
				left_li[j].style.backgroundColor='#fff';
				left_li[j].style.color='#000';

			}
			this.style.backgroundColor='#e03738';
			this.style.color='#fff';
			ajaxInfo(this.index);

		}
		
	}



	
	function ajaxInfo( e)
	{
	
	ajax("../../action/userInfoAjax.php?info="+e,fn);	
	}
	



	function fn(a)
	{	
		
		var right=document.getElementById('right');
		 right.innerHTML=a;
	
		
		
	}
	 ajaxInfo(0);



</script>

	
</body>
</html>