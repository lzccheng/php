<?php 
include "../../config.inc.php";
  session_start();
if (!isset($_SESSION["adminId"])) {
    # code...
    // $a=$_SESSION["userEmail"];
    header ( "location:../../admin.html" );
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>天天番茄后台管理</title>

<link rel="stylesheet" href="../../css/index.css" type="text/css" media="screen">
<link rel="stylesheet" href="../../css/bootstrap.css" type="text/css" media="screen">
<script type="text/javascript" src="../../js/jquery.js"></script>
<script type="text/javascript" src="../../js/tendina.js"></script>
<script type="text/javascript" src="../../js/common.js"></script>

</head>
<body>
    <!--顶部-->
    <div class="layout_top_header">
            <div style="float: left"><span style="font-size: 16px;line-height: 45px;padding-left: 20px;color: #fff">DayDayTomato后台管理</span></div>
            <div id="ad_setting" class="ad_setting">
                <a class="ad_setting_a" href="javascript:;">
                    <i class="icon-user glyph-icon" style="font-size: 20px"></i>
                    <span>管理员</span>
                    <i class="icon-chevron-down glyph-icon"></i>
                </a>
                <ul class="dropdown-menu-uu" style="display: none" id="ad_setting_ul">
                    <li class="ad_setting_ul_li"> <a href="javascript:;"><i class="icon-user glyph-icon"></i> 个人中心 </a> </li>
                    <li class="ad_setting_ul_li"> <a href="javascript:;"><i class="icon-cog glyph-icon"></i> 设置 </a> </li>
                    <a href="adminReset.php"><li class="ad_setting_ul_li"> <i class="icon-signout glyph-icon"></i> <span class="font-bold">退出</span> </li></a> 
                </ul>
            </div>
    </div>
    <!--顶部结束-->
    <!--菜单-->
    <div class="layout_left_menu">
        <ul class="tendina" id="menu">
            <li class="childUlLi">
               <a href="#" target="menuFrame"><i class="glyph-icon icon-home"></i>后台管理</a>
                <ul style="display: none;">
<!--                     <li><a href="addAdmin.php" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>用户添加</a></li> -->
                    <li><a href="addAdmin.php" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>用户管理</a></li>
                </ul>
            </li>
            <li class="childUlLi">
                <a href="#" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>社区内容</a>
                <ul style="display: none;">
                    <li><a href="categoryManage.php" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>分类管理</a></li>
                    <li><a href="articlesManage.php" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>文章管理</a></li>
                </ul>
            </li>
            <li class="childUlLi">
                <a href="#" target="menuFrame"> <i class="glyph-icon icon-reorder"></i>用户留言</a>
                <ul style="display: none;">
                    <li><a href="#"><i class="glyph-icon icon-chevron-right"></i>留言板设置</a></li>
                    <li><a href="#"><i class="glyph-icon icon-chevron-right"></i>留言列表</a></li>
                    <li><a href="#"><i class="glyph-icon icon-chevron-right"></i>黑名单列表</a></li>
                </ul>
            </li>
            
           <!--  <li class="childUlLi">
                <a href="#"> <i class="glyph-icon  icon-location-arrow"></i>菜单管理</a>
                <ul style="display: none;">
                    <li><a href="#" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>平台菜单</a></li>
                    <li><a href="#" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>运行商菜单</a></li>
                    <li><a href="#" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>服务站菜单</a></li>
                    <li><a href="#" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i>商家菜单</a></li>
                </ul>
            </li> -->
        </ul>
    </div>
    <!--菜单-->
    <div id="layout_right_content" class="layout_right_content">
        <div class="route_bg">
            <a href="#">主页</a><i class="glyph-icon icon-chevron-right"></i>
            <a href="#">菜单管理</a>
        </div>
        <div class="mian_content">
            <div id="page_content">
                <iframe id="menuFrame" name="menuFrame" src="addAdmin.php" style="overflow:visible;" scrolling="yes" frameborder="no" height="100%" width="100%"></iframe>
       
            </div>
        </div>
    </div>
    <div class="layout_footer">
        <p>Copyright © 2017 - 学号：02041501010——15计算机网络技术一班陈业涛科技</p>
    </div>
</body></html>