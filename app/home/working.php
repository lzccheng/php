<?php 
// session_start();
// if(!isset($_SESSION["userEmail"]))
// {
// 	header("Location:login.php");
// }
include "../../action/isLogin.php";

 $id=$_SESSION['userId'];
 $user6=new user;
 $result6=$user6->where("userId='{$id}'")->find();

 if (!$result6['power']==1) {
 	echo "<script>alert('抱歉你的权限不够！不能查看工作台。具体联系管理员：18926363429');location.href='../../index.php';</script>";
 }

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
	<link rel="stylesheet" href="../../css/working.css">
	<script src="../../js/ajax.js"></script>
	<script src="../../js/sport.js"></script>
	<script>
	


	// function getDatas()
	// {
	// 	ajax("../../action/getDatas.php",fn);
	// }
	// function fn(a)
	// {	
	// 	if (a) {
	// 		var resultcontent=document.getElementById('resultcontent');
	// 			resultcontent.innerHTML=a;

			
	// 	}
	// 	else 
	// 	{
				
			
	// 			resultcontent.innerHTML="<tr ><td width='600'> </td><td width='120'></td><td width='300'> </td><td> </td></tr>";
		
	// 	}
		
	// }
	// getDatas();



	  
// window.onload=function ()
// {

//  var resultcontent=document.getElementsByClassName('tr')[0];
//  resultcontent.onclick=function ()
//  {
//  	alert('');
//  }
// }
	 // tr.style.backgroundColor='red';
	 // var tr=resultcontent.getElementsBytagName('tr');
	 
	 // for (var i = 0; i > tr.length ; i++) {
	 // 	tr[i].onmouseover=function()
	 // 	{	
	 // 		tr[i].style.color='red';



	 // 	}

	 	
	 // }

