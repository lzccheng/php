<?php 
   class User extends Table
   {
   	  function login($userEmail,$password){
        $result=$this->where("userEmail='{$userEmail}'")->find();
        if (isset($result)) {
           $userPass=$result["password"];
           if (md5($password)==$userPass) {
              return '1';
           }else{
              return '3';
           }
        }else{
           return '2';
        }
      }

     
   	 
   }


 ?>