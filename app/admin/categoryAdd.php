<?php
	//require_once 'isLogin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加分类</title>

	<script type="text/javascript" src="../../js/jquery.js"></script>

	<link rel="stylesheet" href="../../css/add.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" media="screen">
</head>
<body>
<div class="container">
	<div class="row">
	    <div class="col-md-6 col-md-offset-3">
			<h1>添加分类</h1>
			<form action="categoryAction.php" method="post">
				<input type="hidden" name="method" value="insert">
				<div class="form-group">
					<label for="category">分类名</label>
					<input type="text" name="cate_name" class="form-control" id="category" placeholder="分类名">
				</div>
				<button type="submit" class="btn btn-primary">提交</button>
			</form>
	    </div>
	</div>
</div>
</body>
</html>