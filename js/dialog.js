			var addbtn=document.getElementById('add');
			var planAdd=document.getElementById('planAdd');

			var x=document.getElementById('x');
			var planClose=document.getElementById('planClose');

			var black=document.getElementById('black');

			addbtn.onclick=function()
			{
					
				var dialog=document.getElementById('dialog');
					dialog.style.display='block';

					startMove(black,{opacity:0},

					function(){
			    	// dialog.style.top=45+'px';
					 startMove(black,{opacity:95})
					
					});	


					startMove(dialog,{top:-500,opacity:0},

					function(){
			    	// dialog.style.top=45+'px';
					 startMove(dialog,{top:55,opacity:100})
					
				});	
				black.style.display='block';
				
			}
			function closeDialog($dialog)
			{
				var dialog=document.getElementById($dialog);
					dialog.style.display='block';
					startMove(dialog,{top:55,opacity:100},

					function(){
			    	// dialog.style.top=45+'px';
					 startMove(dialog,{top:-500,opacity:0})
					
				});

				startMove(black,{opacity:95},

					function(){
			    	// dialog.style.top=45+'px';
					 startMove(black,{opacity:0})
					
					});
					black.style.display='none';		
			}


			// x.onclick=closeDialog();
			planAdd.onclick=function()
			{
				var dialog2=document.getElementById('dialog2');
					dialog2.style.display='block';

					// startMove(black,{opacity:0},

					// function(){
			  //   	// dialog.style.top=45+'px';
					//  startMove(black,{opacity:95})
					
					// });	


					startMove(dialog2,{opacity:0},

					function(){
			    	// dialog.style.top=45+'px';
					 startMove(dialog2,{opacity:100})
					
				});	
				// black.style.display='block';
			}


			function closeDialog2($dialog)
			{
				var dialog2=document.getElementById($dialog);
					
					startMove(dialog2,{opacity:100},

					function(){
			    	// dialog.style.top=45+'px';
					 startMove(dialog2,{opacity:0})
					
				});

					dialog2.style.display='none';
			
			}




function fp(a)
{	
	
alert(a);	
	
	// if (a=='1') {
		
	// 	work.style.display='block';
	// }
	// else{
		
	// 	work.style.display='none';
	// }
	
}						
					
	function pp()
	{
	// var username=document.getElementById('loginicon').value;
	ajax("../../action/getOutOfPlan.php",fp);	
	}
	


	// function 
