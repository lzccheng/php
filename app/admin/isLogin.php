<?php 

// 开启session
session_start();

// 引入数据库配置
include '../../Config.inc.php';

// 错误输出
if (defined('IS_DEBUG')) {
	// 开发模式下
	error_reporting(E_ALL & ~E_NOTICE);
} else {
	// 生产模式下
	error_reporting(0);
}

// 设置时区
date_default_timezone_set(TIME_ZONE);

// 判断cookie
if (isset($_COOKIE['auth'])) {
	list($identifier, $token) = explode(':', $_COOKIE['auth']);
	
	// 第一步：连接数据库
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// 第二步：判断数据库是否连接正确
	if (!$link) {
		die("数据库连接失败".mysqli_connect_error());
	}

	// 第三步：设置字符集
	mysqli_set_charset($link, DB_CHARSET);

	// 第四步：准备SQL语句
	$sql = "SELECT id,username,identifier,token,timeout FROM `user` WHERE identifier='{$identifier}'";

	// 第五步：执行SQL语句
	$result = mysqli_query($link, $sql);

	// 第六步：处理结果集
	$row = mysqli_fetch_assoc($result);

	// 如果能取到数据，对比登录标识，身份标识，超时
	if ($row) {
		// 对比登录标识
		if ($row['token'] != $token) {
			header('Location:login.php?error_id=5');
			exit;
		}

		// 对比超时
		if (time() > $row['timeout']) {
			header('Location:login.php?error_id=6');
			exit;
		}

		// 添加session信息
		
	}


	// 第七步：释放结果集
	mysqli_free_result($result);

	// 第八步：关闭连接
	mysqli_close($link);

}

// 判断session是否过期
if (!isset($_SESSION['userId'])) {
	header('Location:../../admin.html?error_id=4');
	exit;
}
