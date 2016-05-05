<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DaWang V1.0 大旺信息管理系统-后台管理</title>
    <link rel="stylesheet" type="text/css" href="/Admin/View/Public/styles/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Admin/View/Public/styles/main.css"/>

</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a href="http://www.fzdm.com/manhua/02/" target="_blank">海贼王漫画、风之动漫</a></li>
                <li><a class="on" href="index.html">后台首页</a></li>
                <li><a href="http://www.tpdemo.com" target="_blank">网站首页</a></li>
                
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li> <?php echo ($username); ?></li>
                <li><a href="<?php echo U('index/admin');?>" target="main">修改帐号/密码</a></li>
                <li><a href="<?php echo U('login/logout');?>">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
<!--        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
-->        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#" style="background-color:#3f4b59;"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a  href="<?php echo U('Web/index');?>" target="main"><i class="icon-font">&#xe008;</i>网站设置</a></li>
                        <li><a href="<?php echo U('cate/index');?>" target="main"><i class="icon-font">&#xe005;</i>导航管理</a></li>
                        <li><a href="<?php echo U('Nav/index');?>" target="main"><i class="icon-font">&#xe006;</i>栏目管理</a></li>
                        <li><a href="<?php echo U('Article/index');?>" target="main"><i class="icon-font">&#xe004;</i>文章管理</a></li>
                        <li><a href="<?php echo U('Page/pindex');?>" target="main"><i class="icon-font">&#xe012;</i>单页管理</a></li>
                        <li><a href="<?php echo U('Ad/index');?>" target="main"><i class="icon-font">&#xe033;</i>广告管理</a></li>
                        <li><a href="<?php echo U('Link/index');?>" target="main"><i class="icon-font">&#xe052;</i>友情链接</a></li> 
                        <li><a href="<?php echo U('index/qq');?>" target="main"><i class="icon-font">&#xe013;</i>获取访客QQ</a></li>  						<li><a href="<?php echo U('index/tel');?>" target="main"><i class="icon-font">&#xf000;</i>获取访客手机号</a></li>
                                           
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎收看童老师ThinkPHP视频教程第三季度<span><a target="_blank" style="color:#f00; margin:0 20px;" href="http://www.chuanke.com/s2260700.html">点此查看视频教程</a></span></span></div>
        </div>
        <div class="result-wrap" style="margin-top:20px;">
             <iframe name="main" scrolling="yes" frameborder="0" width="100%" height="1200" src="/index.php/Admin/Index/main" ></iframe> </div>
        <div class="result-wrap">
            <div class="result-title">
                
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">交流群：</label><span class="res-info">24914873</span>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>