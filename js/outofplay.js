var playevent5=document.getElementById('playevent');
	var b=playevent5.getElementsByClassName('tr2');
	var del3=document.getElementById('delete3');
	var start=document.getElementById('start');

	// var time=document.getElementsByClassName('time');
	// var record1=document.getElementsByClassName('record1');
	// 	var select1=resultcontent.getElementsByClassName('select1');
	function playevent1()
	{
		// var b=tt;
		// if (b==1) {
		// 	return false;
		// 	//exit;
			// }
			
			for(var k=0;k<b.length;k++)

			{
				

				b[k].index=k;
				b[k].onclick=function()
				{
					//var value1=a[i].cells[0].getElementsName('input')[0].value;
	 			
						
						var value=this.id;
					
					del3.href='../../action/deletePlan.php?outofplanid='+value;

						del3.onclick=function(){
							return confirm('你确定删除此事项吗？');
						}
						
						//alert('bh');
					// alert(value)

				
				
					// alert('../../action/delDatas.php');
					
					// alert(value1);
						
						
							// if (time[i].style.display=='block') 
							// {
							// 	var cc= a[i].id;
							// }
							
							//	getfqnum(value);

						for(var i=0;i<b.length;i++)
						{
							b[i].style.color='#555';
							// time[i].style.display='none';
							// record[i].index='';
							//record1[i].style.display='none';
							//b[i].style.backgroundColor='#fff';
						}	
 						this.style.color='red';
 						//this.style.backgroundColor='#eee';

							//a[i].style.pointerEvents='auto';
							// function getfqnums(dd)
							// {
							// 	ajax("../../action/getfqnum.php?dataId="+dd,ft);
							// }
							// function ft(o)
							// {
							// 	document.getElementById('12').innerHTML=o+':00';

							// }
							// getfqnums(value);

				}
				

		}


	}


	playevent1();


		var clearNull=document.getElementById('clearNull');
		var summary_id=document.getElementById('summary_id');									
		clearNull.onclick=function()
		{	
			if(confirm('你确定清空今日总结你内容吗？')){
				if (summary_id.value!='') {
					clearNull.href="../../action/delsummary.php?summary_id="+summary_id.value;
				}

			}
		}