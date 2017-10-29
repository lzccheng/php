var resultcontent=document.getElementById('resultcontent');
	var a=resultcontent.getElementsByClassName('tr');
	var del=document.getElementById('delete');
	var start=document.getElementById('start');
	var time=document.getElementsByClassName('time');
	var record1=document.getElementsByClassName('record1');
		var select1=resultcontent.getElementsByClassName('select1');
	function listclick()
	{
		// var b=tt;
		// if (b==1) {
		// 	return false;
		// 	//exit;
			// }
			for(i=0;i<a.length;i++)

			{

				a[i].index=i;
				a[i].onclick=function()
				{
					// var value1=a[i].cells[0].getElementsName('input')[0].value;

						
						var value=this.id;
						//var result=select1[this.index].value;
						select1[this.index].onchange=function()
						{
							 //alert(value);
							 var opt=this.options[this.options.selectedIndex].value;
							// alert(opt)
							
							ajax("../../action/changeresult.php?dataId="+value+"&result="+opt,fp);
						}

						del.href='../../action/deletedata.php?dataId='+value;

						del.onclick=function(){
							return confirm('你确定删除此事项吗？');
						}
						for(i=0;i<a.length;i++)
						{
							a[i].style.color='#555';
							time[i].style.display='none';
							// record[i].index='';
							record1[i].style.display='none';
						}
						this.style.color='red';
						start.style.backgroundColor='green';

						time[this.index].style.display='block';
						// record[this.index].index='12';
						record1[this.index].style.display='block';
						var timeid=time[this.index].id='12';

					// alert(value)

					// this.style.color='red';
				
					// alert('../../action/delDatas.php');
					
					// alert(value1);
						
						
							// if (time[i].style.display=='block') 
							// {
							// 	var cc= a[i].id;
							// }
							
							//	getfqnum(value);

							


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
	// function aler()
	// {
	// 	alert(del.href);
	// }
	listclick();
	//  function getresult(dd)

	// {
	// 	alert(dd)
	// 	// ajax("../../action/changeresult.php?dataId="+cc+"&& result="+dd,fn);
	// 	}
function fp(d)
		{
			if (d) {
				self.location.reload();
				// alert('ok');
			}
			else
			{
				alert('this option failure');
			}
		}




