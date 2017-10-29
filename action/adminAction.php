<?php 
    include "../config.inc.php";
    if (isset($_POST))
     {
        $username=$_POST["adminName"];
        $userpass=$_POST["password"];
        $username=trim($username);




        $user1=new admin;
        // $result=$user1->login($username,$userpass);
         $findUser=$user1->where("adminName='{$username}'")->find();
        // $findUsername=$user1->field("username")->where("userEmail='{$username}'")->find();

       



        if ($findUser) 
        {
               $pass=$findUser["password"];
               // echo md5($userpass)."__".$userpass."__". $pass;exit;
               if (md5($userpass)==$pass) {


                     $userId=$findUser['adminId'];
        
                                   // $user=new User;
                                    //$result=$user->where("userEmail='{$username}'")->find();

                                   




                                    if(isset($_POST["remember1"])){

                                     $tip='student';

                                    // $identifier=md5($tip . md5($tip . $findUser['userEmail'] ));

                                    // $token= md5(uniqid(rand(), true));

                                    // $timeout=time()+3600*24*7;

                                    // setcookie('auth','{$identifier}:{$token}',$timeout,"/");
                                     
                                        $identifier = md5($tip . md5($findUser['adminName'] . $tip));
                                        // 登录标识
                                        $token = md5(uniqid(rand(), true));
                                        // 登录超时
                                        $timeout = time() + 60 * 60 * 24 * 3;
                                        // 设置cookie
                                        setcookie('auth1', "{$identifier}:{$token}", $timeout,"/");

                                     // setcookie('userEmail',$username,time()+3600*24*30,"/");
                                     // setcookie('password',$userpass,time()+3600*24*30,"/");
                                     // setcookie('remember','1',time()+3600*24*30,"/");
                                        $arr=array('identifier' =>$identifier ,'token'=>$token,'timeout'=>$timeout );

                                        $user2=new admin($arr);

                                        $user2->where("adminId='{$userId}'")->update();

                                        if (!$user2) {
                                            # code...
                                            setcookie('auth1', "{$identifier}:{$token}", time()-3600,"/");
                                            header('Location:../admin.html?error_id=7');
                                        }
                                     






                                 //  echo "ok";
                                     }//else{
                                       // if (isset($_COOKIE['remember'])) {
                                            # code...
                                         // setcookie('remember','1',time()-3600,"/");
                                        
                                         // setcookie('userEmail',$username,time()-3600,"/");
                                         // setcookie('password',$userpass,time()-3600,"/");
                                       // if (isset($_COOKIE['auth'])) {
                                            # code...
                                        //      setcookie('auth', "{$identifier}:{$token}", time()-3600,"/");
                                        // }

                                        

                                     
                                    // echo "no";

                                   //  }







                        session_start();
                    $_SESSION["adminId"]=$userId;
                    $_SESSION["adminName"]=$findUser['adminName'];
                    success("登陆成功！","../app/admin/admin1.php");
                          
                    exit;

               }else{



                  header("Location:../admin.html?error_id=3");exit;


               }
        }


        else
        {
            header("Location:../admin.html?error_id=2");exit;
        }
      

     //  $result1=login($username,$userpass);

     //    $findUser=$user1->where("userEmail='{$username}'")->find();
     //    $findUsername=$user1->field("username")->where("userEmail='{$username}'")->find();
     //    $userId=$findUser['userId'];
        // if ($result1=='1') {
        //  // echo "成功";
     //        session_start();
     //        $_SESSION["userEmail"]=$username;
     //        $_SESSION["userId"]=$userId;
     //        $_SESSION["username"]=$findUsername['username'];
     //        success("登陆成功！","../app/home/working.php");
        // }
     //    else if($result1=='2')
     //    {
            // echo "失败";
            // error("../login.html","登录失败");

     //        header("../app/home/login.php?error_id=2");
        // }
     //    else{
     //        header("../app/home/login.php?error_id=3");
     //    }
    



     }

    
































 // include "../config.inc.php";
 //    if (isset($_POST)) {
 //    	$username=$_POST["adminName"];
 //    	$userpass=$_POST["password1"];
 //        $username=trim($username);
 //         if(isset($_POST["remember1"])){
 //         setcookie('adminName',$username,time()+3600*24*30,"/");
 //         setcookie('password1',$userpass,time()+3600*24*30,"/");
 //         setcookie('remember1','1',time()+3600*24*30,"/");
 //     //  echo "ok";
 //         }else{
 //           // if (isset($_COOKIE['remember'])) {
 //                # code...
 //             setcookie('remember1','1',time()-3600,"/");
            
 //             setcookie('adminName',$username,time()-3600,"/");
 //             setcookie('password1',$userpass,time()-3600,"/");

         
 //        // echo "no";

 //         }






 //        $user1=new admin;
 //    	$result=$user1->login1($username,$userpass);
 //        // $findUser=$user1->where("userEmail='{$username}'")->find();
 //        // $findUsername=$user1->field("username")->where("userEmail='{$username}'")->find();
 //        // $userId=$findUser['userId'];
 //    	if ($result) {
 //    		// echo "成功";
 //            session_start();
 //            $_SESSION["adminName"]=$username;
 //            // $_SESSION["userId"]=$userId;
 //            // $_SESSION["username"]=$findUsername['username']; 
 //            success("登陆成功！","../app/admin/index.html");
 //    	}else{
 //    		// echo "失败";
 //    		// error("../login.html","登录失败");
 //            error("登陆失败！");
 //    	}
 //     }

    




 ?>