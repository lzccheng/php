<?php 
include "../../config.inc.php";
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

		$sql = "DELETE  FROM `articles` WHERE id={$id}";

		// 第五步：执行SQL语句
		$result = mysqli_query($link, $sql);

		// 第六步：处理结果集
		if($result)
		{
			echo "<script>alert('删除成功');location.href='articlesManage.php';</script>";

		}

		// 第七步：释放结果集
		mysqli_free_result($result);

		// 第八步：关闭连接
		mysqli_close($link);
	} else {
		header('Location:articlesManage.php');
		exit;
	}






 ?>