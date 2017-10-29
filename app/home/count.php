
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>天天番茄官方网站</title>
	<link rel="shortcut icon" href="../../imgs/title.png">
	<link rel="Bookmark" href="../../imgs/title.png">
	
	<link rel="stylesheet" href="../../css/layout.css">
<!-- 	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="../../css/calendar.css">
	<script src="../../js/ajax.js"></script>
	<script>	
 
 var format = function(time, format)

{
var t = new Date(time);
var tf = function(i){return (i < 10 ? '0' : '') + i};
return format.replace(/yyyy|MM|dd|HH|mm|ss/g, function(a){
switch(a){
case 'yyyy':
return tf(t.getFullYear());
break;
case 'MM':
return tf(t.getMonth() + 1);
break;
case 'mm':
return tf(t.getMinutes());
break;
case 'dd':
return tf(t.getDate());
break;
case 'HH':
return tf(t.getHours());
break;
case 'ss':
return tf(t.getSeconds());
break;
}
})
}



	</script>
	<style>
	#header .ul1 .count a
	{
	border-bottom: 3px solid #da2826;
	color: #e03938;
	}
		#container{
	width:100%;
	height: 600px;
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

	#container .re_con
	{
		width: 1230px;
		text-align: center;
		margin: 0 auto;
	} 
	#container .re_con .re_con_left
	{
		/*width: 360px;
		height: 600px;*/
	/*	background: #ccc;*/
		float: left;
		text-align: center;
		padding-left: 20px;
		padding-right: 20px;

	}
	#container .re_con .re_con_right
	{
		width: 800px;
		height: 470px;
		/*background: #abc;*/
		float: left;
		
		margin:20px auto;
		border:solid 1px #E6E5EC;
	box-shadow: 0 6px 12px rgba(0,0,0,0.175);

 
	}
	#demo {
	width: 300px;
	margin: 20px auto;
	border:solid 1px #E6E5EC;
	box-shadow: 0 6px 12px rgba(0,0,0,0.175);
	padding: 20px 30px;
}
#demo hr{
	 margin: 12px auto ;
}

/*	#dt {
	margin: 30px auto;
	height: 28px;
	width: 200px;
	padding: 0 6px;
	border: 1px solid #ccc;
	outline: none;
	}*/


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

@media (min-width: 1500px)
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
			<li class="working"> <a href="working.php" >工作台</a> </li>
			<li class="count"><a href="count.php">记录</a></li>
			<li class="record"><a href="javascript:alert('尚未开通')">统计</a></li>
		</ul>
		<ul class="ul2">
			<li class="shequ"><a href="community.php">社区</a></li>
			<li class="set" id="set"><a href="">设置</a>
			<div class="subu" id="subu">
						<div><a href="resetPassword.php">账户设置</a></div>
						<div ><a href="resetPassword.php">任务设置</a></div>
						<hr>
						<div class="no3"  id="exit"><a href="../../action/resetAction.php">退出</a></div>
			</div>
	
			</li>
			
		</ul>
	</header>
	<div class="clearfix"></div>
	<div id="container">
		
		<div class="re_title" >
			<h1 style=" ">工作记录<small style="">记录你每天的点点滴滴</small></h1>
		</div>
		<div class="re_con">
			<div class="re_con_left">
				<div id="demo">
				  <h2>欢迎你! <?php 
				  session_start();
				  echo  $_SESSION["username"]

				   ?> 	 </h2>
				  <hr >
				  <div id="ca"></div>
				  <!-- <input type="text" id="dt" placeholder="trigger calendar">
				  <div id="dd"></div> -->
				</div>
				
			</div>
			<div class="re_con_right"  >
			<table   style=" text-align: center;background:#eee;border:solid 1px #000;border-bottom: none;	border-collapse: collapse;">
			<tr style="color:#666;height: 40px;">
			<td width="300"  >事件</td>
				<td width="100" >预计番茄数</td>
				<td width="200" >
				<font >番茄钟记录</font>	 
				
										
				</td>
				<td width="120">番茄钟时长</td>
				<td width="80">结果</td>
			</tr>
			</table >

			<table id="showdatas" border="1" style=" text-align: center;	border-collapse: collapse;">
				


			</table>
			
			
			</div>
		</div>


	</div>
	


	<footer > <!-- style="position:fixed;bottom: 0px;" -->
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
	<script src="../../js/jquery.js"></script> 
	<script src="../../js/calendar.js"></script> 
	<script>
	var dat;
    $('#ca').calendar({
        width: 320,
        height: 320,
        data: [
			{
			  date: '2015/12/24',
			  value: 'Christmas Eve'
			},
			{
			  date: '2015/12/25',
			  value: 'Merry Christmas'
			},
			{
			  date: '2016/01/01',
			  value: 'Happy New Year'
			}
		],
        onSelected: function (view, date, data) {
            console.log('view:' + view)
  //var haha=document.getElementById('haha');
             dat=date;
            // alert('date:' + date);
           var tt= format(dat, 'yyyy-MM-dd');
         
          // haha.innerHTML=tt;
         // alert(tt);
           ajax("../../action/getcount.php?date="+tt,fc);
            console.log('data:' + (data || 'None'));
        }
    });


// alert(dat);
 // alert(format("Thu Aug 22 2013 15:12:00 GMT+0800", 'yyyy-MM-dd HH:mm:ss');)

  //   $('#dd').calendar({
  //       trigger: '#dt',
  //       zIndex: 999,
		// format: 'yyyy-mm-dd',
  //       onSelected: function (view, date, data) {
  //           console.log('event: onSelected')
  //       },
  //       onClose: function (view, date, data) {
  //           console.log('event: onClose')
  //           console.log('view:' + view)
  //           console.log('date:' + date)
  //           console.log('data:' + (data || 'None'));
  //       }
  //   });
function fc(a)
	{	var showdatas=document.getElementById('showdatas');
		 // if (a==" "||a==null) {
			//showdatas.innerHTML='没有查询到相关的数据！';
			// console.log(a);
		// 	alert(a+'没有查询到相关的数据！');
		//  }
		// else
		// {
			showdatas.innerHTML=a; 

			
		 // }
		
	
		
		
	}
	// function getcount()
	// {
	// // var username=document.getElementById('loginicon').value;
	// ajax("../../action/getcount.php?date="+,fc);	
	// }
	function nowtime()
	{
		var t = new Date();
	//alert(t);
	var nowtime=format(t, 'yyyy-MM-dd');
	ajax("../../action/getcount.php?date="+nowtime,fc);
	}
	nowtime();

</script>
</body>
</html>