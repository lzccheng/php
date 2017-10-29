<?php 
// include "../../config.inc.php";
// $user=new userdatas;
// $result1=$user->where("userId='{$_GET['userId']}'")->select();

// if ($result1) {
// 	# code...
// 	 $page=new Page1($user);
//   $nowPage=$_GET['page'];
//   $pageSize=6;
//    $result=$page->showPage($nowPage,$pageSize,$_GET['userId']);


// 	echo "              <table  width='952' style='text-align: center;'  >
//                       <tr style='height: 40px !important;background-color:#2B3946 !important;color: #fff;'  >
//                           <th width='80'>数据ID</th>
//                           <th width='270'>事件</th>
//                            <th width='300'>预计番茄数</th>
//                             <th width='200'>记录</th>
//                              <th width='152'>结果</th>

//                       </tr>";
//                       foreach ($result as $key => $value) {
//                       	# code...
//                       	echo "<tr>
//                           <td>{$result[$key]['dataId']}</td>
//                           <td>{$result[$key]['event']}</td>
//                           <td>{$result[$key]['tofqnum']}</td>
//                           <td>{$result[$key]['fqrecord']}</td>
//                           <td>{$result[$key]['result']}</td>
//                       </tr>";


//                       }
                       
               
//                echo "   </table>";
//                  echo "<div style='text-align:right;font-size:12px;color:#333;margin-top:15px; margin-right:40px;'>";
// 	          $page->showNav();
// 	          echo "</div>";


// }else
// {
// echo " <table  width='952' style='text-align: center;'  >
//                       <tr style='height: 40px !important;background-color:#2B3946 !important;color: #fff;'  >
//                           <th width='80'>数据ID</th>
//                           <th width='270'>事件</th>
//                            <th width='300'>预计番茄数</th>
//                             <th width='200'>记录</th>
//                              <th width='152'>结果</th>

//                       </tr><tr style='font-size:32px;'><td colspan='5'>未找到数据</td></tr>";
// }
include "../../config.inc.php";
if (!isset($_GET['userId'])) {
  header("Location:addAdmin.php");
  exit;
}




$userdatas=new userdatas;
// $result=$user->select();
$count=$userdatas->getSelectRow();

 $page=new Page5 ($count, 5, '', true,$_GET['userId']); //id=5&cid=6&user=admin

$result1=$userdatas->where("userId='{$_GET['userId']}'")->limit("{$page->limit}")->select();

echo '<table class="table table-striped" style="text-align:center;  ">';
  echo '<caption ><h2 style="font-family: "Microsoft YaHei";" >用户数据</h2> <button type="button" class="btn btn-info" onclick="backTo()">返回</button></caption>';
  echo "           
                      <tr style='height: 40px !important;background-color:#2B3946 !important;color: #fff;'  >
                          <th width='80' style='text-align:center;'>数据ID</th>
                          <th width='270' style='text-align:center;'>事件</th>
                           <th width='300' style='text-align:center;'>预计番茄数</th>
                            <th width='200' style='text-align:center;'>记录</th>
                             <th width='152' style='text-align:center;'>结果</th>
 
                      </tr>";

if ($result1) {
  # code...
 foreach ($result1 as $key => $value) {
    # code...
                        $create_time=date('Y-m-d H:m:s',$result1[$key]['create_at']);
      echo "<tr>
                          <td>{$result1[$key]['dataId']}</td>
                          <td>{$result1[$key]['event']}</td>
                          <td>{$result1[$key]['tofqnum']}</td>
                          <td >{$result1[$key]['fqrecord']}</td>
                          <td>{$result1[$key]['result']}</td>
                      </tr>";
  
  }




 echo '</table>';
 echo '<nav aria-label="Page navigation">
  <ul class="pagination">'.$page->fpage(3,4,5,6,7,0).' </ul></nav>';





}
else
{




echo " </tr><tr style='font-size:32px;'><td colspan='5'>未找到数据</td></tr>";

 echo '</table>';
 echo '<nav aria-label="Page navigation">
  <ul class="pagination">'.$page->fpage(3,4,5,6,7,0).' </ul></nav>';

}
   
 

















 ?>