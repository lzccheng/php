<?php
	//require_once 'isLogin.php';
include "../../config.inc.php";
	$id = isset($_GET['cate_id']) ? $_GET['cate_id']: NULL;
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

		$sql = "SELECT cate_id,cate_name FROM `category` WHERE cate_id={$id}";

		// 第五步：执行SQL语句
		$result = mysqli_query($link, $sql);

		// 第六步：处理结果集
		$row = mysqli_fetch_assoc($result);

		// 第七步：释放结果集
		mysqli_free_result($result);

		// 第八步：关闭连接
		mysqli_close($link);
	} else {
		header('Location:categoryManage.php');
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>编辑分类</title>

	<script type="text/javascript" src="../../js/jquery.js"></script>

	<link rel="stylesheet" href="../../css/add.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" media="screen">
</head>
<body>
<div class="container">
	<div class="row">
	    <div class="col-md-6 col-md-offset-3">
			<h1>编辑分类</h1>
			<a class="btn btn-success" href="categoryManage.php">返回</a>
			<form action="categoryAction.php" method="post">
				<input type="hidden" name="method" value="update">
				<input type="hidden" name="cate_id" value="<?php echo $row['cate_id']; ?>">

				<div class="form-group">
					<label for="category">分类名</label>
					<input type="text" name="cate_name" class="form-control" id="category" value="<?php echo $row['cate_name']; ?>" placeholder="分类名">
				</div>
				<button type="submit" class="btn btn-primary">提交</button>
			</form>
	    </div>
	</div>
</div>
</body>
</html>