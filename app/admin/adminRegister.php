<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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


</style>
</head>

<body>

<div id="container" >
	<div class="re_con">
	
			<form role="form" class="form-horizontal" 	action="../../action/registerAction.php?ttip=1" method="post" onsubmit="return  onsubmit1()" id="regform">
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
				  <button type="submit" data-loading-text="正在处理..." class="btn btn-default btn-lg btn-block" id="regBtn">添 加</button>
				</div>
				<label class="col-sm-4 error_msg" id="serviceReturn"></label>
			  </div>
			  <br>
			
			  
			</form>

		</div>
</div>

</body>
</html>