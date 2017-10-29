<?php 
   class admin extends Table
   {
   	  
   	   	  function login1($adminName,$password){
        $result=$this->where("adminName='{$adminName}'")->find();
        if (isset($result)) {
           $userPass=$result["password"];
           if ($password==$userPass) {
              return true;
           }else{
              return false;
           }
        }else{
           return false;
        }
      }
     
   	 
   }





 ?>