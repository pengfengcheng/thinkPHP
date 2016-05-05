<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>大旺信息管理系统v1.0后台登录</title>
<style>
body{margin:0px; padding:0px;font-family: "微软雅黑"; background-color:#003366; color:#736F6F; font-size:13px;}
.box{width:800px;height:350px; margin:0 auto; background-image:url(/Admin/View/Public/images/lobg.jpg);top:150px; position:relative;border-radius:8px;}
.loginbox{ height:200px; width:300px; position:absolute; right:20px; top:85px; line-height:30px;}
.text{width:200px; height:25px; border-radius:5px; margin:10px; border:1px solid #D3D3D3;}
.btn{ width:100px; height:30px; background-color: #003366;border-radius:8px; color:#FFFFFF;}
</style>
</head>
<body>
	<div class="box">
    	<div class="loginbox">
        	<form action="/admin/login/post" method="post">
               	账 号：<input type="text" class="text" name="username"><br/>
                密 码：<input type="password"  class="text" name="password"><br/>
               <input type="submit" value="登录" class="btn">
              <!-- <input type="checkbox" >记住用户名密码-->
            </form>
        </div>
    </div>
</body>
</html>