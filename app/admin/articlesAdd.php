<?php
	// require_once 'isLogin.php';
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

session_start();
$adminId=$_SESSION['adminId']; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加文章</title>

	<script type="text/javascript" src="../../js/jquery.js"></script>

	<link rel="stylesheet" href="../../css/add.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" media="screen">
</head>
<body>
<div class="container">
	<div class="row">
	    <div class="col-md-10 col-md-offset-1">
			<h1>添加文章</h1>
			<form action="articlesAction.php" method="post">
				<input type="hidden" name="method" value="insert">
				<input type="hidden" name="adminId" value="<?php echo $adminId; ?>">
				<div class="form-group">
					<label for="title">文章名</label>
					<input type="text" name="title" class="form-control" id="title" placeholder="文章名">
				</div>
				<div class="form-group">
					<label for="category">分类名</label>
					<select name="cate_id" class="form-control">
<?php  foreach ($list as $value) { ?>

					  <option value="<?php echo $value['cate_id']; ?>"><?php echo $value['cate_name']; ?></option>

<?php  } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">简介</label>
					<textarea class="form-control" name="desc" rows="3"></textarea>
				</div>
				<div class="form-group">
					<label for="">是否顶置</label>
					<input type="radio" name="is_top" id="" value="1"> 是
					<input type="radio" name="is_top" id="" checked value="0"> 否
				</div>
				<div class="form-group">
					<label for="">是否发布</label>
					<input type="radio" name="is_publish" id="" checked value="1"> 是
					<input type="radio" name="is_publish" id="" value="0"> 否
				</div>
				<div class="form-group">
					<label for="">内容</label>
					<textarea class="form-control" id="articles_editor" name="content" rows="15"></textarea>
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