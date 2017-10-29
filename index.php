<?php 

include "config.inc.php";

   session_start();

   if (isset($_COOKIE['auth'])) {
   	# code...

   		list($identifier,$token)=explode(':', $_COOKIE['auth']);
   		
   		$user=new User;
   		$result=$user->where("identifier='{$identifier}'")->find();

   		if ($result) {
   			# code...
   					if ($result['token']!=$token) {
   						# code...
   						 // header("Location:app/home/login.php?error_id=4");
   						 exit;
   					}

   					if (time()>$result['timeout']) {
   						# code...
   						 // header("Location:app/home/login.php?error_id=5");
   						  exit;

   					}
   			  		 
                    $_SESSION["userEmail"]=$result['userEmail'];
                    $_SESSION["userId"]=$result['userId'];
                    $_SESSION["username"]=$result['username'];
                  //  success("登陆成功！","../app/home/working.php");
   		}


   }




   // if (!isset($_SESSION['userEmail'])) {
   // 	# code...
   // 	 header("Location:index.php");
   // 	 exit;
   // }



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>天天番茄官方网站</title>
	<link rel="stylesheet" href="css/layout.css">
	<link rel="icon" href="imgs/title.png" type="image/x-icon" />
	<link rel="shortcut icon" href="imgs/title.png">
	<link rel="Bookmark" href="imgs/title.png">
	<script src="js/ajax.js"></script>
	<style>
	#header .ul1 .shouye a
{
	border-bottom: 3px solid #da2826;
	color: #e03938;
}
#container
{
	text-align: center;
}
	#container #banner #list img{
				vertical-align:top;
				border:none;
				width: 1138px;
			}
	#container #banner #list li{
				list-style:none;
				float:left;
			}
			
			#banner{
				width:1138px;
				height:440px;
				/*margin:30 auto 0;*/
				/*margin-left: 60px;*/

				position:relative;
				overflow:hidden;
				display: inline-block;
				text-align: none;
			}
			#list{
				position:absolute;
				top:0;
				/*left:-590px;*/

				height:100%;
			}

			#dot{
				position: absolute;
				bottom: 15px;
				/*width:65px;
				height: 13px;*/
				width:100px;
				height: 20px;
				border-radius: 10px;

				text-align: center;
				font-size: 0;
				left: 50%;
				margin-left: -33px;
				background-color: rgba(0,0,0,.5);
			}
			#dot span{
				width: 12px;
				height: 12;
				padding-top: 12px;
				background: #B7B7B7;
				border-radius: 50%;
				float:left;
				margin: 4px;
				cursor:pointer;
			}
			#dot span.on{
				background:#F40;
			}
			#btn{
				display:none;
			}
			#banner:hover #btn{
				display:block;
			}
			#btn span:hover{
				background-color: rgba(0,0,0,.6);
			}
			#btn span{
				position:absolute;
				
				/*top:50%;*/
				/*margin-top:-18px;*/
				/*width:24px;
				height:36px;*/
				width:50px;
				height:60px;
				background-color: rgba(0,0,0,.3);

				text-align:center;
				line-height:60px;
				color:#fff;
				font-weight:1200;
				cursor:pointer;
				font-size: 36px;
				top: 45%;

			}
			#btn .btn_span1
			{
				/*top: 0px;*/
				left: 0px;
			}

			#btn .btn_span2
			{
				/*top: 0px;*/
				left: 1088px;
			}
			#btn span:nth-child(2){
				right:0;
			}



#container .ddt img{
	width: 100%;
}

