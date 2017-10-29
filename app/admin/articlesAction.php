<?php 

// require_once 'isLogin.php';
include '../../Config.inc.php';

$action = isset($_POST['method']) ? $_POST['method']: NULL;
//echo $action;exit;


switch ($action) {
	case 'insert':
		$user_id = trim($_POST['adminId']);
		$cate_id = trim($_POST['cate_id']);
		$title = trim($_POST['title']);
		$desc = trim($_POST['desc']);
		$content = trim($_POST['content']);
		$is_top = trim($_POST['is_top']);
		$is_publish = trim($_POST['is_publish']);
		//echo $user_id,$title,$cate_id,$content;exit;
		if (!$user_id || !$title || !$cate_id || !$content) {
			header('Location:articlesAdd.php');
			exit;
		}
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
		$sql = "INSERT INTO articles (user_id,cate_id,title,`desc`,is_top,is_publish,content,updated_at,created_at) 
								VALUES({$user_id},{$cate_id},'{$title}','{$desc}',{$is_top},{$is_publish},'{$content}',{$now},{$now})";

		// echo $sql;die;

		// 第五步：执行SQL语句
		$result = mysqli_query($link, $sql);

		// 第七步：关闭连接
		mysqli_close($link);

		// 第六步：获取返回结果
		if ($result) {
			echo "<script>alert('添加成功');location.href='articlesManage.php';</script>";
			//echo "<script>alert('添加分类成功');location.href='articlesManage.php';</script>";
			exit;
		} else {
			echo "<script>alert('添加文章失败');location.href='articlesManage.php';</script>";
			exit;
		}
		break;
	case 'update':
	 	$id = isset($_POST)? $_POST['id']: NULL;
		$cate_id = trim($_POST['cate_id']);


		$title = trim($_POST['title']);
		$desc = trim($_POST['desc']);
		$content = trim($_POST['content']);
		$is_top = trim($_POST['is_top']);
		$is_publish = trim($_POST['is_publish']);
		//echo $user_id,$title,$cate_id,$content;exit;
		if ( !$title || !$cate_id || !$content) {
			header('Location:articlesAdd.php');
			exit;
		}
		//echo $cate_name;exit;
		if ($cate_id && $id) {
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
			$sql = "UPDATE articles SET cate_id={$cate_id},is_publish={$is_publish},is_top={$is_top},title='{$title}', content='{$content}',updated_at={$now} WHERE id={$id}";

			//echo $sql;die;

			// 第五步：执行SQL语句
			$result = mysqli_query($link, $sql);

			// 第七步：关闭连接
			mysqli_close($link);

			// 第六步：获取返回结果
			if ($result) {
				//header('Location:categoryManage.php');
				echo "<script>alert('编辑文章成功');location.href='articlesManage.php';</script>";
				exit;
			} else {
				echo "<script>alert('编辑文章失败');location.href='articlesManage.php';</script>";
				exit;
			}
		} else {
						echo "<script>alert('编辑文章失败');location.href='articlesManage.php';</script>";

			exit;
		}
		break;
	// 无默认
}

// 返回上一面
echo "<script>history.go(-1)</script>";
//header('Location:history.go(-1)');
