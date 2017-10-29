<?php 
   include "../config.inc.php";
    $ids=$_GET["summary_id"]; // 取得传递过来的id值

     $summary=new summary;
    $result=$summary->where("summary_id in({$ids})")->del();
    if ($result) {
    	// jump("../app/home/working.php","删除成功");
         header("Location:../app/home/working.php?delTip=1");
    }else{
    	error("删除失败","../app/home/working.php");
    }









 ?>