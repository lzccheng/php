<?php
	// require_once 'isLogin.php';
include '../../Config.inc.php';



$id = isset($_GET['id']) ? $_GET['id']: NULL;
if ($id) {
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


		$sql1 = "SELECT *
						FROM `articles` 
							
						WHERE  id='{$id}'";

		// 第五步：执行SQL语句
		$result = mysqli_query($link, $sql);

		$result1 = mysqli_query($link, $sql1);

		// 第六步：处理结果集
		$list = array();
		if ($result) {
			while($arr = mysqli_fetch_assoc($result)){
				$list[] = $arr;
			}
		}

		if ($result1) {
			# code...
			$re = mysqli_fetch_assoc($result1);
		}
		// 第七步：释放结果集
		mysqli_free_result($result);
		mysqli_free_result($result1);

		// 第八步：关闭连接
		mysqli_close($link);

		session_start();
		$adminId=$_SESSION['adminId']; 

}
else
{
	echo "no";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>编辑文章</title>

	<script type="text/javascript" src="../../js/jquery.js"></script>

	<link rel="stylesheet" href="../../css/add.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" media="screen">
</head>
<body>
<div class="container">
	<div class="row">
	    <div class="col-md-10 col-md-offset-1">
			<h1>编辑文章</h1>
			<form action="articlesAction.php" method="post">
				<input type="hidden" name="method" value="update">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="form-group">
					<label for="title">文章名</label>
					<input type="text" name="title" class="form-control" id="title" placeholder="文章名" value="<?php echo $re['title'] ?> ">
				</div>
				<div class="form-group">
					<label for="category">分类名</label>
					<select name="cate_id" class="form-control">
<?php  foreach ($list as $value) {
				if ($value['cate_id']==$re['cate_id']) {
						# code...
						echo  ' <option selected value="'.$value['cate_id'].'">'. $value['cate_name'].'</option>';
					}	
					else
					{


					  echo ' <option  value="'.$value['cate_id'].'">'. $value['cate_name'].'</option>';
					}


 } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">简介</label>
					<textarea class="form-control" name="desc" rows="3"><?php echo $re['desc']; ?></textarea>
				</div>
				<div class="form-group">
					<label for="">是否顶置</label>
					<input type="radio" name="is_top"  id="" <?php if ($re['is_top']==1) {
						echo 'checked';
					} ?>  value="1"> 是
					<input type="radio" name="is_top" id="" <?php if ($re['is_top']==0) {
						echo 'checked';
					} ?> value="0"> 否
				</div>
				<div class="form-group">
					<label for="">是否发布</label>
					<input type="radio" name="is_publish" id="" <?php if ($re['is_publish']==1) {
						echo 'checked';
					} ?> value="1"> 是
					<input type="radio" name="is_publish" id="" <?php if ($re['is_publish']==0) {
						echo 'checked';
					} ?> value="0"> 否
				</div>
				<div class="form-group">
					<label for="">内容</label>
					<textarea class="form-control" id="articles_editor" name="content" rows="15">
						<?php echo $re['content']; ?>

					</textarea>
				</div>
				<button type="submit" class="btn btn-primary">提交</button>
			</form>
	    </div>
	</div>
</div>
<script charset="utf-8" src="../../kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="../../kindeditor/lang/zh-CN.js"></script>
<script>
    KindEditor.ready(function(K) {
            window.editor = K.create('#articles_editor');
    });
</script>
</body>
</html>