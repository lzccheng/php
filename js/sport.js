function startMove(obj,json,fn)
		{ 
					
				clearInterval(obj.timer);
				var icur=null;
				
				obj.timer=setInterval(function(){
						
					var flag=true;
					for( var att in json)
					{
						if(att=='opacity')
						{
							icur=Math.round(parseFloat(getStyle(obj,'opacity')*100));
						}
						else
						{
							icur=parseInt(getStyle(obj,att));
						}
						

						var speed=(json[att]-icur)/10;
						speed=speed>0? Math.ceil(speed) : Math.floor(speed);   
						

						if(icur!=json[att])
						{
							flag=false;
						
						
						
						}

						if(att=='opacity')
						{
								obj.style[att]=(icur+speed)/100;
								obj.filtet="alpha(opacity:"+icur+speed+")";
						}
						else
						{
							obj.style[att]=icur+speed+'px';
						}
					console.log(flag);
					}
				
					if(flag)
					{
							clearInterval(obj.timer);
							if( fn )
							{
								fn();
							}
					}
					
				},10)
			}
				
					
					

			function getStyle(abj,attr)
			{
				if(abj.currentStyle)
				{
					return  abj.currentStyle[attr];
				}
				else
				{
					return	getComputedStyle(abj,false)[attr];
				}
		   }