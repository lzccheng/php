<?php 
 include "../config.inc.php";

if (isset($_GET['info'])) {
	# code...
	session_start();
 	$userId='';
	 if (isset($_SESSION["userId"])) {
	   	   $userId=$_SESSION["userId"];
	   }else{
	   	header("Location:../app/home/login.php");
	   }

	 
	$info=$_GET['info'];
	switch ($info) {
	case '0':

	$user=new user;
	$result=$user->where("userId='{$userId}'")->find();



		$time=date('Y-m-d',$result['create_at']);



		echo '<div class="content">
			  		<table class="table1" width="50%" >
			  			<tr>
			  				<td width="35%" style="text-align: right;">注册邮箱</td>
			  				<td width="45%" style="text-align: left;padding-left: 20px;"> '.$result['userEmail'].'</td>
			  				<td width="25%"> </td>
			  			</tr>
			  			<tr>
			  				<td style="text-align: right;">注册姓名</td>
			  				<td style="text-align: left;padding-left: 20px;">'.$result['username'].'</td>
			  				<td></td>
			  			</tr>
			  			<tr>
			  				<td style="text-align: right;"> 注册时间</td>
			  				<td style="text-align: left;padding-left: 20px;">'.$time.'</td>
			  				<td> </td>
			  			</tr>
			  		</table>

			  	</div>';

	
		break;
	case '1':
		

		echo 	'<div class="re_con">
	
					<form role="form" class="form-horizontal" 	action="" method="post" onsubmit="return  onsubmit1()" id="regform">
					  <div class="form-group">
						<label for="nickname" class="col-sm-1 control-label">原密码 &nbsp;</label>
						<div class="col-sm-4">
							<input id="nickname" onblur="checkName()" name="username" class="form-control input-lg" type="text">
							<span id="nameResult" class="tip" ></span>
						</div>
					  </div>
					  <br>
					  <div class="form-group" >
						<label for="email" class="col-sm-1 control-label">新密码 &nbsp;</label>
						<div class="col-sm-4"  >
							<input id="email" onblur="checkEmail()"  name="userEmail" class="form-control input-lg" type="text">
							<span id="emailResult" class="tip" ></span>
						</div>

					  </div>
					  <br>
					  <div class="form-group">
						<label for="password" class="col-sm-1 control-label">再次确认</label>
						<div class="col-sm-4">
							<input class="form-control input-lg" onblur="checkpasswd()" id="password" name="password" type="password">
							<span id="passResult"  class="tip" ></span>
						</div>
					  </div>
						<br>
					  <div class="form-group">
						<div class="col-sm-offset-1 col-sm-4">
						  <button type="submit" data-loading-text="正在处理..." class="btn btn-default btn-lg btn-block" id="regBtn">保 存</button>
						</div>
						<label class="col-sm-4 error_msg" id="serviceReturn"></label>
					  </div>
					  <br>
					
					  
					</form>

		</div>';
	
		break;
	case '2':
		# code...
	$user=new user;
	$result=$user->where("userId='{$userId}'")->find();



		$time=date('Y-m-d',$result['create_at']);
		echo '<div class="re_con">
	
					<form role="form" class="form-horizontal" 	action="" method="post" onsubmit="return  onsubmit1()" id="regform">
					  <div class="form-group">
						<label for="nickname" class="col-sm-1 control-label">原邮箱 &nbsp;</label>
						<div class="col-sm-4">
							<input id="nickname" disabled name="username" class="form-control input-lg" type="text" value="'.$result['userEmail'].'">
							<span id="nameResult" class="tip" ></span>
						</div>
					  </div>
					  <br>
					  <div class="form-group" >
						<label for="email" class="col-sm-1 control-label">新邮箱 &nbsp;</label>
						<div class="col-sm-4"  >
							<input id="email" onblur="checkEmail()"  name="userEmail" class="form-control input-lg" type="text">
							<span id="emailResult" class="tip" ></span>
						</div>

					  </div>
					  <br>
					  <div class="form-group">
						<label for="password" class="col-sm-1 control-label">原密码</label>
						<div class="col-sm-4">
							<input class="form-control input-lg" onblur="checkpasswd()" id="password" name="password" type="password">
							<span id="passResult"  class="tip" ></span>
						</div>
					  </div>
						<br>
					  <div class="form-group">
						<div class="col-sm-offset-1 col-sm-4">
						  <button type="submit" data-loading-text="正在处理..." class="btn btn-default btn-lg btn-block" id="regBtn">保 存</button>
						</div>
						<label class="col-sm-4 error_msg" id="serviceReturn"></label>
					  </div>
					  <br>
					
					  
					</form>

		</div>';
	
		break;
	
	// default:
	// 	# code...
	// 	break;
}



}








 ?>