<?php 

	//require_once 'isLogin.php';
include '../../Config.inc.php';
// 第一步：连接数据库
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// 第二步：判断数据库是否连接正确
if (!$link) {
	die("数据库连接失败".mysqli_connect_error());
}

// 第三步：设置字符集
mysqli_set_charset($link, DB_CHARSET);

// 第四步：准备SQL语句
$sql = "SELECT cate_id,cate_name FROM `category`";

// 第五步：执行SQL语句
$result = mysqli_query($link, $sql);

// 第六步：处理结果集
$list = array();
if ($result) {
	while($arr = mysqli_fetch_assoc($result)){
		$list[] = $arr;
	}
}

// 第七步：释放结果集
mysqli_free_result($result);

// 第八步：关闭连接
mysqli_close($link);



echo '<script type="text/javascript" src="../../js/jquery.js"></script>
	<script charset="utf-8" src="../../kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="../../kindeditor/lang/zh-CN.js"></script>';


echo '<div class="right_content">
		<form action="acticlesAction.php" method="post">
					<span>我要发帖</span>
					<hr  style="margin: 10px auto;color: #ddd">
					<div class="form-group">
				 	<input type="hidden" name="method" value="insert">
				    <input type="text"  name="title" class="form-control" id="exampleInputEmail1" placeholder="请输入标题">
				  </div>
					<div class="form-group">
					<label for=""><h4>内容</h4></label>
					<textarea  class="form-control" id="articles_editor" name="content" rows="15"></textarea>
					</div>



							<div class="form-group">
					<label for="category">分类所属版块</label>
					<select name="cate_id" class="form-control">';
 foreach ($list as $value) {

					echo  ' <option value="'. $value['cate_id'].'"> '. $value['cate_name'].'</option>';

 } 
					echo '</select>
				</div>
					<button type="submit" class="btn btn-primary">提交</button>

		</form>


					</div>	';



echo '<script>

    KindEditor.ready(function(K) {
            window.editor = K.show("#articles_editor");
    });

</script> ';


 ?>