// var a=document.getElementsByClassName('tr')[0]
// 	a.onmouseover=function()
// 	{
// 		alert('');
// 	}
            function startTime()     
            {     
                var today=new Date();
                var yyyy = today.getFullYear();  
                var MM = today.getMonth()+1;    
                var dd = today.getDate(); 
                var hh=today.getHours();  
                var mm=today.getMinutes(); 
                var ss=today.getSeconds();
              
                MM=checkTime(MM);  
                dd=checkTime(dd);  
                mm=checkTime(mm);     
                ss=checkTime(ss);      
                var day;  
                if(today.getDay()==0)   day   =   "星期日 "   
                if(today.getDay()==1)   day   =   "星期一 "   
                if(today.getDay()==2)   day   =   "星期二 "   
                if(today.getDay()==3)   day   =   "星期三 "   
                if(today.getDay()==4)   day   =   "星期四 "   
                if(today.getDay()==5)   day   =   "星期五 "   
                if(today.getDay()==6)   day   =   "星期六 "   
                document.getElementById('nowDateTimeSpan').innerHTML=yyyy+" 年 "+MM +" 月 "+ dd +"   号&nbsp;&nbsp;&nbsp;&nbsp;" + hh+" : "+mm+" : "+ss+"&nbsp;&nbsp;&nbsp;&nbsp; " + day;     
                setTimeout('startTime()',1000);//每一秒中重新加载startTime()方法   
            }     
              
            function checkTime(i)     
            {     
                if (i<10){  
                    i="0" + i;  
                }     
                  return i;  
            }  

	</script>

	<style>
	
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
			<li class="register" id="set"><a href="">设置</a>
			<div class="subu" id="subu">
						<div><a href="resetPassword.php">账户设置</a></div>
						<div ><a href="resetPassword.php">任务设置</a></div>
						<hr>
						<div class="no3"  id="exit"><a href="../../action/resetAction.php">退出</a></div>
			</div>
	
			</li>
			
		</ul>
	</header>

	<div id="container" >
		<div class="blank" >
			<div class="day">
				<span class="span1">今天</span>
				<span class="span2" >come on</span>
			</div>

		</div>
		<div id="nowDateTimeSpan" class="jstime">
			<!-- <?php 
			//echo date("Y年m月d号 H时i分s秒",time()) 

			?> -->
		</div>
		<div class="plan">
			<div class="ok">
				<!-- <div class="ok_header" ></div> -->
				<table  style="border: 1 solid #000;">
					<tr style=" height: 48px;background: #F9F9F7;font-size:21px;color: #555">
						<td colspan="4" style="padding-left: 3.2%;font-weight: bold;">今日待办

						<span class="curd  add" id="add"  >添加</span>
						<a href="" id="delete"   style="color: #fff;" ><span class="curd del">删除</span></a>
						</td>

					</tr>
					<tr style="/*color:#e03938;*/color:#666;height: 40px;">
						<td width="600">事件</td>
						<td width="120">预计番茄数</td>
						<td width="300" >
						<font style="margin-left: -60px;">番茄钟记录</font>	 
						<span class="curd  aa add1" id="start">开始</span>
						<span class="curd aa del1" onclick="stop()">中止</span>
										
						</td>
						<td width="">结果</td>
					</tr>
					</table>
					<table id="resultcontent">
					<!-- <tr id="tr" >
						<td width="600"> </td>
						<td width="120"></td>
						<td width="300"> </td>
						<td> </td>
					</tr> -->
					
					<?php 


		// include "../../config.inc.php";
		
		 $userId='';
		 if (isset($_SESSION["userId"])) {
		   	   $userId=$_SESSION["userId"];
		   }
		   $getDatas=new userDatas;
		  
		   $result=$getDatas->where("userId='{$userId}'")->select();

		   $str='';
		   $str2='';
		   if (is_array($result)) {
		   	# code...
		   	foreach ($result as $key => $value) {

		   		
		   			$time=date("Y-m-d",$result[$key]['Date']);
		   			$nowtime=date("Y-m-d",time());
		   			if ($time==$nowtime) {
		   		// 		$str.= "<tr >
							// 	<td>{$value['event']}</td>
							// 	<td>{$value['tofqnum']}</td>
							// 	<td></td>
							// 	<td></td>
							// </tr>";
		   		// 	}<input name='dataId' type='hidden' value='{$result[$key]['dataId']}'>

		   				$str.= "<tr class='tr' id='{$result[$key]['dataId']}' onclick='what()' disabled = 'disabled' >
		   					
							<td width='600' >";
							if ($result[$key]['result']=='1') {
								# code...
								$str.="<span class='img'><img src='../../imgs/right.png' alt=''></span>";
							}

							


							$str.="{$result[$key]['event']}</td>
							<td width='120'>{$result[$key]['tofqnum']}</td>
							<td width='300'>
							<div class='record1' >{$result[$key]['fqrecord']}</div>
							<div class='time' id=''>{$result[$key]['fqlength']}:00</div>
							</td>";
						switch ($result[$key]['result']) {
								case '1':
									# code...
							$str.="<td><select name='result'  id='select1' class='select1' >
								<option selected value='1'>已完成</option>	
								<option  value='2'>待完成</option>	
								<option  value='3'>丢弃</option>	
		
							</select></td>
							 </tr>";
									break;
								case '2':
								$str.="<td><select name='result'  id='select1' class='select1' onchange=''>
								<option  value='1'>已完成</option>	
								<option selected value='2'>待完成</option>
								<option  value='3'>丢弃</option>		
								
		
							</select></td>
							 </tr>";
							 break;
								default:
									# code...
								$str.="<td><select name='result'  id='select1' class='select1' >
								
								<option  value='2'>待完成</option>	
								<option  value='1'>已完成</option>
								<option selected value='3'>丢弃</option>		
								
		
							</select></td>
							 </tr>";
									break;



								
							}	



							// if ($result[$key]['result']=='1') {
							// 	$str.="<td><select name='result'  id='select1' class='select1' onchange=''>
							// 	<option selected value='1'>已完成</option>	
							// 	<option  value='2'>待完成</option>	
								
		
							// </select></td>
							//  </tr>";
							// }
							// else if ($result[$key]['result']=='2') {
							// 	# code...
							// 	$str.="<td><select name='result'  id='select1' class='select1' >
							// 	<option  value='1'>已完成</option>	
							// 	<option selected value='2'>待完成</option>	
								
		
							// </select></td>
							//  </tr>";
							// }
					}

					if ($time < $nowtime && $result[$key]['result']=='2' ) {
						$str2.="<tr class='tr' id='{$result[$key]['dataId']}' onclick='what()' disabled = 'disabled' ><td width='600' >";
							if ($result[$key]['result']=='1') {
								# code...
								$str2.="<span class='img'><img src='../../imgs/right.png' alt=''></span>";
							}
							$str2.="{$result[$key]['event']}</td>
							<td width='120'>{$result[$key]['tofqnum']}</td>
							<td width='300'>
							<div class='record1' >{$result[$key]['fqrecord']}</div>
							<div class='time' id=''>{$result[$key]['fqlength']}:00</div>
							</td>";
							$str2.="<td><select name='result'  id='select1' class='select1' onchange=''>
								<option  value='1'>已完成</option>	
								<option selected value='2'>待完成</option>	
								<option  value='3'>丢弃</option>		
							</select></td>
							 </tr>";

					}



		   		}
		   		echo $str2;
		   		echo $str;
		   }





					 ?>
					
					<tr  >
						<td width="600">  </td>
						<td width="120"> </td>
						<td width="300"> </td>
						<td> </td>
						<!-- <div ></div> -->
					</tr>
					<tr>
						<td> </td>
						<td> </td>
						<td> </td>
						<td> </td>
					</tr>
					
				</table>
				<table  style="border: 1 solid #000;position: relative;"  id="playevent">
					<tr style=" height: 40px;background: #F9F9F7;font-size:21px;color: #555">
						<td colspan="4" style="padding-left: 3.2%;font-weight: bold;">计划外事件

						<span class="curd  add" id="planAdd">添加</span>
						<a href=""  id="delete3"><span class="curd del" >删除</span></a>
						<div id="dialog2">
									<form  role="form" 	 method="post" action="../../action/getOutOfPlan.php" onsubmit="" >
										<div class="dialog_header" style="position: relative;">
											<span class="span1">添加一个计划外事件</span>
											<span class="span2" onclick="closeDialog2('dialog2')" >x</span>
										</div>
									<!-- 	<hr> -->
										<div class="dialog_body">
											 <textarea rows="3" cols="20" name="playevent"  id="playevent"></textarea>
											</div>
											

											<div class="dialog_footer">
												<input type="hidden"  name="userId" id="userId3" value="">
												<input class="del2" onclick="closeDialog2('dialog2')" type="button" value="取消">
												<input class="add2" type="submit" value='提交' >
												
											</div>
									</form>
						</div>
						</td>
						

					</tr>
				
			
					<?php 

						 if (isset($_SESSION["userId"])) {
						   	   $userId=$_SESSION["userId"];
						   }
						  
						   $getplan=new outofplan;
						  
						   $result3=$getplan->where("userId='{$userId}'")->select();
						   	  if (is_array($result3)) {
							   	# code...
							   	foreach ($result3 as $key => $value) {

							   		
							   			$time=date("Y-m-d",$value['create_at']);
							   			$nowtime=date("Y-m-d",time());
							   			if ($time==$nowtime) {
							   				echo '<tr class="tr2" style="height: 40px;"  id="'.$value['outofplanid'].'">
											<td width="90%"  >';
												
												echo $value["playevent"];
											echo '</td><td width=""></td>
										</tr>';




							   				}
							   			}
							   		}

					 ?>
						
				
					<tr>
						<td width="90%" ></td>
						<td></td>
						
					</tr>
					<tr>
						<td></td>
						<td></td>
						
					</tr>
					<tr>
						<td></td>
						<td></td>
						
					</tr>
					
					

				</table>
				<form action="../../action/summaryAction.php" method="post" onsubmit="return confirm('你要保存它吗？')">
				<table  style="border: 1 solid #000;" id="todaySummary">
					<tr style=" height: 40px;background: #F9F9F7;font-size:21px;color: #555">
						<td colspan="4" style="padding-left: 3.2%;font-weight: bold;">SUMMARY 

						<input class="curd  add" id="save" type="submit" value="保存">
							<a href="" id="clearNull"><span class="curd del"  >清空 </span></a>
						</td>

					</tr>
					<tr>
						<td colspan="2">
				
						<?php   	
						$summary=new summary;
						$str='';
						$result5=$summary->where("userId='{$userId}'")->select();
						if ($result5) {
							foreach ($result5 as $key => $value5) {
								$time5=date("Y-m-d",$value5['create_at']);
							   			$nowtime5=date("Y-m-d",time());
							   			if ($time5==$nowtime5) {
							   					$str=$value5['summary'];
							   					echo "<input type='hidden' id='summary_id' name='summary_id' value='{$value5['summary_id']}'>";
							   			}
							}


						}


						 ?>
						<textarea  name="summary" id="todaySummary_textarea" rows="10"  placeholder="Write down your happy memories today"><?php echo $str; ?></textarea>
						</td>

					</tr>
		

				</table>
				</form>
			</div>
		</div>
	
	</div>
	<div id="dialog">
		<form  role="form" 	action="../../action/addAction.php" method="post" onsubmit="return  onsubmit2()" id="regform">
				<div class="dialog_header">
					<span class="span1">添加一个待办事项</span>
					<span class="span2" id="x" onclick=closeDialog('dialog');>x</span>
				</div>
				<div class="dialog_body">
					<table  >
						<tr>
							<td width="" >待办事件
							<input id="testEvent" class="input1" type="text" name="event">
							</td>
						
						</tr>
						<tr>
							<td>预计番茄数
							<input   class="input2" type="text" name="tofqnum" id="fqshu" onkeyup="validate()">
							<span id="fqshuspan" style='color:red;font-size: 12px;margin-left: 18px;'></span>
							</td>
							
						</tr>
						<tr>
							<td>当前一个番茄钟时长
								<select name="fqlength" id="" class="select1">
									<option value="1">1分钟</option>
									<option value="25" selected="">25分钟</option>
									<option value="30">30分钟</option>
									<option value="40">40分钟</option>
									<option value="50">50分钟</option>
									<option value="60">60分钟</option>
									
									
								</select>


							</td>

							
						</tr>
					</table>
				</div>
				

				<div class="dialog_footer">
					<input type="hidden" id="userId" name="userId" value="">
					<input class="add2" type="submit" value='提交'  >
					<span class="del2" onclick=closeDialog('dialog');>取消</span>
				</div>
		</form>
	</div>



	　
	<script>
		function validate(){  
       var reg = new RegExp("^[0-9]*$");  
       var obj = document.getElementById("fqshu"); 
       var objSpan=document.getElementById("fqshuspan") ;
		    if(!reg.test(obj.value)||!/^[0-9]*$/.test(obj.value)){  
		        objSpan.innerHTML="*请输入数字";
		        return 0;
		    } else{
		    	objSpan.innerHTML='';
		    	return 1;
		    
		  }  
		}
		function onsubmit2()
		{
			if (validate()&& pnull() ) {
				// alert('ok');
				return true;
			}
			else{
			
				return false;

			}


		}

		function pnull()
		{
			var text=document.getElementById('testEvent')
			 var obj = document.getElementById("fqshu"); 
			 if (text.value!='' && obj.value!='') {
			 	return 1;
			 }
			 else
			 {
			 	return 0;
			 }
		}
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
		<div id="tail"><span>Copyright © 2017 </span></div>
	</footer>
	<div id="black"></div>
	<script src="../../js/dialog.js"></script>
	<script  src="../../js/listclick.js"></script>
	<script src="../../js/runtime.js"></script>
	<script src="../../js/outofplay.js"></script>



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
</body>
</html>