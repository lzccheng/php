<?php 
include "../../config.inc.php";
$user=new User;
// $result=$user->select();
$count=$user->getSelectRow();

 $page=new Page ($count, 5, '', true); //id=5&cid=6&user=admin

$result1=$user->limit("{$page->limit}")->select();

echo '<table class="table table-striped" style="text-align:center;  ">';
  echo '<caption ><h2 style="font-family: "Microsoft YaHei";" >用户管理</h2> <a href="adminRegister.php"> <button type="button" class="btn btn-info">添加用户</button></a></caption>';
 echo "<tr   >
                      <th width='80' style='text-align:center;'>用户ID</th>
                        <th width='270' style='text-align:center;'>用户名</th>
                           <th width='300' style='text-align:center;'>注册邮箱</th>
                            <th width='200' style='text-align:center;'>注册时间</th>
                             <th width='152' style='text-align:center;'>操作</th></tr>";


if ($result1) {
  # code...
 foreach ($result1 as $key => $value) {
    # code...
                        $create_time=date('Y-m-d H:m:s',$result1[$key]['create_at']);
      echo "<tr>
                         <td>{$result1[$key]['userId']}</td>
                         <td>{$result1[$key]['username']}</td>
                         <td>{$result1[$key]['userEmail']}</td>
                         <td> $create_time </td>
                        <td><a href='javascript:pagecha({$result1[$key]['userId']},1);' style='color:#2DC3E8' title='查看' id='edit'>查看</a>&nbsp;
               |&nbsp;<a href='javascript:del({$result1[$key]['userId']});' style='color:red;'  title='删除' id='del'> 删除</a></td>
                     </tr>";
  
  }
}
   
  echo '</table>';
 echo '<nav aria-label="Page navigation">
  <ul class="pagination">'.$page->fpage(3,4,5,6,7,0).' </ul></nav>';




    // <li>
    //   <a href="#" aria-label="Previous">
    //     <span aria-hidden="true">&laquo;</span>
    //   </a>
    // </li>
    // <li><a href="#">1</a></li>
    // <li><a href="#">2</a></li>
    // <li><a href="#">3</a></li>
    // <li><a href="#">4</a></li>
    // <li><a href="#">5</a></li>
    // <li>
    //   <a href="#" aria-label="Next">
    //     <span aria-hidden="true">&raquo;</span>
    //   </a>
    // </li>
 







































 //  $nowPage=$_GET['page'];
 //  $pageSize=6; 
 //   $result=$page->showPage($nowPage,$pageSize);


	// echo "            <table class='table table-striped' >

 //                      <tr style='height: 40px !important;background-color:#2B3946 !important;color: #fff;'  >
 //                          <th width='80'>用户ID</th>
 //                          <th width='270'>用户名</th>
 //                           <th width='300'>注册邮箱</th>
 //                            <th width='200'>查看资料</th>
 //                             <th width='152'>操作</th>

 //                      </tr>";
 //                      foreach ($result as $key => $value) {
 //                      	# code...
 //                      	echo "<tr>
 //                          <td>{$result[$key]['userId']}</td>
 //                          <td>{$result[$key]['username']}</td>
 //                          <td>{$result[$key]['userEmail']}</td>
 //                          <td><a href='javascript:pagecha({$result[$key]['userId']},1);'  title='编辑' id='edit'>查看</a> </td>
 //                          <td><a href='editNews.php?newsId={$result[$key]['userId']}' style='color:#2DC3E8' title='编辑' id='edit'>编辑</a>&nbsp;
 //                |&nbsp;<a href='javascript:del({$result[$key]['userId']});' style='color:red;'  title='删除' id='del'> 删除</a></td>
 //                      </tr>";


 //                      }
                       
 //               echo "</table>";
          
 //                 echo "<div style='text-align:right;font-size:12px;color:#333;margin-top:15px; margin-right:40px;'>";
	//           $page->showNav();
	//           echo "</div>";




 ?>