#container #banner #list img
{
	
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
	ajax("action/indexAction.php",fc);	
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
</script>
</head>
<body>
	<header id="header">
		<ul class="ul1">
			<li class="logo" onclick="location.href = 'index.php'"><img src="imgs/19.png" alt=""></li>
			<li class="shouye"> <a href="index.php">首页</a> </li>
			<li ><a href="app/home/tour.php">快速上手</a></li>
			<li ><a href="app/home/club.html">番茄工作法</a></li>
			<li><a href="app/home/community.php">社区</a></li>
			<li id="workpl" style="display: none;"><a href="app/home/working.php" >工作台</a></li>
		</ul>
		<ul class="ul2" id="loginicon" style="display: none;">
			<li><a href="app/home/login.php" >登录</a></li>
			<li><a href="app/home/register.php">注册</a></li>
		</ul>

		<?php 
		if (isset($_SESSION['userId'])) {
			# code...
			echo '<ul class="ul2">
		
			<li class="register" id="set"><a href="">设置</a>
			<div class="subu" id="subu">
						<div><a href="app/home/resetPassword.php">账户设置</a></div>
						<div ><a href="app/home/resetPassword.php">任务设置</a></div>
						<hr>
						<div class="no3"  id="exit"><a href="action/resetAction.php">退出</a></div>
			</div>
	
			</li>
			
		</ul>';
		}
		 ?>
	</header>
	<div class="clearfix"></div>

	<div id="container">
		<div class="ddt">
			<img src="imgs/ddt.png" alt="">
		</div>
		
			<div id='banner'>
				<ul id='list'>
					<li><a href=""><img src="imgs/5.jpg" alt=""></a></li>
					<li><a href=""><img src="imgs/1.jpg" alt=""></a></li>
					<li><a href=""><img src="imgs/2.jpg" alt=""></a></li>
					<li><a href=""><img src="imgs/3.jpg" alt=""></a></li>
					<li><a href=""><img src="imgs/4.jpg" alt=""></a></li>
					<li><a href=""><img src="imgs/5.jpg" alt=""></a></li>
					<li><a href=""><img src="imgs/1.jpg" alt=""></a></li>
				</ul>
				<div id='btn'>
					<span class="btn_span1">&lt;</span>
					<span class="btn_span2">&gt;</span>
				</div>
				<div id='dot'>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		
	</div>
	
<script src='js/timeMove.js'></script>
		<script type="text/javascript">
			var aSpan = dot.getElementsByTagName('span');
			var aBtn =  btn.getElementsByTagName('span');
			var aLi = list.getElementsByTagName('li');
			
			var num = 0;
			var nowTime = 0;

			aSpan[num].className = 'on';
			list.style.width = 1138 * aLi.length + 'px';

			//小圆点
			for (var i=0;i<aSpan.length;i++ )
			{
				aSpan[i].index = i;
				aSpan[i].onclick = function(){
					num = this.index;
					for (var i=0;i<aSpan.length;i++ )
					{
						aSpan[i].className = '';
					}
					this.className = 'on';

					move( list , {left:-1138*(num+1)} , 1000 , 'bounceOut' );
				};
			 };
			
			//根据索引值来判断左右按钮
			for ( var i=0;i<aBtn.length;i++ )
			{
				aBtn[i].xyz = i;
				aBtn[i].onclick = function(){
					if ( new Date() - nowTime > 1100 )
					{
						nowTime = new Date();
						if( this.xyz ){ //右按钮
							play();
						}else{ // 左按钮
							num--;
							if( num <0 )
							{
								list.style.left = -1138*(aLi.length-1) + 'px';
								num = aSpan.length-1;
							}
							for (var i=0;i<aSpan.length;i++ )
							{
								aSpan[i].className = '';
							}
							aSpan[num].className = 'on';
							console.log( num );
							move( list , {left:-1138*(num+1)} , 1000 , 'bounceOut');
						};
					};
				};
			};



			var timer = setInterval(play,2500);
			banner.onmouseover = function(){
				clearInterval(timer);
			};
			banner.onmouseout = function(){
				timer = setInterval(play,2500);
			};
			function play(){
				num++; // 先num++ 后判断
				if ( num == aSpan.length )
				{
					list.style.left = 0 + 'px';
					num=0;
				};
				for (var i=0;i<aSpan.length;i++ )
				{
					aSpan[i].className = '';
				}
				aSpan[num].className = 'on';
				console.log( num );
				move( list , {left:-1138*(num+1)} , 1000 , 'bounceOut');
			};

		</script>







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