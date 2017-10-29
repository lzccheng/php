<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" media="screen">
	<script type="text/javascript" src="../../js/jquery.js"></script>
	 <script type="text/javascript" src="../../js/tendina.js"></script>
	 <script type="text/javascript" src="../../js/common.js"></script> 
	 <script src="../../js/ajax.js"></script>
	 
</head>
<body>
<input type="hidden" name="test" id="test" >
<!-- 	<div class="page-header"> -->
  	
<!-- 	</div> -->

	
	

<div id="divtable"> 
	



</div>
	
	
</body>
 <script>
                        function fa(a)
                        {   
                            var divtable=document.getElementById('divtable');
                            divtable.innerHTML=a;
                            
                           
                            
                            
                        }
                        function pagejs(num)
                        {
                        	var test=document.getElementById('test');
                        	test.value=num;
                        // var username=document.getElementById('loginicon').value;

                        ajax("getAll.php?page="+num,fa);  
                        }

                         pagejs(1);
                  

                     //查看

                    function fcha(a)
                        {   
                            var divtable=document.getElementById('divtable');
                            divtable.innerHTML=a;
                       
                        }
                        function pagecha(userId,num)
                        {
                        // var username=document.getElementById('loginicon').value;
                        ajax("getdatas.php?page="+num+"&userId="+userId,fcha);  
                        }
                      
                    function del(id)
                    {
                     if (confirm('are you sure?')) {
                            ajax("del.php?userId="+id,fdel);  
                     } ;
                        
                    }
                    function fdel(j)
                    {
                       self.location.reload();
                    }

                    function backTo()
                    {	
                    	var test=document.getElementById('test');
                    	pagejs(test.value);
                    }
                </script>
</html>