var resultcontent=document.getElementById('resultcontent');
	var a=resultcontent.getElementsByClassName('tr');	
	var time=document.getElementsByClassName('time');
	var start=document.getElementById('start');
	var dele=document.getElementById('delete');
	var add=document.getElementById('add');
	var flag=1;
	var record1=document.getElementsByClassName('record1');
	var  interval;

// if (start.style.backgroundColor=='green') {
		start.onclick=function()
		{	

			
			if (flag==1 && start.style.backgroundColor=='green')
			 {

								add.style.pointerEvents='none';
								dele.style.pointerEvents='none';
					for(i=0;i<time.length;i++)
					{	
						time[i].index=i;
						if (time[i].style.display=='block' ) 
						{

								var x=time[i].innerHTML;
								 //var interval;

						      
						        var d = new Date("1111/1/1,0:" +x );
						       // alert(d)

						        time[i].index=i;
						        var cc= a[i].id
						       
						        interval = setInterval(function() 
						            {
						                 var m = d.getMinutes();
						                var s = d.getSeconds();
						         	var time=document.getElementsByClassName('time');
						         	

						                 //alert(m+','+s);
						                m = m < 10 ? "0" + m : m;
						                s = s < 10 ? "0" + s : s;
						                 // qq.innerHTML = m + ":" + s;
						                 for(i=0;i<time.length;i++)
						         		{	
						         		// if (time[i].style.display=='block') 
						         		// {
						         		time[i].innerHTML = m + ":" + s;
						         		// }
						         		}

											

						                if (m == 0 && s == 0) 
						                {
						                    clearInterval(interval);

						                     
											getrecord(cc);
											 getfqnum(cc);
											
												
												add.style.pointerEvents='auto';
												dele.style.pointerEvents='auto';

											flag=1;
											
											// document.onclick=function()
											// {
											// 	self.location.reload();
											// }
											
												
											 
											
						                     return ;

						                }
						                d.setSeconds(s - 1);

						                flag++;

						            }, 1000);
						//  alert(time[i].innerHTML);



						        
							}
							else if (start.style.backgroundColor=='green') {
										a[i].style.pointerEvents='none';
							}
							
								
								
							


						 }

				 	
						
				 }
				 else
				 {
				 	return false;
				 }

				 // var yes=document.getElementsBytagName('script');
				 // for(k=0;k<yes.length;k++)
				 // {
				 // 	if (yes[k].src=='../../js/listclick.js') {
				 // 			alert('yes');
				 // 	}
				 // }

				 // var yes=document.getElementById('click');


			}

// }

function stop()
{
	if (start.style.backgroundColor=='green') {
	if (confirm('你确定要丢弃这个番茄吗？')) {
		clearInterval( interval);
		for(i=0;i<a.length;i++)
		{
			if (time[i].style.display=='block') 
			{
				var cc= a[i].id;
			}
			var cc= a[i].id;
			var yes=i;

			a[i].style.pointerEvents='auto';
			ajax("../../action/getfqnum.php?dataId="+cc,fl);
			function fl(num)
			{
				time[yes].innerHTML=num+':00';
				// alert(num);
			}
			
		}
		
		add.style.pointerEvents='auto';
		dele.style.pointerEvents='auto';

		flag=1;
		self.location.reload();
	}
	else
	{
		return false;
	}



}
}
			

function what(kk)
{
	for(k=0;k<record1.length;k++)
	{
		if (record1[k].style.display=='block') 
		{
				
				record1[k].innerHTML=kk;
				flag=1;
				self.location.reload();
				
		}
	}


}

			function getfqnum(cc)
	{
	ajax("../../action/getfqnum.php?dataId="+cc,fk);
}
											function fk(b)
											{
												for(i=0;i<time.length;i++)
								         		{	
								         			time[i].innerHTML=b+':00';
								         		// }
								         		}
											}
						                    function getrecord(cc)
											{
												ajax("../../action/getrecord.php?dataId="+cc,fn);
											}
											function fn(d)
											{
												var kk=d;
												 what(kk)

											}

// what();
// function checkdelete()
// {
// 	if (dele.href=="") {
// 		alert('请选择事件！')
// 	}
// }
function fc(a)
	{	
		
		var id=document.getElementById('userId');
		 id.value=a;

		
	}
	function tt(fn)
	{
	// var username=document.getElementById('loginicon').value;
	ajax("../../action/getId.php",fn);	
	}
	
	tt(fc);


	function fe(a)
	{	
		
		var id3=document.getElementById('userId3');
		 id3.value=a;
	
		
		
	}

	tt(fe);