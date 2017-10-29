<?php 

//header('Content-type:text/html;charset=utf-8');

function page($totalRecord, $perPage, $currentPageNum, $url) {
	// 获取请求 query_string
	$queryArray = convertUrlQuery($_SERVER['QUERY_STRING']);
	// 删除已经有的page
	isset($queryArray['page']) ? delPage($queryArray): '';
	// 重新拼接query_string
	$queryString = getUrlQuery($queryArray);

	$totalPage = ceil($totalRecord / $perPage);

	$pageString = '<nav aria-label="Page navigation"><ul class="pagination">';

	$pageString .=  "<li><a>总共文章数：{$totalRecord} / 总共 {$totalPage} 页</a></li>";

	if ($currentPageNum > 1) {
		$pageString .= '<li><a href="'.$url.'?'.$queryString.'&page='.($currentPageNum - 1).'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
	}

	for ($i=1; $i <= $totalPage; $i++) { 
		if (($i > ($currentPageNum - 3) && $i < $currentPageNum) || ($i > $currentPageNum && $i < ($currentPageNum + 3))) {
			$pageString .= "<li><a href='{$url}?{$queryString}&page={$i}'>{$i}</a></li>";
		}

		if ($currentPageNum == $i) {
			$pageString .= '<li><a>'.$i.'</a></li>';
		}
	}

	if ($currentPageNum < $totalPage) {
		$pageString .= "<li><a href='{$url}?{$queryString}&page=".($currentPageNum + 1)."'  aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>";
	}

	$pageString .= '</ul></nav>';

	echo $pageString;
}


//	$totalRecord = 256; // 总的文章数量
//	$perPage = 10; // 第次取出多少条
//	$currentPageNum = isset($_GET['page']) ? $_GET['page']: 1; // 当前所在页码数
//	$url = './functions.php';

// page($totalRecord, $perPage, $currentPageNum, $url);


//  page=2&key=123
/*
explode('&', string)

&
1 page=2
2 key=123

array(0 => page=2, 1 => key=123)

foreach 
	explode('=', string)

array('page' => 2, 'key' => 123)

implode("=", array)
 */

// url请求string变成array
function convertUrlQuery($query) {
	$queryParams = explode("&", $query);
	$new = array();
	foreach ($queryParams as $value) {
		$item = explode("=", $value);
		$new[$item[0]] = $item[1];
	}
	return $new;
}

// 数组变成url请求string
function getUrlQuery($array) {
	$tmp = array();
	foreach ($array as $key => $value) {
		$tmp[] = $key.'='.$value;
	}
	$urlQuery = implode("&", $tmp);
	return $urlQuery;
}

function delPage(&$array, $pageName = 'page') {
	$tmp = array();
	foreach ($array as $key => $value) {
		if ($key != $pageName) {
			$tmp[$key] = $value;
		}
	}
	$array = $tmp;
}

