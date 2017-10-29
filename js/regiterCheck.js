	function isemail(str) 
		{ 
		var result=str.match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/); 
		if(result==null) return false; 
		return true; 
		} 
		function checkEmail()
		{
			var nickEmail=document.getElementById('email');
			var span=document.getElementById('emailResult');
			 if (!isemail(nickEmail.value)) {
				span.innerHTML='*请输入正确的邮箱地址';
				return 0;
			}
			else {
				
				// span.innerHTML="<div style='color:green;'>输入正确</div>";
				// return 1;
					// var userEmail=document.getElementById('email').value;
			 ajax("../../action/ajaxAction.php?userEmail="+nickEmail.value,fs);	
				return 1;
				
			}

		}

		function fs(a)
		{	
		var span=document.getElementById('emailResult');
		
			span.innerHTML=a;
			
		}
		// function check()
		// {if (a=="<div style='color:red;'>该用户已被注册</div>") 
		// var userEmail=document.getElementById('email').value;
		// ajax("ajax.php?userEmail="+userEmail,fs);	
		// }

		function checkpasswd()
		{
			var passshow=document.getElementById('passResult');
			var password=document.getElementById('password').value;
			 if (password.length>20 || password.length=='') {
				passshow.innerHTML='*密码不为空且不能超过20位';
				return 0;
			}
			else{
				passshow.innerHTML=" ";
				return 1;
			}

		}
		function checkName()
		{
			var nameResult=document.getElementById('nameResult');
			var nickname=document.getElementById('nickname').value;
			 if (nickname.length=='') {
				nameResult.innerHTML='*用户名不能为空';
				return 0;
			}
			else{
				nameResult.innerHTML=" ";
				return 1;
			}

		}

		function onsubmit1()
		{
			if (checkpasswd() && checkName() && checkEmail() && ch()) {
				// alert('ok');
				return true;
			}
			else{
				alert('请按照要求填值');
				return false;
			}


		}

		function ch()
		{	
		var yonghu=document.getElementById('yonghu');
		
			if(yonghu.innerHTML=="该用户已被注册")
			{
				return 0;
			}
			else if (yonghu.innerHTML=="输入正确") 
			{
				return 1;
			}
			
		}
		
		