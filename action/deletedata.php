<?php 
    // 取得传递过来的id串
    include "../config.inc.php";
    $ids=$_GET["dataId"]; // 取得传递过来的id值

    $news=new userDatas;
    $result=$news->where("dataId in({$ids})")->del();
    if ($result) {
    	// jump("../app/home/working.php","删除成功");
         header("Location:../app/home/working.php");
    }else{
    	error("删除失败","../app/home/working.php");
    }
 ?>