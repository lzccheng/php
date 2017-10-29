<?php 

// require_once 'isLogin.php';
include '../../Config.inc.php';
$action = isset($_POST['method']) ? $_POST['method']: NULL;
//echo $action;exit;

switch ($action) {
	case 'insert':
		$cate_name = trim($_POST['cate_name']);
		//echo $cate_name;exit;
		if ($cate_name) {
			// 第一步：连接数据库
			$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

			// 第二步：判断数据库是否连接正确
			if (!$link) {
				die("数据库连接失败".mysqli_connect_error());
			}

			// 第三步：设置字符集
			mysqli_set_charset($link, DB_CHARSET);

			// 第四步：准备SQL语句
			$now = time();
			$sql = "INSERT INTO category (cate_name, updated_at, created_at) VALUES('{$cate_name}', {$now}, {$now})";

			/// echo $sql;die;

			// 第五步：执行SQL语句
			$result = mysqli_query($link, $sql);

			// 第七步：关闭连接
			mysqli_close($link);

			// 第六步：获取返回结果
			if ($result) {
				header('Location:categoryManage.php');
				//echo "<script>alert('添加分类成功');location.href='categoryManage.php';</script>";
				exit;
			} else {
				echo "<script>alert('添加分类失败');location.href='categoryManage.php';</script>";
				exit;
			}
		} else {
			header('Location:categoryAdd.php');
			exit;
		}
		break;
	case 'update':
	 	$id = isset($_POST)? $_POST['cate_id']: NULL;
		$cate_name = trim($_POST['cate_name']);
		//echo $cate_name;exit;
		if ($cate_name && $id) {
			// 第一步：连接数据库
			$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

			// 第二步：判断数据库是否连接正确
			if (!$link) {
				die("数据库连接失败".mysqli_connect_error());
			}

			// 第三步：设置字符集
			mysqli_set_charset($link, DB_CHARSET);

			// 第四步：准备SQL语句
			$now = time();
			$sql = "UPDATE category SET cate_name='{$cate_name}', updated_at={$now} WHERE cate_id={$id}";

			// echo $sql;die;

			// 第五步：执行SQL语句
			$result = mysqli_query($link, $sql);

			// 第七步：关闭连接
			mysqli_close($link);

			// 第六步：获取返回结果
			if ($result) {
				header('Location:categoryManage.php');
				//echo "<script>alert('添加分类成功');location.href='categoryManage.php';</script>";
				exit;
			} else {
				echo "<script>alert('编辑分类失败');location.href='categoryManage.php';</script>";
				exit;
			}
		} else {
			header('Location:categoryAdd.php');
			exit;
		}
		break;
	// 无默认
}

// 返回上一面
echo "<script>history.go(-1)</script>";
//header('Location:history.go(-1)');
