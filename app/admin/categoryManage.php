<?php
///	require_once 'isLogin.php';
include "../../config.inc.php";
	// 第一步：连接数据库
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// 第二步：判断数据库是否连接正确
	if (!$link) {
		die("数据库连接失败".mysqli_connect_error());
	}

	// 第三步：设置字符集
	mysqli_set_charset($link, DB_CHARSET);

	// 第四步：准备SQL语句
	$sql = "SELECT cate_id,cate_name,created_at,updated_at FROM `category`";

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
	// mysqli_free_result($result);

	// 第八步：关闭连接
	mysqli_close($link);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分类管理</title>

	<script type="text/javascript" src="../../js/jquery.js"></script>

	<link rel="stylesheet" href="../../css/add.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" media="screen">
</head>
<body>
	<h1>分类管理</h1>
	<a class="btn btn-primary" href="categoryAdd.php">添加分类</a>

	<table class="table table-striped">
		<tr>
			<th>序号</th>
			<th>分类名</th>
			<th>创建时间</th>
			<th>更新时间</th>
			<th>管理</th>
		</tr>
<?php  foreach ($list as $value) { ?>
		<tr>
			<td><?php echo $value['cate_id']; ?></td>
			<td><?php echo $value['cate_name']; ?></td>
			<td><?php echo date("Y-m-d H:i:s", $value['created_at']); ?></td>
			<td><?php echo date("Y-m-d H:i:s", $value['updated_at']); ?></td>
			<td>
				<a href="categoryEdit.php?cate_id=<?php echo $value['cate_id']; ?>">编辑</a>
				<a href="categoryDel.php?cate_id=<?php echo $value['cate_id']; ?>">删除</a>
			</td>	
		</tr>

<?php  } ?>
	</table>

</body>
</html>