<?php 
   include "../config.inc.php";
    $ids=$_GET["outofplanid"]; // 取得传递过来的id值

     $plan=new outofplan();
    $result=$plan->where("outofplanid in({$ids})")->del();
    if ($result) {
    	// jump("../app/home/working.php","删除成功");
         header("Location:../app/home/working.php");
    }else{
    	error("删除失败","../app/home/working.php");
    }




 ?>