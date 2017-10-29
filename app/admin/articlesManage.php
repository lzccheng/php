<?php
	// require_once 'isLogin.php';

include '../../Config.inc.php';
	require_once 'functions.php';


	$perPage = 10; // 第次取出多少条
	$currentPageNum = isset($_GET['page']) ? $_GET['page']: 1; // 当前所在页码数
	$offset = ($currentPageNum - 1) * $perPage;
	$url = './articlesManage.php';

	// 第一步：连接数据库
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// 第二步：判断数据库是否连接正确
	if (!$link) {
		die("数据库连接失败".mysqli_connect_error());
	}

	// 第三步：设置字符集
	mysqli_set_charset($link, DB_CHARSET);

	// 第四步：准备SQL语句
	$key = isset($_GET['key']) ? $_GET['key']: NULL;

	if ($key) {
		$sql = "SELECT a.id,c.cate_name,u.username,a.title,a.is_top,a.is_publish,a.view_count,a.created_at,a.updated_at 
				FROM `articles` a,
					`user` u,
					`category` c
				WHERE a.user_id=u.userId AND a.cate_id=c.cate_id AND a.title LIKE '%{$key}%' order by a.updated_at desc, a.created_at
				LIMIT {$offset}, {$perPage}";
		$countSql = "SELECT count(a.id) AS total_record 
				FROM `articles` a,
					`user` u,
					`category` c
				WHERE a.user_id=u.userId AND a.cate_id=c.cate_id AND a.title LIKE '%{$key}%'";
	} else {

		$sql = "SELECT a.id,c.cate_name,u.username,a.title,a.is_top,a.is_publish,a.view_count,a.created_at,a.updated_at 
				FROM `articles` a,
					`user` u,
					`category` c
				WHERE a.user_id=u.userId AND a.cate_id=c.cate_id order by a.updated_at desc, a.created_at  desc
				LIMIT {$offset}, {$perPage} ";
		$countSql = "SELECT count(a.id) AS total_record 
				FROM `articles` a,
					`user` u,
					`category` c
				WHERE a.user_id=u.userId AND a.cate_id=c.cate_id";
	}


	/*
	第一页  page   perpage    limit
			1      10			0,10
			2		10			10,10
			3		10			20,10
			($page - 1) * $perpage
	*/
	//echo $sql;exit;

	// 第五步：执行SQL语句
	$result = mysqli_query($link, $sql);
	$totalResult = mysqli_query($link, $countSql);

	$totalRecord = mysqli_fetch_assoc($totalResult);
	//print_r($totalRecord['total_record']);exit;

	$totalRecord = $totalRecord['total_record']; // 总的文章数量 select count(*) form  categoty


	// 第六步：处理结果集
	$list = array();
	if ($result) {
		while($arr = mysqli_fetch_assoc($result)){
			$list[] = $arr;
		}
	}

	// 第七步：释放结果集
	//mysqli_free_result($result);

	// 第八步：关闭连接
	mysqli_close($link);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章管理</title>

	<script type="text/javascript" src="../../js/jquery.js"></script>

	<link rel="stylesheet" href="../../css/add.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" media="screen">
</head>
<body>
	<h1>文章管理</h1>
	<a class="btn btn-primary" href="articlesAdd.php">添加文章</a>

	<form action="" method="get">
		<label for="">关键词</label>
		<input type="text" name="key" placeholder="关键词">
		<button type="submit">搜索</button>
	</form>

	<table class="table table-striped">
		<tr>
			<th>序号</th>
			<th>标题</th>
			<th>分类名</th>
			<th>用户名</th>
			<th>是否顶置</th>
			<th>是否发布</th>
			<th>浏览量</th>
			<th>创建时间</th>
			<th>更新时间</th>
			<th>管理</th>
		</tr>
<?php  foreach ($list as $value) { ?>
		<tr>
			<td><?php echo $value['id']; ?></td>
			<td><?php echo $value['title']; ?></td>
			<td><?php echo $value['cate_name']; ?></td>
			<td><?php echo $value['username']; ?></td>
			<td><?php echo $value['is_top']?'是':'否'; ?></td>
			<td><?php echo $value['is_publish']?'是':'否'; ?></td>
			<td><?php echo $value['view_count']; ?></td>
			<td><?php echo date("Y-m-d H:i:s", $value['created_at']); ?></td>
			<td><?php echo date("Y-m-d H:i:s", $value['updated_at']); ?></td>
			<td>
				<a href="articlesEdit.php?id=<?php echo $value['id']; ?>">编辑</a>
				<a href="articlesDel.php?id=<?php echo $value['id']; ?>">删除</a>
			</td>	
		</tr>

<?php  } ?>
	</table>

<?php  
	page($totalRecord, $perPage, $currentPageNum, $url);
?>
</body>
</html>